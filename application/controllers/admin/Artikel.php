<?php
class Artikel extends CI_Controller {
  public function index() {
    // $data['posts'] = $this->article_m->get_posts();

    $this->load->view('_admin/header');
    $this->load->view('_admin/nav');
    $this->load->view('_admin/head');
    $this->load->view('_admin/breadcrumb');
    $this->load->view('_admin/artikel/index');
    $this->load->view('_admin/footer');
  }

  function get_artikel_json() { //data data produk by JSON object
    header('Content-Type: application/json');
    echo $this->article_m->get_all_posts();
  }
}
