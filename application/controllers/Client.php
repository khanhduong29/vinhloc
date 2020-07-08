<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller {

	// Hàm khởi tạo
    function __construct() {
		parent::__construct();
		$this->load->helper('url');
	    $this->load->model("Mproduct");
		$this->load->model('Mcategory');
		$this->load->model('Cart_model');
    }
	public function index()
	{
		$data['main'] = 'client/index';
        $data['title'] = 'Vĩnh Lộc Luxyry';
        $data['list_data'] = $this->Mproduct->getList();
		$data['category'] = $this->Mcategory->getList();
		$this->load->view('layouts/main', $data);
	}
	public function about()
	{
		$data['main'] = 'client/about';
        $data['title'] = 'Giới thiệu';
        $data['category'] = $this->Mcategory->getList();
		$data['list_data'] = $this->Mproduct->getList();
		$this->load->view('layouts/main', $data);
	}
	public function category()
	{
		$this->load->library('pagination');
		//cấu hình phân trang
		$config = array();
		//lấy ra all bản ghi
        $config['total_rows'] = $this->Mcategory->getNumDataDetail('category',array(array('key'=>'status','compare'=>'=','value'=>1)));
    	$config['base_url'] = base_url('client/category');
    	$config['per_page'] = 4;
    	$config['uri_segment'] = 3 ;
    	$config['next_link']   = "Next";
		$config['prev_link']   = "Prev";
		$segment = $this->uri->segment(3);
		$segment = intval($segment);
		$data['main'] = 'client/category';
        $data['title'] = 'Sản phẩm';
        $data['page'] = $config['total_rows']/$config['per_page'];
        $data['totalrow'] = $config['total_rows'];
		$limit = $segment.','.$config['per_page'];
		//đổ dữ liệu sản phẩm
		$data['list_data'] = $this->Mcategory->getDataDetail(array(
            'table'=>'product',
            'where'=>array(array('key'=>'status','compare'=>'=','value'=>1)),
            'limit'=>$limit
        ));
        $data['category'] = $this->Mproduct->getDataDetail(array(
            'table'=>'category',
            'where'=>array(array('key'=>'status','compare'=>'=','value'=>1))
        ));
		$this->pagination->initialize($config);
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
        $data['list_data'] = $this->Mproduct->getList();
		$this->load->view('layouts/main', $data);
	}
	public function contact()
	{
		$data['main'] = 'client/contact';
        $data['title'] = 'Liên hệ';
        $data['category'] = $this->Mcategory->getList();
        $data['list_data'] = $this->Mproduct->getList();
		$this->load->view('layouts/main', $data);
	}
	public function product_detail()
	{
		$data['main'] = 'client/product-detail';
        $data['title'] = 'Đèn mâm ốp trần';
        $data['category'] = $this->Mcategory->getList();
        $data['list_data'] = $this->Mproduct->getList();
		$this->load->view('layouts/main', $data);

	}
	public function product()
	{
		$this->load->library('pagination');
		//cấu hình phân trang
		$config = array();
		//lấy ra all bản ghi
        $config['total_rows'] = $this->Mproduct->getNumDataDetail('product',array(array('key'=>'status','compare'=>'=','value'=>1)));
    	$config['base_url'] = base_url('client/product');
    	$config['per_page'] = 4;
    	$config['uri_segment'] = 3 ;
    	$config['next_link']   = "Next";
		$config['prev_link']   = "Prev";
		$segment = $this->uri->segment(3);
		$segment = intval($segment);
		$data['main'] = 'client/product';
        $data['title'] = 'Sản phẩm';
        $data['page'] = $config['total_rows']/$config['per_page'];
        $data['totalrow'] = $config['total_rows'];
		$limit = $segment.','.$config['per_page'];
		//đổ dữ liệu sản phẩm
		$data['list_data'] = $this->Mproduct->getDataDetail(array(
            'table'=>'product',
            'where'=>array(array('key'=>'status','compare'=>'=','value'=>1)),
            'limit'=>$limit
        ));
        $data['category'] = $this->Mproduct->getDataDetail(array(
            'table'=>'category',
            'where'=>array(array('key'=>'status','compare'=>'=','value'=>1))
		));
		if(isset($_POST['add-Cart'])) {
			$this->Cart_model->insert();
		}
		$this->pagination->initialize($config);
		$this->load->view('layouts/main', $data);
	}
	public function search(){
        $segment =3;
        $pp= (int)$this->Mproduct->uri->segment($segment,0);
        if(!$pp) $pp=0;
        $datasearch = $this->Mproduct->input->get(); // Lấy dữ liệu từ form
        $q=@$datasearch && @$datasearch['q']?$datasearch['q']:"";
        $q=addslashes($q);
        $where=array();
        if(!empty($q)){
            array_push($where, array("key"=>"name",'compare'=>'like','value'=>$q));
        }
        array_push($where, array('key'=>'act','compare'=>'=','value'=>1));
        $config['base_url']= base_url('client/product');// Điền link của bạn vào
        $config['per_page']= 8;
        $config['total_rows']=$this->Mproduct->getNumDataDetail('product',$where);
        $limit = $pp.",".$config['per_page'];
        $data['list_data'] = $this->Mproduct->getDataDetail(array(
            'table'=>'product',
            'where'=>$where,
            'limit'=>$limit
        ));
        $config['reuse_query_string'] = true;
        $config['uri_segment']=3;
        $data['totalrow'] = $config['total_rows'];
        $data['pages'] = $config['total_rows']/$config['per_page'];
        $this->Mproduct->pagination->initialize($config);
        $data['keyword']=$q;
        $dataitem['numrow'] = $config['total_rows'];
        $data['dataitem'] = $dataitem;

        // Load view mà bạn muốn hiển thị 
        $this->load->view('layouts/main', $data);
    }
	public function service()
	{
		$data['main'] = 'client/service';
        $data['title'] = 'Dịch vụ';
        $data['category'] = $this->Mcategory->getList();
        $data['list_data'] = $this->Mproduct->getList();
		$this->load->view('layouts/main', $data);
	}
	public function blog_detail() {
		$data['main'] = 'client/blog_detail';
		$data['title'] = 'tên chia sẻ';
		$data['category'] = $this->Mcategory->getList();
		$data['list_data'] = $this->Mproduct->getList();
	}
}
