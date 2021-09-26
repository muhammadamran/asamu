<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slider extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //LOAD MODELS
        $this->load->model('Slider_model');
    }

    public function index()
    {
        $user = $this->session->userdata('username');
        if ($user == NULL ) {
            $this->session->set_flashdata('n_session', "Empty");
            redirect('login');
        } else {
        // DATA SLIDER
            $get_data = $this->Slider_model->get_data_slider();
            $value['data_slider'] = $get_data; 
            
            $this->load->view('include/head');
            $this->load->view('include/top-header');
            $this->load->view('include/alert');
            $this->load->view('slider',$value);
            $this->load->view('include/sidebar');
            $this->load->view('include/footer');
        }
        // END DATA SLIDER
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
			$newname= 'slider_'.time().".".$ext; 
			$config['upload_path'] = './upload/slider/';
			$config['upload_url'] =  base_url().'upload/slider/';
			$config['allowed_types'] = "jpg|jpeg|png";
			$config['max_size'] = '2000000';
			$config['file_name'] = $newname;
			$this->load->library('upload', $config);
			move_uploaded_file($tmpname,"upload/slider/".$newname);
			return $newname;
		}
	}

	// UPLOAD SLIDER
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

		$upload = $input_data['foto'] = $pic;

		$dataSlider = array(
			'foto' => $upload,
            'slogan_one' => $this->input->post('slogan_one'),
            'slogan_two' => $this->input->post('slogan_two'),
			'status' => $this->input->post('status'),
			'remaks' => $this->input->post('remaks'),
			'created_date' => $this->input->post('created_date')
		);

			$this->db->insert('tbl_sliders', $dataSlider);
			$this->session->set_flashdata('success', "Data saved successfully!");
			redirect('slider');
	}
    
    // UPDATING SLIDER
    public function updating()
    {
        $ID = $this->input->post('id_sliders');

        $dataSlider = array(
            'slogan_one' => $this->input->post('slogan_one'),
            'slogan_two' => $this->input->post('slogan_two'),
            'remaks' => $this->input->post('remaks'),
            'created_date' => $this->input->post('created_date')
        );

        $this->Slider_model->update_slider('tbl_sliders', $dataSlider,$ID);
        $this->session->set_flashdata('success', "Data saved successfully!");
        redirect('slider');
    }

	// UPDATE FOTO SLIDER
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

        $ID = $this->input->post('id_sliders');

        $dataSlider = array(
            'foto' => $upload
        );

        $this->Slider_model->update_slider('tbl_sliders', $dataSlider,$ID);
        $this->session->set_flashdata('success', "Data saved successfully!");
        redirect('slider');
    }

    // DELETE DATA
    public function delete()
	{
		$where = $this->input->post('id_sliders ');

		$this->Slider_model->delete_SLIDER($where);
        $this->session->set_flashdata('hapus', "Empty");
        redirect('slider');
	}

    // NON-AKTIF SLIDER
    public function nonaktif()
    {
        $ID = $this->input->post('id_sliders');

        $input_data = array(
            'status' => $this->input->post('status')
        );

        $this->Slider_model->update_slider('tbl_sliders', $input_data,$ID);
        $this->session->set_flashdata('nonaktif', "Empty!");
        redirect('slider');
    }

    // AKTIF SLIDER
    public function aktif()
    {
        $ID = $this->input->post('id_sliders');

        $input_data = array(
            'status' => $this->input->post('status')
        );

        $this->Slider_model->update_slider('tbl_sliders', $input_data,$ID);
        $this->session->set_flashdata('aktif', "Empty!");
        redirect('slider');
    }

}