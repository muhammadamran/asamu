<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Site extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		//LOAD MODELS
		$this->load->model('Site_model');
	}

	public function index()
	{
		$user = $this->session->userdata('username');
		if ($user == NULL) {
			$this->session->set_flashdata('n_session', "The identity does not match our data!");
			redirect('login');
		} else {
			// DATA SITE
			$get_data = $this->Site_model->get_data_site();
			$Cek_get_data = $value['data_site'] = $get_data;

			if ($Cek_get_data  == NULL) {
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
				$post_data = $this->Site_model->post_data_site();
				$value['id_site'] = $post_data[0]->id_site;
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

			$this->load->view('include/head');
			$this->load->view('include/top-header');
			$this->load->view('include/alert');
			$this->load->view('site', $value);
			$this->load->view('include/sidebar');
			$this->load->view('include/footer');
		}
		// END DATA SITE
	}

	// ADDING SITE
	public function adding()
	{
		$dataSite = array(
			'title' => $this->input->post('title'),
			'slogan' => $this->input->post('slogan'),
			'motto' => $this->input->post('motto'),
			'name' => $this->input->post('name'),
			'vision' => $this->input->post('vision'),
			'mission' => $this->input->post('mission'),
			'address' => $this->input->post('address'),
			'email' => $this->input->post('email'),
			'telp' => $this->input->post('telp'),
			'fax' => $this->input->post('fax'),
			'maps' => $this->input->post('maps'),
			'facebook' => $this->input->post('facebook'),
			'instagram' => $this->input->post('instagram'),
			'youtube' => $this->input->post('youtube'),
			'twitter' => $this->input->post('twitter'),
			'linked' => $this->input->post('linked'),
			'google' => $this->input->post('google'),
			'footer' => $this->input->post('footer'),
			'created_date' => $this->input->post('created_date'),
			'status' => $this->input->post('status')
		);

		$Cek_data_site = $this->Site_model->cek_data_site();
		$Cek_status = $value['status'] = $Cek_data_site[0]->status;

		if ($Cek_status == NULL) {
			$this->db->insert('tbl_site', $dataSite);
			$this->session->set_flashdata('success', "Data saved successfully!");
			redirect('site');
		} else {
			$this->session->set_flashdata('filed', "Data saved successfully!");
			redirect('site');
		}
	}

	// UPDATING SITE
	public function updating()
	{
		$ID = $this->input->post('id_site');

		$dataSite = array(
			'title' => $this->input->post('title'),
			'slogan' => $this->input->post('slogan'),
			'motto' => $this->input->post('motto'),
			'name' => $this->input->post('name'),
			'vision' => $this->input->post('vision'),
			'mission' => $this->input->post('mission'),
			'address' => $this->input->post('address'),
			'email' => $this->input->post('email'),
			'telp' => $this->input->post('telp'),
			'fax' => $this->input->post('fax'),
			'maps' => $this->input->post('maps'),
			'facebook' => $this->input->post('facebook'),
			'instagram' => $this->input->post('instagram'),
			'youtube' => $this->input->post('youtube'),
			'twitter' => $this->input->post('twitter'),
			'linked' => $this->input->post('linked'),
			'google' => $this->input->post('google'),
			'footer' => $this->input->post('footer'),
			'created_date' => $this->input->post('created_date'),
			'status' => $this->input->post('status')
		);

		$this->Site_model->update_site('tbl_site', $dataSite, $ID);
		$this->session->set_flashdata('success', "Data saved successfully!");
		redirect('site');
	}
}
