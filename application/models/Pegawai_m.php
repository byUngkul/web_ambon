<?php

class Pegawai_m extends CI_Model {

  public function get_all_pegawai($id_desa='') {
    if ($id_desa != '') {
      $this->db->where('id_desa', $id_desa);
    }
    $query = $this->db->get('pegawai');
    return $query->result();
  }

  public function get_pegawai($id) {
    $query = $this->db->get_where('pegawai', array('id' => $id));
    return $query->row();
  }

  public function insert() {
    
    $data = array(
        "nama" => $this->input->post('nama'),
        "nip" => $this->input->post('nip'),
        "tempat_lahir" => $this->input->post('tempat_lahir'),
        "tgl_lahir" => $this->input->post('tgl_lahir'),
        "jenis_kelamin" => $this->input->post('gender'),
        "agama" => $this->input->post('agama'),
        "pangkat_golongan" => $this->input->post('pangkat'),
        "jabatan" => $this->input->post('jabatan'),
        "urutan" => $this->input->post('urutan'),
        "telepon" => $this->input->post('telp'),
        "email" => $this->input->post('email'),
        "image" => $this->_uploadImage(),
        "id_desa" => $this->input->post('id_pem')
    );

    $result = $this->db->insert('pegawai', $data);
    return $result;
  }

  public function update() {

    if (!empty($_FILES["foto"]["name"])) {
      $image = $this->_uploadImage();
    } else {
      $image = $this->input->post('image_before');
    }
    
    $data = array(
        "nama" => $this->input->post('nama'),
        "nip" => $this->input->post('nip'),
        "tempat_lahir" => $this->input->post('tempat_lahir'),
        "tgl_lahir" => $this->input->post('tgl_lahir'),
        "jenis_kelamin" => $this->input->post('gender'),
        "agama" => $this->input->post('agama'),
        "pangkat_golongan" => $this->input->post('pangkat'),
        "jabatan" => $this->input->post('jabatan'),
        // "urutan" => $this->input->post('urutan'),
        "telepon" => $this->input->post('telp'),
        "email" => $this->input->post('email'),
        "image" => $image,
        "id_desa" => $this->input->post('id_pem')
    );

    $this->db->where('id', $this->input->post('id'));
    $result = $this->db->update('pegawai', $data);
    return $result;
  }

  public function delete($id) {
    $this->db->where($id);
    $result = $this->db->delete('pegawai');
    return $result;
  }

  private function _uploadImage() {
    $config['upload_path']          = './assets/images/pegawai/';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['file_name']            = url_title($this->input->post('nama'));
    $config['overwrite']			      = true;
    $config['max_size']             = 1024; 
    // $config['max_width']            = 1024;
    // $config['max_height']           = 768;

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('foto')) {
        return $this->upload->data("file_name");
    }
    
    return "default.jpg";
  }

  private function _deleteImage($id)
  {
      $product = $this->getById($id);
      if ($product->image != "default.jpg") {
        $filename = explode(".", $product->image)[0];
      return array_map('unlink', glob(FCPATH."assets/images/pegawai/$filename.*"));
      }
  }
}