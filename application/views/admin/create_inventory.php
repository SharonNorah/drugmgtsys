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
 
            <?php echo form_open('?/admin/create_inventory/'.$inventory_id, "class='form-horizontal'"); ?>
            <input type="hidden" id="form-field-1" placeholder="Inventory Id" name="inventory_id" class="col-xs-10 col-sm-12" value="<?php echo $inventory_id; ?>">
    
            <div class="before-add-more">
                    <div class="row">
                            <div class="col-7">Drug Code and Name</div>
                            <div class="col-2">Quantity</div>
                            <div class="col-2">Expiry Date</div>
                            <div class="col-1">Action</div>
                    </div>
                </div>

                <div class="space-4"></div>
                <div class="clearfix form-actions row">
                    <div class="input-group-btn col-9"> 
                        <a href="javascript:void(0);" class="btn btn-success add-more" ><i class="glyphicon glyphicon-plus"></i> Add more drugs</a>
                    </div>
                    <div class="col-md-offset-3 col-3">
                            <button class="btn btn-info" type="submit" name="add_to_inventory" value="Add To Inventory">
                            <i class="ace-icon fa fa-check bigger-110"></i>
                            Add To Inventory
                            </button>
                        </div>
                </div>
            </form>

                    <!-- Copy Fields -->

        <div class="copy hide">
                    <div class="control-group row form-group">
                        
                                <select id="form-field-2" class="col-7 form-field" name="drug_code[]">
                                                <option value=''>Select Drug Code</option>
                                                <?php foreach($drugs as $drug):?>
                                                    <option value=<?php echo $drug->drug_code; ?>><?php echo $drug->drug_code .' '. $drug->drug_name; ?></option>
                                                <?php endforeach ?>
                                </select>
                                <input type="number" id="form-field-4" class="col-2 form-field" placeholder="Quantity" name="quantity[]" >
                                <input type="date" id="form-field-4" class="col-2 form-field" placeholder="Expiry Date" name="expiry_date[]" >
                                <a href="javascript:void(0);" class="btn btn-danger remove_button col-1 form-field"><i class="glyphicon glyphicon-remove"></i> Remove</a>
                        
                    </div>
        </div>
        </div>

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
