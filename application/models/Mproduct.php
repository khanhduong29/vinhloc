<?php 

	class Mproduct extends CI_Model{
		protected $_table = 'product';

	    public function __construct() {
	        parent::__construct();
	    }
	     
	    public function insert(){ 
		    $slug = url_title($this->input->post('name'), 'dash', TRUE);

		    $data = array(
		        "id" => $this->input->post("id"),
	            "code" => $this->input->post("code"),
	            "id_cat" => $this->input->post("id_cat"),
	            "slug"    => $slug,
	            "name"    => $this->input->post("name"),
	            "price"    => $this->input->post("price"),
	            "image"    => $this->input->post("image"),
	            "status"    => $this->input->post("status"),
		    );

		    return $this->db->insert($this->_table, $data);
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