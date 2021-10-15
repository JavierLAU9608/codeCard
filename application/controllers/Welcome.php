<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Card_model");
	}

	public function index()
	{	
		$data =array(
			'products' => $this->Card_model->getProducts(),
		);
		$this->load->view('layouts/header');
		$this->load->view('admin/categorias/card',$data);
		$this->load->view('layouts/footer');
	}

		
	
}
