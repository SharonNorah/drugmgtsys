<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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
		if (!$this->ion_auth->logged_in())
		{
		  redirect('?/auth/login');
		}

	}


	public function index($page = 'admin-template') {


		if (!file_exists(APPPATH . 'views/layouts/' . $page . '.php')) {
			show_404();
		}
		$data['htitle'] = "Dashboard";
		$this->load->view('layouts/admin-header', $data);
		$this->load->view('layouts/admin-left-menu', $data);
		$this->load->view('layouts/' . $page, $data);
		$this->load->view('layouts/admin-footer', $data);
	}

}
