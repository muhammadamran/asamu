<?php
class Master_model extends CI_Model
{

    public function get_data_site()
    {
        return $this->db->query("SELECT * 
           FROM tbl_site 
           WHERE status='1'
           ORDER BY id_site DESC")->result_array();
    }

    public function get_data_about()
    {
        return $this->db->query("SELECT * 
           FROM tbl_about 
           WHERE status='1'
           ORDER BY id_about DESC")->result();
    }

    public function post_data_site()
    {
        return $this->db->query("SELECT * 
           FROM tbl_site 
           WHERE status='1'
           ORDER BY id_site DESC")->result();
    }
}
