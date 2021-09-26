<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wpenjemputan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//LOAD MODELS
		$this->load->model('Wpenjemputan_model');
	}

	public function index()
	{	

		$petugas = $this->session->userdata('username');

        $jemput = $this->Wpenjemputan_model->get_jemput($petugas);
		$value['jemput'] = $jemput;

		$this->load->view('modes/head');
		$this->load->view('modes/top-header');
		$this->load->view('modes/alert');
		$this->load->view('wpenjemputan',$value);
		$this->load->view('modes/footer');
	}

    public function ambil()
    {
        $ID = $this->input->post('id_laporan');

        $data = array(
            'status' => $this->input->post('status'),
            'berat_real' => $this->input->post('berat_real'),
            'harga_real_sampah' => $this->input->post('harga_real_sampah'),
        );

		if ($this->input->post('status') == '3') {
			$input_data['pelapor'] = $this->input->post('pelapor');
			$input_data['tipe_cashflow'] = 'in';
			$input_data['nominal_cashflow'] = $this->input->post('harga_real_sampah');
			$input_data['deskripsi_cashflow'] = 'Pemasukan dari penukaran sampah.';
			$input_data['tanggal_cashflow'] = date('Y-m-d');
			$result = $this->db->insert('tbl_cashflow_user', $input_data);
		}

        $this->Wpenjemputan_model->update_laporan('tbl_laporan', $data,$ID);
        $this->session->set_flashdata('success', "Data saved successfully!");
        redirect('wpenjemputan');
    }
}