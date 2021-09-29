<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Services extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //LOAD MODELS
        $this->load->model('Services_model');
        $this->load->model('Master_model');
    }

    // FUNCTION LIST SERVICES IN HERE
    // LIST SERVICES
    public function services_list()
    {
        $user = $this->session->userdata('username');
        if ($user == NULL) {
            $this->session->set_flashdata('n_session', "Empty");
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

            // DATA SERVICES LIST
            $get_list_services = $this->Services_model->get_list_services();
            $value['list_services'] = $get_list_services;
            // END DATA SERVICES LIST

            $this->load->view('include/head', $value);
            $this->load->view('include/top-header', $value);
            $this->load->view('include/alert');
            $this->load->view('list', $value);
            $this->load->view('include/sidebar', $value);
            $this->load->view('include/footer', $value);
        }
        // END DATA SLIDER
    }

    // ADDING LIST SERVICES
    public function addinglservices()
    {
        $dataLServices = array(
            'name_services' => $this->input->post('name_services'),
            'slogan' => $this->input->post('slogan')
        );

        $this->db->insert('tbl_services', $dataLServices);
        $this->session->set_flashdata('success', "Data saved successfully!");
        redirect('services/services_list');
    }

    // UPDATING LIST SERVICES
    public function updatinglservices()
    {
        $ID = $this->input->post('id_services');

        $dataLServices = array(
            'name_services' => $this->input->post('name_services'),
            'slogan' => $this->input->post('slogan')
        );

        $this->Services_model->update_list_services('tbl_services', $dataLServices, $ID);
        $this->session->set_flashdata('success', "Data saved successfully!");
        redirect('services/services_list');
    }

    // DELETE LIST SERVICES
    public function deletelservices()
    {
        $where = $this->input->post('id_services');

        $this->Services_model->delete_list_services($where);
        $this->session->set_flashdata('deletes', "Empty");
        redirect('services/services_list');
    }
    // END FUNCTION LIST SERVICES IN HERE

    // FUNCTION CONTENT SERVICES IN HERE
    // CONTENT SERVICES
    public function services_content()
    {
        $user = $this->session->userdata('username');
        if ($user == NULL) {
            $this->session->set_flashdata('n_session', "Empty");
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

            // DATA SERVICES LIST
            $value['list_services'] = $this->Services_model->get_ls_services();
            // END DATA SERVICES LIST

            // DATA SERVICES CONTENT
            $get_content_services = $this->Services_model->get_content_services();
            $value['content_services'] = $get_content_services;
            // END DATA SERVICES CONTENT

            $this->load->view('include/head', $value);
            $this->load->view('include/top-header', $value);
            $this->load->view('include/alert');
            $this->load->view('content', $value);
            $this->load->view('include/sidebar', $value);
            $this->load->view('include/footer', $value);
        }
    }

    // FUNCTION UPLOAD PHOTO
    public function uploadphoto()
    {
        foreach ($_FILES as $name => $fileInfo) {
            $filename = $_FILES[$name]['name'];
            $tmpname = $_FILES[$name]['tmp_name'];
            $exp = explode('.', $filename);
            $ext = end($exp);
            $newnamephoto = 'photo_' . time() . "." . $ext;
            $config['upload_path'] = './modes/images/services/photo/';
            $config['upload_url'] =  base_url() . 'modes/images/services/photo/';
            $config['allowed_types'] = "jpg|jpeg|png";
            $config['max_size'] = '2000000';
            $config['file_name'] = $newnamephoto;
            $this->load->library('upload', $config);
            move_uploaded_file($tmpname, "modes/images/services/photo/" . $newnamephoto);
            return $newnamephoto;
        }
    }

    // FUNCTION UPLOAD ICON
    public function uploadicon()
    {
        foreach ($_FILES as $name => $fileInfo) {
            $filename = $_FILES[$name]['name'];
            $tmpname = $_FILES[$name]['tmp_name'];
            $exp = explode('.', $filename);
            $ext = end($exp);
            $newnameicon = 'icon_' . time() . "." . $ext;
            $config['upload_path'] = './modes/images/services/icon/';
            $config['upload_url'] =  base_url() . 'modes/images/services/icon/';
            $config['allowed_types'] = "jpg|jpeg|png";
            $config['max_size'] = '2000000';
            $config['file_name'] = $newnameicon;
            $this->load->library('upload', $config);
            move_uploaded_file($tmpname, "modes/images/services/icon/" . $newnameicon);
            return $newnameicon;
        }
    }

    // ADDING CONTENT SERVICES
    public function addingcservices()
    {
        $picphoto = '';
        $picicon = '';

        foreach ($_FILES as $name => $fileInfo) {
            if (!empty($_FILES[$name]['name'])) {
                $newnamephoto = $this->uploadphoto();
                $data[$name] = $newnamephoto;
                $picphoto = $newnamephoto;
            }
        }

        foreach ($_FILES as $name => $fileInfo) {
            if (!empty($_FILES[$name]['name'])) {
                $newnameicon = $this->uploadicon();
                $data[$name] = $newnameicon;
                $picicon = $newnameicon;
            }
        }

        $uploadphoto = $input_photo['photo'] = $picphoto;
        $uploadicon = $input_icon['icon'] = $picicon;

        $in_id = $this->input->post('id_services');
        $get_id_list = $this->Services_model->checking_id($in_id);

        if ($get_id_list == NULL) {
            $dataCServices = array(
                'photo' => $uploadphoto,
                // 'icon' => $uploadicon,
                'id_services' => $this->input->post('id_services'),
                'detail' => $this->input->post('detail'),
                'created_date' => $this->input->post('created_date'),
                'created_by' => $this->input->post('created_by'),
                'status' => '1'
            );

            $this->db->insert('tbl_services_dtl', $dataCServices);
            $this->session->set_flashdata('success', "Data saved successfully!");
            redirect('services/services_content');
        } else {
            $this->session->set_flashdata('any_data', "Data saved successfully!");
            redirect('services/services_content');
        }
    }
    // END FUNCTION CONTENT SERVICES IN HERE

}
