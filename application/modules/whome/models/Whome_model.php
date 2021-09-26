<?php
class Whome_model extends CI_Model {
    
    public function get_data_slider()
    {
        return $this->db->query("SELECT *
           FROM tbl_sliders ORDER BY id_sliders DESC")->result_array();
    }

    public function get_data_edukasi()
    {
        return $this->db->query("SELECT *
           FROM tbl_education WHERE status='1' ORDER BY id_education DESC")->result_array();
    }

    public function get_data_galeri()
    {
        return $this->db->query("SELECT *
           FROM tbl_gallery ORDER BY id_gallery DESC")->result_array();
    }

    public function get_data_edukasi_count()
    {
        return $this->db->query("SELECT COUNT(*) AS total_edukasi
           FROM tbl_education WHERE status='1' ORDER BY id_education DESC")->result();
    }

    public function get_data_pengguna_count()
    {
        return $this->db->query("SELECT COUNT(*) AS total_pengguna
           FROM tbl_members WHERE status='1' ORDER BY id_members DESC")->result();
    }

    public function get_data_laporan_count()
    {
        return $this->db->query("SELECT COUNT(*) AS total_laporan
           FROM tbl_laporan ORDER BY id_laporan DESC")->result();
    }

    public function get_data_anorganik_count()
    {
        return $this->db->query("SELECT COUNT(*) AS total_anorganik
           FROM tbl_laporan WHERE tipe='anorganik' ORDER BY id_laporan DESC")->result();
    }

    public function get_data_organik_count()
    {
        return $this->db->query("SELECT COUNT(*) AS total_organik
           FROM tbl_laporan WHERE tipe='organik' ORDER BY id_laporan DESC")->result();
    }
}
?>