<?php 
	class User_model extends MY_Model {
		public $table = 'user';

		function __construct() {
            parent::__construct();
        }
		public function insert() {
			$value = array(
				'name' => $this->input->post('name'),
				'email' =>  $this->input->post('email'),
				'phone' =>  $this->input->post('phone'),
				'password' => md5($this->input->post('password'))
			);
			return $this->db->insert($this->table,$value);
		}

		public function check_login($email,$password) {
			$where = array('email' => $email,'password' => $password);
			$this->db->where($where);
			$query = $this->db->get($this->table);
			if($query->num_rows() >0) {
				return true;
			}
			return false;
		}
		public function get_user_info($where = array())
		{
			//tao dieu kien cho cau truy van
			$this->db->where($where);
			$result = $this->db->get('user');
			return $result->row();
		}
	}
?>
