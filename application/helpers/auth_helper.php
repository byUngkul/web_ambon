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

// cek permission user
function check_permission()
{
  $ci =& get_instance();
  $path[1] = $ci->uri->segment(1);
  $path[2] = $ci->uri->segment(2);
  $path[3] = $ci->uri->segment(3);
  $data = $ci->menu->allow($ci->session->userdata('userid'));
  
  if($path[3] == NULL){
    $url = $path[1].'/'.$path[2];
  } else {
    $url = $path[1].'/'.$path[2].'/'.$path[3];
  }  
    
  foreach ($data->result_array() as $val) {
      $link[] = $val['link_resource'];
  }

  $allow = in_array($url, $link);
    
  if(!$allow) {
    exit("Anda tidak memiliki hak akses!");
  }
}