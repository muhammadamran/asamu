<?php
class Whome_model extends CI_Model
{

    public function get_count_slider()
    {
        return $this->db->query("SELECT COUNT(*) as total_slider FROM tbl_sliders WHERE status='1' ORDER BY id_sliders ASC")->result();
    }

    public function get_first_slider()
    {
        return $this->db->query("SELECT * FROM tbl_sliders WHERE status='1' ORDER BY id_sliders ASC LIMIT 1")->result();
    }

    public function get_sliders()
    {
        return $this->db->query("SELECT *
           FROM tbl_sliders WHERE status='1' ORDER BY id_sliders ASC")->result_array();
    }
}
