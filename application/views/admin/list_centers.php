

        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">System Users</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                            <th>Center Code</th>
                            <th>Center Name</th>
                            <th>District</th>
                            <th>Level</th>
                            <th>Action</th>
                        </tr>
                  </thead>
                  <tfoot>
				            <tr>
                            <th>Center Code</th>
                            <th>Center Name</th>
                            <th>District</th>
                            <th>Level</th>
                            <th>Action</th>
					          </tr>
                  </tfoot>
                  <tbody>
          <?php 
          if($centers){
          
            foreach ($centers as $center):?>
              <tr>
                <td><?php echo htmlspecialchars($center->center_code,ENT_QUOTES,'UTF-8');?></td>
                <td><?php echo htmlspecialchars($center->center_name,ENT_QUOTES,'UTF-8');?></td>
                <td><?php echo htmlspecialchars($center->district,ENT_QUOTES,'UTF-8');?></td>
                <td><?php echo htmlspecialchars($center->level,ENT_QUOTES,'UTF-8');?></td>
                <td>
                              <?php echo anchor("?/admin/edit_center/".$center->center_code, 'Edit') ;?> | <?php echo anchor("?/admin/delete_center/".$center->center_code, 'Delete');?></td>


              </tr>
            <?php endforeach;
            
          }?>
                  </tbody>
                </table>
              </div>
			</div>
			<div class="card-footer py-3">
			  <p class="m-0 font-weight-bold text-primary">
				  <?php echo anchor('?/admin/create_center/', 'Add New Center')?>
			  </p>

            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

 

