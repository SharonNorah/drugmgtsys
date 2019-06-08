

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
                            <th>Drug name</th>
                            <th>Quantity</th>
                            <th>Action</th>
                        </tr>
                  </thead>
                  <tfoot>
				  <tr>
                            <th>Drug Code</th>
                            <th>Drug name</th>
                            <th>Quantity</th>
                            <th>Action</th>
					</tr>
                  </tfoot>
                  <tbody>
                  <?php 
                    if($order){
                        foreach ($order as $drug):?>
						<tr>
							<td><?php echo htmlspecialchars($drug->drug_code,ENT_QUOTES,'UTF-8');?></td>
							<td><?php echo htmlspecialchars($drug->drug_name,ENT_QUOTES,'UTF-8');?></td>
                            <td><?php echo htmlspecialchars($drug->quantity,ENT_QUOTES,'UTF-8');?></td>
                            <td>
                            <?php echo anchor("?/admin/edit_order/".$drug->inventory_id, 'Edit') ;?> | <?php echo anchor("?/admin/delete_order/".$drug->inventory_id, 'Delete');?></td>


						</tr>
                    <?php endforeach;
                    }?>
                  </tbody>
                </table>
              </div>
			</div>
			<div class="card-footer py-3">
			  <p class="m-0 font-weight-bold text-primary">
				  <?php echo anchor('?/admin/orders', 'Back To Orders')?> | <?php echo anchor('?/admin/create_order/'.$drug->order_id, 'Add Drug To Order')?>
			  </p>

            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

 

