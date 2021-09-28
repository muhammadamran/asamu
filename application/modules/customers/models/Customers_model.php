<?php
class Customers_model extends CI_Model
{

    public function get_data_Customers()
    {
        return $this->db->query("SELECT * 
            FROM tbl_customers 
            ORDER BY id_customers DESC")->result_array();
    }

    public function get_email($Cek_email)
    {
        return $this->db->query("SELECT * FROM tbl_customers
            WHERE email='$Cek_email'")->result();
    }
}
