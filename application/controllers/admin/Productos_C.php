<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productos_C extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Productos_model");
	}

	public function index()
	{	
		$data =array(
			'products' => $this->Productos_model->getProducts(),
		);
		$this->load->view('layouts/header');
		$this->load->view('admin/productos/card',$data);
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
		if($this->Productos_model->save($data)){
			redirect(base_url()."admin/productos_c");
		}
			else{
				$this->session->set_flashdata("error","No se pudo guardar la Informacion ");
				redirect (base_url()."admin/productos_c");
			}
    }

	public function product($id)
	{
       	
		$data = array(
            'secc' => $this->Productos_model->product($id),
            );
            
			$this->load->view('layouts/header');
			$this->load->view('admin/productos/test',$data);
			$this->load->view('layouts/footer');
    }
	public function delete($id){
        if($this->Productos_model->remove($id)){
		
            redirect(base_url()."admin/Productos_C");
        }
            else{
                $this->session->set_flashdata("error","No se pudo eliminar la seccion de base ");
                redirect (base_url()."admin/productos/card");
            }
    }
	public function edit(){
		$id = $this->input->post("id");
		$name = $this->input->post("name");
		$description = $this->input->post("description");
		$price = $this->input->post("price");
		$amount = $this->input->post("amount");
		
	  
	
		$data = array(
			'id' => $id,
			'name ' => $name,
			'description' => $description,
			'price' => $price,
			'amount' => $amount
		);
	
		if($this->Productos_model->editar( $id ,$data)){
			
			redirect(base_url()."admin/productos_c");
		}
			else{
				$this->session->set_flashdata("error","No se pudo editar la Informacion ");
				redirect (base_url()."admin/productos_c");
			}
		
	}

		
	
}