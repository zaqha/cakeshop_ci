<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('product_model', 'product');
		$this->load->model('user_model', 'user');

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


	public function check_password()
	{

		$check = $this->user->getOne(array('acc' => $_POST['acc'], 'password' => $_POST['pw']));
		if ($check != null) {
			$newdata = array(
				'username'  => $check['name'],
				'logged_in' => TRUE
			);

			$this->session->set_userdata($newdata);

			echo json_encode('success');
		}
	}
}
