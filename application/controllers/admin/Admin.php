<?php 
	// if (!defined('BASEPATH'))
	// exit('No direct script access allowed');
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Admin extends CI_Controller {
	  	// Hàm khởi tạo
	    function __construct() {
	        parent::__construct();
	        $this->load->helper('url');
	    }
	    public function index() {
	    	$data['main'] = 'admin/index';
        	$data['title'] = 'Admin';
			$this->load->view('layouts/main_admin', $data);
	    }
	    public function list_pro() {
	    	$data['main'] = 'admin/list';
        	$data['title'] = 'Danh sách';
			$this->load->view('layouts/main_admin', $data);
	    }
	    public function login() {
			$this->load->view('admin/login');
	    }
	}

 ?>