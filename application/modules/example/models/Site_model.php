<?php
class Site_model extends CI_Model {

    public function get_data_site()
    {
        return $this->db->query("SELECT * 
                                 FROM tbl_site 
                                 ORDER BY id_site DESC")->result_array();
    }

    public function cek_data_site()
    {
        return $this->db->query("SELECT status 
                                 FROM tbl_site 
                                 WHERE status='1'
                                 ORDER BY id_site DESC")->result();
    }

}
?>