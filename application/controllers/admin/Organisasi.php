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
      redirect('admin/organisasi/detile/'.$this->session->userdata('desaid'));
    }
    $kecamat = $this->desas_m->get_desa(null, 'yes');
    $desa = $this->desas_m->get_all_desas();

    $data = array(
      'kecamatan' => $kecamat,
      'title' => 'Potenis: list',
      'page' => 'Data Potensi',
      'content' => '_admin/organisasi/index',
      'desas' => $desa
    );

    $this->load->view('_admin/main', $data);
  }

  public function detile($id_desa)
  {
    // check_permission();
    $orgData = $this->organisasi_m->get_organ(NULL, $id_desa, NULL);
    $kecamat = $this->desas_m->get_desa(null, 'yes');
    // var_dump($orgData->result());
    $data = array(
      'menu' => '11',
      'kecamatan' => $kecamat,
      'title' => 'Struktur organisasi',
      'page' => 'Struktur organisasi',
      'content' => '_admin/organisasi/detile',
      'id_desa' => $id_desa,
      'orgData' => $orgData
    );

    $this->load->view('_admin/main', $data);
  }

  public function add_item()
  {
    check_permission();
    $post = $this->input->post();
    $this->organisasi_m->add_item($post);

    redirect('admin/organisasi/detile/'.$post['id_pem']);
  }

  public function edit_item()
  {
    check_permission();
    $post = $this->input->post();
    $this->organisasi_m->update_item($post);

    redirect('admin/organisasi/detile/'.$post['id_pem']);
  }

  public function delete_item()
  {
    check_permission();
    $id = $this->uri->segment(5);
    $id_desa = $this->uri->segment(4);
    $this->db->delete('organisasi', array('id'=>$id));
    
    redirect('admin/organisasi/detile/'.$id_desa);
  }
}