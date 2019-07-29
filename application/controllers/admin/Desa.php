<?php
class Desa extends CI_Controller {

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
    check_permission();
    if($this->session->userdata('level') != 1){
      redirect('admin/desa/edit/'.$this->session->userdata('desaid'));
    }
    $desa = $this->desas_m->get_all_desas();
    $kecamat = $this->desas_m->get_desa(null, 'yes');
    // var_dump($artikel);
    $data = array(
      'menu' => '6',
      'kecamatan' => $kecamat,
      'title' => 'Desa',
      'page' => 'List Desa',
      'content' => '_admin/desa/index',
      'desas' => $desa
    );

    $this->load->view('_admin/main', $data);
  }

  public function add() {
    check_permission();
    $kecamat = $this->desas_m->get_desa(null, 'yes');

    $data = array(
      'menu' => '6',
      'kecamatan' => $kecamat,
      'title' => 'Desa: tambah',
      'page' => 'Tambah Desa',
      'content' => '_admin/desa/add'
    );

    $this->form_validation->set_rules('nama', 'Nama Negeri/Kelurahan', 'required');
    $this->form_validation->set_rules('alamat', 'Alamat Negeri/Kelurahan', 'required');
    $this->form_validation->set_rules('profile', 'Profile Negeri/Kelurahan', 'required');

    if ($this->form_validation->run() === FALSE) {
      $this->load->view('_admin/main', $data);
    } else {
      
      $this->desas_m->insert();

      // Set message
      $this->session->set_flashdata('post_created', 'Berhasil menambahkan artikel');

      redirect('admin/desa');
    }
  }

  public function edit($id) {
    check_permission();
    $desa = $this->desas_m->get_desa($id);
    $kecamat = $this->desas_m->get_desa(null, 'yes');

    $data = array(
      'menu' => '6',
      'kecamatan' => $kecamat,
      'title' => 'Desa: edit',
      'page' => 'Edit Desa',
      'content' => '_admin/desa/edit',
      'desa' => $desa
    );

    $this->load->view('_admin/main', $data); 
  }

  public function update() {
    $this->desas_m->update();

    $this->session->set_flashdata('post_update', 'Berhasil update data');

    redirect('admin/desa');
  }

  public function delete($id) {
    check_permission();
    $this->desas_m->delete($id);

    redirect('admin/desa');
  }
}
