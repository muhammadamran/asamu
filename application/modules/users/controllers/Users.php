<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //LOAD MODELS
        $this->load->model('Users_model');
        $this->load->model('Master_model');
    }

    public function index()
    {
        $user = $this->session->userdata('username');
        if ($user == NULL) {
            $this->session->set_flashdata('n_session', "The identity does not match our data!");
            redirect('login');
        } else {
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

            // DATA USERS
            $get_data = $this->Users_model->get_data_users();
            $value['data_users'] = $get_data;

            $this->load->view('include/head', $value);
            $this->load->view('include/top-header', $value);
            $this->load->view('include/alert');
            $this->load->view('users', $value);
            $this->load->view('include/sidebar', $value);
            $this->load->view('include/footer', $value);
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
            'kode' => 'LTE' . '-' . $this->input->post('username'),
            'full_name' => $this->input->post('full_name'),
            'phone' => $this->input->post('phone'),
            'email' => $this->input->post('email'),
            'login' => $this->input->post('username'),
            'created_date' => date('Y-m-d h:m:i'),
            'status' => '1'
        );

        if ($CekEmail == NULL && $CekUsername == NULL) {
            $this->db->insert('tbl_users', $InputUsers);
            $this->db->insert('tbl_employee', $InputMembers);
            $this->session->set_flashdata('success', 'Empty');
            redirect('users');
        } else {
            $this->session->set_flashdata('gagal', 'Empty');
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

        $this->Users_model->update_password('tbl_users', $input_data, $where);
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

        $this->Users_model->update_password('tbl_users', $input_data, $where);
        $this->session->set_flashdata('changerole', "Empty!");
        redirect('users');
    }

    // NON-ACTIVE USERS
    public function nonactive()
    {
        $where = $this->input->post('username');

        $input_data = array(
            'status' => $this->input->post('status')
        );

        $this->Users_model->update_status_u('tbl_users', $input_data, $where);
        $this->Users_model->update_status_m('tbl_employee', $input_data, $where);
        $this->session->set_flashdata('nonactive', "Empty!");
        redirect('users');
    }

    // ACTIVE USERS
    public function active()
    {
        $where = $this->input->post('username');

        $input_data = array(
            'status' => $this->input->post('status')
        );

        $this->Users_model->update_status_u('tbl_users', $input_data, $where);
        $this->Users_model->update_status_m('tbl_employee', $input_data, $where);
        $this->session->set_flashdata('active', "Empty!");
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
        $ID = $this->input->post('id_users');

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

        $this->Users_model->update_Users('tbl_users', $dataUsers, $ID);
        $this->session->set_flashdata('success', "Data saved successfully!");
        redirect('users');
    }

    public function delete()
    {
        $where = $this->input->post('username');

        $this->Users_model->delete_tbl_users($where);
        $this->Users_model->delete_tbl_employee($where);
        $this->session->set_flashdata('deletes', "Empty");
        redirect('users');
    }
}
