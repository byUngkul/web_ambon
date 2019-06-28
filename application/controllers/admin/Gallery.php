<?php

class Gallery extends CI_Controller {

  function __construct()
  {
     parent::__construct();
     // apa sdah login
     check_not_login();
     // cek apakah yang login itu admin
    //  check_admin();
     $this->load->model('auth_model');
     $this->load->library('form_validation');
  }
  
  public function index() {
    $kecamat = $this->kecamatan_m->get_data();
    $galery = $this->galery_m->get_all_galery();
    
    $data = array(
      'menu' => '4',
      'kecamatan' => $kecamat,
      'title' => 'Gallery',
      'page' => 'List Gallery',
      'content' => '_admin/gallery/index',
      'galery' => $galery
    );

    $this->load->view('_admin/main', $data);
  }
  
  public function add() {
    $kecamat = $this->kecamatan_m->get_data();
    $desa = $this->desas_m->get_all_desas();

    $data = array(
      'menu' => '4',
      'kecamatan' => $kecamat,
      'title' => 'Gallery',
      'page' => 'Tambah Gallery',
      'content' => '_admin/gallery/add',
      'desas' => $desa
    );

    $this->form_validation->set_rules('nama', 'Nama', 'required');
    $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');

    if ($this->form_validation->run() === FALSE) {
      $this->load->view('_admin/main', $data);
    } else {
      
      $this->galery_m->insert();

      // Set message
      $this->session->set_flashdata('post_created', 'Berhasil menambahkan artikel');

      redirect('admin/gallery');
    }
  }

  public function edit($id) {
    $kecamat = $this->kecamatan_m->get_data();
    $desa = $this->desas_m->get_all_desas();
    $galery = $this->galery_m->get_galery($id);

    $data = array(
      'menu' => '4',
      'kecamatan' => $kecamat,
      'title' => 'Gallery',
      'page' => 'Tambah Gallery',
      'content' => '_admin/gallery/edit',
      'desas' => $desa,
      'galery' => $galery
    );

    $this->load->view('_admin/main', $data);
  }

  public function update() {
    $this->galery_m->update();

    redirect('admin/gallery');
  }
}