<?php

// fungsi cek sudah login atau belum
function check_login() {
  $ci =& get_instance();
  $user_session = $ci->session->userdata('userid');
  if ($user_session) {
    redirect('admin/main');
  }
}

// cek login jika belum lempar ke login form
function check_not_login() {
  $ci =& get_instance();
  $user_session = $ci->session->userdata('userid');
  if (!$user_session) {
    redirect('auth');
  }
}

// cek apa dia admin jika bukan lempar ke dashboard
function check_admin(){
  $ci =& get_instance();
  $ci->load->library('login');
  if ($ci->login->user_login()->level != 1) {
     redirect('admin/main');
  }
}