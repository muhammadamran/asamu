<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jenis extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //LOAD MODELS
        $this->load->model('Jenis_model');
    }

    public function index()
    {
        $user = $this->session->userdata('username');
        if ($user == NULL ) {
            $this->session->set_flashdata('n_session', "Empty");
            redirect('login');
        } else {
        // DATA GALERI
            $get_data = $this->Jenis_model->get_data_jenis();
            $value['data_jenis'] = $get_data; 
            
            $this->load->view('include/head');
            $this->load->view('include/top-header');
            $this->load->view('include/alert');
            $this->load->view('jenis',$value);
            $this->load->view('include/sidebar');
            $this->load->view('include/footer');
        }
        // END DATA GALERI
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
			$newname= 'jenis_'.time().".".$ext; 
			$config['upload_path'] = './upload/jenis/';
			$config['upload_url'] =  base_url().'upload/jenis/';
			$config['allowed_types'] = "jpg|jpeg|png";
			$config['max_size'] = '2000000';
			$config['file_name'] = $newname;
			$this->load->library('upload', $config);
			move_uploaded_file($tmpname,"upload/jenis/".$newname);
			return $newname;
		}
	}

	// UPLOAD GALERI
	public function adding()
	{
		$dataJenis = array(
			'jenis_sampah' => $this->input->post('jenis_sampah'),
			'nama_sampah' => $this->input->post('nama_sampah'),
			'harga_sampah' => $this->input->post('harga_sampah')
		);

			$this->db->insert('tbl_sampah', $dataJenis);
			$this->session->set_flashdata('success', "Data saved successfully!");
			redirect('jenis');
	}
    
    // UPDATING GALERI
    public function updating()
    {
        $ID = $this->input->post('id_sampah');

        $dataJenis = array(
			'jenis_sampah' => $this->input->post('jenis_sampah'),
			'nama_sampah' => $this->input->post('nama_sampah'),
			'harga_sampah' => $this->input->post('harga_sampah')
        );

        $this->Jenis_model->update_jenis('tbl_sampah', $dataJenis,$ID);
        $this->session->set_flashdata('success', "Data saved successfully!");
        redirect('jenis');
    }

    // DELETE DATA
    public function delete()
	{
		$where = $this->input->post('id_sampah');

		$this->Jenis_model->delete_jenis($where);
        $this->session->set_flashdata('hapus', "Empty");
        redirect('jenis');
	}
}