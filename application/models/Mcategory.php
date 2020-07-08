<?php 
	class Mcategory extends MY_Model{

		protected $_table = 'category';

		// lấy dữ liệu của bảng
		public function getList(){
	        $this->db->select('id, slug, name, status, created_at');
	        return $this->db->get($this->_table)->result_array();
	    }
	    public function getNumDataDetail($table,$where){
	        $sql = "select * from $table where 1=1 ";
	        if(is_array($where)){
	            foreach ($where as $w=>$k) {
	                $sql .=" and ".$k['key']." ".$k['compare']." ".$k['value'];
	            }
	        }
	        $q =$this->db->query($sql);
	        return $q->num_rows();
	    }
	    public function getDataDetail($options){
		    $default = array(
		        'table'=>'',
		        'input'=>'*',
		        'order'=>'id',
		        'where'=>array(),
		        'limit'=>'',
		        'escape'=>0,
		        'group_by'=>''
		    );
		    if(is_array($options)){
		        $options = array_replace($default, $options);
		        if(($options['table'] == '')) return;
		        $sql = "select ". $options['input']." from ".$options['table']." where 1 = 1 ";
		        if(is_array($options['where'])){
		            foreach ($options['where'] as $subwhere) {
		                $swhere = $subwhere['value'];
		                if($options['escape']==1){
		                    $swhere = $this->db->escape($swhere);
		                }
		                $con = 'and';
		                $sql .= " ".$con." ".$subwhere['key']." ".$subwhere['compare']." ".$swhere;
		            }
		        }
		        if(!($options['group_by']) == ''){
		            $sql .=" group by ".$options['group_by'];
		        }
		        if(!($options['order']) == ''){
		            $sql .=" order by ".$options['order'];
		        }
		        if(!($options['limit']) == ''){
		            $sql .=" limit ".$options['limit'];
		        }
		        $q = $this->db->query($sql);
		        return $q->result_array();
		    }
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