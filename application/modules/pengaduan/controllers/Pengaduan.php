<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaduan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //LOAD MODELS
        $this->load->model('Pengaduan_model');
    }

    public function index()
    {
        $user = $this->session->userdata('username');
        if ($user == NULL ) {
            $this->session->set_flashdata('n_session', "Empty");
            redirect('login');
        } else {
        // DATA GALERI
            $get_data = $this->Pengaduan_model->get_data_laporan();
            $value['data_laporan'] = $get_data; 

            $get_data_petugas = $this->Pengaduan_model->get_data_petugas();
            $value['data_petugas'] = $get_data_petugas; 
            
            $this->load->view('include/head');
            $this->load->view('include/top-header');
            $this->load->view('include/alert');
            $this->load->view('pengaduan',$value);
            $this->load->view('include/sidebar');
            $this->load->view('include/footer');
        }
        // END DATA GALERI
    }
    
    public function set_petugas()
    {
        $ID = $this->input->post('id_laporan');

        if ($this->input->post('petugas')) {
            $data = array(
                'petugas' => $this->input->post('petugas'),
                'status' => '2'
            );
    
            $this->Pengaduan_model->update_laporan('tbl_laporan', $data,$ID);
            $this->session->set_flashdata('success', "Data saved successfully!");
            redirect('pengaduan');
        } else {
            redirect('pengaduan');
        }
    }
    
    // FUNCTION UPLOAD
	// public function upload() 
	// {
	// 	foreach($_FILES as $name => $fileInfo)
	// 	{
	// 		$filename=$_FILES[$name]['name'];
	// 		$tmpname=$_FILES[$name]['tmp_name'];
	// 		$exp=explode('.', $filename);
	// 		$ext=end($exp);
	// 		$newname= 'galeri_'.time().".".$ext; 
	// 		$config['upload_path'] = './upload/galeri/';
	// 		$config['upload_url'] =  base_url().'upload/galeri/';
	// 		$config['allowed_types'] = "jpg|jpeg|png";
	// 		$config['max_size'] = '2000000';
	// 		$config['file_name'] = $newname;
	// 		$this->load->library('upload', $config);
	// 		move_uploaded_file($tmpname,"upload/galeri/".$newname);
	// 		return $newname;
	// 	}
	// }

	// // UPLOAD GALERI
	// public function adding()
	// {
	// 	$pic = '';

	// 	foreach($_FILES as $name => $fileInfo)
	// 	{ 
	// 		if(!empty($_FILES[$name]['name'])){
	// 			$newname = $this->upload(); 
	// 			$data[$name] = $newname;
	// 			$pic = $newname;
	// 		}
	// 	}

	// 	$upload = $input_data['foto'] = $pic;

	// 	$dataGaleri = array(
	// 		'foto' => $upload,
	// 		'status' => $this->input->post('status'),
	// 		'remaks' => $this->input->post('remaks'),
	// 		'created_date' => $this->input->post('created_date')
	// 	);

	// 		$this->db->insert('tbl_gallery', $dataGaleri);
	// 		$this->session->set_flashdata('success', "Data saved successfully!");
	// 		redirect('pengaduan');
	// }
    
    // UPDATING GALERI
    // public function updating()
    // {
    //     $ID = $this->input->post('id_gallery');

    //     $dataGaleri = array(
    //         'remaks' => $this->input->post('remaks'),
    //         'created_date' => $this->input->post('created_date')
    //     );

    //     $this->Pengaduan_model->update_galeri('tbl_gallery', $dataGaleri,$ID);
    //     $this->session->set_flashdata('success', "Data saved successfully!");
    //     redirect('pengaduan');
    // }

	// // UPDATE FOTO GALERI
    // public function changefoto()
    // {
    //     $pic = '';

	// 	foreach($_FILES as $name => $fileInfo)
	// 	{ 
	// 		if(!empty($_FILES[$name]['name'])){
	// 			$newname = $this->upload(); 
	// 			$data[$name] = $newname;
	// 			$pic = $newname;
	// 		}
	// 	}

	// 	$upload = $input_data['foto'] = $pic;

    //     $ID = $this->input->post('id_gallery');

    //     $dataGaleri = array(
    //         'foto' => $upload
    //     );

    //     $this->Pengaduan_model->update_galeri('tbl_gallery', $dataGaleri,$ID);
    //     $this->session->set_flashdata('success', "Data saved successfully!");
    //     redirect('pengaduan');
    // }

    // // DELETE DATA
    // public function delete()
	// {
	// 	$where = $this->input->post('id_gallery');

	// 	$this->Pengaduan_model->delete_galeri($where);
    //     $this->session->set_flashdata('hapus', "Empty");
    //     redirect('pengaduan');
	// }

    // // NON-AKTIF GALERI
    // public function nonaktif()
    // {
    //     $ID = $this->input->post('id_gallery');

    //     $input_data = array(
    //         'status' => $this->input->post('status')
    //     );

    //     $this->Pengaduan_model->update_galeri('tbl_gallery', $input_data,$ID);
    //     $this->session->set_flashdata('nonaktif', "Empty!");
    //     redirect('pengaduan');
    // }

    // // AKTIF GALERI
    // public function aktif()
    // {
    //     $ID = $this->input->post('id_gallery');

    //     $input_data = array(
    //         'status' => $this->input->post('status')
    //     );

    //     $this->Pengaduan_model->update_galeri('tbl_gallery', $input_data,$ID);
    //     $this->session->set_flashdata('aktif', "Empty!");
    //     redirect('pengaduan');
    // }

}