<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sliders extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //LOAD MODELS
        $this->load->model('Sliders_model');
    }

    public function index()
    {
        $user = $this->session->userdata('username');
        if ($user == NULL) {
            $this->session->set_flashdata('n_session', "Empty");
            redirect('login');
        } else {
            // DATA SLIDERS
            $get_data = $this->Sliders_model->get_data_sliders();
            $value['data_sliders'] = $get_data;

            $this->load->view('include/head');
            $this->load->view('include/top-header');
            $this->load->view('include/alert');
            $this->load->view('sliders', $value);
            $this->load->view('include/sidebar');
            $this->load->view('include/footer');
        }
        // END DATA SLIDER
    }

    // FUNCTION UPLOAD
    public function upload()
    {
        foreach ($_FILES as $name => $fileInfo) {
            $filename = $_FILES[$name]['name'];
            $tmpname = $_FILES[$name]['tmp_name'];
            $exp = explode('.', $filename);
            $ext = end($exp);
            $newname = 'sliders_' . time() . "." . $ext;
            $config['upload_path'] = './modes/images/sliders/';
            $config['upload_url'] =  base_url() . 'modes/images/sliders/';
            $config['allowed_types'] = "jpg|jpeg|png";
            $config['max_size'] = '2000000';
            $config['file_name'] = $newname;
            $this->load->library('upload', $config);
            move_uploaded_file($tmpname, "modes/images/sliders/" . $newname);
            return $newname;
        }
    }

    // UPLOAD SLIDERS
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

        $upload = $input_data['photo'] = $pic;

        $dataSlider = array(
            'photo' => $upload,
            'slogan_one' => $this->input->post('slogan_one'),
            'slogan_two' => $this->input->post('slogan_two'),
            'status' => $this->input->post('status'),
            'remaks' => $this->input->post('remaks'),
            'created_date' => $this->input->post('created_date')
        );

        $this->db->insert('tbl_sliders', $dataSlider);
        $this->session->set_flashdata('success', "Data saved successfully!");
        redirect('sliders');
    }

    // UPDATING SLIDERS
    public function updating()
    {
        $ID = $this->input->post('id_sliders');

        $dataSlider = array(
            'slogan_one' => $this->input->post('slogan_one'),
            'slogan_two' => $this->input->post('slogan_two'),
            'remaks' => $this->input->post('remaks'),
            'created_date' => $this->input->post('created_date')
        );

        $this->Sliders_model->update_sliders('tbl_sliders', $dataSlider, $ID);
        $this->session->set_flashdata('success', "Data saved successfully!");
        redirect('sliders');
    }

    // UPDATE PHOTO SLIDERS
    public function changephoto()
    {
        $pic = '';

        foreach ($_FILES as $name => $fileInfo) {
            if (!empty($_FILES[$name]['name'])) {
                $newname = $this->upload();
                $data[$name] = $newname;
                $pic = $newname;
            }
        }

        $upload = $input_data['photo'] = $pic;

        $ID = $this->input->post('id_sliders');

        $dataSlider = array(
            'photo' => $upload
        );

        $this->Sliders_model->update_sliders('tbl_sliders', $dataSlider, $ID);
        $this->session->set_flashdata('success', "Data saved successfully!");
        redirect('sliders');
    }

    // DELETE DATA
    public function delete()
    {
        $where = $this->input->post('id_sliders');

        $this->Sliders_model->delete_sliders($where);
        $this->session->set_flashdata('deletes', "Empty");
        redirect('sliders');
    }

    // NON-ACTIVE SLIDERS
    public function nonactive()
    {
        $ID = $this->input->post('id_sliders');

        $input_data = array(
            'status' => $this->input->post('status')
        );

        $this->Sliders_model->update_sliders('tbl_sliders', $input_data, $ID);
        $this->session->set_flashdata('nonactive', "Empty!");
        redirect('sliders');
    }

    // ACTIVE SLIDERS
    public function active()
    {
        $ID = $this->input->post('id_sliders');

        $input_data = array(
            'status' => $this->input->post('status')
        );

        $this->Sliders_model->update_sliders('tbl_sliders', $input_data, $ID);
        $this->session->set_flashdata('active', "Empty!");
        redirect('sliders');
    }
}
