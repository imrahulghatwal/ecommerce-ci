<?php

class Product_Model extends CI_Model {

	public function display_products(){
		$sql = $this->db->select()
		                ->from('product')
				        ->where(['status'=>'1'])
				        ->get();
	         return $sql->result(); 		
	       }
	
	public function add_cart($id){
		$sql = $this->db->select()
                        ->from('product')
                        ->where('id',$id)
                        ->get();
             return $sql->row_array();
			 }
			 
	public function insertCustomer($arr){
		     if(!array_key_exists('created',$arr)){
				 $arr['created'] = date("Y-m-d H:i:s");
			 }
			 if(!array_key_exists('modified',$arr)){
				 $arr['modified'] = date("Y-m-d H:i:s");
			 }
				$insert = $this->db->insert('customer',$arr);
				return $insert?$this->db->insert_id():false;
			 }
			 
	public function display_customer($id){
		        $sql = $this->db->select()
		                ->from('customer')
				        ->where('id',$id)
				        ->get();
	         return $sql->row(); 		
	       }
    public function insertOrder($arr){
		     if(!array_key_exists('created',$arr)){
				 $arr['created'] = date("Y-m-d H:i:s");
			 }
			 if(!array_key_exists('modified',$arr)){
				 $arr['modified'] = date("Y-m-d H:i:s");
			 }
				$insert = $this->db->insert('orders',$arr);
				return $insert?$this->db->insert_id():false;
			 }
			 
	public function insertOrderItems($arr){		   
				$insert = $this->db->insert_batch('order_items',$arr);
				return $insert?true:false;
			 }
			 
	public function order_success($oid){
				 $q = $this->db->select()
				               ->from('orders')
							   ->where('id',$oid)
							   -> get();
					  return $q->result;
								 
				 
			 }
}
