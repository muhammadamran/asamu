<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //LOAD MODELS
        $this->load->model('Product_model');
        $this->load->model('Master_model');
    }

    public function index()
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

            // DATA PRODUCT
            $get_data = $this->Product_model->get_data_product();
            $value['data_product'] = $get_data;
            // END DATA PRODUCT

            $this->load->view('include/head', $value);
            $this->load->view('include/top-header', $value);
            $this->load->view('include/alert');
            $this->load->view('product', $value);
            $this->load->view('include/sidebar', $value);
            $this->load->view('include/footer', $value);
        }
    }

    // ADD PRODUCT
    public function adding()
    {
        $get_status = $this->Product_model->checking_status();
        $check_status = $value['t_status'] = $get_status[0]->t_status;

        if ($check_status == '0') {
            $dataProduct = array(
                'title_one' => $this->input->post('title_one'),
                'title_two' => $this->input->post('title_two'),
                'detail' => $this->input->post('detail'),
                'created_date' => $this->input->post('created_date'),
                'created_by' => $this->input->post('created_by'),
                'status' => '1'
            );

            $this->db->insert('tbl_product', $dataProduct);
            $this->session->set_flashdata('success', "Data saved successfully!");
            redirect('product');
        } else {
            $this->session->set_flashdata('any_data', "Data saved successfully!");
            redirect('product');
        }
    }

    // UPDATING PRODUCT
    public function updating()
    {
        $ID = $this->input->post('id_about');

        $dataProduct = array(
            'title' => $this->input->post('title'),
            'detail' => $this->input->post('detail'),
            'created_date' => $this->input->post('created_date')
        );

        $this->Product_model->update_about('tbl_product', $dataProduct, $ID);
        $this->session->set_flashdata('success', "Data saved successfully!");
        redirect('product');
    }

    // DELETE DATA
    public function delete()
    {
        $where = $this->input->post('id_about');

        $this->Product_model->delete_about($where);
        $this->session->set_flashdata('deletes', "Empty");
        redirect('product');
    }

    // NON-ACTIVE PRODUCT
    public function nonactive()
    {
        $ID = $this->input->post('id_about');

        $input_data = array(
            'status' => $this->input->post('status')
        );

        $this->Product_model->update_about('tbl_product', $input_data, $ID);
        $this->session->set_flashdata('nonactive', "Empty!");
        redirect('product');
    }

    // ACTIVE PRODUCT
    public function active()
    {
        $ID = $this->input->post('id_about');
        $get_status = $this->Product_model->checking_status();
        $check_status = $value['t_status'] = $get_status[0]->t_status;

        if ($check_status == '0') {
            $input_data = array(
                'status' => $this->input->post('status')
            );

            $this->Product_model->update_about('tbl_product', $input_data, $ID);
            $this->session->set_flashdata('active', "Empty!");
            redirect('product');
        } else {
            $this->session->set_flashdata('any_data', "Data saved successfully!");
            redirect('product');
        }
    }
}
