<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['kegiatan'] = $this->article_m->get_posts_single('1', NULL);
		$data['potensi'] = $this->article_m->get_posts_single('2', NULL);
		$data['desas'] = $this->desas_m->get_all_desas();
		$data['kecamatan'] = $this->kecamatan_m->get_data();
		$data['gallery'] = $this->galery_m->get_all_galery();

		$this->load->view('_blocks/header', $data);
		$this->load->view('_blocks/nav', $data);
		$this->load->view('v_home', $data);
		$this->load->view('_blocks/footer', $data);
	}
}
