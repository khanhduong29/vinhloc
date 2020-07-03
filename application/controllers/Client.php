<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller {

	// Hàm khởi tạo
    function __construct() {
		parent::__construct();
		$this->load->helper('url');
	    $this->load->model("Mproduct");
		$this->load->model('Mcategory');
    }
	public function index()
	{
		$data['main'] = 'client/index';
        $data['title'] = 'Vĩnh Lộc Luxyry';
        $data['product'] = $this->Mproduct->getList();
		$data['category'] = $this->Mcategory->getList();
		$this->load->view('layouts/main', $data);
	}
	public function about()
	{
		$data['main'] = 'client/about';
        $data['title'] = 'Giới thiệu';
        $data['category'] = $this->Mcategory->getList();
		
		$this->load->view('layouts/main', $data);
	}
	public function category()
	{
		
		// $input['where'] = 
		$data['main'] = 'client/category';
        $data['title'] = 'Đèn mâm ốp trần';
        // $this->load->model('Mcategory');
       	$data['category'] = $this->Mcategory->getList();
		$data['title'] = 'Đèn mâm ốp trần';
		$data['product'] = $this->Mproduct->getList();
		$data['category'] = $this->Mcategory->getList();
		$this->load->view('layouts/main', $data);

	}
	public function checkout()
	{
		$data['main'] = 'client/checkout';
        $data['title'] = 'Thanh toán';
        $data['category'] = $this->Mcategory->getList();
		$this->load->view('layouts/main', $data);
	}
	public function construction()
	{
		$data['main'] = 'client/construction';
        $data['title'] = 'Công trình';
        // $this->load->model('Mconstruction');
        // $data['construction'] = $this->Mconstruction->get_list();
        // $data['product'] = $this->Mproduct->getList();
        $data['category'] = $this->Mcategory->getList();

		$this->load->view('layouts/main', $data);
	}
	public function contact()
	{
		$data['main'] = 'client/contact';
        $data['title'] = 'Liên hệ';
        $data['category'] = $this->Mcategory->getList();
		$this->load->view('layouts/main', $data);
	}
	public function product_detail()
	{
		$data['main'] = 'client/product-detail';
        $data['title'] = 'Đèn mâm ốp trần';
        $data['category'] = $this->Mcategory->getList();
		$this->load->view('layouts/main', $data);
	}
	public function product()
	{
		// $total_rows = $this->Mproduct->get_total();
		// $this->data['$total_rows'] = $total_rows

		$this->load->library('pagination');
		$config = array();
    	$config['total_rows'] = $this->Mproduct->countAll();//lấy ra tất cả bản ghi
    	$config['base_url'] = base_url('client/product');
    	$config['per_page'] = 2;//số sản phẩm trên 1 trang;
    	$config['uri_segment'] = 3 ;//hiển thị số trang trên url
    	$config['next_link']   = "Next";
		$config['prev_link']   = "Prev";
		$this->pagination->initialize($config);//khởi tạo	
		$segment = $this->uri->segment(3);
		$segment = intval($segment);
		$input = array();
		$input['limit'] = array($config['per_page'],$segment);
		//
		$data['main'] = 'client/product';
        $data['title'] = 'Sản phẩm';
        $this->load->model('Mproduct');
        $data['product'] = $this->Mproduct->getList();
        $data['list'] = $this->Mproduct->getList($input);
        $data['category'] = $this->Mcategory->getList();
		$this->load->model('Mproduct');
		$where = $this->db->where('status',1);
		$data['list'] = $this->Mproduct->getList($where);
		$data['category'] = $this->Mcategory->getList();

		$this->load->view('layouts/main', $data);
	}
	public function service()
	{
		$data['main'] = 'client/service';
        $data['title'] = 'Dịch vụ';
        $data['category'] = $this->Mcategory->getList();
		$this->load->view('layouts/main', $data);
	}
	public function blog_detail() {
		$data['main'] = 'client/blog_detail';
		$data['title'] = 'tên chia sẻ';
		$data['category'] = $this->Mcategory->getList();
		$this->load->view('layouts/main',$data);
	}
	public function cart()
	{
		$data['main'] = 'client/cart';
        $data['title'] = 'Cart';
        $data['category'] = $this->Mcategory->getList();
		$this->load->view('layouts/main', $data);
	}
}
