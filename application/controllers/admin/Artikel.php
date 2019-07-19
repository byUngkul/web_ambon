<?php
class Artikel extends CI_Controller {

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
    $artikel = $this->article_m->get_all_posts();
    $kecamat = $this->desas_m->get_desa(null, 'yes');
    // var_dump($artikel);
    $data = array(
      'menu' => '2',
      'kecamatan' => $kecamat,
      'title' => 'Artikel',
      'page' => 'List Artikel',
      'content' => '_admin/artikel/index',
      'artikel' => $artikel
    );

    $this->load->view('_admin/main', $data);
  }

  public function add() {
    $categ = $this->category_m->list_category();
    $desas = $this->desas_m->get_all_desas();
    $kecamat = $this->desas_m->get_desa(null, 'yes');

    $data = array(
      'menu' => '2',
      'kecamatan' => $kecamat,
      'title' => 'Artikel: tambah',
      'page' => 'Tambah Artikel',
      'content' => '_admin/artikel/add',
      'category' => $categ,
      'desas' => $desas
    );

    $this->form_validation->set_rules('title', 'Title', 'required');
    $this->form_validation->set_rules('body', 'Content', 'required');

    if ($this->form_validation->run() === FALSE) {
      $this->load->view('_admin/main', $data);
    } else {
      
      // $this->article_m->insert_posts($post_image);
      $this->article_m->insert_posts();

      // Set message
      $this->session->set_flashdata('post_created', 'Berhasil menambahkan artikel');

      redirect('admin/artikel');
    }
  }

  public function edit($id) {
    $categ = $this->category_m->list_category();
    $desas = $this->desas_m->get_all_desas();
    $artikel = $this->article_m->get_post_edit($id);
    $kecamat = $this->desas_m->get_desa(null, 'yes');

    // var_dump($artikel);

    $data = array(
      'menu' => '2',
      'kecamatan' => $kecamat,
      'title' => 'Artikel: edit',
      'page' => 'Edit Artikel',
      'content' => '_admin/artikel/edit',
      'category' => $categ,
      'artikel' => $artikel,
      'desas' => $desas
    );

    $this->load->view('_admin/main', $data);    
  }

  public function update() {

    $this->article_m->update_posts();

    $this->session->set_flashdata('post_update', 'Berhasil update artikel');

    redirect('admin/artikel');
  }

  public function delete($id) {
    $this->article_m->delete_posts($id);

    redirect('admin/artikel');
  }
}
