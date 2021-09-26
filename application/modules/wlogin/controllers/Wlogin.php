<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wlogin extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		// LOAD MODELS
		$this->load->model('wlogin_model');
	}

	public function index()
	{
		$this->load->view('modes/head');
		$this->load->view('modes/top-header');
		$this->load->view('modes/alert');
		$this->load->view('wlogin');
		$this->load->view('modes/footer');
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

			$cek = $this->wlogin_model->cek_login('tbl_users',$data);
			
			if(@$cek){
				// var_dump($cek);exit;
				$get_employees = $this->wlogin_model->get_employees($cek->username);
				$get_site = $this->wlogin_model->post_data_site();
				// var_dump($get_employees[0]->login);exit;
				$data_session = array(
					'id_members' => $cek->id_members,
					'username' => $username,
					'password' => $password,
					'created_date' => $cek->created_date,
					'role' => $cek->role,
					'status' => $cek->status,
					'id_members' => $get_employees[0]->id_members,
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
					'status' => 'Login'
				);

				// echo "<pre>";
				// var_dump($data_session);exit;
				// echo "</pre>";
				
				$this->session->set_userdata($data_session);
				$this->wlogin_model->input_log('tbl_log', $data_log);
				$this->session->set_flashdata('s_sigin', $this->input->post('username'));
				redirect('whome');
			}else{
				$this->session->set_flashdata('f_sigin', "Maaf nama pengguna atau kata sandi Anda salah, silakan coba lagi!");
				redirect('wlogin');
			}
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		$this->session->set_flashdata('n_glogin','Anda Berhasil Logout!');
		redirect('wlogin');
	}

	public function registration()
	{	
		$Cek_email = $this->input->post('email');
		$Cek_username = $this->input->post('username');
		$Cek_passwordOne = md5(md5($this->input->post('password')));
		$Cek_passwordTwo = md5(md5($this->input->post('confirm_password')));

		$CekEmail = $this->wlogin_model->get_email($Cek_email);
		$CekUsername = $this->wlogin_model->get_username($Cek_username);

		$InputUsers = array(
			'username' => $this->input->post('username'),
			'password' => md5(md5($this->input->post('password'))),
			'created_date' => date('Y-m-d h:m:i'),
			'role' => $this->input->post('role'),
			'status' => '1'
		);
		
		$InputMembers = array(
			'kode' => $this->input->post('kode').'-'.$this->input->post('username'),
			'full_name' => $this->input->post('full_name'),
			'phone' => $this->input->post('phone'),
			'email' => $this->input->post('email'),
			'login' => $this->input->post('username'),
			'created_date' => date('Y-m-d h:m:i'),
			'status' => '1'
		);

		if ($Cek_passwordOne === $Cek_passwordTwo) {
			$this->session->set_flashdata('wl_warning','Empty');
			redirect('wlogin');
		}else{
			if ($CekEmail == NULL && $CekUsername == NULL) {
				$this->db->insert('tbl_users',$InputUsers);
				$this->db->insert('tbl_members',$InputMembers);
				$this->session->set_flashdata('wl_success','Empty');
				redirect('wlogin');
			}else{
				$this->session->set_flashdata('wl_danger','Empty');
				redirect('wlogin');
			}
		}

	}
}