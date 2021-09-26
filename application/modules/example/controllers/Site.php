<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//LOAD MODELS
		$this->load->model('Site_model');
	}

	public function index()
	{
      $user = $this->session->userdata('username');

      // DATA Site
      $data_site = $this->Site_model->get_data_site($user);
      $value['data_site'] = $data_site; 
      // END DATA Site

      $this->load->view('include/head');
      $this->load->view('include/top-header');
      $this->load->view('include/alert');
      $this->load->view('site',$value);
      $this->load->view('include/sidebar');
      $this->load->view('include/footer');
	}

	// FUNCTION UPLOAD
	public function upload() 
	{
		foreach($_FILES as $name => $fileInfo)
		{
			$filename=$_FILES[$name]['name'];
			$tmpname=$_FILES[$name]['tmp_name'];
			$exp=explode('.', $filename);
			$ext=end($exp);
			$newname=  $exp[0].'_'.time().".".$ext; 
			$config['upload_path'] = './assets/upload/site/';
			$config['upload_url'] =  base_url().'assets/upload/site/';
			$config['allowed_types'] = "gif|jpg|jpeg|png|pdf|docx";
			$config['max_size'] = '2000000';
			$config['file_name'] = $newname;
			$this->load->library('upload', $config);
			move_uploaded_file($tmpname,"assets/upload/site/".$newname);
			return $newname;
		}
	}

	// UPLOAD Site
	public function adding()
	{
		$pic = '';

		foreach($_FILES as $name => $fileInfo)
		{ 
			if(!empty($_FILES[$name]['name'])){
				$newname = $this->upload(); 
				$data[$name] = $newname;
				$pic = $newname;
			}
		}

		$upload = $input_data['icon'] = $pic;

		$user = $this->session->userdata('username');

		$dataSite = array(
			'slogan' => $this->input->post('slogan'),
			'motto' => $this->input->post('motto'),
			'name' => $this->input->post('name'),
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

	public function delete($id_url)
	{
		$where = array(
			'id_url' => $id_url,
		);

		$this->Site_model->del_Site($where,'tbl_url');
		$this->session->set_flashdata('error', "Data delete successfully!");
		redirect('Site');
	}

}