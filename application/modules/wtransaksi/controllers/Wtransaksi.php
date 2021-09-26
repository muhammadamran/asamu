<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wtransaksi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//LOAD MODELS
		$this->load->model('Wtransaksi_model');
	}

	public function index()
	{	
		$pelapor = $this->session->userdata('username');

        $penarikan = $this->Wtransaksi_model->get_saldo_tarik($pelapor);
        $saldo = $this->Wtransaksi_model->get_saldo($pelapor);
		$value['saldo'] = ($saldo[0]->saldo - $penarikan[0]->penarikan);

        $transaksi = $this->Wtransaksi_model->get_transaksi($pelapor);
		$value['transaksi'] = $transaksi;

        $cashflow = $this->Wtransaksi_model->get_cashflow($pelapor);
		$value['cashflow'] = $cashflow;

        $tarik = $this->Wtransaksi_model->get_tarik($pelapor);
		$value['tarik'] = $tarik;

		$this->load->view('modes/head');
		$this->load->view('modes/top-header');
		$this->load->view('modes/alert');
		$this->load->view('wtransaksi',$value);
		$this->load->view('modes/footer');
	}

	public function tarik() {
		$withdraw = array(
			'pelapor' => $this->session->userdata('username'),
			'nominal' => $this->input->post('nominal'),
			'tanggal' => date('Y-m-d'),
			'status' => '1'
		);

		$this->db->insert('tbl_cashflow_withdraw', $withdraw);
		$this->session->set_flashdata('success', "Data saved successfully!");
		redirect('wtransaksi');
	}
}