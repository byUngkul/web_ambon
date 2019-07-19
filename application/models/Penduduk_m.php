<?php

class Penduduk_m extends CI_Model {

  public function get_data($desa_id = NULL, $tl_key = NULL, $tl = NULL,  $group = NULL)
  {
    if (!empty($tl)) {
      $this->db->select($tl);
    }

    $this->db->join('kependudukan_vl vl', 'kl.id = vl.kl_id');
    $this->db->join('kependudukan_tl tl', 'tl.tl_id = vl.tl_id');
    
    if (!empty($desa_id)) {
      $this->db->where('tl.id_desa', $desa_id);
      $this->db->where('kl.id_desa', $desa_id);
    }

    if (!empty($tl_key)) {
      $this->db->where('tl.tl_key', $tl_key);
    }

    if (!empty($group)) {
      $this->db->group_by($group);
    }
    $this->db->order_by('vl.id', 'asc');
    
    $query = $this->db->get('kependudukan_kl kl');
    return $query;        
  }

  public function get_kateg($group = NULL, $where = NULL, $where2 = NULL, $desa_id = NULL)
  { 
    
    if (!empty($group)) {  
      $this->db->group_by($group);
    } elseif (!empty($desa_id)) {
      $this->db->join('kependudukan_kl kl', 'kl.tl_key = tl.tl_key');
      $this->db->where('tl.id_desa', $desa_id);
      $this->db->where('kl.id_desa', $desa_id);
    } else {
      $this->db->select('tl.tl_key, tl.tl_text, kl.tl_key, kl.kl_text, tl.id_desa, kl.id_desa');
      $this->db->join('kependudukan_kl kl', 'kl.tl_key = tl.tl_key');
      $this->db->group_by('kl.kl_text');
      // $this->db->where('kl.tl_key', $where);
      $this->db->order_by('kl.id', 'asc');
      if (empty($where)) {
        $this->db->where('kl.kl_text', $where2);
      } else {
        $this->db->where('tl.tl_key', $where);
      }         
    }

    return $this->db->get('kependudukan_tl tl');
  }

  public function get_tlAll()
  {
    $this->db->where('id_desa', '1');
    // $this->db->where('tl_key', 'pendidikan');
    $query = $this->db->get('kependudukan_tl');
    return $query;
  }

  public function insert_kateg($desa_id, $post)
  {
    $tl_text = "Rentan Usia";
    $tl_key = "umur";
    $data = array();

    foreach($desa_id as $desaid) {
      array_push($data, array(
        "id_desa" => $desaid,
        "tl_text" => $post["tl_text"],
        "tl_key" => $post["tl_key"]
      ));
    }
    // var_dump($data);
    return $this->db->insert_batch('kependudukan_tl', $data);
  }

  public function update_kateg($desa_id, $post)
  {
    $data = array();

    foreach($desa_id as $desaid) {
      array_push($data, array(
        // "id_desa" => $desaid,
        "tl_text" => $post["tl_text"],
        "tl_key" => $post["tl_key"]
      ));
    }
    // var_dump($data);
    return $this->db->update_batch('kependudukan_tl', $data, 'tl_key');
  }

  public function delete_kateg($param)
  {
    return $this->db->delete('kependudukan_tl', array('tl_key' => $param));
  }

  public function insert_jkateg($desa_id, $post)
  {
    $data = array();

    foreach($desa_id as $desaid) {
      array_push($data, array(
        "id_desa" => $desaid,
        "kl_text" => $post["kl_text"],
        "tl_key" => $post["tl_key"]
      ));
    }
    // var_dump($data);
    return $this->db->insert_batch('kependudukan_kl', $data);
  }

  public function update_jkteg($klid, $post)
  {
    $data = array();

    foreach($klid as $id) {
      array_push($data, array(
        "id" => $id,
        "kl_text" => $post["kl_text"]
      ));
    }
    // var_dump($data);
    return $this->db->update_batch('kependudukan_kl', $data, 'id');
  }

  public function update_val($post)
  {
    $data = [
      'id' => $post['kl_id'],
      'laki' => $post['laki'],
      'perempuan' => $post['perempuan'],
      'total' => $post['total']
    ];
    // var_dump($data);
    $this->db->where('id', $post['kl_id']);
    return $this->db->update('kependudukan_kl', $data);
  }
}