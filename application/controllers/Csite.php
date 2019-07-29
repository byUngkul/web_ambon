<?php

class Csite extends CI_Controller
{
  public function home($slug = NULL)
  {
		$data['pemerintah'] = $this->desas_m->get_once($slug)->row();
		$id_pem = $data['pemerintah'];
		$data['orgChart'] = $this->desas_m->get_organisasi(NULL, $id_pem->desa_id, NULL)->result_array();
		
		$data['slug'] = $slug;
		// var_dump($data['orgChart']);

    $this->load->view('_csite/header', $data);
		$this->load->view('_csite/nav', $data);
		$this->load->view('_csite/home', $data);
		$this->load->view('_csite/footer', $data);
    
  }

  public function index($offset = 0)
	{
    	
    $slug2 = $this->uri->segment(2);
    $data['title'] = "Kegiatan";
		$data['desas'] = $this->desas_m->get_all_desas();
		$data['pemerintah'] = $this->desas_m->get_once($slug2)->row();
		$id_pem = $data['pemerintah'];
		// var_dump($data['pemerintah']);
		// Pagination Config
		$config['base_url'] = base_url() . 'kegiatan/index/';
		$config['total_rows'] = $this->db->where('p.category_id', '1')
																			->where('p.published', 'yes')
																			->where('d.slug', $slug2)
																			->join('desa d', 'd.desa_id = p.desa_id')
																			->count_all_results('posts p');
		$config['per_page'] = 3;
		$config['uri_segment'] = 3;
		$config['attributes'] = array('class' => 'pagination-link');

		// Init Pagination
		$this->pagination->initialize($config);
		$category_id = 1;

		$data['posts'] = $this->article_m->get_posts(FALSE, $config['per_page'], $offset, $category_id, $id_pem->desa_id);
		// $data['posts'] = $this->article_m->get_posts();

		

		$this->load->view('_csite/header', $data);
		$this->load->view('_csite/nav_post', $data);
		$this->load->view('kegiatan/index', $data);
		$this->load->view('_csite/footer');
	}

	

	public function view($slug = NULL) 
	{
		$data['post'] = $this->article_m->get_posts($slug);
		$post_id = $data['post']['id'];
		$desa_id = $data['post']['desa_id'];
		// var_dump($post_id);
		$data['comments'] = $this->comment_m->get_comments($post_id);
		$data['kecamatan'] = $this->desas_m->get_desa($desa_id, NULL);
		$data['recent'] = $this->article_m->get_posts_single(NULL, $desa_id);

		if(empty($data['post'])){
			show_404();
		}

		// $p = $this->article_m->get_posts($slug);

		// var_dump($p);
		$data['title'] = $data['post']['title'];

		$this->load->view('_csite/header', $data);
		$this->load->view('_csite/nav_post', $data);
		$this->load->view('kegiatan/view', $data);
		$this->load->view('_csite/footer');
	}
}
