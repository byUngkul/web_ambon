<?php

class Infrastruktur extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    check_not_login();  
    $this->load->model('infrastruktur_m');
    $this->load->library('form_validation');
  }

  public function index()
  {
    check_permission();
    $kecamat = $this->desas_m->get_desa(null, 'yes');
    $desa = $this->desas_m->get_all_desas();

    $data = array(
      'menu' => '10',
      'kecamatan' => $kecamat,
      'title' => 'Infrastruktur: list',
      'page' => 'Data Infrastruktur',
      'content' => '_admin/infrastruktur/index',
      'desas' => $desa
    );

    $this->load->view('_admin/main', $data);
  }

  public function detile($desa_id = null)
  {
    check_permission();
    $kecamat = $this->desas_m->get_desa(null, 'yes');
    $desa = $this->desas_m->get_desa($desa_id, null);
    $j_infra = $this->infrastruktur_m->get_j_infra()->result_array();
    // var_dump($desa);

    $data = array(
      'menu' => '10',
      'kecamatan' => $kecamat,
      'title' => 'Infrastruktur',
      'page' => 'Data Infrastruktur',
      'content' => '_admin/infrastruktur/detile',
      'desa' => $desa,
      'desa_id' => $desa_id,
      'infra' => $j_infra
    );

    $this->load->view('_admin/main', $data);
  }

  public function add_jenis()
  {
    check_permission();
    $this->infrastruktur_m->add_j_infra();
    $desa_id = $this->input->post("desa_id");

    redirect('admin/infrastruktur/detile/'.$desa_id);
  }

  public function add_infra()
  {
    check_permission();
    $kecamat = $this->desas_m->get_desa(null, 'yes');
    $desa_id = $this->uri->segment(4);
    $j_infra = $this->uri->segment(5);

    $data = [
      'menu' => '10',
      'kecamatan' => $kecamat,
      'title' => 'Infrastruktur: tambah',
      'page' => 'Tambah Infrastruktur',
      'content' => '_admin/infrastruktur/add_infra',
      'desa_id' => $desa_id,
      'j_infra' => $j_infra
    ];
    
    $this->form_validation->set_rules('nama_infra', 'Nama Infrastruktur', 'required');
    $this->form_validation->set_rules('jml_infra', 'Jumlah Infrastruktur', 'required|numeric');

    $this->form_validation->set_message('required', '%s tidak boleh kosong!');
    $this->form_validation->set_message('numeric', '%s di isi dengan angka!');

    if ($this->form_validation->run() == FALSE)
    {
      $this->load->view('_admin/main', $data);
    } else {
      $post = $this->input->post();
      $this->infrastruktur_m->add_infra($post);

      redirect('admin/infrastruktur/detile/'.$post["desa_id"]);
    }
  }

  public function edit_infra()
  {
    check_permission();
    $desa_id = $this->uri->segment(4);
    $id_infra = $this->uri->segment(5);
    $kecamat = $this->desas_m->get_desa(null, 'yes');
    $infra_v = $this->infrastruktur_m->get_infra(NULL, NULL, $id_infra)->row_array();

    $data = [
      'menu' => '10',
      'kecamatan' => $kecamat,
      'title' => 'Infrastruktur: edit',
      'page' => 'Edit Infrastruktur',
      'content' => '_admin/infrastruktur/edit_infra',
      'desa_id' => $desa_id,
      'infra_v' => $infra_v
    ];
    // var_dump($data);
    $this->load->view('_admin/main', $data);
  }

  public function update_infra()
  {
    $post = $this->input->post();
    $this->infrastruktur_m->update_infra($post);

    redirect('admin/infrastruktur/detile/'.$post["desa_id"]);
  }

  public function delete_infra()
  {
    check_permission();
    $desa_id = $this->uri->segment(4);
    $id_infra = $this->uri->segment(5);
    $this->infrastruktur_m->delete_infra($id_infra);

    redirect('admin/infrastruktur/detile/'.$desa_id);
  }
}
