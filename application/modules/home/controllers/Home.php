<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //LOAD MODELS
        $this->load->model('Home_model');
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
                $deposit = $this->Home_model->get_cashflow_deposit();
                $value['deposit'] = !empty($deposit) ? $deposit[0] : 0;

                $pembayaran = $this->Home_model->get_cashflow_pembayaran();
                $value['pembayaran'] = !empty($pembayaran) ? $pembayaran[0] : 0;

                $cashflow = $this->Home_model->get_cashflow();
                $value['cashflow'] = $cashflow;

                $this->load->view('include/head');
                $this->load->view('include/top-header');
                $this->load->view('include/alert');
                $this->load->view('home', $value);
                $this->load->view('include/sidebar');
                $this->load->view('include/footer');
            }
        }
    }

	public function deposit()
	{
        if ($this->session->userdata('username') == NULL) {
            $this->session->set_flashdata('n_session', "The identity does not match our data!");
            redirect('login');
        } else if ($this->session->userdata('username') != NULL) {
            $dataDeposit = array(
                'tipe_cashflow' => 'Deposit',
                'nominal_cashflow' => $this->input->post('nominal'),
                'asal_dana_cashflow' => $this->input->post('asal_dana'),
                'tanggal_cashflow' => $this->input->post('tanggal'),
                'deskripsi_cashflow' => 'Deposit Keuangan Bank Sampah'
            );
    
            $this->db->insert('tbl_cashflow', $dataDeposit);
            $this->session->set_flashdata('success', "Data saved successfully!");
            redirect('home');
        }
	}
}