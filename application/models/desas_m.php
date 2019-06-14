<?php
class Desas_m extends CI_Model {

  public function get_all_desas() {
    $query = $this->db->get('desa');
    return $query->result();
  }
}
