<?php 
class Others_model extends CI_Model{
	
    public function jml_sks_mr($user)
    {

        return $this->db->query("SELECT SUM(SKS) AS jml_sks_mr FROM simak_trn_pengajuan WHERE MhswID='$user' AND jenis='1'")->result();
    }
    
    public function jml_sks_mr_blm_sb($user)
    {

        return $this->db->query("SELECT SUM(SKS) AS jml_sks_mr_blm_sb FROM simak_trn_pengajuan WHERE MhswID='$user' AND jenis='1' AND submit!='submit'")->result();
    }

    public function jml_sks_mr_sb($user)
    {

        return $this->db->query("SELECT SUM(SKS) AS jml_sks_mr_sb FROM simak_trn_pengajuan WHERE MhswID='$user' AND jenis='1' AND submit='submit'")->result();

    }

    public function jml_sks_sp($user)
    {

        return $this->db->query("SELECT SUM(SKS) AS jml_sks_sp FROM simak_trn_pengajuan WHERE MhswID='$user' AND jenis='2'")->result();

    }
    

}