<?php include('top.inc.php');?>

<section>

  <div class="container-fluid">
        <h1 class="text-center text-success text-capitalize pt-5">Order Placed succsefully</h1>          



<div class="row">
  <div class="col-lg-4">
  
	
<div class="text-bold">
    <h4>Shipping Address</h4>
	<h5>Name: <?php echo $result->name;?></h5>
	<h5>Phone No: <?php echo $result->phone;?></h5>
	<h5>Email: <?php echo $result->email;?></h5>
    <h5>Address: <?php echo $result->address;?></h5>
</div>	
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

