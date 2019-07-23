<?php

class Users extends CI_Controller{
   
  function __construct()
  {
     parent::__construct();
     // apa sdah login
     check_not_login();
     // cek apakah yang login itu admin
   //   check_admin();
     $this->load->model('auth_model');
     $this->load->library('form_validation');
  }
  
  public function index()
  {
      check_permission();
     $user = $this->auth_model->get();
     $kecamat = $this->desas_m->get_desa(null, 'yes');

     $data = array(
      'menu' => '8',
      'kecamatan' => $kecamat,
      'title' => 'User: list',
      'page' => 'User Setting',
      'content' => '_admin/user/index',
      'user' => $user
     );

     $this->load->view('_admin/main', $data);
  }

  public function add()
  {
   check_permission();
    $user = $this->auth_model->get();
    $kecamat = $this->desas_m->get_desa(null, 'yes');
    $desa = $this->desas_m->get_all_desas();

     $data = array(
      'menu' => '8',
      'kecamatan' => $kecamat,
      'title' => 'User: tambah',
      'page' => 'User Setting',
      'content' => '_admin/user/add',
      'user' => $user,
      'desas' => $desa
     );

     $this->form_validation->set_rules('nama', 'Nama', 'required');
     $this->form_validation->set_rules('username', 'Username', 'required|min_length[4]|is_unique[users.username]');
     $this->form_validation->set_rules('password', 'Password', 'required|min_length[4]');
     $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[password]');
     $this->form_validation->set_rules('level', 'Level', 'required');
     
     $this->form_validation->set_message('matches', '%s tidak sesuai dengan password');
     $this->form_validation->set_message('required', '%s tidak boleh kosong!');
     $this->form_validation->set_message('min_length', '%s minimal 5 karakter');
     $this->form_validation->set_message('is_unique', '%s sudah digunakan, ganti dengan username yang lain');

     $this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');

     if ($this->form_validation->run() == FALSE)
     {
        $this->load->view('_admin/main', $data);
     } else {
        $post = $this->input->post(null, TRUE);
      //   print_r($post);
        $this->auth_model->add($post);
        if($this->db->affected_rows() > 0){
           echo "<script>alert('Data sukses di simpan!');</script>";
        }
        echo "<script>window.location='".site_url('admin/users')."';</script>";
     }
  }

  public function edit($id = null)
  {
   // check_permission();
     $this->form_validation->set_rules('nama', 'Nama', 'required');
     $this->form_validation->set_rules('username', 'Username', 'required|min_length[4]|callback_username_check');
     if($this->input->post('password')) {
        $this->form_validation->set_rules('password', 'Password', 'min_length[4]');
        $this->form_validation->set_rules('passconf', 'Password Confirmation', 'matches[password]');
     }
     if($this->input->post('password')) {
        $this->form_validation->set_rules('passconf', 'Password Confirmation', 'matches[password]');
     }
     $this->form_validation->set_rules('level', 'Level', 'required');
     
     $this->form_validation->set_message('matches', '%s tdak sesuai dengan password');
     $this->form_validation->set_message('required', '%s tidak boleh kosong!');
     $this->form_validation->set_message('min_length', '%s minimal 5 karakter');
     $this->form_validation->set_message('is_unique', '%s sudah digunakan, ganti dengan username yang lain');

     $this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');

     if(!empty($id)) {
      $user = $this->auth_model->get($id)->row();
     } else {
      $user = $this->auth_model->get($this->session->userdata('userid'))->row();
     }
     $kecamat = $this->desas_m->get_desa(null, 'yes');
     $desa = $this->desas_m->get_all_desas();

     $data = array(
      'menu' => '8',
      'kecamatan' => $kecamat,
      'title' => 'User: tambah',
      'page' => 'User Setting',
      'content' => '_admin/user/edit',
      'user' => $user,
      'desas' => $desa
     );

     if ($this->form_validation->run() == FALSE)
     {
        $q = $this->auth_model->get($id);
        
        if ($q->num_rows() > 0) {
         //   $data['row'] = $q->row();
           $this->load->view('_admin/main', $data);   
        } else {
           echo "<script>alert('Data sukses di simpan!');";
           echo "window.location='".site_url('admin/users')."';</script>";
        }         
     } else {
        $post = $this->input->post(null, TRUE);
      //   var_dump($post);
        $this->auth_model->update($post);
        if($this->db->affected_rows() > 0){
           echo "<script>alert('Data sukses di simpan!');</script>";
        }
        echo "<script>window.location='".site_url('admin/users')."';</script>";
     }
  }

  function username_check()
  {
     $post = $this->input->post(null, TRUE);
     $query = $this->db->query("SELECT * FROM users WHERE username = '$post[username]' AND user_id != '$post[user_id]'");
     if ($query->num_rows() > 0) {
        $this->form_validation->set_message('username_check', '%s ini sudah ada, silahkan ganti');
        return FALSE;
     } else {
        return TRUE;
     }
  }

  public function delete($id = null)
  {
   check_permission();
     $this->auth_model->delete($id);

     if($this->db->affected_rows() > 0) {
        echo "<script>alert('Data berhasil di hapus!');</script>";
     }
     echo "<script>window.location='".site_url('admin/users')."';</script>";
  }

  public function privilege($id = null)
  {
      $kecamat = $this->desas_m->get_desa(null, 'yes');
      $desa = $this->desas_m->get_all_desas();
      $user = $this->auth_model->get($id)->row();
      $menu = $this->menu->get_all()->result();
      $post = $this->input->post();

      $data = array(
      'menu' => '8',
      'kecamatan' => $kecamat,
      'title' => 'User: tambah',
      'page' => 'User Setting',
      'content' => '_admin/user/privilege',
      'user' => $user,
      'menu' => $menu,
      'desas' => $desa
      );

      
      if (!$post > 0) {
         $this->load->view('_admin/main', $data);
      } else {
         echo json_encode($post);
      }
  }
}
