<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
        $this->load->view('frontend/login.php', $data);
	}
}
