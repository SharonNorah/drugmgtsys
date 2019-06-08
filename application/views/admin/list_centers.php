

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
                            <th>Drug Code</th>
                            <th>Drug Name</th>
                            <th>Strength</th>
                            <th>Category</th>
                            <th>Unit Pack</th>
                            <th>Action</th>
                        </tr>
                  </thead>
                  <tfoot>
				  <tr>
                        <th>Drug Code</th>
						<th>Drug Name</th>
						<th>Strength</th>
						<th>Category</th>
						<th>Unit Pack</th>
                        <th>Action</th>
					</tr>
                  </tfoot>
                  <tbody>
				  <?php foreach ($drugs as $drug):?>
						<tr>
							<td><?php echo htmlspecialchars($drug->drug_code,ENT_QUOTES,'UTF-8');?></td>
							<td><?php echo htmlspecialchars($drug->drug_name,ENT_QUOTES,'UTF-8');?></td>
							<td><?php echo htmlspecialchars($drug->strength,ENT_QUOTES,'UTF-8');?></td>
                            <td><?php echo htmlspecialchars($drug->category,ENT_QUOTES,'UTF-8');?></td>
							<td><?php echo htmlspecialchars($drug->unit_pack,ENT_QUOTES,'UTF-8');?></td>
                            <td>
                            <?php echo anchor("?/admin/edit_drug/".$drug->id, 'Edit') ;?> | <?php echo anchor("?/admin/delete_drug/".$drug->id, 'Delete');?></td>


						</tr>
					<?php endforeach;?>
                  </tbody>
                </table>
              </div>
			</div>
			<div class="card-footer py-3">
			  <p class="m-0 font-weight-bold text-primary">
				  <?php echo anchor('?/admin/list_inventory', 'View Inventory')?> | <?php echo anchor('?/admin/create_drug', 'Add New Drug')?>
			  </p>

            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

 

