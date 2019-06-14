<?php
class Article_m extends CI_Model {
  public function __construct()
  {
    $this->load->database();  
  }

  public function get_posts($slug = FALSE, $limit = FALSE, $offset = FALSE, $category_id = NULL) // by category
  {
    if($limit){
      $this->db->limit($limit, $offset);
    }
    
    $this->db->join('users', 'users.id = posts.user_id');
    
    if($slug === FALSE){
      $this->db->order_by('posts.id', 'DESC');
      $this->db->join('categories', 'categories.id = posts.category_id');
      $this->db->where('posts.category_id', $category_id);
      $query = $this->db->get('posts');
      return $query->result_array();
    }

    $query = $this->db->get_where('posts', array('slug' => $slug));
    return $query->row_array();    
  }

  public function get_posts_single($category_id = NULL)
  {
    // $this->db->select('posts.*');
    $this->db->order_by('posts.id', 'DESC');
    $this->db->join('categories', 'categories.id = posts.category_id');
    $this->db->where('posts.category_id', $category_id);
    $this->db->limit('3');
    $query = $this->db->get('posts');
    return $query->result();
  }

  public function get_all_posts() {
    $this->datatables->select('posts.*');
    $this->datatables->from('posts');
    // $this->datatables->join('categories', 'categories.id = posts.category_id');
    $this->datatables->add_column('view', '<a href="javascript:void(0);" class="edit_record btn btn-info" data-code="$1" data-name="$2" data-price="$3" data-category="$4">Edit</a>  <a href="javascript:void(0);" class="delete_record btn btn-danger" data-code="$1">Delete</a>','product_code,product_name,product_price,category_id,category_name');
    return $this->datatables->generate();
  }

  //insert data method
  function insert_posts(){
    $data=array(
      'product_code'        => $this->input->post('product_code'),
      'product_name'        => $this->input->post('product_name'),
      'product_price'       => $this->input->post('price'),
      'product_category_id' => $this->input->post('category')
    );
    $result=$this->db->insert('product', $data);
    return $result;
  }
  //update data method
  function update_posts(){
      $product_code=$this->input->post('product_code');
      $data=array(
        'product_name'         => $this->input->post('product_name'),
        'product_price'        => $this->input->post('price'),
        'product_category_id'  => $this->input->post('category')
      );
      $this->db->where('product_code',$product_code);
      $result=$this->db->update('product', $data);
      return $result;
  }
  //delete data method
  function delete_posts(){
      $product_code=$this->input->post('product_code');
      $this->db->where('product_code',$product_code);
      $result=$this->db->delete('product');
      return $result;
  }
}