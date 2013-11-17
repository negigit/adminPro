<?php
  class Category extends CI_Model
  {
    function __construct()
    {
      // Call the Model constructor
      parent::__construct();
    }
    
    function get_all()
    {
       $query = $this->db->get('categories');
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
    
    function save_category($category)
    {
      
    }
    
    function delete_category($id)
    {
      
    }
  }
?>