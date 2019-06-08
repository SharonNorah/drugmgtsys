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
 
            <?php echo form_open('?/admin/create_order/'.$order_id, "class='form-horizontal'"); ?>
                  <div class="form-group">
                        <div class="col-sm-12">
                        <input type="hidden" id="form-field-1"  name="order_id" class="col-xs-10 col-sm-12" value="<?php echo $order_id; ?>">
                        <input type="hidden" id="form-field-1"  name="order_status" class="col-xs-10 col-sm-12" value="Pending Approval">
                        </div>
                  </div>
                  
                  <div class="form-group">
                        <label class="col-sm-12 control-label no-padding-right" for="form-field-2"> Drug Code </label>
                  
                        <div class="col-sm-12">
                            <select id="form-field-2" class="col-xs-10 col-sm-12" name="drug_code">
                                <option value=''>Select Drug Code</option>
                                <?php foreach($drugs as $drug):?>
                                    <option value=<?php echo $drug->drug_code; ?>><?php echo $drug->drug_code; ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                  </div>
                  <div class="form-group">
                        <label class="col-sm-12 control-label no-padding-right" for="form-field-3"> Drug Name </label>
                  
                        <div class="col-sm-12">
                            <select id="form-field-3" class="col-xs-10 col-sm-12" name="drug_name">">
                                <option value=''>Select Drug Name</option>
                                <?php foreach($drugs as $drug):?>
                                    <option value=<?php echo $drug->drug_name; ?>><?php echo $drug->drug_name; ?></option>
                                <?php endforeach ?>
                            </select>                        
                        </div>
                  </div>
                  <div class="form-group">
                        <label class="col-sm-12 control-label no-padding-right" for="form-field-4"> Quantity </label>
                  
                        <div class="col-sm-12">
                        <input type="number" id="form-field-4" placeholder="Quantity" class="col-xs-10 col-sm-12" name="quantity" value="<?php echo set_value('quantity'); ?>">
                        </div>
                  </div>
                  <div class="space-4"></div>
                  <div class="clearfix form-actions">
                        <div class="col-md-offset-3 col-md-9">
                        <button class="btn btn-info" type="submit">
                        <i class="ace-icon fa fa-check bigger-110"></i>
                        Make order
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
