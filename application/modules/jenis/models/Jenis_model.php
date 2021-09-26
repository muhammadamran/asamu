<?php
class Jenis_model extends CI_Model {

    public function get_data_jenis()
    {
        return $this->db->query("SELECT *
           FROM tbl_sampah ORDER BY id_sampah DESC")->result_array();
    }

    public function update_jenis($table,$dataJenis,$ID)
    {

        $this->db->where('id_sampah', $ID);
        $this->db->update($table,$dataJenis); 
    }

    public function delete_jenis($where){
        $this->db->where_in('id_sampah', $where);
        $this->db->delete('tbl_sampah');
    }

}
?>