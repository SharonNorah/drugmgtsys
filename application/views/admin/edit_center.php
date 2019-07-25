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
 
            <?php echo form_open('admin/edit_center/'.$data['center_code'], "class='form-horizontal'"); ?>
                  <div class="form-group">
                        <label class="col-sm-12 control-label no-padding-right" for="form-field-1"> Drug Code </label>
            
                        <div class="col-sm-12">
                        <input type="text" id="form-field-1" placeholder="Drug Code" name="center_code" class="col-xs-12 col-sm-12" value="<?php echo $data['center_code']; ?>">
                        </div>
                  </div>
            
                  <div class="form-group">
                        <label class="col-sm-12 control-label no-padding-right" for="form-field-2"> Drug Name </label>
            
                        <div class="col-sm-12">
                        <input type="text" id="form-field-2" placeholder="Drug Name" class="col-xs-12 col-sm-12" name="center_name" value="<?php echo $data['center_name']; ?>">
                        </div>
                  </div>
                  <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="form-field-3"> Center Location </label>
            
                        <div class="col-sm-12">
                        <input type="text" id="form-field-3" placeholder="Center Location" class="col-xs-12 col-sm-12" name="district" value="<?php echo $data['district']; ?>">
                        </div>
                  </div>
                  <div class="form-group">
                        <label class="col-sm-12 control-label no-padding-right" for="form-field-4"> Center level </label>
            
                        <div class="col-sm-12">
                        <input type="text" id="form-field-4" placeholder="Center level" name="level" class="col-xs-12 col-sm-12" value="<?php echo $data['level']; ?>">
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
		      <?php echo anchor('?/admin/center/', 'View Centers')?> 
		</p>

        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

