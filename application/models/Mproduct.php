<?php 

	class Mproduct extends CI_Model{
		protected $_table = 'product';

	    public function __construct() {
	        parent::__construct();
	    }
	     
	    public function insert($data_insert){
	        $this->db->insert($this->_table,$data_insert);
	    }


	    public function getList(){
	        $this->db->select('id, id_cat, code, slug, name, price, image, status, created_at');
	        return $this->db->get($this->_table)->result_array();
	    }
	 
	   	public function countAll(){
	        return $this->db->count_all($this->_table); 
	    }

	}

 ?>