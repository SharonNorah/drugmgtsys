<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h2 class="m-0 font-weight-bold text-primary"><?php echo lang('edit_group_heading');?></h2>
            <p class="m-0 font-weight-bold text-primary"><?php echo lang('edit_group_subheading');?></p>
        </div>
        <div class="card-body">

            <div id="infoMessage"><?php echo $message;?></div>


            <?php echo form_open(current_url());?>

            <p>
                  <?php echo lang('edit_group_name_label', 'group_name');?> <br />
                  <?php echo form_input($group_name);?>
            </p>

            <p>
                  <?php echo lang('edit_group_desc_label', 'description');?> <br />
                  <?php echo form_input($group_description);?>
            </p>

            <p><?php echo form_submit('submit', lang('edit_group_submit_btn'));?></p>

            <?php echo form_close();?>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
