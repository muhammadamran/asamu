<?php
defined('BASEPATH') OR exit('No direct script access allowed ');
class Log extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //LOAD MODELS
        $this->load->model('M_notif');
        $this->load->model('Log_model');
    }

    public function index()
	{
		if($this->session->userdata('user_status') == '0') {

            // NOTIF
            $n_user = $this->session->userdata('user_name');
            $n_user_b = $this->session->userdata('user_groups');
            $notif = $this->M_notif->get_jml_notif_md($n_user,$n_user_b);
            $notif_d = $this->M_notif->get_notif_md($n_user,$n_user_b);
            $x['notif'] = $notif[0]->notif;
            $x['notif_d'] = $notif_d;
            // END NOTIF

            $user = $this->session->userdata('user_name');

            $dataLog = $this->Log_model->get_log($user);
            $x['dataLog'] = $dataLog;

			$this->load->view('include/head');
			$this->load->view('include/top-header',$x);
			$this->load->view('include/sidebar');
			$this->load->view('log',$x);
			$this->load->view('include/alert');
			$this->load->view('include/panel');
			$this->load->view('include/footer');
		}else{
			redirect("login");
		}
    }
}
?>