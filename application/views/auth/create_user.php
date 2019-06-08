<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h2 class="m-0 font-weight-bold text-primary"><?php echo lang('create_user_heading');?></h2>
            <p class="m-0 font-weight-bold text-primary"><?php echo lang('create_user_subheading');?></p>
        </div>
        <div class="card-body">

            <div id="infoMessage"><?php echo $message;?></div>

            <?php echo form_open("?/auth/create_user");?>

                  <p>
                        <?php echo lang('create_user_fname_label', 'first_name');?> <br />
                        <?php echo form_input($first_name);?>
                  </p>

                  <p>
                        <?php echo lang('create_user_lname_label', 'last_name');?> <br />
                        <?php echo form_input($last_name);?>
                  </p>
                  
                  <?php
                  if($identity_column!=='email') {
                  echo '<p>';
                  echo lang('create_user_identity_label', 'identity');
                  echo '<br />';
                  echo form_error('identity');
                  echo form_input($identity);
                  echo '</p>';
                  }
                  ?>

                  <p>
                        <?php echo lang('create_user_company_label', 'company');?> <br />
                        <?php echo form_input($company);?>
                  </p>

                  <p>
                        <?php echo lang('create_user_email_label', 'email');?> <br />
                        <?php echo form_input($email);?>
                  </p>
                  <p>
                        <?php echo lang('select_user_group', 'phone');?> <br />
                        
                        <?php foreach ($listGroups as $group):?>
                              <label class="checkbox">
                              <?php
                                    $checked = null;
                              ?>
                              <input type="checkbox" name="groups" value="<?php echo $group->id;?>"<?php echo $checked;?>>
                              <?php echo htmlspecialchars($group->name, ENT_QUOTES,'UTF-8');?>
                              </label>
                        <?php endforeach?>
                  </p>

                  <p>
                        <?php echo lang('create_user_phone_label', 'phone');?> <br />
                        <?php echo form_input($phone);?>
                  </p>

                  <p>
                        <?php 
                             
                              echo form_dropdown('center_code', $centers, 'center_name');
                        ?>

                  </p>

                  <p>
                        <?php echo lang('create_user_password_label', 'password');?> <br />
                        <?php echo form_input($password);?>
                  </p>

                  <p>
                        <?php echo lang('create_user_password_confirm_label', 'password_confirm');?> <br />
                        <?php echo form_input($password_confirm);?>
                  </p>


                  <p><?php echo form_submit('submit', lang('create_user_submit_btn'));?></p>

            <?php echo form_close();?>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
