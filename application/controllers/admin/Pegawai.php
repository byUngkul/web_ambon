<?php
class Pegawai extends CI_Controller {

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

  public function index()
  {
    check_permission();

    $pegawai = $this->pegawai_m->get_all_pegawai();
    $kecamat = $this->desas_m->get_desa(null, 'yes');

    $data = array(
      'menu' => '7',
      'kecamatan' => $kecamat,
      'title' => 'Pegawai: list',
      'page' => 'Data Pegawai',
      'content' => '_admin/pegawai/index',
      'pegawai' => $pegawai
    );

    $this->load->view('_admin/main', $data);
  }

  public function add()
  {
    check_permission();
    $kecamat = $this->desas_m->get_desa(null, 'yes');
    $desa = $this->desas_m->get_all_desas();

    $data = array(
      'menu' => '7',
      'kecamatan' => $kecamat,
      'desa' => $desa,
      'title' => 'Pegawai: tambah',
      'page' => 'Tambah Pegawai',
      'content' => '_admin/pegawai/add',
    );

    $this->form_validation->set_rules('nama', 'Nama Pegawai', 'required');
    $this->form_validation->set_rules('nip', 'NIP', 'required');

    if ($this->form_validation->run() === FALSE) {
      $this->load->view('_admin/main', $data);
    } else {
      // Upload

      $this->pegawai_m->insert();

      // Set message
      $this->session->set_flashdata('post_created', 'Berhasil menambahkan artikel');

      redirect('admin/pegawai');
    }
  }

  public function edit($id)
  {
    check_permission();
    $kecamat = $this->desas_m->get_desa(null, 'yes');
    $pegawai = $this->pegawai_m->get_pegawai($id);
    $desa = $this->desas_m->get_all_desas();

    $data = array(
      'menu' => '7',
      'kecamatan' => $kecamat,
      'desa' => $desa,
      'title' => 'Pegawai: edit',
      'page' => 'Edit Pegawai',
      'content' => '_admin/pegawai/edit',
      'pegawai' => $pegawai
    );

    $this->load->view('_admin/main', $data);
  }

  public function update()
  {
    $this->pegawai_m->update();
    $this->session->set_flashdata('post_update', 'Berhasil update artikel');

    redirect('admin/pegawai');
  }

  public function delete($id) 
  {
    check_permission();
    $this->pegawai_m->delete($id);

    redirect('admin/pegawai');
  }
}