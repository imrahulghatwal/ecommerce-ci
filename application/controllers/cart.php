<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cart extends CI_Controller {

    function __construct(){
		parent::__construct();
		$this->load->model('Product_Model');
		$this->load->library('cart');
	}

	public function index()
	{
		//category
		$data['category']=$this->Product_Model->display_items('category');
		$this->load->view('top.inc.php',$data);
		
		$data['result']= $this->cart->contents();
		$this->load->view('cart_view.php',$data);
	}
	
		public function update_cart()
	{
		
		$update = 0;
		
		$rowid =$this->input->get('rowid');
		$qty =$this->input->get('qty');
		
		if(!empty($rowid) && !empty($qty)){
		$data =array('rowid'=>$rowid,'qty'=>$qty);
		$update = $this->cart->update($data);
		}
		//return response
        echo $update?'ok':'err';		
	}
	
	public function remove_item($id){
		$remove = $this->cart->remove($id);
		redirect('cart/');
	}
}