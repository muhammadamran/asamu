<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Wcontactus extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		//LOAD MODELS
		$this->load->model('Wcontactus_model');
	}

	public function index()
	{
		// DATA SLIDER
		// $slider = $this->Wcontactus_model->get_slider();
		// $value['data_slider'] = $slider;
		// END DATA SLIDER

		$this->load->view('modes/head');
		$this->load->view('modes/top-header');
		$this->load->view('modes/alert');
		// $this->load->view('whome', $value);
		$this->load->view('wcontactus');
		$this->load->view('modes/footer');
	}
}
