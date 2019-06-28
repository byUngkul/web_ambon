<?php
class Kategori extends CI_Controller {

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
    $categ = $this->category_m->list_category();
    $kecamat = $this->kecamatan_m->get_data();
    
    $data = array(
      'menu' => '3',
      'kecamatan' => $kecamat,
      'title' => 'Kategori',
      'page' => 'Kategori artikel',
      'content' => '_admin/kategori/index',
      'categorys' => $categ
    );

    $this->load->view('_admin/main', $data);
  }

  public function add() {
    $kecamat = $this->kecamatan_m->get_data();

    $data = array(
      'menu' => '3',
      'kecamatan' => $kecamat,
      'title' => 'Kategori',
      'page' => 'Kategori tambah',
      'content' => '_admin/kategori/add'      
    );

    $this->form_validation->set_rules('name', 'Nama Kategori', 'required');

    if ($this->form_validation->run() === FALSE) {
      $this->load->view('_admin/main', $data);
    } else {
      $this->category_m->add();

      redirect('admin/kategori');
    }
  }

  public function edit($id = null) {
    $categ = $this->category_m->get_cat($id);
    $kecamat = $this->kecamatan_m->get_data();

    $data = array(
      'menu' => '3',
      'kecamatan' => $kecamat,
      'title' => 'Kategori',
      'page' => 'Kategori tambah',
      'content' => '_admin/kategori/edit',
      'category' => $categ 
    );
    
    $this->load->view('_admin/main', $data);
  }

  public function update() {
    $this->category_m->update();

    redirect('admin/kategori');
  }

  public function delete($id) 
  {
    $this->category_m->delete($id);

    redirect('admin/kategori');
  }
}