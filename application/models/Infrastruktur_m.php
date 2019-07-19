<?php

class Infrastruktur_m extends CI_Model {
	// method get data
	public function get_infra($desa_id = NULL, $jenis_infra = NULL, $id_infra = NULL)
	{       
		$this->db->select('i.id, i.nama_infra, i.value, j.jenis_infra');
		$this->db->join('jenis_infra j', 'j.id_infra = i.id_jenis_infra');
		$this->db->join('desa d', 'd.desa_id = i.id_desa');
		if (!empty($desa_id)) {
				$this->db->where('i.id_desa', $desa_id);
		}

		if (!empty($id_infra)) {
			$this->db->where('id', $id_infra);
		}

		if (!empty($jenis_infra)) {
			$this->db->where('j.jenis_infra', $jenis_infra);
		}

		$result = $this->db->get('infrastruktur_v i');
		return $result;
	}

	public function get_j_infra()
	{
		$result = $this->db->get('jenis_infra');
		return $result;
	}

	public function add_j_infra()
	{
		$data["jenis_infra"] = $this->input->post("jenis_infra");
		$result = $this->db->insert('jenis_infra', $data);

		return $result;
	}

	public function add_infra($post)
	{
		$data = [
			'nama_infra' => $post['nama_infra'],
			'value' => $post['jml_infra'],
			'id_desa' => $post['desa_id'],
			'id_jenis_infra' => $post['j_infra']
		];

		$result = $this->db->insert('infrastruktur_v', $data);
		return $result;
	}

	public function update_infra($post)
	{
		$data = [
			'id' => $post["id_infra"],
			'nama_infra' => $post['nama_infra'],
			'value' => $post['jml_infra']
		];

		$result = $this->db->update('infrastruktur_v', $data, array('id' => $post["id_infra"]));
		return $result;
	}

	public function delete_infra($id)
	{
		$result = $this->db->delete('infrastruktur_v', array('id' => $id));
		return $result;
	}
}