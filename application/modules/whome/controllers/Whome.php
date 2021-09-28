<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Whome extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		//LOAD MODELS
		$this->load->model('Whome_model');
	}

	public function index()
	{
		// DATA SLIDER
		$t_slider = $this->Whome_model->get_count_slider();
		$value['total_slider'] = $t_slider;

		$slider = $this->Whome_model->get_slider();
		$value['data_slider'] = $slider;
		// END DATA SLIDER

		$this->load->view('modes/head');
		$this->load->view('modes/top-header');
		$this->load->view('modes/alert');
		$this->load->view('whome', $value);
		$this->load->view('modes/footer');
	}
}
