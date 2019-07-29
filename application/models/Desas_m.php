<?php
class Desas_m extends CI_Model {

  public function get_all_desas($where = NULL) 
  {
    if (!empty($where)) {
      $this->db->where('is_parent_site', $where);
    }
    $query = $this->db->get('desa');
    return $query->result();
  }

  public function get_once($slug = null)
  {
    if (!empty($slug)) {
      $this->db->where('slug', $slug);
    }
    $query = $this->db->get('desa');
    return $query; 
  }

  public function get_desa($id = null, $is_parent = null) {
    if (!empty($is_parent)){
      $this->db->where('is_parent_site', $is_parent);
    }

    if (!empty($id)) {
      $this->db->where('desa_id', $id);
    }
    
    $query = $this->db->get('desa');
    return $query->row();
  }

  public function insert() {

    $data = array(
      'nama' => $this->input->post('nama'),
      'slug' => $this->input->post('slug'),
      'alamat' => $this->input->post('alamat'),
      'profil' => $this->input->post('profile'),
      'kategori_wilayah' => $this->input->post('kat_wilayah'),
      'email' => $this->input->post('email'),
      'no_telp_1' => $this->input->post('no_tlp_1'),
      'no_telp_2' => $this->input->post('no_tlp_2'),
      'is_parent_site' => $this->input->post('is_prent_site'),
      'landasan_hukum' => $this->input->post('daskum'),
      'tugas_fungsi' => $this->input->post('tugasfungsi'),
      'visi_misi' => $this->input->post('visimisi'),
      'geografis' => $this->input->post('geografis'),
      'peta' => $this->_uploadImage('./assets/images/peta/', 'jpg|jpeg|png', url_title($this->input->post('nama')), 'peta'),
      'logo' => $this->_uploadImage('./assets/images/logo/', 'jpg|jpeg|png', url_title($this->input->post('nama')), 'logo')
    );

    $result = $this->db->insert('desa', $data);
    return $result;
  }

  public function update() {

    $data = array(
      // 'desa_id' => $this->input->post('desa_id'),
      'nama' => $this->input->post('nama'),
      'slug' => $this->input->post('slug'),
      'alamat' => $this->input->post('alamat'),
      'profil' => $this->input->post('profile'),
      'kategori_wilayah' => $this->input->post('kat_wilayah'),
      'email' => $this->input->post('email'),
      'no_telp_1' => $this->input->post('no_tlp_1'),
      'no_telp_2' => $this->input->post('no_tlp_2'),
      'is_parent_site' => $this->input->post('is_prent_site'),
      'landasan_hukum' => $this->input->post('daskum'),
      'tugas_fungsi' => $this->input->post('tugasfungsi'),
      'visi_misi' => $this->input->post('visimisi'),
      'geografis' => $this->input->post('geografis'),
      'peta' => $this->_uploadImage('./assets/images/peta/', 'jpg|jpeg|png', url_title($this->input->post('nama')), 'peta', $this->input->post('desa_id'), 'peta'),
      'logo' => $this->_uploadImage('./assets/images/logo/', 'jpg|jpeg|png', url_title($this->input->post('nama')), 'logo', $this->input->post('desa_id'), 'logo')
    );

    $this->db->where('desa_id', $this->input->post('desa_id'));
    $result = $this->db->update('desa', $data);
    return $result;
  }

  public function delete($id) {
    $this->db->where('desa_id', $id);
		$result = $this->db->delete('desa');
		return $result;
  }
  private function _uploadImage($path='', $type='', $fielname='', $file='', $desa_id='', $select='') {
  // private function _uploadImage() {
    $this->load->library('upload');
    $aaa = '';

    if($file != '') {
      $config['upload_path']          = ($path != '' ? $path : './assets/images/');
      $config['allowed_types']        = $type;
      // $config['file_name']            = url_title($this->input->post('nama'));
      $config['file_name']            = $fielname;
      $config['overwrite']			      = true;
      $config['max_size']             = 1024;
      $this->upload->initialize($config);

      if ($this->upload->do_upload($file)) {
        $aaa = $this->upload->data("file_name");
      }
    }

    if($desa_id != '' && $aaa  == '') 
		{
			$this->db->select($select .' as nama'); 
			$this->db->where('desa_id', $desa_id);
			$get = $this->db->get('desa');
			
			$aaa =($get ? ($get->num_rows() > 0 ? $get->row()->nama : '') : '');
		}
     
    return $aaa;
  }
  
  public function get_organisasi($is_parent='', $id_desa='', $j_parent='')
  {
    $this->db->select('o.id, o.id_parent, j.id as id_j, p.id as id_p, p.nama, p.nip, p.tempat_lahir, p.tgl_lahir, p.jenis_kelamin, p.agama, p.pangkat_golongan, p.jabatan, p.telepon, p.image, p.facebook, p.email, p.instagram, j.nama_jb');
		$this->db->join('pegawai p', 'p.id = o.id_p');
		$this->db->join('jabatan j', 'j.id = o.id_j');
    $this->db->join('desa d', 'd.desa_id = o.id_desa');

    if (!empty($is_parent)) {
      $this->db->where('d.is_parent_site', $is_parent);
    }

    if (!empty($id_desa)) {
      $this->db->where('o.id_desa', $id_desa);
    }

    if ($j_parent != '') {
      $this->db->where('o.id_parent', $j_parent);
    }
		
    $result = $this->db->get('organisasi o');
    return $result;
  }
}
