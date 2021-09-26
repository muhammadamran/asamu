<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wedukasi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//LOAD MODELS
		$this->load->model('Wedukasi_model');
	}

	public function index()
	{
		// DATA EDUKASI
			$edukasi = $this->Wedukasi_model->get_data_edukasi();
			$value['data_edukasi'] = $edukasi;
		// END DATA EDUKASI

		$this->load->view('modes/head');
		$this->load->view('modes/top-header');
		$this->load->view('modes/alert');
		$this->load->view('wedukasi',$value);
		$this->load->view('modes/footer');
	}

	public function detail($id_education)
	{	
		
		// DATA EDUKASI
			$edukasi = $this->Wedukasi_model->get_data_edukasi();
			$value['data_edukasi'] = $edukasi;

			$edukasi_galei = $this->Wedukasi_model->get_data_edukasi_galeri($id_education);
			$value['data_edukasi_galey'] = $edukasi_galei;
		// END DATA EDUKASI
		
		$detail_edu = $this->Wedukasi_model->get_data_edu($id_education);
		$value['id_education'] = $detail_edu[0]->id_education; 
		$value['jenis_sampah'] = $detail_edu[0]->jenis_sampah; 
		$value['judul'] = $detail_edu[0]->judul; 
		$value['foto'] = $detail_edu[0]->foto; 
		$value['gambar'] = $detail_edu[0]->gambar; 
		$value['tgl_education'] = $detail_edu[0]->tgl_education; 
		$value['description'] = $detail_edu[0]->description; 
		$value['remaks'] = $detail_edu[0]->remaks; 
		$value['created_date'] = $detail_edu[0]->created_date; 
		$value['status'] = $detail_edu[0]->status; 
		$value['created_by'] = $detail_edu[0]->created_by; 

		$this->load->view('modes/head');
		$this->load->view('modes/top-header');
		$this->load->view('modes/alert');
		$this->load->view('detail',$value);
		$this->load->view('modes/footer');
	}
}