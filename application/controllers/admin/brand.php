<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	  
	class brand extends CI_Controller {

		protected $_data;

	  	// Hàm khởi tạo
	    function __construct() {
	        parent::__construct();
	        $this->load->library('upload');
	        $this->load->model("Mbrand");
	    }
	    // hiển thị danh sách nhãn hiệu
	    public function list_bra() {
	    	$this->_data['main'] = 'admin/brand/list';
        	$this->_data['title'] = 'Danh sách nhãn hiệu';
        	$this->_data['brands'] = $this->Mbrand->getList();

			$this->load->view('layouts/main_admin', $this->_data);
	    }
	    // thêm nhãn hiệu
	    public function add() {
	    	$this->_data['main'] = 'admin/brand/add';
        	$this->_data['title'] = 'Thêm nhãn hiệu';	    

		    $this->form_validation->set_rules('name', 'Tên nhãn hiệu', 'required');

		    if ($this->form_validation->run() === true){
		        $this->Mbrand->insert();
		        redirect(base_url() . "admin/brand/list_bra");
		    }

			$this->load->view('layouts/main_admin', $this->_data);
	    }
	    // sửa nhãn hiệu
	    public function edit($id) {
	    	$this->_data['main'] = 'admin/brand/edit';
        	$this->_data['title'] = 'Sửa nhãn hiệu';

        	$this->_data['brands'] = $this->Mbrand->getId($id);
		    $this->form_validation->set_rules('name', 'Tên nhãn hiệu', 'required');
		    if ($this->form_validation->run() == TRUE) {
	            $this->Mbrand->updateTable($id);
	            $this->session->set_flashdata("flash_mess", "Update Success");
	            redirect(base_url() . "admin/brand/list_bra");
	        }

			$this->load->view('layouts/main_admin', $this->_data);
	    }
	    // xóa nhãn hiệu
	    public function delete($id) {
	        $this->Mbrand->deleteCol($id);
	        $this->session->set_flashdata("flash_mess", "Delete Success");
	        redirect(base_url() . "admin/brand/list_bra");
	 	}
	}

 ?>