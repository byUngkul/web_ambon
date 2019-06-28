<?php
class Desas_m extends CI_Model {

  public function get_all_desas() {
    $query = $this->db->get('desa');
    return $query->result();
  }

  public function get_desa($id) {
    $query = $this->db->get_where('desa', array('desa_id' => $id));
    return $query->row();
  }

  public function insert() {

    $data = array(
      'nama' => $this->input->post('nama'),
      'alamat' => $this->input->post('alamat'),
      'profil' => $this->input->post('profile'),
      'jumlah_laki' => $this->input->post('laki'),
      'jumlah_perempuan' => $this->input->post('perempuan'),
      'url' => $this->input->post('url')
    );

    $result = $this->db->insert('desa', $data);
    return $result;
  }

  public function update() {

    $data = array(
      'desa_id' => $this->input->post('id'),
      'nama' => $this->input->post('nama'),
      'alamat' => $this->input->post('alamat'),
      'profil' => $this->input->post('profile'),
      'jumlah_laki' => $this->input->post('laki'),
      'jumlah_perempuan' => $this->input->post('perempuan'),
      'url' => $this->input->post('url')
    );
    
    $this->db->where('desa_id', $this->input->post('id'));
    $result = $this->db->update('desa', $data);
    return $result;
  }

  public function delete($id) {
    $this->db->where('desa_id', $id);
		$result = $this->db->delete('desa');
		return $result;
  } 
}
