<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Background extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //LOAD MODELS
        $this->load->model('Background_model');
    }

    public function index()
    {
        $user = $this->session->userdata('username');
        if ($user == NULL) {
            $this->session->set_flashdata('n_session', "Empty");
            redirect('login');
        } else {
            // DATA GALERI
            $get_data = $this->Background_model->get_data_galeri();
            $value['data_galeri'] = $get_data;

            $this->load->view('include/head');
            $this->load->view('include/top-header');
            $this->load->view('include/alert');
            $this->load->view('background', $value);
            $this->load->view('include/sidebar');
            $this->load->view('include/footer');
        }
        // END DATA GALERI
    }

    // FUNCTION UPLOAD
    public function upload()
    {
        foreach ($_FILES as $name => $fileInfo) {
            $filename = $_FILES[$name]['name'];
            $tmpname = $_FILES[$name]['tmp_name'];
            $exp = explode('.', $filename);
            $ext = end($exp);
            $newname = 'galeri_' . time() . "." . $ext;
            $config['upload_path'] = './upload/galeri/';
            $config['upload_url'] =  base_url() . 'upload/galeri/';
            $config['allowed_types'] = "jpg|jpeg|png";
            $config['max_size'] = '2000000';
            $config['file_name'] = $newname;
            $this->load->library('upload', $config);
            move_uploaded_file($tmpname, "upload/galeri/" . $newname);
            return $newname;
        }
    }

    // UPLOAD GALERI
    public function adding()
    {
        $pic = '';

        foreach ($_FILES as $name => $fileInfo) {
            if (!empty($_FILES[$name]['name'])) {
                $newname = $this->upload();
                $data[$name] = $newname;
                $pic = $newname;
            }
        }

        $upload = $input_data['foto'] = $pic;

        $dataGaleri = array(
            'foto' => $upload,
            'status' => $this->input->post('status'),
            'remaks' => $this->input->post('remaks'),
            'created_date' => $this->input->post('created_date')
        );

        $this->db->insert('tbl_gallery', $dataGaleri);
        $this->session->set_flashdata('success', "Data saved successfully!");
        redirect('galeri');
    }

    // UPDATING GALERI
    public function updating()
    {
        $ID = $this->input->post('id_gallery');

        $dataGaleri = array(
            'remaks' => $this->input->post('remaks'),
            'created_date' => $this->input->post('created_date')
        );

        $this->Background_model->update_galeri('tbl_gallery', $dataGaleri, $ID);
        $this->session->set_flashdata('success', "Data saved successfully!");
        redirect('galeri');
    }

    // UPDATE FOTO GALERI
    public function changefoto()
    {
        $pic = '';

        foreach ($_FILES as $name => $fileInfo) {
            if (!empty($_FILES[$name]['name'])) {
                $newname = $this->upload();
                $data[$name] = $newname;
                $pic = $newname;
            }
        }

        $upload = $input_data['foto'] = $pic;

        $ID = $this->input->post('id_gallery');

        $dataGaleri = array(
            'foto' => $upload
        );

        $this->Background_model->update_galeri('tbl_gallery', $dataGaleri, $ID);
        $this->session->set_flashdata('success', "Data saved successfully!");
        redirect('galeri');
    }

    // DELETE DATA
    public function delete()
    {
        $where = $this->input->post('id_gallery');

        $this->Background_model->delete_galeri($where);
        $this->session->set_flashdata('hapus', "Empty");
        redirect('galeri');
    }

    // NON-AKTIF GALERI
    public function nonaktif()
    {
        $ID = $this->input->post('id_gallery');

        $input_data = array(
            'status' => $this->input->post('status')
        );

        $this->Background_model->update_galeri('tbl_gallery', $input_data, $ID);
        $this->session->set_flashdata('nonaktif', "Empty!");
        redirect('galeri');
    }

    // AKTIF GALERI
    public function aktif()
    {
        $ID = $this->input->post('id_gallery');

        $input_data = array(
            'status' => $this->input->post('status')
        );

        $this->Background_model->update_galeri('tbl_gallery', $input_data, $ID);
        $this->session->set_flashdata('aktif', "Empty!");
        redirect('galeri');
    }
}
