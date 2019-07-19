<?php
class Article_m extends CI_Model {
  // public function __construct()
  // {
  //   $this->load->database();  
  // }

  public function get_posts($slug = FALSE, $limit = FALSE, $offset = FALSE, $category_id = NULL) // by category
  {
    if($limit){
      $this->db->limit($limit, $offset);
    }

    if($slug === TRUE) {
      $this->db->select('posts.*, users.user_id, users.name, desa.desa_id, desa.nama as nama_desa, desa.slug as slug_ds');
    }
    
    $this->db->join('users', 'users.user_id = posts.user_id');
    $this->db->join('desa', 'desa.desa_id = posts.desa_id');
    
    if($slug === FALSE){
      $this->db->select('posts.*, users.user_id, users.name, desa.desa_id, desa.nama as nama_desa, desa.slug as slug_ds, categories.id, categories.name as cat_name');
      $this->db->order_by('posts.created_at', 'desc');
      $this->db->join('categories', 'categories.id = posts.category_id');
      $this->db->where('posts.published', 'yes');
      $this->db->where('posts.category_id', $category_id);
      $query = $this->db->get('posts');
      return $query->result_array();
    }

    $query = $this->db->get_where('posts', array('posts.slug' => $slug));
    return $query->row_array();    
  }

  public function get_posts_single($category_id = NULL, $desa_id = NULL)
  {
    $this->db->select('posts.*, desa.desa_id, desa.nama as nama_desa, desa.slug as slug_ds');
    $this->db->order_by('posts.id', 'DESC');
    $this->db->join('categories', 'categories.id = posts.category_id');
    $this->db->join('desa', 'desa.desa_id = posts.desa_id');
    if ($category_id != NULL):
      $this->db->where('posts.category_id', $category_id);
      $this->db->where('posts.published', 'yes');
      $this->db->limit('3');
    elseif ($desa_id != NULL):
      $this->db->where('posts.desa_id', $desa_id);
      $this->db->where('posts.published', 'yes');
      $this->db->limit('4');
    endif;
    $query = $this->db->get('posts');
    return $query->result();
  }

  

  public function get_post_edit($id = null)
  {
    $query = $this->db->get_where('posts', array('id' => $id));
    return $query->row_array();  
  }

  public function get_all_posts() {
    $this->db->select('posts.*, categories.name as categ, users.name');
    $this->db->from('posts');
    $this->db->join('categories', 'categories.id = posts.category_id');
    $this->db->join('users', 'users.user_id = posts.user_id');
    $this->db->order_by('posts.id', 'DESC');
    $query = $this->db->get();

    return $query->result();
  }

  //insert data method
  function insert_posts(){
    $slug = url_title($this->input->post('title'));
    $user = 1;

    $data = array(
      'title'       => $this->input->post('title'),
      'category_id' => $this->input->post('category'),
      'user_id'     => $user,
      'desa_id'     => $this->input->post('desa'),
      'slug'        => $slug,
      'body'        => $this->input->post('body'),
      'post_image'  => $this->_uploadImage(),
      'published'   => $this->input->post('publish') 
    );
    // print_r($data);
    $result = $this->db->insert('posts', $data);
    return $result;
  }

  //update data method
  function update_posts(){
    $slug = url_title($this->input->post('title'));
    $user = 1;

    if (!empty($_FILES["image"]["name"])) {
        $image = $this->_uploadImage();
    } else {
        $image = $this->input->post('image_before');
    }

    $data = array(
      'id'          => $this->input->post('id'),
      'title'       => $this->input->post('title'),
      'category_id' => $this->input->post('category'),
      'user_id'     => $user,
      'desa_id'     => $this->input->post('desa'),
      'slug'        => $slug,
      'body'        => $this->input->post('body'),
      'post_image'  => $image,
      'published'   => $this->input->post('publish') 
    );

    // print_r($data);
    $this->db->where('id', $this->input->post('id'));
    $result = $this->db->update('posts', $data);
    return $result;
  }

  //delete data method
  function delete_posts($id){
      // $id_artiekl = $this->input->post('id');
      $this->db->where('id',$id);
      $result = $this->db->delete('posts');
      return $result;
  }

  private function _uploadImage() {
    $config['upload_path']          = './assets/images/articles/';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['file_name']            = url_title($this->input->post('title'));
    $config['overwrite']			      = true;
    $config['max_size']             = 1024; 
    // $config['max_width']            = 1024;
    // $config['max_height']           = 768;

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('image')) {
        return $this->upload->data("file_name");
    }
    
    return "noimage.jpg";
  }

  private function _deleteImage($id)
  {
      $product = $this->getById($id);
      if ($product->image != "default.jpg") {
        $filename = explode(".", $product->image)[0];
      return array_map('unlink', glob(FCPATH."assets/images/articles/$filename.*"));
      }
  }
}