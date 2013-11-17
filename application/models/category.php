<?php
  class Category extends CI_Model
  {
    var $id;
    var $name;
    var $parent;
    function __construct()
    {
      // Call the Model constructor
      parent::__construct();
      $this->load->database();
      $name = "";
      $parent = true;
       
    }
    
    function get_all()
    {
      $query = $this->db->get('categories');
      return $query->result();
    }
    
    function get_all_parent_categories()
    {
      
    }
    
    function get_by_condition($condition)
    {
    
    }
    
    function get($id)
    {
    
    }
    
    function save_category($category_data)
    {
      $this->name = $category_data['name'];
      $this->parent = $category_data['parent'];
      $this->db->insert('categories',$this);
    }
    
    function delete_category($id)
    {
      
    }
  }
?>