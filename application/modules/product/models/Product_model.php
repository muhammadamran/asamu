<?php
class Product_model extends CI_Model
{

    public function get_data_product()
    {
        return $this->db->query("SELECT *
           FROM tbl_product ORDER BY id_product DESC")->result_array();
    }

    public function checking_status()
    {
        return $this->db->query("SELECT COUNT(*) AS t_status
           FROM tbl_product WHERE status='1'")->result();
    }

    public function update_peoduct($table, $dataProduct, $ID)
    {

        $this->db->where('id_product', $ID);
        $this->db->update($table, $dataProduct);
    }

    public function delete_peoduct($where)
    {
        $this->db->where_in('id_product', $where);
        $this->db->delete('tbl_product');
    }
}
