<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		
		$data['kegiatan'] = $this->article_m->get_posts_single('1', NULL);
		$data['desas'] = $this->desas_m->get_all_desas('no');
		$data['kecamatan'] = $this->desas_m->get_desa(null, 'yes');
		$data['orgChart'] = $this->desas_m->get_organisasi('yes', NULL, NULL)->result_array();

		// var_dump($data['orgChart'][0]);
		$this->load->view('_blocks/header', $data);
		$this->load->view('_blocks/nav', $data);
		$this->load->view('v_home', $data);
		$this->load->view('_blocks/footer', $data);
	}
}
