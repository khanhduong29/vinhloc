<?php 

	class Mbrand extends MY_Model{

		protected $_table = 'brand';

		// lấy dữ liệu của bảng
		public function getList(){
	        $this->db->select('id, name, image, status, created_at');
	        return $this->db->get($this->_table)->result_array();
	    }
	    public function insert(){ 
		    $slug = url_title($this->convert_vi_to_en($this->input->post('name')), 'dash', TRUE);
		    if (isset($_FILES['file']['name'])) {
		        $config['upload_path'] = 'Uploads';
		        $config['allowed_types'] = 'jpg|jpeg|png|gif';
		        $config['file_name'] = $_FILES['file']['name'];

		        $this->load->library('upload', $config);
		        $this->upload->initialize($config);

		        if ($this->upload->do_upload('file')) {
		          	$uploadData = $this->upload->data();
		          	$img = $uploadData['file_name'];
		        } else{
		          	$img = '';
		        }
		    }else{
		        $img = '';
		    }
		    $status = $this->input->post("status");
		    if($status){
		    	$status = 1;
		    }else{
		    	$status = 0;
		    }
		    $data = array(
		        "id" => $this->input->post("id"),
	            "name"    => $this->input->post("name"),
	            "image"    => $img,
	            "status"    => $status,
		    );

		    return $this->db->insert($this->_table, $data);
	    }

	    // lấy 1 bản ghi trong bảng
		public function getId($id){
	        $this->db->where("id", $id);
	        return $this->db->get($this->_table)->row_array();
	   	}
	   	// cập nhật nhãn hiệu
	   	public function updateTable($id){
	   		$pro = $this->getId($id);
	   		$slug = url_title($this->convert_vi_to_en($this->input->post('name')), 'dash', TRUE);
	   		if (isset($_FILES['file']['name'])) {
		        $config['upload_path'] = 'Uploads';
		        $config['allowed_types'] = 'jpg|jpeg|png|gif';
		        $config['file_name'] = $_FILES['file']['name'];

		        $this->load->library('upload', $config);
		        $this->upload->initialize($config);

		        if ($this->upload->do_upload('file')) {
		          	$uploadData = $this->upload->data();
		          	$img = $uploadData['file_name'];
		        } else{
		          	$img = $pro['image'];
		        }
		    }
		    if($_FILES['file']['name'] == ''){
		    	$img = $pro['image'];
		    }
	   		$status = $this->input->post("status");
		    if($status){
		    	$status = 1;
		    }else{
		    	$status = 0;
		    }
	   		$data_update = array(
	            "name"    => $this->input->post("name"),
	            "image"    => $img,
	            "status"    => $status,
            );
	        $this->db->where("id", $id);
	        $this->db->update($this->_table, $data_update);

		}
		// xóa nhãn hiệu trong bảng
		function deleteCol($id){
			$this->db->where("id", $id);
			$this->db->delete($this->_table);
		}

	   
	 
	   	public function countAll(){
	        return $this->db->count_all($this->_table); 
	    }

	}

 ?>