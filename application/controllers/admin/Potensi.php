<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Potensi extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    check_not_login();
    $this->load->model('potensi_m');
    $this->load->library('form_validation');
  }

  public function index()
  {
    check_permission();
    if($this->session->userdata('level') != 1){
      redirect('admin/potensi/detile/'.$this->session->userdata('desaid'));
    }
    $kecamat = $this->desas_m->get_desa(null, 'yes');
    $desa = $this->desas_m->get_all_desas();

    $data = array(
      'menu' => '3',
      'kecamatan' => $kecamat,
      'title' => 'Potenis: list',
      'page' => 'Data Potensi',
      'content' => '_admin/potensi/index',
      'desas' => $desa
    );

    $this->load->view('_admin/main', $data);
  }

  public function detile($desa_id = null)
  {
    check_permission();
    $kecamat = $this->desas_m->get_desa(null, 'yes');
    $desa = $this->desas_m->get_desa($desa_id, null);
    $j_potensi = $this->potensi_m->get_j_potensi()->result_array();
    // var_dump($j_potensi);

    $data = array(
      'menu' => '3',
      'kecamatan' => $kecamat,
      'title' => 'Potensi',
      'page' => 'Data Potensi',
      'content' => '_admin/potensi/detile',
      'desa' => $desa,
      'desa_id' => $desa_id,
      'j_potensi' => $j_potensi
    );

    $this->load->view('_admin/main', $data);
  }

  public function add_jenis()
  {
    check_permission();
    $this->potensi_m->add_j_potensi();
    $desa_id = $this->input->post("desa_id");

    redirect('admin/potensi/detile/'.$desa_id);
  }

  public function add_potensi()
  {
    check_permission();
    $kecamat = $this->desas_m->get_desa(null, 'yes');
    $desa_id = $this->uri->segment(4);
    $j_potensi = $this->uri->segment(5);

    $data = [
      'menu' => '3',
      'kecamatan' => $kecamat,
      'title' => 'Potensi: tambah',
      'page' => 'Tambah Potensi',
      'content' => '_admin/potensi/add_potensi',
      'desa_id' => $desa_id,
      'j_potensi' => $j_potensi
    ];
    
    $this->form_validation->set_rules('nama_potensi', 'Nama Potensi', 'required');

    $this->form_validation->set_message('required', '%s tidak boleh kosong!');

    if ($this->form_validation->run() == FALSE)
    {
      $this->load->view('_admin/main', $data);
    } else {
      $post = $this->input->post();
      $this->potensi_m->add_potensi($post);

      redirect('admin/potensi/detile/'.$post["desa_id"]);
    }
  }

  public function edit_potensi()
  {
    check_permission();
    $desa_id = $this->uri->segment(4);
    $j_potensi = $this->uri->segment(5);
    $kecamat = $this->desas_m->get_desa(null, 'yes');
    $potensi_v = $this->potensi_m->get_potensi(NULL, NULL, $j_potensi)->row_array();

    $data = [
      'menu' => '3',
      'kecamatan' => $kecamat,
      'title' => 'Potensi: edit',
      'page' => 'Edit Potensi',
      'content' => '_admin/potensi/edit_potensi',
      'desa_id' => $desa_id,
      'potensi_v' => $potensi_v
    ];
    // var_dump($data);
    $this->load->view('_admin/main', $data);
  }

  public function update_potensi()
  {
    $post = $this->input->post();
    $this->potensi_m->update_potensi($post);
    
    redirect('admin/potensi/detile/'.$post["desa_id"]);
  }

  public function delete_potensi()
  {
    check_permission();
    $desa_id = $this->uri->segment(4);
    $id_potensi = $this->uri->segment(5);
    $this->potensi_m->delete_potensi($id_potensi);

    redirect('admin/potensi/detile/'.$desa_id);
  }
}
