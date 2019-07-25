

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
                            <th>Inventory Id</th>
                            <th>Transaction Date</th>
                            <th>Quantity</th>
                            <th>Expiry Date</th>
                            <th>Source</th>
                            <th>Action</th>
                        </tr>
                  </thead>
                  <tfoot>
				  <tr>
                            <th>Inventory Id</th>
                            <th>Transaction Date</th>
                            <th>Quantity</th>
                            <th>Expiry Date</th>
                            <th>Source</th>
                            <th>Action</th>
					</tr>
                  </tfoot>
                  <tbody>
                  <?php 
                    if($inventories){
                        foreach ($inventories as $inventory){?>
                        <?php $creater =$this->ion_auth->user($inventory->created_by)->row();
                        $user = $this->ion_auth->user()->row();?>
                        <?php if( $creater->company == $user->company){?>
                          <tr>
                            <td><?php echo htmlspecialchars($inventory->inventory_id,ENT_QUOTES,'UTF-8');?></td>
                            <td><?php echo htmlspecialchars($inventory->transaction_date,ENT_QUOTES,'UTF-8');?></td>
                            <td><?php echo htmlspecialchars($inventory->quantity,ENT_QUOTES,'UTF-8');?></td>
                                          <td><?php echo htmlspecialchars($inventory->expiry_date,ENT_QUOTES,'UTF-8');?></td>
                            <td><?php echo htmlspecialchars($inventory->source,ENT_QUOTES,'UTF-8');?></td>
                            <td>
                                <?php echo anchor("?/admin/list_inventory/".$inventory->inventory_id, 'View') ;?> |
                                <?php echo anchor("?/admin/edit_drug/".$inventory->inventory_id, 'Edit') ;?> | 
                                <?php echo anchor("?/admin/delete_drug/".$inventory->inventory_id, 'Delete');?>
                            </td>


                          </tr>

                        <?php }
						
                        }
                    }?>
                  </tbody>
                </table>
              </div>
			</div>
			<div class="card-footer py-3">
			  <p class="m-0 font-weight-bold text-primary">
				  <?php echo anchor('?/admin/create_inventories/', 'Add Inventory')?>
			  </p>

            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

 

