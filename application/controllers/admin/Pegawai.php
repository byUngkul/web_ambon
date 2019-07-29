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
    if($this->session->userdata('level') != 1){
      redirect('admin/pegawai/detile/'.$this->session->userdata('desaid'));
    }
    $kecamat = $this->desas_m->get_desa(null, 'yes');
    $desa = $this->desas_m->get_all_desas();

    $data = array(
      'kecamatan' => $kecamat,
      'title' => 'Potenis: list',
      'page' => 'Data Potensi',
      'content' => '_admin/pegawai/index',
      'desas' => $desa
    );

    $this->load->view('_admin/main', $data);
  }

  public function detile($id_desa)
  {
    // check_permission();

    $pegawai = $this->pegawai_m->get_all_pegawai($id_desa);
    $kecamat = $this->desas_m->get_desa(null, 'yes');

    $data = array(
      'kecamatan' => $kecamat,
      'title' => 'Pegawai: list',
      'page' => 'Data Pegawai',
      'content' => '_admin/pegawai/detile',
      'id_desa' => $id_desa,
      'pegawai' => $pegawai
    );

    $this->load->view('_admin/main', $data);
  }

  public function add()
  {
    check_permission();
    $id_desa = $this->uri->segment(4);
    $kecamat = $this->desas_m->get_desa(null, 'yes');
    $desa = $this->desas_m->get_all_desas();

    $this->form_validation->set_rules('nama', 'Nama Pegawai', 'required');
    $this->form_validation->set_rules('nip', 'NIP', 'required');

    $data = array(
      'menu' => '7',
      'kecamatan' => $kecamat,
      'desa' => $desa,
      'title' => 'Pegawai: tambah',
      'page' => 'Tambah Pegawai',
      'content' => '_admin/pegawai/add',
      'id_desa' => $id_desa
    );

    if ($this->form_validation->run() === FALSE) {
      $this->load->view('_admin/main', $data);
    } else {
      $this->pegawai_m->insert();

      redirect('admin/pegawai/detile/'.$this->input->post('id_pem'));
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

    redirect('admin/pegawai/detile/'.$this->input->post('id_pem'));
  }

  public function delete($id) 
  {
    $id = $this->uri->segment(5);
    $id_desa = $this->uri->segment(4);
    check_permission();
    $this->pegawai_m->delete($id);

    redirect('admin/pegawai/detile/'.$id_desa);
  }
}