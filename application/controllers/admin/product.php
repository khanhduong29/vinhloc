<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	  
	class Product extends CI_Controller {

		protected $_data;

	  	// Hàm khởi tạo
	    function __construct() {
	        parent::__construct();
	        $this->load->helper('url');
	    }
	    public function list_pro() {
	    	$this->_data['main'] = 'admin/product/list';
        	$this->_data['title'] = 'Danh sách sản phẩm';
        	$this->load->model('Mproduct');
        	$this->_data['products'] = $this->Mproduct->getList();

			$this->load->view('layouts/main_admin', $this->_data);
	    }
	    public function add() {
	    	$this->_data['main'] = 'admin/product/add';
        	$this->_data['title'] = 'Thêm sản phẩm';

        	$this->form_validation->set_rules("username", "Username", "required|xss_clean|trim|min_length[4]|callback_check_user");
		    $this->form_validation->set_rules("password", "Password", "required|matches[password2]|trim|xss_clean");
		    $this->form_validation->set_rules("email", "Email", "required|trim|xss_clean|valid_email|callback_check_email");
		 
		    if ($this->form_validation->run() == TRUE) {
		        $this->load->model("Mproduct");
		        $data_insert = array(
		            "id" => $this->input->post("id"),
		            "id_cat" => $this->input->post("id_cat"),
		            "slug"    => $this->input->post("slug"),
		            "name"    => $this->input->post("name"),
		            "price"    => $this->input->post("price"),
		            "image"    => $this->input->post("image"),
		            "status"    => $this->input->post("status"),
		        );
		        $this->Mproduct->insert($data_insert);
		        $this->session->set_flashdata("flash_mess", "Added");
		        redirect(base_url() . "admin/product/list_pro");
		        
		    }


			$this->load->view('layouts/main_admin', $this->_data);
	    }
	    public function edit() {
	    	$this->_data['main'] = 'admin/product/edit';
        	$this->_data['title'] = 'Sửa sản phẩm';
			$this->load->view('layouts/main_admin', $this->_data);
	    }
	    public function delete(){

	    }
	}

 ?>