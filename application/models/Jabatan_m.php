<?php

class Jabatan_m extends CI_Model {

  public function get_jabatan($id='', $id_desa='nll') {
    if($id != '') {
      $this->db->where('id', $id);
    }
    if($id_desa != '') {
      $this->db->where('id_desa', $id_desa);
    }

    $this->db->join('desa', 'desa.desa_id = jabatan.id_desa');
    $result = $this->db->get('jabatan');
    return $result;
  }

  public function insert() {
    $post = $this->input->post();

    $data = [
     "nama_jb" => $post['nama'],
     "id_desa" => $post['id_pemerintah'] 
    ];

    $result = $this->db->insert('jabatan', $data);
    return $result;
  }

  public function update() {
    $post = $this->input->post();

    $data = [
      "id" => $post['id'],
      "nama_jb" => $post['nama'],
      "id_desa" => $post['id_pemerintah']
    ];

    $result = $this->db->update('jabatan', $data, array("id" => $post['id']));
    return $result;
  }

  public function delete($id) {
    $result = $this->db->delete('jabatan', array("id" => $id));
    return $result;
  }
}