<?php

class Organisasi_m extends CI_Model{
  
  public function get_organ($where = NULL)
  {
    if(!empty($where)){
      $this->db->where('o.id', $where);
    }

    $this->db->select('o.id, o.id_desa, o.id_parent, j.id as id_j, p.id as id_p, p.nama, p.nip, p.tempat_lahir, p.tgl_lahir, p.jenis_kelamin, p.agama, p.pangkat_golongan, p.jabatan, p.telepon, p.image, p.facebook, p.email, p.instagram, j.nama_jb');
		$this->db->join('pegawai p', 'p.id = o.id_p');
		$this->db->join('jabatan j', 'j.id = o.id_j');
		$this->db->join('desa d', 'd.desa_id = o.id_desa');
		$this->db->where('d.is_parent_site', 'yes');
    $result = $this->db->get('organisasi o');
    return $result;
  }

  public function add_item($post)
  {
    $data = [
      'id_parent' => $post['id_parent'],
      'id_j' => $post['id_j'],
      'id_p' => $post['id_peg'],
      'id_desa' => $post['id_pem']
    ];
    return $this->db->insert('organisasi', $data);
  }

  public function update_item($post)
  {
    $data = [
      'id' => $post['id'],
      'id_parent' => $post['id_parent'],
      'id_j' => $post['id_j'],
      'id_p' => $post['id_peg'],
      'id_desa' => $post['id_pem']
    ];
    $this->db->where('id', $post['id']);
    return $this->db->update('organisasi', $data);
  }
}
