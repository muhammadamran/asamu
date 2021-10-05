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
			$value['icon'] = 'null.png';
			$value['logo'] = 'null.png';
			$value['loader'] = 'null.png';
			$value['tloader'] = 'Text Loader';
			$value['title'] = 'Title';
			$value['slogan'] = 'Slogan';
			$value['motto'] = 'Motto';
			$value['name'] = 'Company Name';
			$value['vision'] = 'Vision';
			$value['mission'] = 'Mission';
			$value['address'] = 'Address';
			$value['email'] = 'info@hellos-id.com';
			$value['telp'] = 'Telephone';
			$value['fax'] = 'Fax';
			$value['maps'] = '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15865.367451552442!2d106.8017969!3d-6.2185701!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2e74f2341fff266d!2sGelora%20Bung%20Karno%20Main%20Stadium!5e0!3m2!1sen!2sid!4v1632932662096!5m2!1sen!2sid" width="90%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>';
			$value['facebook'] = '#!';
			$value['instagram'] = '#!';
			$value['youtube'] = '#!';
			$value['twitter'] = '#!';
			$value['linked'] = '#!';
			$value['google'] = '#!';
			$value['footer'] = 'Footer';
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

		// ABOUT US
		$get_about = $this->Master_model->get_data_about();
		$value['a_photo'] = $get_about[0]->photo;
		$value['a_title'] = $get_about[0]->title;
		$value['a_detail'] = $get_about[0]->detail;
		// END ABOUT US

		$this->load->view('modes/head', $value);
		$this->load->view('modes/top-header', $value);
		$this->load->view('modes/alert');
		$this->load->view('wvisionmission', $value);
		$this->load->view('modes/footer', $value);
	}
}
