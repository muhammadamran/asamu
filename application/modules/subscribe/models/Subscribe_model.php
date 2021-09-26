<?php
class Subscribe_model extends CI_Model {

    public function get_data_subscribe()
    {
        return $this->db->query("SELECT * 
            FROM tbl_subscribe 
            ORDER BY id_subscribe DESC")->result_array();
    }

    public function get_email($Cek_email)
    {
        return $this->db->query("SELECT * FROM tbl_subscribe
            WHERE email='$Cek_email'")->result();
    }
}
?>