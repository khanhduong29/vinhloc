<?php 

	class Mconstruction extends MY_Model{

		protected $_table = 'construction';

		// lấy dữ liệu của bảng
		public function getList(){
	        $this->db->select('id, name, title, des, image, status, created_at');
	        return $this->db->get($this->_table)->result_array();
	    }
	    public function insert(){ 
		    $slug = url_title($this->convert_vi_to_en($this->input->post('name')), 'dash', TRUE);
		    if (isset($_FILES['files']) && $_FILES['files'] != '') {

		    	$data = array();

			    // Count total files
			    $countfiles = count($_FILES['files']['name']);
			 
			    // Looping all files
			    for($i=0;$i<$countfiles;$i++){
			 
			        if(!empty($_FILES['files']['name'][$i])){
			        	
			 
			          	// Define new $_FILES array - $_FILES['file']
			          	// $_FILES['file']['name'] = $_FILES['files']['name'][$i];
			          	// $_FILES['file']['type'] = $_FILES['files']['type'][$i];
			          	// $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
			          	// $_FILES['file']['error'] = $_FILES['files']['error'][$i];
			          	// $_FILES['file']['size'] = $_FILES['files']['size'][$i];

			          	// Set preference
			          	$config['upload_path'] = 'Uploads'; 
			          	$config['allowed_types'] = 'jpg|jpeg|png|gif';
			          	// $config['max_size'] = '40000'; // max_size in kb
			          	$config['file_name'] = $_FILES['files']['name'][$i];
			 			
			          	//Load upload library
			          	$this->load->library('upload');
						$this->upload->initialize($config);

			          	$this->output->enable_profiler(TRUE); 
			 			echo '<pre>';
			            print_r($config);
			            echo '</pre>';
			          	// File upload
			          	if(! $this->upload->do_upload('userfile')){
				          	echo $this->upload->display_errors();
			          	}else{
			          		 
			          		echo 'vào';
			    			die;
				            // Get data about the file
				            $uploadData = $this->upload->data();
				            $filename = $uploadData['file_name'];

				            // Initialize array
				            $data['filenames'][] = $filename;
				            echo '<pre>';
				            print_r($data);
				            echo '</pre>';
				            die;
			          	}
			        }
			 
			    }
		    }else{
		        $img = '';
		    }
		    echo 'ra ngoài';
		    die;
		    $status = $this->input->post("status");
		    if($status){
		    	$status = 1;
		    }else{
		    	$status = 0;
		    }
		    $data = array(
		        "id" => $this->input->post("id"),
	            "name"    => $this->input->post("name"),
	            "title"    => $this->input->post("title"),
	            "des"    => $this->input->post("des"),
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
	   	// cập nhật công trình
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
	            "title"    => $this->input->post("title"),
	            "des"    => $this->input->post("des"),
	            "image"    => $img,
	            "status"    => $status,
            );
	        $this->db->where("id", $id);
	        $this->db->update($this->_table, $data_update);

		}
		// xóa công trình trong bảng
		function deleteCol($id){
			$this->db->where("id", $id);
			$this->db->delete($this->_table);
		}

	   
	 
	   	public function countAll(){
	        return $this->db->count_all($this->_table); 
	    }

	}

 ?>