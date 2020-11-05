<?php
class Product_Model extends CI_Model {
	
	public function display_items($table){
		$sql = $this->db->select()
		                ->from($table)
				        ->where(['status'=>'1'])
						->order_by("id", "desc")
				        ->get();
	         return $sql->result(); 		
	       }
	public function display_pro($cid){
		$sql = $this->db->select()
		                ->from('product')
				        ->where(['status'=>'1','category_id'=>$cid])
						->order_by("id", "desc")
				        ->get();
	         return $sql->result(); 		
	       }	
	public function add_cart($id,$table){
		$sql = $this->db->select()
                        ->from($table)
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
			 //admin
			 public function display_product($table){
		    $sql = $this->db->select()
		                ->from($table)
						->order_by("id", "desc") 
				        ->get();
	         return $sql->result(); 		
	       }
		   
			 public function delete_product($id,$table){
				return $this->db->delete($table,['id'=>$id]);
				
			 }
			 
			 public function add_product($arr){
				 $this->db->insert('product',$arr);
			 }
			 
			 public function edit_product($pid,$arr,$table){
				 
              $this->db->where('id',$pid);
              $this->db->update($table, $arr); 
			 }
			 public function update_status($id,$status,$table){
				 
              $this->db->where('id',$id);
              $this->db->update($table,['status'=>$status]); 
			 }
			  
			 public function add_category($arr){
				 $this->db->insert('category',$arr);
			 }
}
