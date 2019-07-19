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
    $kecamat = $this->desas_m->get_desa(null, 'yes');

    $data['kecamatan'] = $kecamat;
    $data['title'] = 'Dashboard';
    $data['page'] = '';
    $data['content'] = '_admin/content';
    $data['menu'] = '1';
    // var_dump($this->session->userdata());
    $this->load->view('_admin/main', $data);
  }
}
