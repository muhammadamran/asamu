<?php
class Wpenjemputan_model extends CI_Model {
    
    public function get_data()
    {
        return $this->db->query("SELECT *
           FROM tbl_site ORDER BY id_site DESC")->result();
    }

    public function update_laporan($table,$data,$ID)
    {
        $this->db->where('id_laporan', $ID);
        $this->db->update($table,$data); 
    }

    public function get_jemput($petugas)
    {
        return $this->db->query("SELECT * FROM tbl_laporan WHERE petugas='$petugas' AND status='2' ORDER BY id_laporan ASC")->result_array();
    }

}
?>