<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index()
	{
		check_login();
		redirect('auth/login');
	}

	public function login()
	{
		check_login();
		$this->load->view('login');
	}

	public function login_prosess()
	{
		$post = $this->input->post(null, TRUE);
		if (isset($post['login'])) {
			$this->load->model('auth_model');
			$query = $this->auth_model->login($post);
			if ($query->num_rows() > 0) {
				$row = $query->row();
				$params = array(
					'userid' => $row->user_id,
					'level' => $row->level,
					'name' => $row->name,
					'desaid' => $row->desa_id
				);

				$this->session->set_userdata($params);
				echo "<script>
						alert('Selamat datang !');
				</script>";
				redirect('admin/main');
			} else {
				echo "<script>
						alert('Login gagal, cek username & password anda!');
						
				</script>";
				redirect('auth');
			}
		}
	}

	public function logout()
	{
		$params = array('userid', 'level');
		$this->session->unset_userdata($params);
		redirect('auth');
	}
}