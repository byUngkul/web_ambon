<?php

class Jabatan extends CI_Controller {

  function __construct()
  {
     parent::__construct();
     // apa sdah login
    //  check_not_login();
     // cek apakah yang login itu admin
    //  check_admin();
     $this->load->model('auth_model');
     $this->load->model('jabatan_m');
     $this->load->library('form_validation');
  }
  
  public function index()
  {
    $pegawai = $this->pegawai_m->get_all_pegawai();
    $kecamat = $this->desas_m->get_desa(null, 'yes');
    $jabatan = $this->jabatan_m->get_jabatan()->result();

    // var_dump($jabatan);
    $data = array(
      'menu' => '4',
      'kecamatan' => $kecamat,
      'jabatan' => $jabatan,
      'title' => 'Jabatan: list',
      'page' => 'Data Jabatan',
      'content' => '_admin/jabatan/index',
      'pegawai' => $pegawai
    );

    $this->load->view('_admin/main', $data);
  }

  public function add()
  {
    $kecamat = $this->desas_m->get_desa(null, 'yes');
    $desa = $this->desas_m->get_all_desas();

    $data = array(
      'menu' => '4',
      'kecamatan' => $kecamat,
      'desa' => $desa,
      'title' => 'Jabatan: tambah',
      'page' => 'Tambah Jabatan',
      'content' => '_admin/jabatan/add',
    );

    $this->form_validation->set_rules('nama', 'Nama Pegawai', 'required');
    $this->form_validation->set_rules('id_pemerintah', 'Pemerintahan', 'required');
    
    $this->form_validation->set_message('required', '%s harus di isi!');

    if ($this->form_validation->run() === FALSE) {
      $this->load->view('_admin/main', $data);
    } else {
      // Upload

      $this->jabatan_m->insert();

      // Set message
      $this->session->set_flashdata('post_created', 'Berhasil menambahkan artikel');

      redirect('admin/jabatan');
    }
  }

  public function edit($id = null)
  {
    $kecamat = $this->desas_m->get_desa(null, 'yes');
    $desa = $this->desas_m->get_all_desas();
    $jabatan = $this->jabatan_m->get_jabatan($id)->row();

    $data = array(
      'menu' => '4',
      'kecamatan' => $kecamat,
      'desa' => $desa,
      'jabatan' => $jabatan,
      'title' => 'Jabatan: tambah',
      'page' => 'Tambah Jabatan',
      'content' => '_admin/jabatan/edit',
    );

    $this->load->view('_admin/main', $data);
  }

  public function update()
  {
    $this->jabatan_m->update();

    redirect('admin/jabatan');
  }

  public function delete($id = null)
  {
    $this->jabatan_m->delete($id);

    redirect('admin/jabatan');
  }
}