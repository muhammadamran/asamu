<?php
class Wedukasi_model extends CI_Model {

    public function get_data_edukasi()
    {
        return $this->db->query("SELECT *
           FROM tbl_education WHERE status='1' ORDER BY id_education DESC")->result_array();
    }

	public function get_data_edu($id_education)
	{
		return $this->db->query("SELECT *
           FROM tbl_education WHERE id_education='$id_education' ORDER BY id_education DESC")->result();
	}

	public function get_data_edukasi_galeri($id_education)
	{
		return $this->db->query("SELECT gambar
           FROM tbl_education WHERE id_education='$id_education' ORDER BY id_education DESC")->result_array();
	}

}
?>