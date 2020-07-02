<?php 

	class Mcategory extends MY_Model{

		protected $_table = 'category';

		// lấy dữ liệu của bảng
		public function getList(){
	        $this->db->select('id, slug, name, status, created_at');
	        return $this->db->get($this->_table)->result_array();
	    }
	    public function insert(){ 
		    $slug = url_title($this->convert_vi_to_en($this->input->post('name')), 'dash', TRUE);
		    $status = $this->input->post("status");
		    if($status){
		    	$status = 1;
		    }else{
		    	$status = 0;
		    }
		    $data = array(
		        "id" => $this->input->post("id"),
	            "slug"    => $slug,
	            "name"    => $this->input->post("name"),
	            "status"    => $status,
		    );

		    return $this->db->insert($this->_table, $data);
	    }

	    // lấy 1 bản ghi trong bảng
		public function getId($id){
	        $this->db->where("id", $id);
	        return $this->db->get($this->_table)->row_array();
	   	}
	   	// cập nhật danh mục
	   	public function updateTable($id){
	   		$slug = url_title($this->convert_vi_to_en($this->input->post('name')), 'dash', TRUE);
	   		$status = $this->input->post("status");
		    if($status){
		    	$status = 1;
		    }else{
		    	$status = 0;
		    }
	   		$data_update = array(
                "id" => $this->input->post("id"),
	            "slug"    => $slug,
	            "name"    => $this->input->post("name"),
	            "status"    => $status,
            );
	        $this->db->where("id", $id);
	        $this->db->update($this->_table, $data_update);

		}
		// xóa danh mục trong bảng
		function deleteCol($id){
			$this->db->where("id", $id);
			$this->db->delete($this->_table);
		}

	   
	 
	   	public function countAll(){
	        return $this->db->count_all($this->_table); 
	    }

	}

 ?>