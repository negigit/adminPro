<?php
	class Main extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('category');
		}

		public function index()
		{
			$data['cat']=$this->category->get_all();
			$this->load->view('itemView',$data);	
			
		}
	}
?>