<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Customers extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //LOAD MODELS
        $this->load->model('Customers_model');
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

                $get_data = $this->Customers_model->get_data_customers();
                $value['data_customers'] = $get_data;

                $this->load->view('include/head');
                $this->load->view('include/top-header');
                $this->load->view('include/alert');
                $this->load->view('customers', $value);
                $this->load->view('include/sidebar');
                $this->load->view('include/footer');
            }
        }
    }

    // ADDING customers
    public function adding()
    {
        $Cek_email = $this->input->post('email');
        $URLPage = $this->input->post('urlpage');

        $CekEmail = $this->Customers_model->get_email($Cek_email);

        $datacustomers = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'created_date' => $this->input->post('created_date')
        );

        if ($CekEmail == NULL) {
            $this->db->insert('tbl_customers', $datacustomers);
            $this->session->set_flashdata('customers', "Empty");
            redirect($URLPage);
            // redirect('');
        } else {
            $this->session->set_flashdata('gagal', 'Empty');
            redirect($URLPage);
        }
    }
}
