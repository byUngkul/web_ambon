<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pelayanan_m extends CI_Model {
  
  public function get_data($id = NULL, $is_parent = NULL, $j_pelayanan = NULL, $id_desa= NULL)
  {
    if (isset($id)) {
      $this->db->where('pl.id', $id);
    }
    if (isset($is_parent)){
      $this->db->where('d.is_parent_site', $is_parent);
    }
    if (isset($j_pelayanan)){
      $this->db->where('pl.jenis_pelayanan', $j_pelayanan);
    }
    if ($id_desa != ''){
      $this->db->where('pl.id_pemerintah', $id_desa);
    }
    $this->db->join('desa d', 'd.desa_id = pl.id_pemerintah');
    $result = $this->db->get('pelayanan pl');
    return $result;
  }

  public function add($post)
  {
    $data = [
      'id_pemerintah' => $post["desa_id"],
      'title' => $post["title"],
      'jenis_pelayanan' => $post["jenis_pelayanan"],
      'deskripsi' => $post["deskripsi"]
    ];

    return $this->db->insert('pelayanan', $data);
  }

  public function update($post)
  {
    $data = [
      'id_pemerintah' => $post["desa_id"],
      'title' => $post["title"],
      'jenis_pelayanan' => $post["jenis_pelayanan"],
      'deskripsi' => $post["deskripsi"]
    ];
    $this->db->where('id', $post["id"]);
    return $this->db->update('pelayanan', $data);
  }

  public function delete($id)
  {
    return $this->db->delete('pelayanan', array('id'=>$id));
  }
}
