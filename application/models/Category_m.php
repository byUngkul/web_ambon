<?php

class Category_m extends CI_Model {
  
  public function list_category() {
    $this->db->select('*');
		$this->db->from('categories');
		$this->db->order_by('id','ASC');
		$query = $this->db->get();
		return $query->result(); 
	}
	
	public function get_cat($id) {
		$query = $this->db->get_where('categories', array('id' => $id));
		return $query->row();
	}
	
	public function add() {
		$data = array(
				'user_id' => '0',
				'name' => $this->input->post('name')	
		);

		$result = $this->db->insert('categories', $data);
    return $result;
	}

	public function update() {
		$data = array(
			'id' => $this->input->post('id'),
			'user_id' => '0',
			'name' => $this->input->post('name')	
		);

		$this->db->where('id', $this->input->post('id'));
		$result = $this->db->update('categories', $data);
		return $result;
	}

	public function delete($id){
		$this->db->where('id', $id);
		$result = $this->db->delete('categories');
		return $result;
	}
}
