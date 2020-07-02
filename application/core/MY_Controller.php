<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class MY_Controller extends CI_Controller {
    // Bien luu thong tin gui den view
    var $data = array();
 
    /**
     * Ham khoi dong
     */
    function __construct()
    {
        //kế thừa từ CI_Controller
        parent::__construct();
 
        // Xu ly controller
        $controller = $this->uri->segment(1);
        $controller = strtolower($controller);
 
        switch ($controller)
        {
            //Nếu đang truy cập vào trang Admin
            case 'admin':
            {
                //load các file sử dụng nhiều cho trang admin
                //kiểm tra admin đăng nhập hay chưa
                //kiểm tra quyền của admin
                //....
                break;
            }
 
            //Trang chủ
            default:
            {
                //lấy danh sách danh mục
            $this->load->model('category_model');
            $category_list = $this->category_model->get_list(); 
            $this->data['category_list'] =   $category_list;

            //sản phẩm
            $this->load->model('product_model');
            $product_list = $this->product_model->getList(); 
            $this->data['product_list'] =   $product_list;
            //công trình
            $this->load->model('construction_model');
            $construction_list = $this->construction_model->get_list();
            $this->data['construction_list'] = $construction_list;
                break;
            }
        }
 
    }
}
