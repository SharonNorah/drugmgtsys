<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h2 class="m-0 font-weight-bold text-primary"><?php echo lang('forgot_password_heading');?></h2>
            <p class="m-0 font-weight-bold text-primary"><?php echo sprintf(lang('forgot_password_subheading'), $identity_label);?></p>
        </div>
        <div class="card-body">

            <div id="infoMessage"><?php echo $message;?></div>


            <?php echo form_open("?/auth/forgot_password");?>

            <p>
                  <label for="identity"><?php echo (($type=='email') ? sprintf(lang('forgot_password_email_label'), $identity_label) : sprintf(lang('forgot_password_identity_label'), $identity_label));?></label> <br />
                  <?php echo form_input($identity);?>
            </p>

            <p><?php echo form_submit('submit', lang('forgot_password_submit_btn'), array('class' => 'col-sm-12 control-label no-padding-right btn btn-primary'));?></p>

            <?php echo form_close();?>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
