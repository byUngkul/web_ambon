<?php

class Galery_m extends CI_Model {
  
  public function get_all_galery() {
    $this->db->select('galleri.*, desa.desa_id, desa.nama as nama_desa');
    $this->db->join('desa', 'desa.desa_id = galleri.desa_id');
    $query = $this->db->get('galleri');
    return $query->result();
  }

  public function get_galery($id) {
    $query = $this->db->get_where('galleri', array('id' => $id));
    return $query->row();
  }

  public function insert(){

    $data = array(
      'desa_id' => $this->input->post('desa_id'),
      'nama' => $this->input->post('nama'),
      'keterangan' => $this->input->post('keterangan'),
      'image' => $this->_uploadImage() 
    );

    // print_r($data);
    $result = $this->db->insert('galleri', $data);
    return $result;
  }

  public function update(){

    if (!empty($_FILES["image"]["name"])) {
        $image = $this->_uploadImage();
    } else {
        $image = $this->input->post('image_before');
    }

    $data = array(
      'id' => $this->input->post('id'),
      'desa_id' => $this->input->post('desa_id'),
      'nama' => $this->input->post('nama'),
      'keterangan' => $this->input->post('keterangan'),
      'image' => $image 
    );

    // print_r($data);
    $this->db->where('id', $this->input->post('id'));
    $result = $this->db->update('galleri', $data);
    return $result;
  }

  private function _uploadImage() {
    $config['upload_path']          = './assets/images/galleri/';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['file_name']            = url_title($this->input->post('nama'));
    $config['overwrite']			      = true;
    $config['max_size']             = 1024; 
    // $config['max_width']            = 1024;
    // $config['max_height']           = 768;

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('image')) {
        return $this->upload->data("file_name");
    }
    
    return "noimage.jpg";
  }
}