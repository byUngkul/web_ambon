<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Menu extends CI_Model{

  /**
   * ==== View Menu sidebar ====
   */
  function parent_menu()
  {
    $this->db->where('menuparentid', '');
    $this->db->order_by('menusort', 'asc');
    $result = $this->db->get('menu');
    return $result;
  }

  function child_menu($id)
  {
    $this->db->where('menuparentid', $id);
    $this->db->order_by('menusort', 'asc');
    $result = $this->db->get('menu');
    return $result;
  }

  function get_all()
  {
    $this->db->order_by('menusort', 'asc');
    $result = $this->db->get('menu');
    return $result; 
  }

  function get_resource($id_menu = null)
  {
    $this->db->where('id_menu', $id_menu);
    $this->db->order_by('id_resource', 'asc');
    $result = $this->db->get('resource');
    return $result;
  }

  function allow($userid = NULL)
  {
    // $this->db->select('r.link_resource');
    $this->db->join('resource r', 'r.id_resource = p.id_resource');
    $this->db->join('users u', 'u.user_id = p.id_user');
    $this->db->where('p.id_user', $userid);
    $result = $this->db->get('permission p');
    return $result;
  }
}