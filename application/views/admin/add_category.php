<?php include('top.inc.php');?>

<div class="container" >    

	
    <div class="row" style="margin-top:20px;" >
	<div class="col-lg-8 mx-auto">
	    <h4>Add Category</h4>
		<form method="POST" action="<?php base_url('admin/add_category');?>">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" value="" class="form-control" placeholder="Enter name"  required>
            </div>
			
            <input type="submit" name="submit" value="Submit" class="btn btn-sm btn-secondary"  />
	</form>
    </div>
	</div>
</div>
