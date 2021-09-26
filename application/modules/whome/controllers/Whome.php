<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Whome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//LOAD MODELS
		$this->load->model('Whome_model');
	}

	public function index()
	{	
		// DATA SLIDER
			$slider = $this->Whome_model->get_data_slider();
			$value['data_slider'] = $slider; 
		// END DATA SLIDER
		
		// DATA EDUKASI
			$edukasi = $this->Whome_model->get_data_edukasi();
			$value['data_edukasi'] = $edukasi; 
		// END DATA EDUKASI
		
		// DATA GALERI
			$galeri = $this->Whome_model->get_data_galeri();
			$value['data_galeri'] = $galeri; 
		// END DATA GALERI
		
		// TOTAL
			$edukasi_total = $this->Whome_model->get_data_edukasi_count();
			$value['total_edukasi'] = $edukasi_total[0]->total_edukasi; 

			$pengguna_total = $this->Whome_model->get_data_pengguna_count();
			$value['total_pengguna'] = $pengguna_total[0]->total_pengguna; 

			$laporan_total = $this->Whome_model->get_data_laporan_count();
			$value['total_laporan'] = $laporan_total[0]->total_laporan;  

			$anorganik_total = $this->Whome_model->get_data_anorganik_count();
			$value['total_anorganik'] = $anorganik_total[0]->total_anorganik; 

			$organik_total = $this->Whome_model->get_data_organik_count();
			$value['total_organik'] = $organik_total[0]->total_organik; 
		// END TOTAL
		// 
		$this->load->view('modes/head');
		$this->load->view('modes/top-header');
		$this->load->view('modes/alert');
		$this->load->view('whome',$value);
		$this->load->view('modes/footer');
	}
}