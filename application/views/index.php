<?php include('top.inc.php');?>

  </header>

<!---------------------product section---------------->
<!----------------------------------------------------->

<section style="margin-bottom:50px;">

  <div class="container">
        <h3 class="text-center text-capitalize pt-5">PRODUCTS</h3>
           <hr class="w-25 mx-auto pb-5">



<div class="row text-center">

  <?php 
  foreach($result as $rows): 
        
  
  ?>
  <div class="col-lg-4 col-md-4 col-12">
    
       <img width="250px" height="180px" src="<?php echo base_url('images/default.png') ?>" alt="Card image">
        
 
        <h4><?php echo $rows->name; ?></h4>
       <p>Rs. <?php echo $rows->price; ?></p>
	   <p>QTY. <?php echo $rows->qty; ?></p>
	   
      <a href="<?php echo base_url("product/add_cart/$rows->id") ?>" class="btn btn-secondary">Add to cart</a>
    
   
  </div>
  <?php endforeach;?>
</div>
</div>
</section>
<footer>
<div class="container-fluid bg-white text-dark">
<p class="text-center margin-vert-30 copyright">&copy; <?php echo date('Y')?> GhatwalTech. All Rights Reserved</p>

</div>

</footer>



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>

