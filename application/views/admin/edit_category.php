<?php include('top.inc.php');?>
<div class="container" >

    <h4>Update Category</h4>
    <div class="row" style="margin-top:20px;" >
        <div class="col-lg-6">
            <?php echo form_open('admin/edit_cat'); ?>
            <input type="hidden" name="id" value="<?php echo $result['id'] ?>">
            <div class="form-group">
                <label for="name">Name:</label>
				<input type="text" name="name" class="form-control" placeholder="Enter name" value="<?php echo $result['name'] ?>">
            </div>

        </div>
        <div class="col-lg-6" style="margin-top:40px" ;>
            <?php echo form_error('name','<div class="text-danger">','</div>'); ?>
        </div>
        <div class="col-lg-12" style="margin-bottom:30px">
            <?php echo form_submit(['class'=>'btn btn-sm btn-info','type'=>'submit','value'=>'Update']);?>
        </div>
    </div>
</div>
