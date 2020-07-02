<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	  
	class Product extends CI_Controller {

		protected $_data;

	  	// Hàm khởi tạo
	    function __construct() {
	        parent::__construct();
	        $this->load->helper('url');
	        $this->load->library('upload');
	        $this->load->model("Mproduct");
	    }
	    // hiển thị danh sách sản phẩm
	    public function list_pro() {
	    	$this->_data['main'] = 'admin/product/list';
        	$this->_data['title'] = 'Danh sách sản phẩm';
        	$this->load->model('Mproduct');
        	$this->_data['products'] = $this->Mproduct->getList();

			$this->load->view('layouts/main_admin', $this->_data);
	    }
	    // thêm sản phẩm
	    public function add() {
	    	$this->_data['main'] = 'admin/product/add';
        	$this->_data['title'] = 'Thêm sản phẩm';		    

		    $this->form_validation->set_rules('code', 'Mã sản phẩm', 'required');
		    $this->form_validation->set_rules('name', 'Tên sản phẩm', 'required');

		    if ($this->form_validation->run() === true){
		        $this->Mproduct->insert();
		        redirect(base_url() . "admin/product/list_pro");
		    }

			$this->load->view('layouts/main_admin', $this->_data);
	    }
	    // sửa sản phẩm
	    public function edit($id) {
	    	$this->_data['main'] = 'admin/product/edit';
        	$this->_data['title'] = 'Sửa sản phẩm';

        	$this->_data['products'] = $this->Mproduct->getId($id);
        	$this->form_validation->set_rules('code', 'Code', 'required');
		    $this->form_validation->set_rules('name', 'Name', 'required');
		    if ($this->form_validation->run() == TRUE) {
	            $this->Mproduct->updateTable($id);
	            $this->session->set_flashdata("flash_mess", "Update Success");
	            redirect(base_url() . "admin/product/list_pro");
	        }

			$this->load->view('layouts/main_admin', $this->_data);
	    }
	    // xóa sản phẩm
	    public function delete($id) {
	        $this->Mproduct->deleteCol($id);
	        $this->session->set_flashdata("flash_mess", "Delete Success");
	        redirect(base_url() . "admin/product/list_pro");
	 	}
	}

 ?>