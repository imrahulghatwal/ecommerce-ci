<?php include('top.inc.php');?>

<div class="container" >    
<?php  

  
?>
	
    <div class="row" style="margin-top:20px;" >
	<div class="col-lg-8 mx-auto">
	    <h4>Add product</h4>
		<?php echo form_open_multipart('admin/add_product');?>

		
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" value="" class="form-control" placeholder="Enter name"  required>
            </div>
	 
            <div class="form-group">
                <label for="price">Price:</label>
                <input type="text" name="price" value="" class="form-control" placeholder="Enter price" required>
            </div>
		   <div class="form-group">
                <label for="price">Category:</label>
                <select name="category" class="form-control">
				<?php foreach($result as $row){ ?>
				<option value="<?php echo $row->id; ?>"><?php echo $row->name; ?></option>
				<?php  } ?>
				</select>
            </div>
            <div class="form-group">
                <label for="qty">Qty:</label>
                <input type="text" name="qty" value="" class="form-control" placeholder="Enter qty" required >
            </div>
	        <div class="form-group">
                <label for="body">Select Image</label>
                <?php echo form_upload(['name'=>'userfile']);?>
            </div>
			
            <input type="submit" value="Submit" class="btn btn-sm btn-secondary"  />
            <input type="reset" value="Reset" class="btn btn-sm btn-secondary"  />
       
	
    </div>
	</div>
</div>
