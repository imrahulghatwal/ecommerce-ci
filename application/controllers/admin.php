<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

    function __construct(){
		parent::__construct();
		$this->load->model('Product_Model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['result']=$this->Product_Model->display_product('product');
		$this->load->view('admin/dashboard.php',$data);
	}
	
	public function delete_product($id){
	  $this->Product_Model->delete_product($id,'product');
	  redirect('admin/');
	  die();
	}
	
	public function add_product(){
				$config=[
			      'upload_path'=>'./images/',
			      'allowed_types'=>'gif|jpg|png',
				  'max_size'=>1500
			];
			$this->load->library('upload',$config);
			if($this->upload->do_upload()){
		
		$name = $this->input->post('name');
		$price = $this->input->post('price');
		$category = $this->input->post('category');
		$qty = $this->input->post('qty');
		 
		
		$data = $this->upload->data();
		$image_path = base_url("images/".$data['raw_name'].$data['file_ext']);
		
		$arr = ['name'=>$name,'price'=>$price,'category_id'=>$category,'qty'=>$qty,'image'=>$image_path,'status'=>1];
		$this->Product_Model->add_product($arr);
	    redirect('admin/');
		die();
			}
		$data['result']=$this->Product_Model->display_product('category');
		$this->load->view('admin/add_products.php',$data);
		
	}
	
	public function edit_product($id){
	  $pid = $id; 
	  $data['result']=$this->Product_Model->add_cart($pid,'product');
	  $this->load->view('admin/edit_product.php',$data);

	}
	
	public function edit_pro(){
			  
	 $pid = $this->input->post('id');
	 $name = $this->input->post('name');
	 $price = $this->input->post('price');
	 $category = $this->input->post('category');
	 $qty = $this->input->post('qty');
	 
	 $arr = ['name'=>$name,'price'=>$price,'category_id'=>$category,'qty'=>$qty];
	 
	 
     $this->Product_Model->edit_product($pid,$arr,'product');
	  
	  redirect('admin/');
	}
	public function status_update($sts,$id){
		if($sts==0){
			$status=1;
		}else{
			$status=0;
		}
		$this->Product_Model->update_status($id,$status,'product');
		 redirect('admin/');
	} 
	public function category_display(){
		$data['result']=$this->Product_Model->display_product('category');
		$this->load->view('admin/category.php',$data);
	}
	public function delete_cat($id){
	  $this->Product_Model->delete_product($id,'category');
	  redirect('admin/category_display');
	  die();
	}
	public function add_category(){
	if(isset($_POST['submit'])){
	    $name = $this->input->post('name');
		$arr = ['name'=>$name,'status'=>1];
		$this->Product_Model->add_category($arr);
	    redirect('admin/category_display');
	}
		$this->load->view('admin/add_category.php');
	}
	public function edit_category($id){
	  $pid = $id; 
	  $data['result']=$this->Product_Model->add_cart($pid,'category');
	  $this->load->view('admin/edit_category.php',$data);

	}
	
	public function edit_cat(){
			  
	 $pid = $this->input->post('id');
	 $name = $this->input->post('name');
	 
	 $arr = ['name'=>$name];
     $this->Product_Model->edit_product($pid,$arr,'category');
	  
	  redirect('admin/category_display');
	}
	public function status_up($sts,$id){
		if($sts==0){
			$status=1;
		}else{
			$status=0;
		}
		$this->Product_Model->update_status($id,$status,'category');
		 redirect('admin/category_display');
	} 
}
