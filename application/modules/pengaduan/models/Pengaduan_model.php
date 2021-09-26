<?php
class Pengaduan_model extends CI_Model {

    public function get_data_laporan()
    {
        return $this->db->query("SELECT *
           FROM tbl_laporan ORDER BY id_laporan DESC")->result_array();
    }

    public function get_data_petugas()
    {
        return $this->db->query("SELECT *
           FROM tbl_users AS a
           LEFT OUTER JOIN tbl_members AS b ON a.id_members=b.id_members WHERE a.role='petugas'
           ORDER BY a.id_members DESC")->result_array();
    }

    public function update_laporan($table,$data,$ID)
    {

        $this->db->where('id_laporan', $ID);
        $this->db->update($table,$data); 
    }

}
?>