<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //LOAD MODELS
        $this->load->model('Users_model');
    }

    public function index()
    {
        $user = $this->session->userdata('username');
        if ($user == NULL ) {
            $this->session->set_flashdata('n_session', "The identity does not match our data!");
            redirect('login');
        } else {
        // DATA USERS
            $get_data = $this->Users_model->get_data_users();
            $value['data_users'] = $get_data; 
            
            $this->load->view('include/head');
            $this->load->view('include/top-header');
            $this->load->view('include/alert');
            $this->load->view('users',$value);
            $this->load->view('include/sidebar');
            $this->load->view('include/footer');
        }
        // END DATA USERS
    }

    // REGISTRATION USERS
    public function registration()
	{	
		$Cek_email = $this->input->post('email');
		$Cek_username = $this->input->post('username');

		$CekEmail = $this->Users_model->get_email($Cek_email);
		$CekUsername = $this->Users_model->get_username($Cek_username);

		$InputUsers = array(
			'username' => $this->input->post('username'),
			'password' => md5(md5($this->input->post('password'))),
			'created_date' => date('Y-m-d h:m:i'),
			'role' => $this->input->post('role'),
			'status' => '1'
		);
		
		$InputMembers = array(
			'kode' => 'LTE'.'-'.$this->input->post('username'),
			'full_name' => $this->input->post('full_name'),
			'phone' => $this->input->post('phone'),
			'email' => $this->input->post('email'),
			'login' => $this->input->post('username'),
			'created_date' => date('Y-m-d h:m:i'),
			'status' => '1'
		);

        if ($CekEmail == NULL && $CekUsername == NULL) {
            $this->db->insert('tbl_users',$InputUsers);
            $this->db->insert('tbl_members',$InputMembers);
            $this->session->set_flashdata('success','Empty');
            redirect('users');
        }else{
            $this->session->set_flashdata('gagal','Empty');
            redirect('users');
        }

	}

    // UPDATING USERS
    public function changepass()
    {
        $where = $this->input->post('username');

        $input_data = array(
            'password' => md5(md5($this->input->post('password')))
        );

        $this->Users_model->update_password('tbl_users', $input_data,$where);
        $this->session->set_flashdata('changepass', "Empty!");
        redirect('users');
    }

    // UPDATING ROLE
    public function changerole()
    {
        $where = $this->input->post('username');

        $input_data = array(
            'role' => $this->input->post('role')
        );

        $this->Users_model->update_password('tbl_users', $input_data,$where);
        $this->session->set_flashdata('changerole', "Empty!");
        redirect('users');
    }

    // NON-AKTIF USERS
    public function nonaktif()
    {
        $where = $this->input->post('username');

        $input_data = array(
            'status' => $this->input->post('status')
        );

        $this->Users_model->update_status_u('tbl_users', $input_data,$where);
        $this->Users_model->update_status_m('tbl_members', $input_data,$where);
        $this->session->set_flashdata('nonaktif', "Empty!");
        redirect('users');
    }

    // AKTIF USERS
    public function aktif()
    {
        $where = $this->input->post('username');

        $input_data = array(
            'status' => $this->input->post('status')
        );

        $this->Users_model->update_status_u('tbl_users', $input_data,$where);
        $this->Users_model->update_status_m('tbl_members', $input_data,$where);
        $this->session->set_flashdata('aktif', "Empty!");
        redirect('users');
    }
    
    // ADDING USERS
    public function adding()
    {
        $dataUsers = array(
            'title' => $this->input->post('title'),
            'slogan' => $this->input->post('slogan'),
            'motto' => $this->input->post('motto'),
            'name' => $this->input->post('name'),
            'address' => $this->input->post('address'),
            'email' => $this->input->post('email'),
            'telp' => $this->input->post('telp'),
            'fax' => $this->input->post('fax'),
            'maps' => $this->input->post('maps'),
            'facebook' => $this->input->post('facebook'),
            'instagram' => $this->input->post('instagram'),
            'youtube' => $this->input->post('youtube'),
            'twitter' => $this->input->post('twitter'),
            'linked' => $this->input->post('linked'),
            'google' => $this->input->post('google'),
            'footer' => $this->input->post('footer'),
            'created_date' => $this->input->post('created_date'),
            'status' => $this->input->post('status')
        );

        $Cek_data_Users = $this->Users_model->cek_data_Users();
        $Cek_status = $value['status'] = $Cek_data_Users[0]->status;

        if ($Cek_status == NULL) {
            $this->db->insert('tbl_users', $dataUsers);
            $this->session->set_flashdata('success', "Data saved successfully!");
            redirect('users');
        } else {
            $this->session->set_flashdata('filed', "Data saved successfully!");
            redirect('users');
        }
    }

    // UPDATING USERS
    public function updating()
    {
        $ID = $this->input->post('id_Users');

        $dataUsers = array(
            'title' => $this->input->post('title'),
            'slogan' => $this->input->post('slogan'),
            'motto' => $this->input->post('motto'),
            'name' => $this->input->post('name'),
            'address' => $this->input->post('address'),
            'email' => $this->input->post('email'),
            'telp' => $this->input->post('telp'),
            'fax' => $this->input->post('fax'),
            'maps' => $this->input->post('maps'),
            'facebook' => $this->input->post('facebook'),
            'instagram' => $this->input->post('instagram'),
            'youtube' => $this->input->post('youtube'),
            'twitter' => $this->input->post('twitter'),
            'linked' => $this->input->post('linked'),
            'google' => $this->input->post('google'),
            'footer' => $this->input->post('footer'),
            'created_date' => $this->input->post('created_date'),
            'status' => $this->input->post('status')
        );

        $this->Users_model->update_Users('tbl_users', $dataUsers,$ID);
        $this->session->set_flashdata('success', "Data saved successfully!");
        redirect('users');
    }

    public function delete()
	{
		$where = $this->input->post('username');

		$this->Users_model->delete_tbl_users($where);
		$this->Users_model->delete_tbl_members($where);
        $this->session->set_flashdata('hapus', "Empty");
        redirect('users');
	}

}