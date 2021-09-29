<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Site extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		//LOAD MODELS
		$this->load->model('Site_model');
		$this->load->model('Master_model');
	}

	public function index()
	{
		$user = $this->session->userdata('username');
		if ($user == NULL) {
			$this->session->set_flashdata('n_session', "The identity does not match our data!");
			redirect('login');
		} else {
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

			$this->load->view('include/head', $value);
			$this->load->view('include/top-header', $value);
			$this->load->view('include/alert');
			$this->load->view('site', $value);
			$this->load->view('include/sidebar', $value);
			$this->load->view('include/footer', $value);
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

	// FUNCTION UPLOAD ICON
	public function uploadicon()
	{
		foreach ($_FILES as $name => $fileInfo) {
			$filename = $_FILES[$name]['name'];
			$tmpname = $_FILES[$name]['tmp_name'];
			$exp = explode('.', $filename);
			$ext = end($exp);
			$newname = 'icon_' . time() . "." . $ext;
			$config['upload_path'] = './modes/images/asamu/icon/';
			$config['upload_url'] =  base_url() . 'modes/images/asamu/icon/';
			$config['allowed_types'] = "jpg|jpeg|png";
			$config['max_size'] = '2000000';
			$config['file_name'] = $newname;
			$this->load->library('upload', $config);
			move_uploaded_file($tmpname, "modes/images/asamu/icon/" . $newname);
			return $newname;
		}
	}

	// FUNCTION UPLOAD LOGO
	public function uploadlogo()
	{
		foreach ($_FILES as $name => $fileInfo) {
			$filename = $_FILES[$name]['name'];
			$tmpname = $_FILES[$name]['tmp_name'];
			$exp = explode('.', $filename);
			$ext = end($exp);
			$newname = 'logo_' . time() . "." . $ext;
			$config['upload_path'] = './modes/images/asamu/logo/';
			$config['upload_url'] =  base_url() . 'modes/images/asamu/logo/';
			$config['allowed_types'] = "jpg|jpeg|png";
			$config['max_size'] = '2000000';
			$config['file_name'] = $newname;
			$this->load->library('upload', $config);
			move_uploaded_file($tmpname, "modes/images/asamu/logo/" . $newname);
			return $newname;
		}
	}

	// FUNCTION UPLOAD LOGO
	public function uploadloader()
	{
		foreach ($_FILES as $name => $fileInfo) {
			$filename = $_FILES[$name]['name'];
			$tmpname = $_FILES[$name]['tmp_name'];
			$exp = explode('.', $filename);
			$ext = end($exp);
			$newname = 'loader_' . time() . "." . $ext;
			$config['upload_path'] = './modes/images/asamu/loader/';
			$config['upload_url'] =  base_url() . 'modes/images/asamu/loader/';
			$config['allowed_types'] = "jpg|jpeg|png";
			$config['max_size'] = '2000000';
			$config['file_name'] = $newname;
			$this->load->library('upload', $config);
			move_uploaded_file($tmpname, "modes/images/asamu/loader/" . $newname);
			return $newname;
		}
	}

	// UPDATE ICON
	public function iconupdate()
	{
		$pic = '';

		foreach ($_FILES as $name => $fileInfo) {
			if (!empty($_FILES[$name]['name'])) {
				$newname = $this->uploadicon();
				$data[$name] = $newname;
				$pic = $newname;
			}
		}

		$upload = $input_data['icon'] = $pic;

		$ID = $this->input->post('id_site');

		$dataSite = array(
			'icon' => $upload
		);

		$this->Site_model->update_site('tbl_site', $dataSite, $ID);
		$this->session->set_flashdata('success', "Data saved successfully!");
		redirect('site');
	}

	// UPDATE LOGO
	public function logoupdate()
	{
		$pic = '';

		foreach ($_FILES as $name => $fileInfo) {
			if (!empty($_FILES[$name]['name'])) {
				$newname = $this->uploadlogo();
				$data[$name] = $newname;
				$pic = $newname;
			}
		}

		$upload = $input_data['logo'] = $pic;

		$ID = $this->input->post('id_site');

		$dataSite = array(
			'logo' => $upload
		);

		$this->Site_model->update_site('tbl_site', $dataSite, $ID);
		$this->session->set_flashdata('success', "Data saved successfully!");
		redirect('site');
	}

	// UPDATE LOADER
	public function loaderupdate()
	{
		$pic = '';

		foreach ($_FILES as $name => $fileInfo) {
			if (!empty($_FILES[$name]['name'])) {
				$newname = $this->uploadloader();
				$data[$name] = $newname;
				$pic = $newname;
			}
		}

		$upload = $input_data['loader'] = $pic;

		$ID = $this->input->post('id_site');

		$dataSite = array(
			'loader' => $upload,
			'tloader' => $this->input->post('tloader'),
		);

		$this->Site_model->update_site('tbl_site', $dataSite, $ID);
		$this->session->set_flashdata('success', "Data saved successfully!");
		redirect('site');
	}
}
