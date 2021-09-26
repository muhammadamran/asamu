<?php
class Edukasi_model extends CI_Model {

    public function get_data_edukasi()
    {
        return $this->db->query("SELECT *
           FROM tbl_education ORDER BY id_education DESC")->result_array();
    }

    public function update_edukasi($table,$dataedukasi,$ID)
    {

        $this->db->where('id_education', $ID);
        $this->db->update($table,$dataedukasi); 
    }

    public function delete_edukasi($where){
        $this->db->where_in('id_education', $where);
        $this->db->delete('tbl_education');
    }

}
?>