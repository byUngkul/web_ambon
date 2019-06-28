<?php

class Kegiatan extends CI_Controller {
	// public function __construct()
	// {
	// 	parent::__construct();
	// 	$this->load->model("article_m");
	// 	$this->load->model("comment_m");
	// }

	public function index($offset = 0)
	{
		// Pagination Config	
		$config['base_url'] = base_url() . 'kegiatan/index/';
		$config['total_rows'] = $this->db->where('category_id', '1')
																			->where('posts.published', 'yes')
																			->count_all_results('posts');
		$config['per_page'] = 3;
		$config['uri_segment'] = 3;
		$config['attributes'] = array('class' => 'pagination-link');

		// Init Pagination
		$this->pagination->initialize($config);
		$category_id = 1;

		$data['posts'] = $this->article_m->get_posts(FALSE, $config['per_page'], $offset, $category_id);
		// $data['posts'] = $this->article_m->get_posts();

		$data['title'] = "Kegiatan";
		$data['desas'] = $this->desas_m->get_all_desas();
		$data['kecamatan'] = $this->kecamatan_m->get_data();

		$this->load->view('_blocks/header');
		$this->load->view('_blocks/nav_post');
		$this->load->view('kegiatan/index', $data);
		$this->load->view('_blocks/footer');
	}

	public function index_potensi($offset = 0)
	{
		// Pagination Config	
		$config['base_url'] = base_url() . 'kegiatan/index_potensi/';
		$config['total_rows'] = $this->db->where('category_id', '2')
																			->where('posts.published', 'yes')
																			->count_all_results('posts');
		$config['per_page'] = 3;
		$config['uri_segment'] = 3;
		$config['attributes'] = array('class' => 'pagination-link');

		// Init Pagination
		$this->pagination->initialize($config);
		$category_id = 2;

		$data['posts'] = $this->article_m->get_posts(FALSE, $config['per_page'], $offset, $category_id);
		// $data['posts'] = $this->article_m->get_posts();

		$data['title'] = "Potensi";
		$data['desas'] = $this->desas_m->get_all_desas();
		$data['kecamatan'] = $this->kecamatan_m->get_data();

		$this->load->view('_blocks/header');
		$this->load->view('_blocks/nav_post');
		$this->load->view('kegiatan/index', $data);
		$this->load->view('_blocks/footer');
	}

	public function view($slug = NULL) 
	{
		$data['post'] = $this->article_m->get_posts($slug);
		$post_id = $data['post']['id'];
		$desa_id = $data['post']['desa_id'];
		// var_dump($post_id);
		$data['comments'] = $this->comment_m->get_comments($post_id);
		$data['kecamatan'] = $this->kecamatan_m->get_data();
		$data['recent'] = $this->article_m->get_posts_single(NULL, $desa_id);

		if(empty($data['post'])){
			show_404();
		}

		// $p = $this->article_m->get_posts($slug);

		// var_dump($p);
		$data['title'] = $data['post']['title'];

		$this->load->view('_blocks/header');
		$this->load->view('_blocks/nav_post');
		$this->load->view('kegiatan/view', $data);
		$this->load->view('_blocks/footer');
	}
}
