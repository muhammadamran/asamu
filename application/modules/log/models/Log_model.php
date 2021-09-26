<?php
class Log_model extends CI_Model {

    public function get_log($user)
    {
        return $this->db->query("SELECT * FROM simak_trn_log WHERE user_name='$user' ORDER BY id DESC")->result_array();
      }
}
?>