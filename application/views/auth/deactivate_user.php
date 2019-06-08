<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h2 class="m-0 font-weight-bold text-primary"><?php echo lang('deactivate_heading');?></h2>
            <p class="m-0 font-weight-bold text-primary"><?php echo sprintf(lang('deactivate_subheading'), $user->username);?></p>
        </div>
        <div class="card-body">
            <?php echo form_open("?/auth/deactivate/".$user->id);?>

            <p>
              <?php echo lang('deactivate_confirm_y_label', 'confirm');?>
              <input type="radio" name="confirm" value="yes" checked="checked" />
              <?php echo lang('deactivate_confirm_n_label', 'confirm');?>
              <input type="radio" name="confirm" value="no" />
            </p>

            <?php echo form_hidden($csrf); ?>
            <?php echo form_hidden(array('id'=>$user->id)); ?>

            <p><?php echo form_submit('submit', lang('deactivate_submit_btn'), array('class' => 'col-sm-12 control-label no-padding-right btn btn-primary'));?></p>

            <?php echo form_close();?>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
