<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edukasi extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //LOAD MODELS
        $this->load->model('Edukasi_model');
    }

    public function index()
    {
        $user = $this->session->userdata('username');
        if ($user == NULL ) {
            $this->session->set_flashdata('n_session', "Empty");
            redirect('login');
        } else {
        // DATA EDUKASI
            $get_data = $this->Edukasi_model->get_data_edukasi();
            $value['data_edukasi'] = $get_data; 
            
            $this->load->view('include/head');
            $this->load->view('include/top-header');
            $this->load->view('include/alert');
            $this->load->view('edukasi',$value);
            $this->load->view('include/sidebar');
            $this->load->view('include/footer');
        }
        // END DATA EDUKASI
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
            $newname= 'edukasi_'.time().".".$ext; 
            $config['upload_path'] = './upload/edukasi/';
            $config['upload_url'] =  base_url().'upload/edukasi/';
            $config['allowed_types'] = "jpg|jpeg|png";
            $config['max_size'] = '2000000';
            $config['file_name'] = $newname;
            $this->load->library('upload', $config);
            move_uploaded_file($tmpname,"upload/edukasi/".$newname);
            return $newname;
        }
    }

    // UPLOAD edukasi
    // public function adding()
    // {
    //     $pic = '';

    //     foreach($_FILES as $name => $fileInfo)
    //     { 
    //         if(!empty($_FILES[$name]['name'])){
    //             $newname = $this->upload(); 
    //             $data[$name] = $newname;
    //             $pic = $newname;
    //         }
    //     }

    //     $upload = $input_data['foto'] = $pic;

    //     $dataedukasi = array(
    //         'foto' => $upload,
    //         'status' => $this->input->post('status'),
    //         'remaks' => $this->input->post('remaks'),
    //         'created_date' => $this->input->post('created_date')
    //     );

    //         $this->db->insert('tbl_education', $dataedukasi);
    //         $this->session->set_flashdata('success', "Data saved successfully!");
    //         redirect('edukasi');
    // }

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

        $dataInfo = array();
        $cpt = count($_FILES['pic']['name']);
        
        for($i=0; $i<$cpt; $i++){
            $filename=$_FILES['pic']['name'][$i];
            $tmpname=$_FILES['pic']['tmp_name'][$i];
            $exp=explode('.', $filename);
            $ext=end($exp);
            $newname=  $exp[0].'_'.time().".".$ext;
            $config['upload_path'] = './upload/edukasi/galeri/';
            $config['upload_url'] =  base_url().'upload/edukasi/galeri/';
            $config['allowed_types'] = "gif|jpg|jpeg|png";
            $config['max_size'] = '2000000';
            $config['file_name'] = $newname;
            $this->load->library('upload', $config);
            move_uploaded_file($tmpname,"upload/edukasi/galeri/".$newname);

            $dataInfo[] = $newname;
        }

        $galeri_edukasi = json_encode($dataInfo);

        $input_data['judul'] = $this->input->post('judul', true);
        $input_data['foto'] = $pic;
        $input_data['gambar'] = $galeri_edukasi;
        $input_data['tgl_education'] = $this->input->post('tgl_education', true); 
        $input_data['description'] = $this->input->post('description', true); 
        $input_data['remaks'] = $this->input->post('remaks', true); 
        $input_data['created_date'] = $this->input->post('created_date', true);
        $input_data['status'] = $this->input->post('status', true);
        $input_data['created_by'] = $this->input->post('created_by', true);

        $result = $this->db->insert('tbl_education', $input_data);
        
        if (!$result) {                             
            $this->session->set_flashdata('success_n', 'Data saved unsuccessfully.');               
            redirect('edukasi_');             
        } else {
            $this->session->set_flashdata('success', 'Data saved successfully.');        
            redirect('edukasi');             
        }
    }
    
    // UPDATING EDUKASI
    public function updating()
    {
        $ID = $this->input->post('id_education');

        $dataedukasi = array(
            'judul' => $this->input->post('judul'),
            'tgl_education' => $this->input->post('tgl_education'),
            'description' => $this->input->post('description'),
            'remaks' => $this->input->post('remaks'),
            'created_date' => $this->input->post('created_date')
        );

        $this->Edukasi_model->update_edukasi('tbl_education', $dataedukasi,$ID);
        $this->session->set_flashdata('success', "Data saved successfully!");
        redirect('edukasi');
    }

    // UPDATE FOTO EDUKASI
    public function changefoto()
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

        $upload = $input_data['foto'] = $pic;

        $ID = $this->input->post('id_education');

        $dataedukasi = array(
            'foto' => $upload
        );

        $this->Edukasi_model->update_edukasi('tbl_education', $dataedukasi,$ID);
        $this->session->set_flashdata('success', "Data saved successfully!");
        redirect('edukasi');
    }

    // DELETE DATA
    public function delete()
    {
        $where = $this->input->post('id_education');

        $this->Edukasi_model->delete_edukasi($where);
        $this->session->set_flashdata('hapus', "Empty");
        redirect('edukasi');
    }

    // NON-AKTIF EDUKASI
    public function nonaktif()
    {
        $ID = $this->input->post('id_education');

        $input_data = array(
            'status' => $this->input->post('status')
        );

        $this->Edukasi_model->update_edukasi('tbl_education', $input_data,$ID);
        $this->session->set_flashdata('nonaktif', "Empty!");
        redirect('edukasi');
    }

    // AKTIF EDUKASI
    public function aktif()
    {
        $ID = $this->input->post('id_education');

        $input_data = array(
            'status' => $this->input->post('status')
        );

        $this->Edukasi_model->update_edukasi('tbl_education', $input_data,$ID);
        $this->session->set_flashdata('aktif', "Empty!");
        redirect('edukasi');
    }

}