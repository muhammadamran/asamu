<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subscribe extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //LOAD MODELS
        $this->load->model('Subscribe_model');
    }

    public function index()
    {
        if ($this->session->userdata('username') == NULL) {

            $this->session->set_flashdata('n_session', "The identity does not match our data!");
            redirect('login');

        } else if ($this->session->userdata('username') != NULL) {
            if ($this->session->userdata('status') == '0') {

                $this->session->set_flashdata('n_session', "The identity does not match our data!");
                redirect('login');

            } else if ($this->session->userdata('status') == '1') {

                $get_data = $this->Subscribe_model->get_data_subscribe();
                $value['data_subscribe'] = $get_data; 

                $this->load->view('include/head');
                $this->load->view('include/top-header');
                $this->load->view('include/alert');
                $this->load->view('subscribe',$value);
                $this->load->view('include/sidebar');
                $this->load->view('include/footer');
            }
        }
    }

    // ADDING SUBSCRIBE
    public function adding()
    {   
		$Cek_email = $this->input->post('email');
		$URLPage = $this->input->post('urlpage');

		$CekEmail = $this->Subscribe_model->get_email($Cek_email);

        $dataSubscribe = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'created_date' => $this->input->post('created_date')
        );

        if ($CekEmail == NULL) {
            $this->db->insert('tbl_subscribe', $dataSubscribe);
            $this->session->set_flashdata('subscribe', "Empty");
            redirect($URLPage);
        // redirect('');
        }else{
            $this->session->set_flashdata('gagal','Empty');
            redirect($URLPage);
        }
    }
}