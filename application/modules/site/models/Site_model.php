<?php
class Site_model extends CI_Model {

    public function get_data_site()
    {
        return $this->db->query("SELECT * 
           FROM tbl_site 
           WHERE status='1'
           ORDER BY id_site DESC")->result_array();
    }

    public function post_data_site()
    {
        return $this->db->query("SELECT * 
           FROM tbl_site 
           WHERE status='1'
           ORDER BY id_site DESC")->result();
    }

    public function cek_data_site()
    {
        return $this->db->query("SELECT status 
           FROM tbl_site 
           WHERE status='1'
           ORDER BY id_site DESC")->result();
    }

    public function update_site($table,$dataSite,$ID)
    {

        $this->db->where('id_site', $ID);
        $this->db->where('status', '1');
        $this->db->update($table,$dataSite); 
    }

}
