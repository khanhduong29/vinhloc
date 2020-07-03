<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	  
	class construction extends CI_Controller {

		protected $_data;

	  	// Hàm khởi tạo
	    function __construct() {
	        parent::__construct();
	        $this->load->model("Mconstruction");
	    }
	    // hiển thị danh sách công trình
	    public function list_con() {
	    	$this->_data['main'] = 'admin/construction/list';
        	$this->_data['title'] = 'Danh sách công trình';
        	$this->_data['constructions'] = $this->Mconstruction->getList();

			$this->load->view('layouts/main_admin', $this->_data);
	    }
	    // thêm công trình
	    public function add() {
	    	$this->_data['main'] = 'admin/construction/add';
        	$this->_data['title'] = 'Thêm công trình';	    

		    $this->form_validation->set_rules('name', 'Tên công trình', 'required');

		    if ($this->form_validation->run() === true){
		        $this->Mconstruction->insert();
		        redirect(base_url() . "admin/construction/list_con");
		    }

			$this->load->view('layouts/main_admin', $this->_data);
	    }
	    // sửa công trình
	    public function edit($id) {
	    	$this->_data['main'] = 'admin/construction/edit';
        	$this->_data['title'] = 'Sửa công trình';	

        	$this->_data['constructions'] = $this->Mconstruction->getId($id);
		    $this->form_validation->set_rules('name', 'Name', 'required');
		    if ($this->form_validation->run() == TRUE) {
	            $this->Mconstruction->updateTable($id);
	            $this->session->set_flashdata("flash_mess", "Update Success");
	            redirect(base_url() . "admin/construction/list_con");
	        }

			$this->load->view('layouts/main_admin', $this->_data);
	    }
	    // xóa công trình
	    public function delete($id) {
	        $this->Mconstruction->deleteCol($id);
	        $this->session->set_flashdata("flash_mess", "Delete Success");
	        redirect(base_url() . "admin/construction/list_con");
	 	}
	}

 ?>