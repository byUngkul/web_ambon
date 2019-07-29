<?php

class Jabatan extends CI_Controller {

  function __construct()
  {
     parent::__construct();
     // apa sdah login
     check_not_login();
     // cek apakah yang login itu admin
    //  check_admin();
     $this->load->model('auth_model');
     $this->load->model('jabatan_m');
     $this->load->library('form_validation');
  }
  
  public function index()
  {
    check_permission();
    if($this->session->userdata('level') != 1){
      redirect('admin/jabatan/detile/'.$this->session->userdata('desaid'));
    }
    $kecamat = $this->desas_m->get_desa(null, 'yes');
    $desa = $this->desas_m->get_all_desas();
    
    $data = array(
      'kecamatan' => $kecamat,
      'title' => 'Potenis: list',
      'page' => 'Data Potensi',
      'content' => '_admin/jabatan/index',
      'desas' => $desa
    );

    $this->load->view('_admin/main', $data);
  }

  public function detile($id_desa)
  {
    // check_permission();
    $pegawai = $this->pegawai_m->get_all_pegawai();
    $kecamat = $this->desas_m->get_desa(null, 'yes');
    $jabatan = $this->jabatan_m->get_jabatan(NULL, $id_desa)->result();

    $data = array(
      'menu' => '4',
      'kecamatan' => $kecamat,
      'jabatan' => $jabatan,
      'title' => 'Jabatan: list',
      'page' => 'Data Jabatan',
      'content' => '_admin/jabatan/detile',
      'id_desa' => $id_desa,
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
      'menu' => '4',
      'kecamatan' => $kecamat,
      'desa' => $desa,
      'title' => 'Jabatan: tambah',
      'page' => 'Tambah Jabatan',
      'content' => '_admin/jabatan/add',
      'id_desa' => $this->uri->segment(4)
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

      redirect('admin/jabatan/detile/'.$this->input->post('id_pemerintah'));
    }
  }

  public function edit($id = null)
  {
    check_permission();
    $kecamat = $this->desas_m->get_desa(null, 'yes');
    $desa = $this->desas_m->get_all_desas();
    $jabatan = $this->jabatan_m->get_jabatan($id, NULL)->row();

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

    redirect('admin/jabatan/detile/'.$this->input->post('id_pemerintah'));
  }

  public function delete()
  {
    $id = $this->uri->segment(5);
    $id_desa = $this->uri->segment(4);
    check_permission();
    $this->jabatan_m->delete($id);

    redirect('admin/jabatan/detile/'.$id_desa);
  }
}