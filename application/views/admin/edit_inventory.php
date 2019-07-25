<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h2 class="m-0 font-weight-bold text-primary"><?php echo lang('create_user_heading');?></h2>
            <p class="m-0 font-weight-bold text-primary"><?php echo lang('create_user_subheading');?></p>
        </div>
        <div class="card-body">

            <?php echo validation_errors(); ?>
 
            <?php echo form_open('home/edit/'.$data['id'], "class='form-horizontal'"); ?>
                  <div class="form-group">
                        <label class="col-sm-12 control-label no-padding-right" for="form-field-1"> Inventory ID </label>
            
                        <div class="col-sm-12">
                        <input type="text" id="form-field-1" placeholder="Inventory ID" name="inventory_id" class="col-xs-12 col-sm-12" value="<?php echo $data['inventory_id']; ?>">
                        </div>
                  </div>
            
                  <div class="form-group">
                        <label class="col-sm-12 control-label no-padding-right" for="form-field-2"> Transaction Date </label>
            
                        <div class="col-sm-12">
                        <input type="date" id="form-field-2" placeholder="Transaction Date" class="col-xs-12 col-sm-12" name="transaction_date" value="<?php echo $data['transaction_date']; ?>">
                        </div>
                  </div>
                  <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="form-field-3"> Quantity  </label>
            
                        <div class="col-sm-12">
                        <input type="text" id="form-field-3" placeholder="Quantity " class="col-xs-12 col-sm-12" name="quantity" value="<?php echo $data['quantity']; ?>">
                        </div>
                  </div>
                  <div class="form-group">
                        <label class="col-sm-12 control-label no-padding-right" for="form-field-5"> Unit Pack </label>
            
                        <div class="col-sm-12">
                        <input type="text" id="form-field-5" placeholder="Unit Pack" name="unit_pack" class="col-xs-12 col-sm-12" value="<?php echo $data['unit_pack']; ?>">
                        </div>
                  </div>
                  <div class="space-4"></div>
                  <div class="clearfix form-actions">
                        <div class="col-md-offset-3 col-md-9">
                        <button class="btn btn-info" type="submit">
                        <i class="ace-icon fa fa-check bigger-110"></i>
                        Submit
                        </button>
            
                        &nbsp; &nbsp; &nbsp;
                        <button class="btn" type="reset">
                        <i class="ace-icon fa fa-undo bigger-110"></i>
                        Reset
                        </button>
                        </div>
                  </div>
            </form>
        </div>
        <div class="card-footer py-3">
		<p class="m-0 font-weight-bold text-primary">
		      <?php echo anchor('?/admin/drug/', 'View Drug List')?> 
		</p>

        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

