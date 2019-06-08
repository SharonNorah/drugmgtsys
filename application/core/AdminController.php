<?php if (!defined('BASEPATH'))  exit('No direct script access allowed');
class AdminController extends CI_Controller {
    public $is_admin;
    public $logged_in_name;

    function __construct() {
        parent::__construct();

        // Set container variable
        $this->load->view('admin/layout');
        $this->_modules = $this->config->item('modules_locations');
        $this->load->helper('url');
        $this->load->library(array('ion_auth'));

        if (!$this->ion_auth->logged_in()) {
            redirect('/auth', 'refresh');
        }

        $this->is_admin = $this->ion_auth->is_admin();
        $user = $this->ion_auth->user()->row();
        $this->logged_in_name = $user->first_name;

        log_message('debug', 'CI My Admin : Admin_Controller class loaded');
    }
}