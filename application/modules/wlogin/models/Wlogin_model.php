<?php
class Wlogin_model extends CI_Model {

    public function cek_login($table,$data)
    {      
        $query = $this->db->get_where($table,$data);

        if ($query->num_rows() == 1) {
            return $query->row();
        }else{
            return false;
        }
    }

    public function get_employees($username)
    {
        return $this->db->query("SELECT * FROM tbl_members
            WHERE login='$username' AND status='1'")->result();
    }

    public function get_email($Cek_email)
    {
        return $this->db->query("SELECT * FROM tbl_members
            WHERE email='$Cek_email'")->result();
    }

    public function get_username($Cek_username)
    {
        return $this->db->query("SELECT * FROM tbl_members
            WHERE login='$Cek_username'")->result();
    }

    public function input_log($table, $data)
    {
        $this->db->insert($table,$data);
    }

    public function post_data_site()
    {
        return $this->db->query("SELECT * 
            FROM tbl_site 
            WHERE status='1'
            ORDER BY id_site DESC")->result();
    }
}
?>