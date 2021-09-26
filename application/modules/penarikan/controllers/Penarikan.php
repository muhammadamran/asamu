<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penarikan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //LOAD MODELS
        $this->load->model('Penarikan_model');
    }

    public function index()
    {
        $user = $this->session->userdata('username');
        if ($user == NULL ) {
            $this->session->set_flashdata('n_session', "Empty");
            redirect('login');
        } else {
        // DATA GALERI
            $get_data = $this->Penarikan_model->get_data_withdraw();
            $value['withdraw'] = $get_data; 
            
            $this->load->view('include/head');
            $this->load->view('include/top-header');
            $this->load->view('include/alert');
            $this->load->view('penarikan',$value);
            $this->load->view('include/sidebar');
            $this->load->view('include/footer');
        }
        // END DATA GALERI
    }

    public function proses() {
        $ID = $this->input->post('id_withdraw');

        if ($this->input->post('status') == '3') {
            $data = array(
                'status' => $this->input->post('status'),
                'pengambil' => $this->input->post('pengambil'),
                'tanggal_ambil' => date('Y-m-d H:i:s')
            );
        } else {
            $data = array(
                'status' => $this->input->post('status')
            );
        }

        if ($this->input->post('status') == '3') {
            $cashflow_input['tipe_cashflow'] = 'Penarikan';
            $cashflow_input['deskripsi_cashflow'] = 'Penarikan dana oleh ' . $this->input->post('pelapor', true) . ' tanggal ' . date('d M Y H:i:s');
            $cashflow_input['nominal_cashflow'] = $this->input->post('nominal', true);
            $cashflow_input['asal_dana_cashflow'] = 'Saldo Deposit';
            $cashflow_input['tanggal_cashflow'] = date('Y-m-d');
            $cashflow = $this->db->insert('tbl_cashflow', $cashflow_input);
        }

        $this->Penarikan_model->update_withdraw('tbl_cashflow_withdraw', $data,$ID);
        $this->session->set_flashdata('success', "Data saved successfully!");
        redirect('penarikan');
    }
}