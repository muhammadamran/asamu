<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{


	public function __construct()
	{
		parent::__construct();
		// LOAD MODELS
		$this->load->model('login_model');
		$this->load->model('Master_model');
	}

	public function index()
	{
		// MASTER MODEL
		$get_data = $this->Master_model->get_data_site();
		$Cek_get_data = $value['data_site'] = $get_data;

		if ($Cek_get_data  == NULL) {
			$value['icon'] = 'null.png';
			$value['logo'] = 'null.png';
			$value['loader'] = 'null.png';
			$value['tloader'] = 'Text Loader';
			$value['title'] = 'Title';
			$value['slogan'] = 'Slogan';
			$value['motto'] = 'Motto';
			$value['name'] = 'Company Name';
			$value['vision'] = 'Vision';
			$value['mission'] = 'Mission';
			$value['address'] = 'Address';
			$value['email'] = 'info@hellos-id.com';
			$value['telp'] = 'Telephone';
			$value['fax'] = 'Fax';
			$value['maps'] = '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15865.367451552442!2d106.8017969!3d-6.2185701!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2e74f2341fff266d!2sGelora%20Bung%20Karno%20Main%20Stadium!5e0!3m2!1sen!2sid!4v1632932662096!5m2!1sen!2sid" width="90%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>';
			$value['facebook'] = '#!';
			$value['instagram'] = '#!';
			$value['youtube'] = '#!';
			$value['twitter'] = '#!';
			$value['linked'] = '#!';
			$value['google'] = '#!';
			$value['footer'] = 'Footer';
		} else {
			$post_data = $this->Master_model->post_data_site();
			$value['id_site'] = $post_data[0]->id_site;
			$value['icon'] = $post_data[0]->icon;
			$value['logo'] = $post_data[0]->logo;
			$value['loader'] = $post_data[0]->loader;
			$value['tloader'] = $post_data[0]->tloader;
			$value['title'] = $post_data[0]->title;
			$value['slogan'] = $post_data[0]->slogan;
			$value['motto'] = $post_data[0]->motto;
			$value['name'] = $post_data[0]->name;
			$value['vision'] = $post_data[0]->vision;
			$value['mission'] = $post_data[0]->mission;
			$value['address'] = $post_data[0]->address;
			$value['email'] = $post_data[0]->email;
			$value['telp'] = $post_data[0]->telp;
			$value['fax'] = $post_data[0]->fax;
			$value['maps'] = $post_data[0]->maps;
			$value['facebook'] = $post_data[0]->facebook;
			$value['instagram'] = $post_data[0]->instagram;
			$value['youtube'] = $post_data[0]->youtube;
			$value['twitter'] = $post_data[0]->twitter;
			$value['linked'] = $post_data[0]->linked;
			$value['google'] = $post_data[0]->google;
			$value['footer'] = $post_data[0]->footer;
		}
		// END MASTER MODEL

		$this->load->view('login', $value);
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

						$get_employees = $this->login_model->get_employees($cek->username);
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
							'placebirthday' => $get_employees[0]->placebirthday,
							'birthday' => $get_employees[0]->birthday,
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
