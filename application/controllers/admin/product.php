<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	  
	class Product extends CI_Controller {
	  	// Hàm khởi tạo
	    function __construct() {
	        parent::__construct();
	    }
	    public function list() {
	    	$data['main'] = 'admin/product/list';
        	$data['title'] = 'Danh sách sản phẩm';
			$this->load->view('layouts/main_admin', $data);
	    }
	    public function add() {
	    	$data['main'] = 'admin/product/add';
        	$data['title'] = 'Thêm sản phẩm';
			$this->load->view('layouts/main_admin', $data);
	    }
	    public function edit() {
	    	$data['main'] = 'admin/product/edit';
        	$data['title'] = 'Sửa sản phẩm';
			$this->load->view('layouts/main_admin', $data);
	    }
	}

 ?>