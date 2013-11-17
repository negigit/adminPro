<?php
  class Categories extends CI_Controller
  {
    public function __construct()
    {
      parent::__construct();
      $this->load->model('category');
      $this->load->helper('url');
    }

    public function index()
    {
      $data['categories']=$this->category->get_all();
      $this->load->view('layouts/header');
      $this->load->view('categories/index',$data);
      $this->load->view('layouts/footer');
    }
    
    public function add()
    {
      $this->load->view('layouts/header');
      $this->load->view('categories/add');
      $this->load->view('layouts/footer');
    }
    public function save()
    {
      $this->category->save_category($this->input->post());
    }
    public function edit()
    {
    
    }
    public function update()
    {
    
    }
    public function delete()
    {
      
    }
  }
?>