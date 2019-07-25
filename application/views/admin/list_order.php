

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
                if($inventory){
                  foreach ($inventory as $row){?>
                          <tr>
                            <td><?php echo htmlspecialchars($row->drug_code,ENT_QUOTES,'UTF-8');?></td>
                            <td><?php echo htmlspecialchars($row->drug_name,ENT_QUOTES,'UTF-8');?></td>
                            <td><?php echo htmlspecialchars($row->quantity,ENT_QUOTES,'UTF-8');?></td>
                            <td>
                                          <?php echo anchor("?/admin/edit_order/".$order_id, 'Edit') ;?> | <?php echo anchor("?/admin/delete_order/".$row->order_id, 'Delete');?>
                            </td>
                          </tr>
                          <?php       }
                                    }?>
                        </tbody>
                      </table>
                    </div>
                    
                    <?php  
                            $user = $this->ion_auth->user()->row();
                            $this->db->where('supplier', $user->id);
                            $this->db->where('order_id', $order_id);
                            $query = $this->db->get('orders');
                            if ($query){ ?>
                                            <div class="space-4"></div>
                        <div class="clearfix form-actions">
                              <div class="col-md-offset-3 col-md-9">
                              <?php echo form_open('?/admin/approve_order/'.$order_id, "class='form-horizontal'");?> 
                              <input type="hidden" name="order_id"value="<?php echo $order_id; ?>">
                              <button class="btn btn-info" type="submit">
                              <i class="ace-icon fa fa-check bigger-110"></i>
                              Aprove Order
                              </button>
                              </form>
                        
                              &nbsp; &nbsp; &nbsp;
                              <?php echo form_open('?/admin/reject_order/'.$order_id, "class='form-horizontal'");?>
                              <input type="hidden" name="order_id"value="<?php echo $order_id; ?>">
                              <button class="btn" type="reset">
                              <i class="ace-icon fa fa-undo bigger-110"></i>
                              Reject Order
                              </button>
                              </form>
                              </div>
                        </div>
                            <?php } ?>

          </div>
			<div class="card-footer py-3">
			  <p class="m-0 font-weight-bold text-primary">
				  <?php echo anchor('?/admin/order/', 'Back To Orders')?> | <?php echo anchor('?/admin/create_order/'.$order_id, 'Add Drug To Order')?>
			  </p>

            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

 

