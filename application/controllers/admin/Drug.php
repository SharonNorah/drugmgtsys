<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Drug extends CI_Controller {

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

		if (!file_exists(APPPATH . 'views/layouts/' . $page . '.php')) {
			show_404();
		}
		
		$data["orders"] = $this->Admin_model->list_orders();
		$data["number"] = $this->Admin_model->get_number();
		$data["date"] = $this->Admin_model->get_date();

			$data["drugs"] = $this->Admin_model->list_drugs();
			$this->load->view('layouts/admin-header', $data);
			$this->load->view('layouts/admin-left-menu', $data);
			$this->load->view('layouts/' . $page, $data);
			$this->load->view('layouts/admin-footer', $data);

        
		
	}

	public function create_drug() 
	{
		$page = 'admin-template';
		
		$data["orders"] = $this->Admin_model->list_orders();
		$data["number"] = $this->Admin_model->get_number();
		$data["date"] = $this->Admin_model->get_date();

		$this->form_validation->set_rules('drug_code', 'drug_code', 'required');
		$this->form_validation->set_rules('drug_name', 'drug_name', 'required');
        $this->form_validation->set_rules('unit_pack', 'unit_pack', 'required');
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
            $this->Admin_model->create_drug();
            echo "<META http-equiv=refresh content=0;URL=?/admin/drug>";
        }
		
	}

	public function edit_drug($id)
	{
		$page = 'admin-template';
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
			$data["data"] = $this->Admin_model->get_drug('','',$id);
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

	public function delete_drug($id)
    {
        $id = $this->uri->segment(3);
		$data["orders"] = $this->Admin_model->list_orders();
		$data["number"] = $this->Admin_model->get_number();
		$data["date"] = $this->Admin_model->get_date();

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
