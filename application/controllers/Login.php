<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Login extends MY_Controller {
		function __construct() {
			parent::__construct();
			$this->load->model('User_model');
		}
		public function login()
		{
			$data['main'] = 'client/login';
			$data['title'] = 'Đăng nhập';
			$this->load->view('layouts/main', $data);
		}
		public function register()
		{
			$data['main'] = 'client/register';
			$data['title'] = 'Đăng ký';
			$this->load->view('layouts/main', $data);
		}

	}
?>
