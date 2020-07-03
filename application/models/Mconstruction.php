<?php 
	class Mconstruction extends CI_Model{
		protected $_table = 'construction';
		public function __construct(){
			parent::__construct();
		}
		public function get_list(){
			$this->db->select('id','name','des','image');
			return $this->db->get($this->_table)->result_array();

		}
		public function countAll(){
			return $this->db->coun_all($this->_table);
		}
	}

 ?>