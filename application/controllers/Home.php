<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['kegiatan'] = $this->article_m->get_posts_single('1', NULL);
		$data['desas'] = $this->desas_m->get_all_desas('no');
		$data['kecamatan'] = $this->desas_m->get_desa(null, 'yes');
		// $this->db->query("SELECT organisasi.id, organisasi.id_parent, jabatan.id, pegawai.id, pegawai.nama, jabatan.nama_jb 
		// 																			FROM organisasi 
		// 																			JOIN pegawai ON pegawai.id = organisasi.id_p 
		// 																			JOIN jabatan ON jabatan.id = organisasi.id_j 
		// 																			JOIN desa ON desa.desa_id = organisasi.id_desa 
		// 																			WHERE organisasi.id_desa = 15");
		$this->db->select('o.id, o.id_parent, j.id as id_j, p.id as id_p, p.nama, p.nip, p.tempat_lahir, p.tgl_lahir, p.jenis_kelamin, p.agama, p.pangkat_golongan, p.jabatan, p.telepon, p.image, p.facebook, p.email, p.instagram, j.nama_jb');
		$this->db->join('pegawai p', 'p.id = o.id_p');
		$this->db->join('jabatan j', 'j.id = o.id_j');
		$this->db->join('desa d', 'd.desa_id = o.id_desa');
		$this->db->where('d.is_parent_site', 'yes');
		$data['orgChart'] = $this->db->get('organisasi o')->result_array();

		// echo json_encode($data['orgChart']);
		$this->load->view('_blocks/header', $data);
		$this->load->view('_blocks/nav', $data);
		$this->load->view('v_home', $data);
		$this->load->view('_blocks/footer', $data);
	}
}
