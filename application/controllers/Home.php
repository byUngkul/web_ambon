<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('_blocks/header');
		$this->load->view('_blocks/nav');
		$this->load->view('v_home');
		$this->load->view('_blocks/footer');
	}
}
