<?php
class Users_model extends CI_Model
{

    public function get_data_users()
    {
        return $this->db->query("SELECT *
           FROM tbl_users AS a
           LEFT OUTER JOIN tbl_employee AS b ON a.id_employee=b.id_employee
           ORDER BY a.id_employee DESC")->result_array();
    }

    public function get_email($Cek_email)
    {
        return $this->db->query("SELECT * FROM tbl_employee
            WHERE email='$Cek_email'")->result();
    }

    public function get_username($Cek_username)
    {
        return $this->db->query("SELECT * FROM tbl_employee
            WHERE login='$Cek_username'")->result();
    }

    public function update_site($table, $dataSite, $ID)
    {

        $this->db->where('id_site', $ID);
        $this->db->where('status', '1');
        $this->db->update($table, $dataSite);
    }

    public function update_password($table, $input_data, $where)
    {

        $this->db->where('username', $where);
        $this->db->update($table, $input_data);
    }

    public function update_status_u($table, $input_data, $where)
    {

        $this->db->where('username', $where);
        $this->db->update($table, $input_data);
    }

    public function update_status_m($table, $input_data, $where)
    {

        $this->db->where('login', $where);
        $this->db->update($table, $input_data);
    }

    public function delete_tbl_users($username)
    {
        $this->db->where_in('username', $username);
        $this->db->delete('tbl_users');
    }

    public function delete_tbl_employee($username)
    {
        $this->db->where_in('login', $username);
        $this->db->delete('tbl_employee');
    }
}
