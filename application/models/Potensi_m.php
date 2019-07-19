<?php

class Potensi_m extends CI_Model{
  public function get_potensi($desa_id = NULL, $id_jp = NULL, $id_potensi = NULL)
  {
    $this->db->select('p.*, j.nama as nama_jp, d.desa_id, d.nama, d.slug');
    $this->db->join('jenis_potensi j', 'j.id_jp = p.id_jp');
    $this->db->join('desa d', 'd.desa_id = p.id_desa');
    if (!empty($desa_id)) {
      $this->db->where('p.id_desa', $desa_id);
    }
    if (!empty($id_jp)) {
      $this->db->where('p.id_jp', $id_jp);
    }
    if (!empty($id_potensi)) {
      $this->db->where('p.id', $id_potensi);
    }
    $result = $this->db->get('potensi_v p');
    return $result;    
  }

  public function get_j_potensi()
  {
    $result = $this->db->get('jenis_potensi');
    return $result;
  }

  public function add_j_potensi()
  {
    $data["nama"] = $this->input->post("jenis_potensi");
    $result = $this->db->insert('jenis_potensi', $data);
    
    return $result;
  }

  public function add_potensi($post)
  {
    $data = [
      "id_jp" => $post["j_potensi"],
      "id_desa" => $post["desa_id"],
      "nama_p" => $post["nama_potensi"]
    ];

    $result = $this->db->insert('potensi_v', $data);
    return $result;
  }

  public function update_potensi($post)
  {
    $data = [
      "id" => $post["id_potensi"],
      "nama_p" => $post["nama_potensi"]
    ];
    // var_dump($data);
    $result = $this->db->update('potensi_v', $data, array('id' => $post["id_potensi"]));
    return $result;
  }

  public function delete_potensi($id)
	{
		$result = $this->db->delete('potensi_v', array('id' => $id));
		return $result;
	}
}
