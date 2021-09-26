<?php
class Slider_model extends CI_Model {

    public function get_data_slider()
    {
        return $this->db->query("SELECT *
           FROM tbl_sliders ORDER BY id_sliders DESC")->result_array();
    }

    public function update_slider($table,$dataSlider,$ID)
    {

        $this->db->where('id_sliders', $ID);
        $this->db->update($table,$dataSlider); 
    }

    public function delete_slider($where){
        $this->db->where_in('id_sliders', $where);
        $this->db->delete('tbl_sliders');
    }

}
?>