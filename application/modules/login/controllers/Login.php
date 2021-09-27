<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{


	public function __construct()
	{
		parent::__construct();
		// LOAD MODELS
		$this->load->model('login_model');
	}

	public function index()
	{
		$this->load->view('login');
	}

	public function aksi_login()
	{
		if (isset($_POST['submit'])) {
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$data = array(
				'username' => $username,
				'password' => md5(md5($password)),
			);

			// LOG FIELD
			$host = gethostname();
			$IP = $_SERVER['REMOTE_ADDR'];
			$note = 'Login Asamu Solusi Mandiri v1.0';

			$cek = $this->login_model->cek_login('tbl_users', $data);

			if (@$cek) {

				$get_status = $this->login_model->get_status($cek->username);
				$cek_status = $value['status'] = $get_status[0]->status;

				if ($cek_status == '2') {
					$this->session->set_flashdata('n_unonaktif', "Empty");
					redirect('login');
				} else {
					$get_role = $this->login_model->get_role($cek->username);
					$cek_role = $value['role'] = $get_role[0]->role;

					if ($cek_role == 'masyarakat') {
						$this->session->set_flashdata('n_role', "Empty");
						redirect('login');
					} else {

						// var_dump($cek);exit;
						$get_employees = $this->login_model->get_employees($cek->username);
						$get_site = $this->login_model->post_data_site();
						// var_dump($get_employees[0]->login);exit;
						$data_session = array(
							'id_employee' => $cek->id_employee,
							'username' => $username,
							'password' => $password,
							'created_date' => $cek->created_date,
							'role' => $cek->role,
							'status' => $cek->status,
							'id_employee' => $get_employees[0]->id_employee,
							'login' => $get_employees[0]->login,
							'full_name' => $get_employees[0]->full_name,
							'placebrithday' => $get_employees[0]->placebrithday,
							'brithday' => $get_employees[0]->brithday,
							'age' => $get_employees[0]->age,
							'alamat' => $get_employees[0]->address,
							'city' => $get_employees[0]->city,
							'phone' => $get_employees[0]->phone,
							'email' => $get_employees[0]->email,
							'gender' => $get_employees[0]->gender,
							'religion' => $get_employees[0]->religion,
							'status' => $get_employees[0]->status,
							'created_date' => $get_employees[0]->created_date,
							'profile' => $get_employees[0]->profile,
							'kode' => $get_employees[0]->kode,
							// SITE SESSION
							'id_site' => $get_site[0]->id_site,
							'title' => $get_site[0]->title,
							'slogan' => $get_site[0]->slogan,
							'motto' => $get_site[0]->motto,
							'name' => $get_site[0]->name,
							'vision' => $get_site[0]->vision,
							'mission' => $get_site[0]->mission,
							'address' => $get_site[0]->address,
							'email' => $get_site[0]->email,
							'telp' => $get_site[0]->telp,
							'fax' => $get_site[0]->fax,
							'maps' => $get_site[0]->maps,
							'facebook' => $get_site[0]->facebook,
							'instagram' => $get_site[0]->instagram,
							'youtube' => $get_site[0]->youtube,
							'twitter' => $get_site[0]->twitter,
							'linked' => $get_site[0]->linked,
							'google' => $get_site[0]->google,
							'footer' => $get_site[0]->footer,
							'created_date' => $get_site[0]->created_date,
							'status' => $get_site[0]->status
						);

						$data_log = array(
							'username' => $username,
							'role' => $cek->role,
							'datetime' => date('Y-m-d H:i:s'),
							'status' => 'Login',
							'attemps_date' => date('Y-m-d H:i:s'),
							'attemps_ip' => $IP,
							'note' => $note,
							'host' => $host
						);

						// echo "<pre>";
						// var_dump($data_session);exit;
						// echo "</pre>";

						$this->session->set_userdata($data_session);
						$this->login_model->input_log('tbl_log', $data_log);
						$this->session->set_flashdata('s_sigin', $this->input->post('username'));
						redirect('home');
					}
				}
			} else {
				$this->session->set_flashdata('f_sigin', "Empty");
				redirect('login');
			}
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		$this->session->set_flashdata('n_glogin', 'Empty!');
		redirect('login');
	}
}
