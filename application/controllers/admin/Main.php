<?php
class Main extends CI_Controller {

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
    $kecamat = $this->kecamatan_m->get_data();

    $data['kecamatan'] = $kecamat;
    $data['title'] = 'Dashboard';
    $data['page'] = '';
    $data['content'] = '_admin/content';
    $data['menu'] = '1';

    $this->load->view('_admin/main', $data);
  }
}
