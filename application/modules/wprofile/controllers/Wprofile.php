<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wprofile extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//LOAD MODELS
		$this->load->model('Wprofile_model');
	}

	public function index()
	{
		$pelapor = $this->session->userdata('username');

        $total_saldo = $this->Wprofile_model->get_total_saldo($pelapor);
		$value['total_saldo'] = $total_saldo[0]->total_saldo;

        $list_saldo = $this->Wprofile_model->get_list_saldo($pelapor);
		$value['list_saldo'] = $list_saldo;

		$this->load->view('modes/head');
		$this->load->view('modes/top-header');
		$this->load->view('modes/alert');
		$this->load->view('wprofile', $value);
		$this->load->view('modes/footer');
	}

	// UPDATE PROFILE
	public function updating()
	{
		$ID = $this->input->post('username');

		$dataMembers = array(
			'full_name' => $this->input->post('full_name'),
			'placebrithday' => $this->input->post('placebrithday'),
			'brithday' => $this->input->post('brithday'),
			'age' => $this->input->post('age'),
			'address' => $this->input->post('address'),
			'city' => $this->input->post('city'),
			'phone' => $this->input->post('phone'),
			'email' => $this->input->post('email'),
			'gender' => $this->input->post('gender'),
			'religion' => $this->input->post('religion')
		);

		$this->Wprofile_model->update_members('tbl_members', $dataMembers,$ID);
		$this->session->set_flashdata('success', "Data saved successfully!");
		redirect('wprofile');
	}
}