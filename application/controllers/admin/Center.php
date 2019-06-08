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
    
    public function index($page = 'admin-template') 
    {

		
			$data["centers"] = $this->Admin_model->list_centers();
			$this->load->view('layouts/admin-header', $data);
			$this->load->view('layouts/admin-left-menu', $data);
			$this->load->view('layouts/' . $page, $data);
			$this->load->view('layouts/admin-footer', $data);

        
		
	}

	public function create_center() 
	{
		$page = 'admin-template';
		$data['center_id'] = $this->uri->segment(3);

		$this->form_validation->set_rules('center_code', 'center_code', 'required');
        $this->form_validation->set_rules('center_name', 'center_name', 'required');
        $this->form_validation->set_rules('district', 'district', 'required');
        $this->form_validation->set_rules('level', 'level', 'required');
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
            $this->Admin_model->create_center();
            redirect("?/admin/center");
        }
		
	}

	public function edit_center($center_code)
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
			$data["data"] = $this->Admin_model->get_center('', '', $center_code);
			$this->load->view('layouts/admin-header', $data);
			$this->load->view('layouts/admin-left-menu', $data);
			$this->load->view('layouts/' . $page, $data);
            $this->load->view('layouts/admin-footer', $data);
            if (!$this->ion_auth->logged_in())
            {
              redirect('?/auth/login');
            }
 
        }
        else
        {
            $this->Admin_model->create_center($center_code);
            echo "<META http-equiv=refresh content=0;URL=?/admin/drug>";
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
