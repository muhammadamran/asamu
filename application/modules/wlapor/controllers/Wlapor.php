<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wlapor extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//LOAD MODELS
		$this->load->model('Wlapor_model');
	}

	public function index()
	{     
        // $a_laporan 1 = Laporan Awal
        // $b_laporan 2 = Di Proses/Ditake Petugas
        // $c_laporan 3 = Selesai
        
        $pelapor = $this->session->userdata('username');

        $a_laporan = $this->Wlapor_model->get_count_laporan($pelapor);
        $b_laporan = $this->Wlapor_model->get_count_proses($pelapor);
        $c_laporan = $this->Wlapor_model->get_count_selesai($pelapor);
        
        // 1
        if ($a_laporan == NULL) {
            $value['laporan_a'] = '0'; 
        } else {
            $value['laporan_a'] = $a_laporan[0]->laporan_a; 
        }

        // 2
        if ($b_laporan == NULL) {
            $value['laporan_b'] = '0'; 
        } else {
            $value['laporan_b'] = $b_laporan[0]->laporan_b; 
        }

        // 3
        if ($c_laporan == NULL) {
            $value['laporan_c'] = '0'; 
        } else {
            $value['laporan_c'] = $c_laporan[0]->laporan_c; 
        }

        $lis_organik = $this->Wlapor_model->get_data_sampah_list('Organik');
        $value['organik'] = $lis_organik; 
        $lis_anorganik = $this->Wlapor_model->get_data_sampah_list('Anorganik');
        $value['anorganik'] = $lis_anorganik; 

        $user = $this->Wlapor_model->get_user($pelapor);
        $value['user'] = !empty($user) ? $user[0] : null; 

		$this->load->view('modes/head');
		$this->load->view('modes/top-header');
		$this->load->view('modes/alert');
		$this->load->view('wlapor',$value);
		$this->load->view('modes/footer');
	}

    public function empty()
    {   
        $value['pelapor'] = $this->session->userdata('full_name'); 

        $pelapor = $this->session->userdata('username');
        // LAPORAN ANDA
            $a_laporan = $this->Wlapor_model->get_count_laporan($pelapor);
            $b_laporan = $this->Wlapor_model->get_count_proses($pelapor);
            $c_laporan = $this->Wlapor_model->get_count_selesai($pelapor);
            
            // 1
            if ($a_laporan == NULL) {
                $value['laporan_a'] = '0'; 
            } else {
                $value['laporan_a'] = $a_laporan[0]->laporan_a; 
            }

            // 2
            if ($b_laporan == NULL) {
                $value['laporan_b'] = '0'; 
            } else {
                $value['laporan_b'] = $b_laporan[0]->laporan_b; 
            }

            // 3
            if ($c_laporan == NULL) {
                $value['laporan_c'] = '0'; 
            } else {
                $value['laporan_c'] = $c_laporan[0]->laporan_c; 
            }
        // END LAPORAN ANDA

        $this->load->view('modes/head');
        $this->load->view('modes/top-header');
        $this->load->view('modes/alert');
        $this->load->view('empty',$value);
        $this->load->view('modes/footer');
    }

    public function list($pelapor)
    {

        // DATA LAPORAN
            $lapor = $this->Wlapor_model->get_data_laporan($pelapor);

            if ($lapor == NULL) {
                redirect('wlapor/empty');
            } else {
                $value['data_laporan'] = $lapor;
            }

            $lis_laporan = $this->Wlapor_model->get_data_laporan_list($pelapor);
            $value['pelapor'] = $lis_laporan[0]->pelapor; 
        // END DATA LAPORAN
        
        // LAPORAN ANDA
            $a_laporan = $this->Wlapor_model->get_count_laporan($pelapor);
            $b_laporan = $this->Wlapor_model->get_count_proses($pelapor);
            $c_laporan = $this->Wlapor_model->get_count_selesai($pelapor);
            
            // 1
            if ($a_laporan == NULL) {
                $value['laporan_a'] = '0'; 
            } else {
                $value['laporan_a'] = $a_laporan[0]->laporan_a; 
            }

            // 2
            if ($b_laporan == NULL) {
                $value['laporan_b'] = '0'; 
            } else {
                $value['laporan_b'] = $b_laporan[0]->laporan_b; 
            }

            // 3
            if ($c_laporan == NULL) {
                $value['laporan_c'] = '0'; 
            } else {
                $value['laporan_c'] = $c_laporan[0]->laporan_c; 
            }
        // END LAPORAN ANDA

        $this->load->view('modes/head');
        $this->load->view('modes/top-header');
        $this->load->view('modes/alert');
        $this->load->view('list',$value);
        $this->load->view('modes/footer');
    }

    public function detail($pelapor,$id_laporan)
    {   
        // DATA LAPORAN
            $lis_laporan = $this->Wlapor_model->get_data_laporan_detail($pelapor,$id_laporan);
            $value['id_laporan'] = $lis_laporan[0]->id_laporan; 
            $value['tipe'] = $lis_laporan[0]->tipe; 
            $value['judul_laporan'] = $lis_laporan[0]->judul_laporan; 
            $value['tgl_laporan'] = $lis_laporan[0]->tgl_laporan; 
            $value['lokasi_laporan'] = $lis_laporan[0]->lokasi_laporan; 
            $value['deskripsi_laporan'] = $lis_laporan[0]->deskripsi_laporan; 
            $value['id_members'] = $lis_laporan[0]->id_members; 
            $value['pelapor'] = $lis_laporan[0]->pelapor; 
            $value['NoHP'] = $lis_laporan[0]->NoHP; 
            $value['Email'] = $lis_laporan[0]->Email; 
            $value['created_date'] = $lis_laporan[0]->created_date; 
            $value['created_by'] = $lis_laporan[0]->created_by; 
            $value['gambar'] = $lis_laporan[0]->gambar; 
            $value['status'] = $lis_laporan[0]->status; 
            $value['petugas'] = $lis_laporan[0]->petugas; 

            $lapor_gambar = $this->Wlapor_model->get_data_laporan_detail_gambar($pelapor,$id_laporan);
            $value['data_laporan_gambar'] = $lapor_gambar; 
        // END DATA LAPORAN
        
        $this->load->view('modes/head');
        $this->load->view('modes/top-header');
        $this->load->view('modes/alert');
        $this->load->view('detail',$value);
        $this->load->view('modes/footer');
    }

	// FUNCTION UPLOAD
    function upload() 
    {
        foreach($_FILES as $name => $fileInfo)
        {
            $filename=$_FILES[$name]['name'];
            $tmpname=$_FILES[$name]['tmp_name'];
            $exp=explode('.', $filename);
            $ext=end($exp);
            $newname= 'lapor_'.time().".".$ext; 
            $config['upload_path'] = './upload/lapor/';
            $config['upload_url'] =  base_url().'upload/lapor/';
            $config['allowed_types'] = "jpg|jpeg|png";
            $config['max_size'] = '2000000';
            $config['file_name'] = $newname;
            $this->load->library('upload', $config);
            move_uploaded_file($tmpname,"upload/lapor/".$newname);
            return $newname;
        }
    }

    public function laporannew()
    {
        $pic = '';

        $dataInfo = array();
        $cpt = count($_FILES['pic']['name']);
        
        for($i=0; $i<$cpt; $i++){
            $filename=$_FILES['pic']['name'][$i];
            $tmpname=$_FILES['pic']['tmp_name'][$i];
            $exp=explode('.', $filename);
            $ext=end($exp);
            $newname=  $exp[0].'_'.time().".".$ext;
            $config['upload_path'] = './upload/lapor/';
            $config['upload_url'] =  base_url().'upload/lapor/';
            $config['allowed_types'] = "gif|jpg|jpeg|png";
            $config['max_size'] = '2000000';
            $config['file_name'] = $newname;
            $this->load->library('upload', $config);
            move_uploaded_file($tmpname,"upload/lapor/".$newname);

            $dataInfo[] = $newname;
        }

        $galeri_lapor = json_encode($dataInfo);

        $input_data['tipe'] = $this->input->post('tipe', true);
        $input_data['judul_laporan'] = $this->input->post('judul_laporan', true);
        $input_data['jenis_sampah'] = $this->input->post('nama_sampah', true);
        $input_data['harga_sampah'] = $this->input->post('harga_sampah', true);
        $input_data['tgl_laporan'] = $this->input->post('tgl_laporan', true); 
        $input_data['lokasi_laporan'] = $this->input->post('lokasi_laporan', true); 
        $input_data['deskripsi_laporan'] = $this->input->post('deskripsi_laporan', true); 
        $input_data['pelapor'] = $this->input->post('pelapor', true); 
        $input_data['id_members'] = $this->input->post('id_members', true);
        $input_data['NoHP'] = $this->input->post('NoHP', true);
        $input_data['Email'] = $this->input->post('Email', true);
        $input_data['berat'] = $this->input->post('berat', true);
        $input_data['gambar'] = $galeri_lapor;
        $input_data['created_date'] = $this->input->post('created_date', true);
        $input_data['created_by'] = $this->input->post('created_by', true);

        $result = $this->db->insert('tbl_laporan', $input_data);
        
        if (!$result) {                             
            $this->session->set_flashdata('success_n', 'Data saved unsuccessfully.');               
            redirect('wlapor');             
        } else {
            $this->session->set_flashdata('success', 'Data saved successfully.');        
            redirect('wlapor');             
        }
    }
}