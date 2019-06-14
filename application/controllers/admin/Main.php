<?php
class Main extends CI_Controller {
  public function index()
  {
    
    $this->load->view('_admin/header');
    $this->load->view('_admin/nav');
    $this->load->view('_admin/head');
    $this->load->view('_admin/breadcrumb');
    $this->load->view('_admin/content');
    $this->load->view('_admin/modal');
    $this->load->view('_admin/footer');
  }
}
