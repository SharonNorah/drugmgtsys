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
                            <th>Order Date</th>
                            <th>Sender</th>
                            <th>Suplier</th>
                            <th>Order Status</th>
                            <th>Action</th>
                        </tr>
                  </thead>
                  <tfoot>
				  <tr>
                            <th>Order Date</th>
                            <th>Sender</th>
                            <th>Suplier</th>
                            <th>Order Status</th>
                            <th>Action</th>
					</tr>
                  </tfoot>
                  <tbody>
                  <?php 
                    if($orders){
                        foreach ($orders as $order):
                        if($order->order_status == 'Rejected') {?>
						<tr>
							<td><?php echo htmlspecialchars($order->order_date,ENT_QUOTES,'UTF-8');?></td>
							<td><?php echo htmlspecialchars($order->sender,ENT_QUOTES,'UTF-8');?></td>
                            <td><?php echo htmlspecialchars($order->supplier,ENT_QUOTES,'UTF-8');?></td>
                            <td><?php echo htmlspecialchars($order->order_status,ENT_QUOTES,'UTF-8');?></td>
                            <td>
                            <?php echo anchor("?/admin/list_order/".$order->order_id, 'View') ;?> |
                            <?php echo anchor("?/admin/edit_order/".$order->order_id, 'Edit') ;?> | 
                            <?php echo anchor("?/admin/delete_order/".$order->order_id, 'Delete');?></td>

                        </tr>
                        
                        <?php }
                        endforeach;
                    }?>
                  </tbody>
                </table>
              </div>
			</div>
			<div class="card-footer py-3">
			  <p class="m-0 font-weight-bold text-primary">
                <?php echo anchor('?/admin/create_orders', 'Create Order ')?>
			  </p>

            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

 

