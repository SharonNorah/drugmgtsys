<?php if (!defined('BASEPATH'))  exit('No direct script access allowed');

class BaseController extends CI_Controller {

    var $_container;
    var $_modules;

    function __construct() {
        parent::__construct();
        $this->load->helper('url');


        // Set container variable
        $this->load->view('public/layout');
        $this->_modules = $this->config->item('modules_locations');

        log_message('debug', 'CI My Admin : MY_Controller class loaded');
    }
}