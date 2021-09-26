<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wkontak extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//LOAD MODELS
		$this->load->model('Wkontak_model');
	}

	public function index()
	{	

		// DATA SLIDER
			$kontak = $this->Wkontak_model->get_data();
			$value['slogan'] = $kontak[0]->slogan; 
			$value['motto'] = $kontak[0]->motto; 
			$value['name'] = $kontak[0]->name; 
			$value['email'] = $kontak[0]->email; 
			$value['address'] = $kontak[0]->address; 
			$value['telp'] = $kontak[0]->telp; 
			$value['fax'] = $kontak[0]->fax; 
			$value['maps'] = $kontak[0]->maps; 
			$value['facebook'] = $kontak[0]->facebook; 
			$value['instagram'] = $kontak[0]->instagram; 
			$value['youtube'] = $kontak[0]->youtube; 
			$value['twitter'] = $kontak[0]->twitter; 
			$value['linked'] = $kontak[0]->linked; 
			$value['google'] = $kontak[0]->google; 
			$value['footer'] = $kontak[0]->footer; 
		// END DATA SLIDER

		$this->load->view('modes/head');
		$this->load->view('modes/top-header');
		$this->load->view('modes/alert');
		$this->load->view('wkontak',$value);
		$this->load->view('modes/footer');
	}
}