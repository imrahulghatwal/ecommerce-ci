<?php include('top.inc.php');?>

  </header>

<!---------------------product section---------------->
<!----------------------------------------------------->

<section style="margin-bottom:50px;">

  <div class="container">
        <h3 class="text-center text-capitalize pt-5">CATEGORY</h3>
           <hr class="w-25 mx-auto pb-5">
<div class="row">

  <div class="col-lg-12">
<a class="btn-primary btn text-white" href="<?php echo base_url('admin/add_category')?>">ADD CATEGORY</a>
   <table class="table">   
      <thead>
		  <tr>

			  <th>Name</th>
			  <th>Status</th>
			  <th>Action</th>
		  </tr>
      <thead>
	  <tbody>
	   <?php 
	   
  foreach($result as $rows):
  ?>
	     <tr>
			<td><?php echo $rows->name; ?></td>
			<td>
			<?php if($rows->status==1){ ?>
			<div class="text-success">Active</div>
			<?php }else{ ?>
			<div class="text-danger">Inactive</div>	
			<?php } ?>
			</td>
			<td><a class="btn btn-sm btn-warning" href="<?php echo base_url('admin/edit_category/').$rows->id;?>">Edit</a> 
			    <a class="btn btn-sm btn-danger" href="<?php echo base_url('admin/delete_cat/').$rows->id;?>">Delete</a> 
			<?php if($rows->status==1){ ?>
			<a class="btn btn-sm btn-info" href="<?php echo base_url('admin/status_up/1/').$rows->id;?>">Deactivate</a> 
			<?php }else{ ?>
			<a class="btn btn-sm btn-info" href="<?php echo base_url('admin/status_up/0/').$rows->id;?>">Activate</a>
			<?php } ?>
			</td>
		 </tr>
		   <?php endforeach;?>
	  </tbody>
   </table>
  </div>

</div>
</div>
</section>
<footer>
<div class="container-fluid bg-white text-dark">
<p class="text-center margin-vert-30 copyright">&copy; <?php echo date('Y')?> Rahul Ghatwal. All Rights Reserved</p>

</div>

</footer>



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>

