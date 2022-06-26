<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('product_model','product');

				// $newdata = array(
				// 	'username'  => 'johndoe',
				// 	'email'     => 'johndoe@some-site.com',
				// 	'logged_in' => TRUE
				// );
				
				// $this->session->set_userdata($newdata);
    }

	public function index()
	{
        $data = array();
        $data['products'] = $this->product->getProducts(['status'=>1]);
        $this->load->view('index.php', $data);
	}
}
