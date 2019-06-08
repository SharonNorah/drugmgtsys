<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inventory extends CI_Controller {

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

	}
	public function index($page = 'admin-template') {

		$data = array();

		
			$data["inventories"] = $this->Admin_model->list_inventories();
			$this->load->view('layouts/admin-header', $data);
			$this->load->view('layouts/admin-left-menu', $data);
			$this->load->view('layouts/' . $page, $data);
			$this->load->view('layouts/admin-footer', $data);

        
		
	}


	public function create_inventories() 
	{
		$page = 'admin-template';
		
		$data = array();
		$this->form_validation->set_rules('inventory_id', 'inventory_id', 'required');
		$this->form_validation->set_rules('transaction_date', 'transaction_date', 'required');
		$this->form_validation->set_rules('quantity', 'quantity', 'required');
		$this->form_validation->set_rules('expiry_date', 'expiry_date', 'required');
		$this->form_validation->set_rules('source', 'source', 'required');
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
			$this->Admin_model->create_inventories();
			if(isset($_POST['inventory_id'])){
				$inventory_id = $_POST['inventory_id'];
				redirect("?/admin/create_inventory/".$inventory_id );
			}

        }
		
	}

	public function create_inventory() 
	{
		$page = 'admin-template';
		$data['inventory_id'] = $this->uri->segment(3);
		$data['drugs'] = $this->Admin_model->list_drugs();

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
            $this->Admin_model->create_inventory($data['inventory_id']);
            redirect("?/admin/inventories");
        }
		
	}

	public function edit_inventories($id)
	{
		$page = 'admin-template';
		$data = array();
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

	public function list_inventory(){
			$page = 'admin-template';
			$data["inventory"] = $this->Admin_model->list_inventory($this->uri->segment(3));
			$this->load->view('layouts/admin-header', $data);
			$this->load->view('layouts/admin-left-menu', $data);
			$this->load->view('layouts/' . $page, $data);
			$this->load->view('layouts/admin-footer', $data);
	}

	public function delete_inventory($id)
    {
        $id = $this->uri->segment(3);
        
        if (empty($id))
        {
            show_404();
        }
                
        $news_item = $this->Admin_model->get_drug('', '', $id);;
        
        if($this->Admin_model->delete_drug($id)){
			$this->session->set_flashdata('message', 'Deleted Sucessfully');
			echo "<META http-equiv=refresh content=0;URL=?/admin/drug>";  
		}		
    }



}
