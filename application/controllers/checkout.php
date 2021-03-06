<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class checkout extends CI_Controller {

    function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('cart');
		$this->load->model('Product_Model');
	}

	public function index()
	{		
		
		if($this->cart->total_items() <= 0){
			redirect('product/');
		}
		
		$cdata = array();
		
		$submit = $this->input->post('place_order');
		if(isset($submit)){
			
			  $this->form_validation->set_rules('name', 'Name', 'trim|required|min_length[3]|max_length[12]');
			  $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
			  $this->form_validation->set_rules('phone', 'Phone', 'trim|required|numeric');
			  $this->form_validation->set_rules('address', 'Address', 'required');
			  
			  $cdata = ['name'=>strip_tags($this->input->post('name')),
			            'email'=>strip_tags($this->input->post('email')),
			            'phone'=>strip_tags($this->input->post('phone')),
			            'address'=>strip_tags($this->input->post('address'))];
						
						

		    if($this->form_validation->run() == true){
				$insert = $this->Product_Model->insertCustomer($cdata);
				
				if($insert){
					$cid = $insert;
					$order = $this->place_order($cid);
			
					if($order){
						
						redirect('checkout/order_succ/'.$cid);
						die();
					}
				}
			}
		}
		
		//show data on frontend
	//category
		$data['category']=$this->Product_Model->display_items('category');
		$this->load->view('top.inc.php',$data);
   //products		
		$data['result']= $this->cart->contents();
		$this->load->view('checkout_view.php',$data);
		
	}	
	
	public function place_order($custId){
		//insert order data
		$orderData = ['customer_id'=>$custId,
		              'grand_total'=>$this->cart->total()];
					  
					  $insertOrder = $this->Product_Model->insertOrder($orderData);
					  
					  if($insertOrder){
						  $cartItems = $this->cart->contents();
						  
						  $orderItemData = array();
						  $i=0;
						  foreach($cartItems as $item){
							  $orderItemData[$i]['order_id'] = $insertOrder;
							  $orderItemData[$i]['product_id'] = $item['id'];
							  $orderItemData[$i]['qty'] = $item['qty'];
							  $orderItemData[$i]['sub_total'] = $item["subtotal"];
							  $i++;
						  }
						  
						  if(!empty($orderItemData)){
							  $insertOrderItems = $this->Product_Model->insertOrderItems($orderItemData);
							  
							  if($insertOrderItems){
								  $this->cart->destroy();
								  
								  return $insertOrder;
							  }
						  }
					  }
					  return false;
					 
	}
	
	public function order_succ($cid){
		//category
		$data['category']=$this->Product_Model->display_items('category');
		$this->load->view('top.inc.php',$data);
		//products
		 $data['result'] = $this->Product_Model->display_customer($cid);
		 $this->load->view('order_success.php',$data);
	}
	

		             
		
		
	

}
