<?php
class Wprofile_model extends CI_Model {

	public function update_members($table,$dataMembers,$ID)
	{

		$this->db->where('login', $ID);
		$this->db->update($table,$dataMembers); 
	}

    public function get_total_saldo($pelapor)
    {
        return $this->db->query("SELECT SUM(harga_sampah) AS total_saldo FROM tbl_laporan WHERE pelapor='$pelapor' AND status='1' ORDER BY id_laporan DESC")->result();
    }

    public function get_list_saldo($pelapor)
    {
        return $this->db->query("SELECT * FROM tbl_laporan WHERE pelapor='$pelapor' AND status='1' ORDER BY id_laporan DESC")->result_array();
    }
}
?>