<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Login extends MY_Controller {
		function __construct() {
			parent::__construct();
			$this->load->model('User_model');
		}
		function check_email() {
			$email = $this->input->post('email');
			$where = array('email' => $email);
			if($this->User_model->check_exists($where)) {
				$this->form_validation->set_message(__FUNCTION__,'Email da duoc dang ky');
				return false;
			} 
			return true;
		}

		public function register()
		{
			$this->form_validation->set_rules('name','Ten','required|min_length[8]');
			$this->form_validation->set_rules('email','Email','required|callback_check_email');
			$this->form_validation->set_rules('phone','Phone','required');
			$this->form_validation->set_rules('password','Mat Khau','required');
			$this->form_validation->set_rules('confirm_password','Xac nhan','required');

			if($this->form_validation->run() === true) {
				$this->User_model->insert();
				redirect('login');
			}
			$data['main'] = 'client/register';
			$data['title'] = 'Đăng ký';
			$this->load->view('layouts/main', $data);
		}

		public function check_login()
			{
				//lay du lieu tu form
				$email    = $this->input->post('email');
				$password = $this->input->post('password');
				$password = md5($password);
				$where = array('email' => $email, 'password' => $password);
				if(!$this->User_model->check_exists($where))
				{
					//trả về thông báo lỗi nếu đã tồn tại email này
					$this->form_validation->set_message(__FUNCTION__, 'Đăng nhập không thành công');
					return FALSE;
				}
				return true;
			}
		public function login()
		{
			$this->form_validation->set_rules('email','Email','required');
			$this->form_validation->set_rules('password','Mat Khau','required');
			$this->form_validation->set_rules('submit', 'Đăng nhập', 'callback_check_login');
			if($this->form_validation->run())
				{
					//lay du lieu tu form post sang
					$email = $this->input->post('email');
					$password = $this->input->post('password');
					$password = md5($password);
					$where = array('email' => $email, 'password' => $password);
					//lay thong tin thanh vien
					$user = $this->User_model->get_info_rule($where);
					//luu thong tin thanh vien vao session
					$this->session->set_userdata('login', $user);
					redirect();
				}
			$data['main'] = 'client/login';
			$data['title'] = 'Đăng nhập';
			$this->load->view('layouts/main', $data);
		}
		private function _user_is_login()
				{
					$user_data = $this->session->userdata('login');
					//neu chua login
					if(!$user_data)
					{
						return false;
					}
					return true;
			}
		public function logout()
			{
				if($this->_user_is_login())
				{
				//neu thanh vien da dang nhap thi xoa session login
				$this->session->unset_userdata('login');
				}
				redirect('login');
			}
	}
?>
