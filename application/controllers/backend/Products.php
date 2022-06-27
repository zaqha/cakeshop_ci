<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Products extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('product_model', 'product');
		$this->load->model('user_model', 'user');
	}

	public function index()
	{
		$data = array();
    $data['produts']=$this->product->getProducts(['status'=>1]);
		$this->load->view('backend/products.php', $data);
	}

	public function create()
	{
		$data = array();
		$data['edit_product']=[];
		$this->load->view('backend/products_create.php', $data);
	}


	public function save()
	{
		$data = array();

		// var_dump($_POST);
		var_dump($_FILES);


		if(isset($_FILES['img']['tmp_name'])){
			move_uploaded_file($_FILES['img']['tmp_name'],base_url('assets/img/').$_FILES['img']['name']);
			$row['img']=$_FILES['img']['name'];
			// $db->save($row);
		}

		$dataArr['status'] = "success";
		// $this->com_tax_organs_m->insert($saveData);
		// $dataArr['url'] = base_url("base/tax_organs"); //返回頁面
		echo json_encode($dataArr);
	}

}
