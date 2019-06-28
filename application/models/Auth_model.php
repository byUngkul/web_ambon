<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model{
   public function login($post)
   {
      $query = $this->db->get_where('users', array('username' => $post['username'], 'password' => sha1($post['password'])));
      return $query;
   }

   public function get($id = null)
   {
      $this->db->from('users');
      if ($id != null) {
         $this->db->where('user_id', $id);
      }
      $query = $this->db->get();
      return $query;
   }

   public function add($post)
   {      
      $data = array(
         'username' => $post['username'],
         'password' => sha1($post['password']),
         'name' => $post['nama'],
         'active' => $post['active'],
         'level' => $post['level'],
         'desa_id' => $post['desa'] != "" ? $post['desa'] : null
      );
      
      return $this->db->insert('users', $data);
   }

   public function update($post)
   {
      $data['user_id'] = $post['user_id'];
      $data['username'] = $post['username'];
      $data['name'] = $post['nama'];
      if(!empty($post['password'])) {
         $data['password'] = sha1($post['password']);
      }
      $data['active'] = $post['active'];
      $data['level'] = $post['level'];
      $data['desa_id'] = $post['desa'] != "" ? $post['desa'] : null;
      
      var_dump($data);
      $this->db->where('user_id', $post['user_id']);
      return $this->db->update('users', $data);
   }

   public function delete($id)
   {
      $this->db->where('user_id', $id);
      $this->db->delete('users');
   }
}