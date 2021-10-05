<?php
class Wservices_model extends CI_Model
{

    public function get_slider()
    {
        return $this->db->query("SELECT *
           FROM tbl_sliders ORDER BY id_sliders DESC")->result_array();
    }
}
