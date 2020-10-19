<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class product extends CI_Controller {

    function __construct(){
		parent::__construct();
		$this->load->model('Product_Model');
		$this->load->library('cart');
	}

	public function index()
	{
		
		$data['result']=$this->Product_Model->display_products();
		$this->load->view('index.php',$data);
	}
	
	public function add_cart($id){
		$data = $this->Product_Model->add_cart($id);
		$data = [
		         'id'      =>$data['id'],
                 'qty'     => 1,
                 'price'   =>$data['price'],
                 'name'    =>$data['name'],
				 ];
				 $this->cart->insert($data);
				 redirect('cart/');
	}
}
