<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct() {
		parent::__construct();
		$this->load->library(array('form_validation', 'session'));
		$this->load->helper(array('form', 'url', 'html', 'text', 'security'));
		$this->load->database();
		$this->load->library(array('ion_auth'));
		$this->load->model('Admin_model');
		if (!$this->ion_auth->logged_in())
		{
		  redirect('?/auth/login');
		}

	}
	public function index($page = 'admin-template') {

		
			$data["orders"] = $this->Admin_model->list_orders();
			$data["number"] = $this->Admin_model->get_number();
			$data["date"] = $this->Admin_model->get_date();

			$this->load->view('layouts/admin-header', $data);
			$this->load->view('layouts/admin-left-menu', $data);
			$this->load->view('layouts/' . $page, $data);
			$this->load->view('layouts/admin-footer', $data);

        
		
	}


	public function create_orders() 
	{
		$page = 'admin-template';
		$data["orders"] = $this->Admin_model->list_orders();
		$data["number"] = $this->Admin_model->get_number();
		$data["date"] = $this->Admin_model->get_date();

		$this->form_validation->set_rules('order_date', 'order_date', 'required');
		$this->form_validation->set_rules('supplier', 'supplier', 'required');
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
		
        if ($this->form_validation->run() === FALSE)
        {
		

			$data["date"] = $this->Admin_model->get_date();
			$this->load->view('layouts/admin-header', $data);
			$this->load->view('layouts/admin-left-menu', $data);
			$this->load->view('layouts/' . $page, $data);
			$this->load->view('layouts/admin-footer', $data);

 
        }
        else
        {
			$this->Admin_model->create_orders();
			
			if(isset($_POST['order_id'])){
				$order_id = $_POST['order_id'];
				redirect("?/admin/create_order/".$order_id );
			}

        }
		
	}

	public function create_order() 
	{
		$page = 'admin-template';
		$data['order_id'] = $this->uri->segment(3);
		$data['drugs'] = $this->Admin_model->list_drugs();
		$data["orders"] = $this->Admin_model->list_orders();
		$data["number"] = $this->Admin_model->get_number();
		$data["date"] = $this->Admin_model->get_date();

		$this->form_validation->set_rules('quantity', 'quantity', 'required');
		$this->form_validation->set_rules('drug_code', 'drug code', 'required');
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

        if ($this->form_validation->run() === FALSE)
        {
		
			$data["data"] = array();
			$this->load->view('layouts/admin-header', $data);
			$this->load->view('layouts/admin-left-menu', $data);
			$this->load->view('layouts/' . $page, $data);
			$this->load->view('layouts/admin-footer', $data);

 
        }
        else
        {
			$order_status = $_POST['order_status'];
			$this->Admin_model->create_order($data['order_id']);
			$this->Admin_model->update_order_status($order_status);
            redirect("?/admin/order");
        }
		
	}

	public function edit_order($id)
	{
		$page = 'admin-template';
		$data = array();
		$data["orders"] = $this->Admin_model->list_orders();
		$data["number"] = $this->Admin_model->get_number();
		$data["date"] = $this->Admin_model->get_date();

		$this->load->helper('form');
        $this->load->library('form_validation');
		$this->form_validation->set_rules('employee_name', 'Name', 'required');
        $this->form_validation->set_rules('employee_age', 'Age', 'required');
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
		
        if ($this->form_validation->run() === FALSE)
        {
			$data["data"] = $this->Admin_model->get_inventories('','',$id);
			$this->load->view('layouts/admin-header', $data);
			$this->load->view('layouts/admin-left-menu', $data);
			$this->load->view('layouts/' . $page, $data);
			$this->load->view('layouts/admin-footer', $data);
 
        }
        else
        {
            $this->Admin_model->create_drug($id);
            echo "<META http-equiv=refresh content=0;URL=?/admin/drug>";
        }
		
		
	}

	public function list_order(){
			$page = 'admin-template';
			$data["orders"] = $this->Admin_model->list_orders();
			$data["number"] = $this->Admin_model->get_number();
			$data["inventory"] = $this->Admin_model->list_order($this->uri->segment(3));
			$data["date"] = $this->Admin_model->get_date();
			$data['order_id'] = $this->uri->segment(3);

			$this->load->view('layouts/admin-header', $data);
			$this->load->view('layouts/admin-left-menu', $data);
			$this->load->view('layouts/' . $page, $data);
			$this->load->view('layouts/admin-footer', $data);
	}

	public function rejected_order(){
		$page = 'admin-template';
		$data = array();
		$data["orders"] = $this->Admin_model->rejected_order();
		$data["number"] = $this->Admin_model->get_number();
		$data["date"] = $this->Admin_model->get_date();

			$data["data"] = $this->Admin_model->get_inventories('', '', $id);
			$this->load->view('layouts/admin-header', $data);
			$this->load->view('layouts/admin-left-menu', $data);
			$this->load->view('layouts/' . $page, $data);
			$this->load->view('layouts/admin-footer', $data);
 
            echo "<META http-equiv=refresh content=0;URL=?/admin/drug>";
        
		
}

	public function delete_order($id)
    {
        $id = $this->uri->segment(3);
		$this->Admin_model->delete_order($id);
		$this->session->set_flashdata('message', 'Deleted Sucessfully');
		echo "<META http-equiv=refresh content=0;URL=?/admin/order>";  
			
    }

	public function approve_order(){
		
		$this->Admin_model->approve_order($this->uri->segment(3));
		echo "<META http-equiv=refresh content=0;URL=?/admin/order>"; 
	}
	public function reject_order(){
		
		$this->Admin_model->reject_order($this->uri->segment(3));
		echo "<META http-equiv=refresh content=0;URL=?/admin/order>"; 
	}

}
