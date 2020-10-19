<?php include('top.inc.php');?>

<!---------------------service section---------------->
<!----------------------------------------------------->

<section>

  <div class="container">
        <h1 class="text-center text-capitalize pt-5">Cart</h1>
           <hr class="w-25 mx-auto pb-5">



<div class="row text-center">
  <div class="col-lg-12 col-md-12 col-12">
<table class="table">
  <thead>
    <tr>
	  <td>Name</td>
	  <td>Qty</td>
	  <td>Price</td>
	  <td>Sub Total</td>
	  <td>Action</td>
	</tr>
  </thead>
  <tbody>
    <?php 
	if($this->cart->total_items()>0){
	foreach($result as $rows){
	?>
        <tr>
	  <td><?php echo $rows['name'];?></td>
	 
	 
	 <td width="140px"><input type="number" class="form-control text-center" value="<?php echo $rows['qty']; ?>" onChange="cart_update(this,'<?php echo $rows["rowid"];?>')"></td>
	  <td><?php echo $rows['price'];?></td>
	  <td><?php echo $rows['subtotal'];?></td>
	  <td><a class="btn btn-danger" href="<?php echo base_url('cart/remove_item/'.$rows["rowid"]);?>">Delete</a></td>
	</tr>
	
	<?php 
	} }	
	?>
	<tr>
	<td colspan="4" align="right"><b>Grand Total </b><?php echo $this->cart->total();?></td>
	<td><a class="btn btn-warning" href="<?php echo base_url('checkout/'); ?>">Checkout</a></td>
	</tr>
  </tbody>
</table>
</div>
</div>
</section>
<footer>
<div class="container-fluid bg-white text-dark">
<p class="text-center margin-vert-30 copyright">&copy; <?php echo date('Y');?> Rahul Ghatwal. All Rights Reserved</p>

</div>

</footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>

