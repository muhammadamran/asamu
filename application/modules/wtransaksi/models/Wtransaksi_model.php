<?php
class Wtransaksi_model extends CI_Model {
    
    public function get_data()
    {
        return $this->db->query("SELECT *
           FROM tbl_site ORDER BY id_site DESC")->result();
    }

    public function get_saldo_tarik($pelapor)
    {
        return $this->db->query("SELECT SUM(nominal) as penarikan FROM tbl_cashflow_withdraw WHERE pelapor='$pelapor' AND status='3' ORDER BY id_withdraw ASC")->result();
    }

    public function get_saldo($pelapor)
    {
        return $this->db->query("SELECT SUM(nominal_cashflow) as saldo FROM tbl_cashflow_user WHERE pelapor='$pelapor' AND tipe_cashflow='in' ORDER BY id_cashflow ASC")->result();
    }

    public function get_transaksi($pelapor)
    {
        return $this->db->query("SELECT * FROM tbl_laporan WHERE pelapor='$pelapor' ORDER BY id_laporan ASC")->result_array();
    }

    public function get_cashflow($pelapor)
    {
        return $this->db->query("SELECT * FROM tbl_cashflow_user WHERE pelapor='$pelapor' ORDER BY id_cashflow ASC")->result_array();
    }

    public function get_tarik($pelapor)
    {
        return $this->db->query("SELECT * FROM tbl_cashflow_withdraw WHERE pelapor='$pelapor' ORDER BY id_withdraw ASC")->result_array();
    }

}
?>