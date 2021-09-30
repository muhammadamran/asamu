<?php
class Master_model extends CI_Model
{

    public function get_data_site()
    {
        return $this->db->query("SELECT * 
           FROM tbl_site 
           WHERE status='1'
           ORDER BY id_site DESC")->result_array();
    }

    // ABOUT US HOME
    public function get_data_about()
    {
        return $this->db->query("SELECT * 
           FROM tbl_about 
           WHERE status='1'
           ORDER BY id_about DESC")->result();
    }

    // OUR PRODUCT HOME
    public function get_data_product()
    {
        return $this->db->query("SELECT * 
           FROM tbl_product 
           WHERE status='1'
           ORDER BY id_product DESC")->result();
    }

    // LIST PRODUCT HOME
    public function get_data_lpproduct()
    {
        return $this->db->query("SELECT *
           FROM tbl_product_list WHERE status='1' ORDER BY id_product_list ASC")->result_array();
    }

    public function get_data_lpproduct_count()
    {
        return $this->db->query("SELECT COUNT(*) AS t_lproduct 
           FROM tbl_product_list 
           WHERE status='1'
           ORDER BY id_product_list DESC")->result();
    }

    public function post_data_site()
    {
        return $this->db->query("SELECT * 
           FROM tbl_site 
           WHERE status='1'
           ORDER BY id_site DESC")->result();
    }
}
