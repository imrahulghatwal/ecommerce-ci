<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>E-commerce</title>

      <style>

       *{
        margin: 0;padding: 0;
       }


  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 100%;
  }

 
  </style>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script>
	  function cart_update(obj,rowid){
		  $.get("<?php echo base_url('cart/update_cart/')?>",{rowid:rowid,qty:obj.value},function(resp){
			  if(resp =='ok'){
				  location.reload();
			  }else{
				  alert('cart update failed');
			  }
		  });
	  }
	</script>
  </head>
  <body>
    
    <header>


  <!-----------------------------nav bar-------------------->


  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">E-commerce</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('product')?>">Home</a>
      </li>
	   <li class="nav-item active" >
        <a class="nav-link" href="<?php echo base_url('cart')?>">Cart(<?php echo $this->cart->total_items(); ?>)</a>
      </li>
    </ul>
  </div>
</nav>

