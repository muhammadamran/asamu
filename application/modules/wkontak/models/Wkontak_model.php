<?php
class Wkontak_model extends CI_Model {
    
    public function get_data()
    {
        return $this->db->query("SELECT *
           FROM tbl_site ORDER BY id_site DESC")->result();
    }

}
?>