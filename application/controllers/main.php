<?php
	class Main extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('my_model');
		}

		public function index()
		{
			$data['cat']=$this->my_model->show();
			$this->load->view('itemView',$data);	
			
		}
	}
?>