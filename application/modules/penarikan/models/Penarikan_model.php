<?php
class Penarikan_model extends CI_Model {

    public function get_data_withdraw()
    {
        return $this->db->query("SELECT * FROM tbl_cashflow_withdraw ORDER BY id_withdraw DESC")->result_array();
    }

    public function update_withdraw($table,$data,$ID)
    {
        $this->db->where('id_withdraw', $ID);
        $this->db->update($table,$data); 
    }
}
?>