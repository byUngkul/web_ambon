<?php
class Kecamatan extends CI_Controller {

  function __construct()
  {
     parent::__construct();
     // apa sdah login
     check_not_login();
     // cek apakah yang login itu admin
     check_admin();
     $this->load->model('auth_model');
     $this->load->library('form_validation');
  }
  
  public function index() {
    $profile = $this->kecamatan_m->get_data();
    
    $data = array(
      'menu' => '5',
      'kecamatan' => $profile,
      'title' => 'Setting Kecamatan',
      'page' => 'Setting Kecamatan',
      'content' => '_admin/kecamatan/index',
      'profile' => $profile
    );

    $this->load->view('_admin/main', $data);
  }
}
