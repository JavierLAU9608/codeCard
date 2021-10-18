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

	public function store(){
        $name = $this->input->post("name");
        $description = $this->input->post("description");
        $price = $this->input->post("price");
        $amount = $this->input->post("amount");

		$data = array(
			'name' => $name,
			'description' => $description,
			'price' => $price,
			'amount' => $amount
			
		);
		if($this->Card_model->save($data)){
			redirect(base_url()."welcome");
		}
			else{
				$this->session->set_flashdata("error","No se pudo guardar la Informacion ");
				redirect (base_url()."welcome");
			}
    }

	public function product($id)
	{
       /* $data = array(
            'secc' => $this->Card_model->product($id)
            );
		*/	
		$data = array(
            'secc' => $this->Card_model->product($id),
            );
            
			$this->load->view('layouts/header');
			$this->load->view('admin/categorias/test',$data);
			$this->load->view('layouts/footer');
    }
	public function delete($id){
        if($this->Card_model->remove($id)){
		
            redirect(base_url()."welcome");
        }
            else{
                $this->session->set_flashdata("error","No se pudo eliminar la seccion de base ");
                redirect (base_url()."admin/categorias/card");
            }
    }

		
	
}
