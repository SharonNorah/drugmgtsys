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
 
            <?php echo form_open('?/admin/create_drug/', "class='form-horizontal'"); ?>
                  <div class="form-group">
                        <label class="col-sm-12 control-label no-padding-right" for="form-field-1"> Drug Code </label>
                  
                        <div class="col-sm-12">
                        <input type="text" id="form-field-1" placeholder="Drug Code" name="drug_code" class="col-xs-10 col-sm-12" value="<?php echo set_value('drug_code'); ?>">
                        </div>
                  </div>
                  
                  <div class="form-group">
                        <label class="col-sm-12 control-label no-padding-right" for="form-field-2"> Drug Name </label>
                  
                        <div class="col-sm-12">
                        <input type="text" id="form-field-2" placeholder="Drug Name" class="col-xs-10 col-sm-12" name="drug_name" value="<?php echo set_value('drug_name'); ?>">
                        </div>
                  </div>
                  <div class="form-group">
                        <label class="col-sm-12 control-label no-padding-right" for="form-field-3"> Employee Salary </label>
                  
                        <div class="col-sm-12">
                        <input type="text" id="form-field-3" placeholder="Drug Strength" class="col-xs-10 col-sm-12" name="strength" value="<?php echo set_value('strength'); ?>">
                        </div>
                  </div>
                  <div class="form-group">
                        <label class="col-sm-12 control-label no-padding-right" for="form-field-4"> Drug Category </label>
                  
                        <div class="col-sm-12">
                        <input type="text" id="form-field-4" placeholder="Drug Category" class="col-xs-10 col-sm-12" name="category" value="<?php echo set_value('category'); ?>">
                        </div>
                  </div>
                  <div class="form-group">
                        <label class="col-sm-12 control-label no-padding-right" for="form-field-5"> Unit Pack </label>
                  
                        <div class="col-sm-12">
                        <input type="text" id="form-field-5" placeholder="Unit Pack" class="col-xs-10 col-sm-12" name="unit_pack" value="<?php echo set_value('unit_pack'); ?>">
                        </div>
                  </div>
                  <div class="space-4"></div>
                  <div class="clearfix form-actions">
                        <div class="col-md-offset-3 col-md-9">
                        <button class="btn btn-info" type="submit">
                        <i class="ace-icon fa fa-check bigger-110"></i>
                        Add Drug
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
		      <?php echo anchor('?/admin/drug', 'View Drug List')?> 
		</p>

        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
