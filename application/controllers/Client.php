<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller {

	// Hàm khởi tạo
    function __construct() {
		parent::__construct();
		$this->load->helper('url');
	    $this->load->model("Mproduct");
    }
	public function index()
	{
		$data['main'] = 'client/index';
        $data['title'] = 'Vĩnh Lộc Luxyry';
         $this->load->model('Mproduct');
        $data['product'] = $this->Mproduct->getList();
		$this->load->view('layouts/main', $data);
	}
	public function about()
	{
		$data['main'] = 'client/about';
        $data['title'] = 'Giới thiệu';
		$this->load->view('layouts/main', $data);
	}
	public function category()
	{


		$data['main'] = 'client/category';
        $data['title'] = 'Đèn mâm ốp trần';
        $this->load->model('Mcategory');
        $data['category'] = $this->Mcategory->get_list();
		$this->load->view('layouts/main', $data);

	}
	public function checkout()
	{
		$data['main'] = 'client/checkout';
        $data['title'] = 'Thanh toán';
		$this->load->view('layouts/main', $data);
	}
	public function construction()
	{
		$data['main'] = 'client/construction';
        $data['title'] = 'Công trình';
        $this->load->model('Mconstruction');
        $data['construction'] = $this->Mconstruction->get_list();
         $data['product'] = $this->Mproduct->getList();
		$this->load->view('layouts/main', $data);
	}
	public function contact()
	{
		$data['main'] = 'client/contact';
        $data['title'] = 'Liên hệ';
		$this->load->view('layouts/main', $data);
	}
	public function product_detail()
	{
		$data['main'] = 'client/product-detail';
        $data['title'] = 'Đèn mâm ốp trần';
		$this->load->view('layouts/main', $data);
	}
	public function product()
	{
		$data['main'] = 'client/product';
        $data['title'] = 'Sản phẩm';
        $this->load->model('Mproduct');
        $data['product'] = $this->Mproduct->getList();
		
		$this->load->view('layouts/main', $data);
	}
	public function service()
	{
		$data['main'] = 'client/service';
        $data['title'] = 'Dịch vụ';
		$this->load->view('layouts/main', $data);
	}
	public function blog_detail() {
		$data['main'] = 'client/blog_detail';
		$data['title'] = 'tên chia sẻ';
		$this->load->view('layouts/main',$data);
	}
	public function cart()
	{
		$data['main'] = 'client/cart';
        $data['title'] = 'Cart';
		$this->load->view('layouts/main', $data);
	}
}
