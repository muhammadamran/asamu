<?php
class Wlapor_model extends CI_Model {

    public function get_data_laporan($pelapor)
    {
        return $this->db->query("SELECT *
           FROM tbl_laporan WHERE pelapor='$pelapor' AND status='1' ORDER BY id_laporan DESC")->result_array();
    }

    public function get_count_laporan($pelapor)
    {
        return $this->db->query("SELECT COUNT(*) AS laporan_a
           FROM tbl_laporan WHERE pelapor='$pelapor' AND status='1' ORDER BY id_laporan DESC")->result();
    }

    public function get_count_proses($pelapor)
    {
        return $this->db->query("SELECT COUNT(*) AS laporan_b
           FROM tbl_laporan WHERE pelapor='$pelapor' AND status='2' ORDER BY id_laporan DESC")->result();
    }

    public function get_count_selesai($pelapor)
    {
        return $this->db->query("SELECT COUNT(*) AS laporan_c
           FROM tbl_laporan WHERE pelapor='$pelapor' AND status='3' ORDER BY id_laporan DESC")->result();
    }

    public function get_data_laporan_list($pelapor)
    {
        return $this->db->query("SELECT *
           FROM tbl_laporan WHERE pelapor='$pelapor' AND status='1' ORDER BY id_laporan DESC")->result();
    }

    public function get_data_laporan_detail($pelapor,$id_laporan)
    {
        return $this->db->query("SELECT *
           FROM tbl_laporan WHERE pelapor='$pelapor' AND id_laporan='$id_laporan' AND status='1' ORDER BY id_laporan DESC")->result();
    }

    public function get_data_laporan_detail_gambar($pelapor,$id_laporan)
    {
        return $this->db->query("SELECT gambar
           FROM tbl_laporan WHERE pelapor='$pelapor' AND id_laporan='$id_laporan' AND status='1' ORDER BY id_laporan DESC")->result_array();
    }

    public function get_data_sampah_list($type)
    {
        return $this->db->query("SELECT * FROM tbl_sampah WHERE jenis_sampah='$type' ORDER BY nama_sampah ASC")->result();
    }

    public function get_user($Cek_username)
    {
        return $this->db->query("SELECT * FROM tbl_members WHERE login='$Cek_username'")->result();
    }
}
?>