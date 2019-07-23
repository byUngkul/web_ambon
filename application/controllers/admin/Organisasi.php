<?php

class Organisasi extends CI_Controller{
  public function __construct()
  {
    parent::__construct();
    check_not_login();
    $this->load->model('organisasi_m');
  }

  public function index()
  {
    check_permission();
    if($this->session->userdata('level') != 1){
      redirect('admin/main');
    }
    $orgData = $this->organisasi_m->get_organ();
    $kecamat = $this->desas_m->get_desa(null, 'yes');
    // var_dump($orgData->result());
    $data = array(
      'menu' => '11',
      'kecamatan' => $kecamat,
      'title' => 'Struktur organisasi',
      'page' => 'Struktur organisasi',
      'content' => '_admin/organisasi/index',
      'orgData' => $orgData
    );

    $this->load->view('_admin/main', $data);
  }

  public function add_item()
  {
    check_permission();
    $post = $this->input->post();
    $this->organisasi_m->add_item($post);

    redirect('admin/organisasi');
  }

  public function edit_item()
  {
    check_permission();
    $post = $this->input->post();
    $this->organisasi_m->update_item($post);

    redirect('admin/organisasi');
  }

  public function delete_item($id)
  {
    check_permission();
    $this->db->delete('organisasi', array('id'=>$id));
    
    redirect('admin/organisasi');
  }
}