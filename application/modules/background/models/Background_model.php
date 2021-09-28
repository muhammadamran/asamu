<?php
class Background_model extends CI_Model
{

    public function get_data_galeri()
    {
        return $this->db->query("SELECT *
           FROM tbl_gallery ORDER BY id_gallery DESC")->result_array();
    }

    public function update_galeri($table, $dataGaleri, $ID)
    {

        $this->db->where('id_gallery', $ID);
        $this->db->update($table, $dataGaleri);
    }

    public function delete_galeri($where)
    {
        $this->db->where_in('id_gallery', $where);
        $this->db->delete('tbl_gallery');
    }
}
