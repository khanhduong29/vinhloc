<?php 

	// if (!defined('BASEPATH'))
	// exit('No direct script access allowed');

	defined('BASEPATH') OR exit('No direct script access allowed');
	  
	class Admin extends CI_Controller {
	  	// Hàm khởi tạo
	    function __construct() {
	        parent::__construct();
	    }
	    public function index() {
	    	$data['main'] = 'admin/index';
        	$data['title'] = 'Giới thiệu';
			$this->load->view('layouts/main_admin', $data);
	    }
	}

 ?>