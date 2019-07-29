<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelayanan extends CI_Controller {
  
  public function __construct()
  {
    parent::__construct();
    check_not_login();
    $this->load->model('pelayanan_m');
    $this->load->library('form_validation');
  }

  public function index()
  {
    // check_permission();
    if($this->session->userdata('level') != 1){
      redirect('admin/pelayanan/detile/'.$this->session->userdata('desaid'));
    }
    $kecamat = $this->desas_m->get_desa(null, 'yes');
    $desa = $this->desas_m->get_all_desas();

    $data = array(
      'menu' => '3',
      'kecamatan' => $kecamat,
      'title' => 'Info Pelayanan',
      'page' => 'Info Pelayanan',
      'content' => '_admin/pelayanan/index',
      'desas' => $desa
    );

    $this->load->view('_admin/main', $data);
  }

  public function detile($desa_id)
  {
    $kecamat = $this->desas_m->get_desa(null, 'yes');
    $desa = $this->desas_m->get_desa($desa_id, null);
    $dt_pelayanan = $this->pelayanan_m->get_data(NULL, NULL, NULL, $desa_id)->result_array();
    // var_dump($j_potensi);

    $data = array(
      'menu' => '3',
      'kecamatan' => $kecamat,
      'title' => 'Info Pelayanan',
      'page' => 'Data Info Pelayanan',
      'content' => '_admin/pelayanan/detile',
      'desa' => $desa,
      'desa_id' => $desa_id,
      'dt_pelayanan' => $dt_pelayanan
    );

    $this->load->view('_admin/main', $data);
  }

  public function add_pelayanan($desa_id = NULL)
  {
    
    $kecamat = $this->desas_m->get_desa(null, 'yes');
    $desa = $this->desas_m->get_desa($desa_id, null);
    
    $this->form_validation->set_rules('jenis_pelayanan', 'Jenis Pelayanan', 'required');
    $this->form_validation->set_rules('title', 'Title Pelayanan', 'required');

    $this->form_validation->set_message('required', '%s harus di pilih atau tidak boleh kosong!');

    $data = array(
      'menu' => '3',
      'kecamatan' => $kecamat,
      'title' => 'Info Pelayanan: tambah',
      'page' => 'Tambah Data Info Pelayanan',
      'content' => '_admin/pelayanan/add',
      'desa' => $desa,
      'desa_id' => $desa_id
    );

    if ($this->form_validation->run() == FALSE)
    {
      $this->load->view('_admin/main', $data);
    } else {
      $post = $this->input->post();
      $this->pelayanan_m->add($post);

      redirect('admin/pelayanan/detile/'.$post["desa_id"]);
    }
  }

  public function edit_pelayanan()
  {
    $desa_id = $this->uri->segment(4);
    $id = $this->uri->segment(5); 
    $kecamat = $this->desas_m->get_desa(null, 'yes');
    $desa = $this->desas_m->get_desa($desa_id, null);
    
    $this->form_validation->set_rules('jenis_pelayanan', 'Jenis Pelayanan', 'required');
    $this->form_validation->set_rules('title', 'Title Pelayanan', 'required');

    $this->form_validation->set_message('required', '%s harus di pilih atau tidak boleh kosong!');

    $data = array(
      'menu' => '3',
      'kecamatan' => $kecamat,
      'title' => 'Info Pelayanan: tambah',
      'page' => 'Tambah Data Info Pelayanan',
      'content' => '_admin/pelayanan/edit',
      'desa' => $desa,
      'desa_id' => $desa_id,
      'pelayanan' => $this->pelayanan_m->get_data($id)->row_array()
    );
    // var_dump(json_encode($data['pelayanan']));
    if ($this->form_validation->run() == FALSE)
    {
      $this->load->view('_admin/main', $data);
    } else {
      $post = $this->input->post();
      $this->pelayanan_m->update($post);

      redirect('admin/pelayanan/detile/'.$post["desa_id"]);
    }
  }

  public function delete()
  {
    $desa_id = $this->uri->segment(4);
    $id = $this->uri->segment(5); 
    $this->pelayanan_m->delete($id);

    redirect('admin/pelayanan/detile/'.$desa_id);
  }
}
