<?php $user = $this->ion_auth->user()->row();?>
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
            
                  <?php echo form_open('?/admin/create_orders/', "class='form-horizontal'"); ?>
                        <div class="form-group">
                        
                              <div class="col-sm-12">
                              <input type="hidden" id="form-field-1" placeholder="Order Code" name="order_id" class="col-xs-10 col-sm-12" value="<?php echo $user->first_name. $user->last_name. date('YmdHis'); ?>">
                              </div>
                        </div>
                        <div class="form-group">
                              <label class="col-sm-12 control-label no-padding-right" for="form-field-2"> Order Date </label>
                        
                              <div class="col-sm-12">
                              <input type="date" id="form-field-1" placeholder="Order Date" name="order_date" class="col-xs-10 col-sm-12" value="<?php echo set_value('order_date'); ?>">
                              </div>
                        </div>
                        
                        <div class="form-group">
                              <div class="col-sm-12">
                              <?php $user = $this->ion_auth->user()->row();
                              ?>
                              <input type="hidden" id="form-field-2" class="col-xs-10 col-sm-12" name="sender" value="<?php echo $user->id; ?>">
                              </div>
                        </div>
                        <div class="form-group">
                              <label class="col-sm-12 control-label no-padding-right" for="form-field-4"> Supplier </label>
                        
                              <div class="col-sm-12">
                                <select  id="form-field-4" class="col-xs-10 col-sm-12" name="supplier">
                                    <?php 
                                    $users = $this->ion_auth->users()->result();
                                    foreach($users as $user){?>
                                        <option value="<?php echo $user->id; ?>">
                                            <?php echo $user->first_name.' '.$user->last_name; ?>
                                        </option>
                                    <?php }?>
                                </select>
                              </div>
                        </div>
                        <div class="space-4"></div>
                        <div class="clearfix form-actions">
                              <div class="col-md-offset-3 col-md-9">
                              <button class="btn btn-info" type="submit">
                              <i class="ace-icon fa fa-check bigger-110"></i>
                              Add Order Items
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
