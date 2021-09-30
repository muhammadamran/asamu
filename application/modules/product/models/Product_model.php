<?php
class Product_model extends CI_Model
{
    // PRODUCT
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

    public function update_product($table, $dataProduct, $ID)
    {

        $this->db->where('id_product', $ID);
        $this->db->update($table, $dataProduct);
    }

    public function delete_product($where)
    {
        $this->db->where_in('id_product', $where);
        $this->db->delete('tbl_product');
    }
    // END PRODUCT

    // LIST PRODUCT
    public function get_data_lproduct()
    {
        return $this->db->query("SELECT *
           FROM tbl_product_list ORDER BY id_product_list DESC")->result_array();
    }

    public function checking_lstatus()
    {
        return $this->db->query("SELECT COUNT(*) AS t_status
           FROM tbl_product_list WHERE status='1'")->result();
    }

    public function update_lproduct($table, $dataProductList, $ID)
    {

        $this->db->where('id_product_list', $ID);
        $this->db->update($table, $dataProductList);
    }

    public function delete_lproduct($where)
    {
        $this->db->where_in('id_product_list', $where);
        $this->db->delete('tbl_product_list');
    }
    // END LIST PRODUCT
}
