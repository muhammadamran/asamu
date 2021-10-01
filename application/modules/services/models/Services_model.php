<?php
class Services_model extends CI_Model
{

    // FUNCTION LIST SERVICES
    public function get_services_thome_count()
    {
        return $this->db->query("SELECT COUNT(*) AS t_title
           FROM tbl_services_home WHERE status='1' ORDER BY id_services_home DESC")->result();
    }

    public function get_services_thome()
    {
        return $this->db->query("SELECT *
           FROM tbl_services_home WHERE status='1' ORDER BY id_services_home DESC")->result_array();
    }

    public function update_services_home($table, $dataHServices, $ID)
    {

        $this->db->where('id_services_home', $ID);
        $this->db->update($table, $dataHServices);
    }

    public function delete_services_home($where)
    {
        $this->db->where_in('id_services_home', $where);
        $this->db->delete('tbl_services_home');
    }

    public function get_list_services()
    {
        return $this->db->query("SELECT *
           FROM tbl_services ORDER BY id_services DESC")->result_array();
    }

    public function update_list_services($table, $dataLServices, $ID)
    {

        $this->db->where('id_services', $ID);
        $this->db->update($table, $dataLServices);
    }

    public function delete_list_services($where)
    {
        $this->db->where_in('id_services', $where);
        $this->db->delete('tbl_services');
    }
    // END FUNCTION LIST SERVICES

    // FUNCTION CONTENT SERVICES
    public function get_content_services()
    {
        return $this->db->query("SELECT *
           FROM tbl_services_dtl AS a 
           LEFT OUTER JOIN tbl_services AS b ON a.id_services=b.id_services
           ORDER BY a.id_services_dtl DESC")->result_array();
    }

    public function get_ls_services()
    {
        return $this->db->query("SELECT *
           FROM tbl_services ORDER BY id_services DESC")->result();
    }

    public function checking_id($in_id)
    {
        return $this->db->query("SELECT id_services
           FROM tbl_services_dtl WHERE id_services='$in_id'")->result();
    }
    // END FUNCTION CONTENT SERVICES
}
