<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('product_model','product');
        $this->load->model('order_model','order');
        $this->load->model('user_model','user');
    }

    public function index(){
        $data = array();
        $data['orders'] = $this->order->getOrders();
        $this->load->view('order/order_view', $data);
    }

}
