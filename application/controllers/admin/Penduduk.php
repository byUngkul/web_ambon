<?php

class Penduduk extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    check_not_login();
  }
  public function index()
  {
    check_permission();
    if($this->session->userdata('level') != 1){
      redirect('admin/penduduk/detile/'.$this->session->userdata('desaid'));
    }

    $kecamat = $this->desas_m->get_desa(null, 'yes');
    $desa = $this->desas_m->get_all_desas();

    $data = array(
      'menu' => '9',
      'kecamatan' => $kecamat,
      'title' => 'Kependudukan: list',
      'page' => 'Data Kependudukan',
      'content' => '_admin/penduduk/index',
      'desas' => $desa
    );

    $this->load->view('_admin/main', $data);
  }

  public function detile($desa_id = null)
  {
    check_permission();
    // $kecamat = $this->desas_m->get_desa(null, 'yes');
    $kecamat = $this->desas_m->get_desa(NULL, 'yes');
    $desa = $this->desas_m->get_desa($desa_id);
    // $kat_p = $this->penduduk_m->get_data($desa_id, NULL, NULL, 'tl.tl_key')->result_array();
    // $kat_p = $this->penduduk_m->get_data($desa_id, NULL, NULL, 'tl.tl_key')->result_array();
    $kat_data = $this->penduduk_m->get_kateg('tl.tl_key', NULL, NULL, NULL)->result_array();
    $kat_data2 = $this->penduduk_m->get_kateg('tl.tl_key', NULL, NULL, $desa_id)->result_array();   
    
    // var_dump($kat_data2);
    $data = array(
      'menu' => '9',
      'kecamatan' => $kecamat,
      'title' => 'Data Kependudukan',
      'page' => 'Data Kependudukan',
      'content' => '_admin/penduduk/detile',
      'desas' => $desa,
      'desa_id' => $desa_id,
      // 'kat_p' => $kat_p,
      'kat_data' => $kat_data,
      'kat_data2' => $kat_data2
    );

    $this->load->view('_admin/main', $data);
  }

  public function add_kateg()
  {
    check_permission();
    $desa = $this->desas_m->get_all_desas();
    $post = $this->input->post();

    foreach($desa as $row) {
      $desa_id[] = $row->desa_id;
    }

    $this->penduduk_m->insert_kateg($desa_id, $post);
    redirect('admin/penduduk/detile/'.$post["desa_id"]);
  }

  public function update_kateg()
  {
    check_permission();
    $desa = $this->desas_m->get_all_desas();

    foreach($desa as $row) {
      $desa_id[] = $row->desa_id;
    }

    $post = $this->input->post();
    // var_dump($post);
    $this->penduduk_m->update_kateg($desa_id, $post);

    redirect('admin/penduduk/detile/'.$post["desa_id"]);
  }

  public function delete_kateg()
  {
    check_permission();
    $desa_id = $this->uri->segment(4);
    $param = $this->uri->segment(5);  
    
    $this->penduduk_m->delete_kateg($param);
    redirect('admin/penduduk/detile/'.$desa_id);
  }

  public function add_jkateg()
  {
    check_permission();
    $desa = $this->db->select('desa_id')->get('desa')->result_array();
    $post = $this->input->post();
    foreach($desa as $row) {
      $desa_id[] = $row['desa_id'];
    }
    $this->penduduk_m->insert_jkateg($desa_id, $post);
    // $dt_kl = $this->db->get_where('kependudukan_kl', array('kl_text'=>$param))->result_array();
    // foreach($dt_kl as $val) {
    //   $id_kl[] = $val['id'];
    // }
    redirect('admin/penduduk/detile/'.$post["desa_id"]);
  }
  

  public function edit_jkateg()
  {
    check_permission();
    $desa_id = $this->uri->segment(4);
    $kl_text = urldecode($this->uri->segment(5));
    $kecamat = $this->desas_m->get_desa(NULL, 'yes');
    $value = $this->penduduk_m->get_kateg(NULL, NULL, $kl_text)->row_array();
    
    $data = array(
      'menu' => '9',
      'kecamatan' => $kecamat,
      'title' => 'Data Kependudukan',
      'page' => 'Data Kependudukan',
      'content' => '_admin/penduduk/edit_jkateg',
      'desa_id' => $desa_id,
      'value' => $value
    );
    // var_dump($data);
    $this->load->view('_admin/main', $data);
  }

  public function update_jkteg()
  {
    $post = $this->input->post();
    $kl_id = $post["kl_id"];
    
    foreach ($kl_id as  $value) {
      $klid[] = $value;
    }

    $this->penduduk_m->update_jkteg($klid, $post);
    redirect('admin/penduduk/detile/'.$post["desa_id"]);
  }

  public function edit_val()
  {
    check_permission();
    $desa_id = $this->uri->segment(4);
    $kl_id = urldecode($this->uri->segment(5));
    $kecamat = $this->desas_m->get_desa(NULL, 'yes');
    $value = $this->db->get_where('kependudukan_kl', array('id'=>$kl_id))->row_array();
    
    $data = array(
      'menu' => '9',
      'kecamatan' => $kecamat,
      'title' => 'Data Kependudukan',
      'page' => 'Data Kependudukan',
      'content' => '_admin/penduduk/edit_val',
      'desa_id' => $desa_id,
      'value' => $value
    );
    // var_dump($data);
    $this->load->view('_admin/main', $data);
  }

  public function update_val()
  {
    $post = $this->input->post();
    
    $this->penduduk_m->update_val($post);
    redirect('admin/penduduk/detile/'.$post["desa_id"]);
  }
}
