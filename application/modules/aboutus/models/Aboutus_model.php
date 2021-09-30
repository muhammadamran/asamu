<?php
class Aboutus_model extends CI_Model
{

    public function get_data_about()
    {
        return $this->db->query("SELECT *
           FROM tbl_about ORDER BY id_about DESC")->result_array();
    }

    public function checking_status()
    {
        return $this->db->query("SELECT COUNT(*) AS t_status
           FROM tbl_about WHERE status='1'")->result();
    }

    public function update_about($table, $dataAbout, $ID)
    {

        $this->db->where('id_about', $ID);
        $this->db->update($table, $dataAbout);
    }

    public function delete_about($where)
    {
        $this->db->where_in('id_about', $where);
        $this->db->delete('tbl_about');
    }
}
