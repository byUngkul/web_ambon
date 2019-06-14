<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['kegiatan'] = $this->article_m->get_posts_single('1');
		$data['potensi'] = $this->article_m->get_posts_single('2');
		$data['desas'] = $this->desas_m->get_all_desas();

		$this->load->view('_blocks/header');
		$this->load->view('_blocks/nav');
		$this->load->view('v_home', $data);
		$this->load->view('_blocks/footer');
	}
}
