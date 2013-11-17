<?php
	class My_model extends CI_Model
	{
		
		public function show()
		{
			$this->load->database();
			$this->db->select('categories');
			$query=$this->db->get('item');
			return $query->result_array();
			
		}
	}
?>