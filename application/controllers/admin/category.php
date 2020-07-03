<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	  
	class Category extends CI_Controller {

		protected $_data;

	  	// Hàm khởi tạo
	    function __construct() {
	        parent::__construct();
	        $this->load->model("Mcategory");
	    }
	    // hiển thị danh sách danh mục
	    public function list_cat() {
	    	$this->_data['main'] = 'admin/category/list';
        	$this->_data['title'] = 'Danh sách danh mục';
        	$this->load->model('Mcategory');
        	$this->_data['categorys'] = $this->Mcategory->getList();

			$this->load->view('layouts/main_admin', $this->_data);
	    }
	    // thêm danh mục
	    public function add() {
	    	$this->_data['main'] = 'admin/category/add';
        	$this->_data['title'] = 'Thêm danh mục';		    

		    $this->form_validation->set_rules('name', 'Tên danh mục', 'required');

		    if ($this->form_validation->run() === true){
		        $this->Mcategory->insert();
		        redirect(base_url() . "admin/category/list_cat");
		    }

			$this->load->view('layouts/main_admin', $this->_data);
	    }
	    // sửa danh mục
	    public function edit($id) {
	    	$this->_data['main'] = 'admin/category/edit';
        	$this->_data['title'] = 'Sửa danh mục';

        	$this->_data['categorys'] = $this->Mcategory->getId($id);
		    $this->form_validation->set_rules('name', 'Tên danh mục', 'required');
		    if ($this->form_validation->run() == TRUE) {
	            $this->Mcategory->updateTable($id);
	            $this->session->set_flashdata("flash_mess", "Update Success");
	            redirect(base_url() . "admin/category/list_cat");
	        }

			$this->load->view('layouts/main_admin', $this->_data);
	    }
	    // xóa danh mục
	    public function delete($id) {
	        $this->Mcategory->deleteCol($id);
	        $this->session->set_flashdata("flash_mess", "Delete Success");
	        redirect(base_url() . "admin/category/list_cat");
	 	}
	}

 ?>