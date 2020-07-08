<?php 
	class Cart_model extends CI_Model {
		protected $table = 'cart';

		function __construct() {
			parent::__construct();
			$this->load->library("cart");
		}
		
		public function getList(){
	        $this->db->select('*');
	        return $this->db->get($this->table)->result_array();
	    }
		public function insert(){
			$data = array(
				"user_id" => $this->input->post('user_id'),
				"pro_name" => $this->input->post('pro_name'),
				"pro_image" => $this->input->post('pro_image'),
				"price" => $this->input->post('pro_price'),
				"quantity" => "1"
			);
			return $this->db->insert($this->table,$data);
		}
	}
?>
