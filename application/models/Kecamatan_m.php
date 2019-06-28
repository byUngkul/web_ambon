<?php

class Kecamatan_m extends CI_Model {
  
  public function get_data() {
    $query = $this->db->get('prof_kecamatan');

    return $query->row();
  }
}