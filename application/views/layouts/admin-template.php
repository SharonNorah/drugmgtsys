
<div id="header">
    <div class="color-line">
    </div>

</div>


<!-- Main Wrapper -->
<div id="wrapper">

  <div class="content animate-panel">

  <?php
if ($this->uri->segment(2) == 'dashboard') {

	$this->load->view('admin/dashboard');

} elseif ($this->uri->segment(2) == 'drug') {

	$this->load->view('admin/list_drugs');

} elseif (($this->uri->segment(2) == 'edit_drug') && ($this->uri->segment(3) != '')) {

	$this->load->view('admin/edit_drug');

} elseif ($this->uri->segment(2) == 'create_drug') {

	$this->load->view('admin/create_drug');

}  elseif ($this->uri->segment(2) == 'inventory') {

	$this->load->view('admin/list_inventory');

} elseif (($this->uri->segment(2) == 'rejected_order') && ($this->uri->segment(3) != '')) {

	$this->load->view('admin/rejected_order');
  
} elseif (($this->uri->segment(2) == 'create_inventory') && ($this->uri->segment(3) != '')) {
  
  $this->load->view('admin/create_inventory');
  
} elseif ($this->uri->segment(2) == 'create_inventories') {

	$this->load->view('admin/create_inventories');
  
} elseif (($this->uri->segment(2) == 'create_inventory') && ($this->uri->segment(3) != '')) {
  
  $this->load->view('admin/create_inventory');
  
} elseif ($this->uri->segment(2) == 'inventories') {
  
  $this->load->view('admin/list_inventories');
 
} elseif ($this->uri->segment(2) == 'list_inventory') {
  
  $this->load->view('admin/list_inventory');
   
} elseif ($this->uri->segment(2) == 'order') {
  
  $this->load->view('admin/list_orders');
   
} elseif ($this->uri->segment(2) == 'create_orders') {
  
  $this->load->view('admin/create_orders');
   
} elseif (($this->uri->segment(2) == 'create_order') && ($this->uri->segment(3) != '')) {
  
  $this->load->view('admin/create_order');
  
} elseif (($this->uri->segment(2) == 'list_order') && ($this->uri->segment(3) != '') && ($this->uri->segment(4) != '')) {
  
  $this->load->view('admin/list_order');
   
} elseif ($this->uri->segment(2) == 'center') {
  
  $this->load->view('admin/list_centers');
   
} elseif ($this->uri->segment(2) == 'create_center') {
  
  $this->load->view('admin/create_center');
   
} elseif (($this->uri->segment(2) == 'edit_center') && ($this->uri->segment(3) != '')) {

  $this->load->view('admin/edit_center');
  

} elseif (($this->uri->segment(2) == 'edit_inventory') && ($this->uri->segment(3) != '')) {

  $this->load->view('admin/edit_inventory');

} else {
	show_404();
}

?>


    </div>
