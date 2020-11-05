

<!---------------------service section---------------->
<!----------------------------------------------------->

<section>

  <div class="container-fluid">
        <h1 class="text-center text-capitalize pt-5">Order Preview</h1>
           <hr class="w-25 mx-auto pb-5">



<div class="row text-center">
  <div class="col-lg-8">
<table class="table">
  <thead>
    <tr>
	  <th>Product</th>
	  <th>Price</th>
	  <th>Qty</th>
	  <th>Sub Total</th>
	</tr>
  </thead>
  <tbody>
    <?php 
	if($this->cart->total_items()>0){
	foreach($result as $rows){
	?>
        <tr>
	  <td><?php echo $rows['name'];?></td>
	  <td>Rs. <?php echo $rows['price'];?></td>
	   <td width="140px"><?php echo $rows['qty']; ?></td>
	  <td>Rs. <?php echo $rows['subtotal'];?></td>
	</tr>
	
	<?php 
	} }	
	?>
	<tr>
	<td colspan="5" align="right"><b>Grand Total </b>Rs. <?php echo $this->cart->total();?></td>
	</tr>
  </tbody>
</table>
</div>
<div class="col-lg-4">
       <h3>Shopping Info</h3>
	<form method="post">
	  <div class="form-group">
		<input type="text" class="form-control" placeholder="Enter name" name="name">
		<?php echo form_error('name','<p class="text-danger">','</p>'); ?>
	  </div>
	    <div class="form-group">
		<input type="email" class="form-control" placeholder="Enter email" name="email">
		<?php echo form_error('email','<p class="text-danger">','</p>'); ?>
	  </div>
	    <div class="form-group">
		<input type="text" class="form-control" placeholder="Enter phone number" name="phone">
		<?php echo form_error('phone','<p class="text-danger">','</p>'); ?>
	  </div>
	    <div class="form-group">
		<input type="text" class="form-control" placeholder="Enter address" name="address">
		<?php echo form_error('address','<p class="text-danger">','</p>'); ?>
	  </div>
	  <button type="submit" class="btn btn-success" name="place_order">Place order ></button>
	</form> 
</div>
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

