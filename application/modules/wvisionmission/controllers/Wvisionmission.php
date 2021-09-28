<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Wvisionmission extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		//LOAD MODELS
		$this->load->model('Wvisionmission_model');
		$this->load->model('Master_model');
	}

	public function index()
	{
		// MASTER MODEL
		$get_data = $this->Master_model->get_data_site();
		$Cek_get_data = $value['data_site'] = $get_data;

		if ($Cek_get_data  == NULL) {
			$value['icon'] = '';
			$value['logo'] = '';
			$value['loader'] = '';
			$value['tloader'] = '';
			$value['title'] = '';
			$value['slogan'] = '';
			$value['motto'] = '';
			$value['name'] = '';
			$value['vision'] = '';
			$value['mission'] = '';
			$value['address'] = '';
			$value['email'] = '';
			$value['telp'] = '';
			$value['fax'] = '';
			$value['maps'] = '';
			$value['facebook'] = '';
			$value['instagram'] = '';
			$value['youtube'] = '';
			$value['twitter'] = '';
			$value['linked'] = '';
			$value['google'] = '';
			$value['footer'] = '';
		} else {
			$post_data = $this->Master_model->post_data_site();
			$value['id_site'] = $post_data[0]->id_site;
			$value['icon'] = $post_data[0]->icon;
			$value['logo'] = $post_data[0]->logo;
			$value['loader'] = $post_data[0]->loader;
			$value['tloader'] = $post_data[0]->tloader;
			$value['title'] = $post_data[0]->title;
			$value['slogan'] = $post_data[0]->slogan;
			$value['motto'] = $post_data[0]->motto;
			$value['name'] = $post_data[0]->name;
			$value['vision'] = $post_data[0]->vision;
			$value['mission'] = $post_data[0]->mission;
			$value['address'] = $post_data[0]->address;
			$value['email'] = $post_data[0]->email;
			$value['telp'] = $post_data[0]->telp;
			$value['fax'] = $post_data[0]->fax;
			$value['maps'] = $post_data[0]->maps;
			$value['facebook'] = $post_data[0]->facebook;
			$value['instagram'] = $post_data[0]->instagram;
			$value['youtube'] = $post_data[0]->youtube;
			$value['twitter'] = $post_data[0]->twitter;
			$value['linked'] = $post_data[0]->linked;
			$value['google'] = $post_data[0]->google;
			$value['footer'] = $post_data[0]->footer;
		}
		// END MASTER MODEL

		$this->load->view('modes/head', $value);
		$this->load->view('modes/top-header', $value);
		$this->load->view('modes/alert');
		$this->load->view('wvisionmission', $value);
		$this->load->view('modes/footer', $value);
	}
}
