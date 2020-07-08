<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Cart extends CI_Controller {
		function __construct() {
			parent::__construct();
			$this->load->model("Mproduct");
			$this->load->model('Mcategory');
			$this->load->model('Cart_model');
		}
		function cart() {
			$data['main'] = 'client/cart';
			$data['title'] = 'Dịch vụ';
			$data['list_data'] = $this->Mcategory->getList();
			$data['listCart'] = $this->Cart_model->getList();
			$this->load->view('layouts/main', $data);
		}
	}
?>
