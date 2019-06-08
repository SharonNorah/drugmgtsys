<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Center extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->library(array('form_validation', 'session'));
		$this->load->helper(array('form', 'url', 'html', 'text', 'security'));
		$this->load->database();
		$this->load->library(array('ion_auth'));
		$this->load->model('Admin_model');

	}
	public function index($page = 'admin-template') {

		
			$data["centers"] = $this->Admin_model->list_centers();
			$this->load->view('layouts/admin-header', $data);
			$this->load->view('layouts/admin-left-menu', $data);
			$this->load->view('layouts/' . $page, $data);
			$this->load->view('layouts/admin-footer', $data);

        
		
	}


	public function create_centers() 
	{
		$page = 'admin-template';
		
		$data = array();
		$this->form_validation->set_rules('order_date', 'order_date', 'required');
		$this->form_validation->set_rules('supplier', 'supplier', 'required');
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
			$this->Admin_model->create_centers();
			
			if(isset($_POST['center_id'])){
				$order_id = $_POST['order_id'];
				redirect("?/admin/create_order/".$order_id );
			}

        }

    }
		
	

	public function create_center() 
	{
		$page = 'admin-template';
		$data['center_id'] = $this->uri->segment(3);

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
			$this->Admin_model->create_center($data['order_id']);
            redirect("?/admin/order");
        }
		
	}

	public function edit_centers($id)
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
			$data["data"] = $this->Admin_model->get_center('','',$id);
			$this->load->view('layouts/admin-header', $data);
			$this->load->view('layouts/admin-left-menu', $data);
			$this->load->view('layouts/' . $page, $data);
			$this->load->view('layouts/admin-footer', $data);
 
        }
        else
        {
            $this->Admin_model->create_drug($id);
            echo "<META http-equiv=refresh content=0;URL=?/admin/centers>";
        }
		
		
	}

	public function list_order(){
			$page = 'admin-template';
			$data["inventory"] = $this->Admin_model->list_order($this->uri->segment(3));
			$this->load->view('layouts/admin-header', $data);
			$this->load->view('layouts/admin-left-menu', $data);
			$this->load->view('layouts/' . $page, $data);
			$this->load->view('layouts/admin-footer', $data);
	}

	public function delete_center($id)
    {
        $id = $this->uri->segment(3);
        
        if (empty($id))
        {
            show_404();
        }
                
        $news_item = $this->Admin_model->get_drug('', '', $id);;
        
        if($this->Admin_model->delete_center($id)){
			$this->session->set_flashdata('message', 'Deleted Sucessfully');
			echo "<META http-equiv=refresh content=0;URL=?/admin/centers>";  
		}		
    }



}
