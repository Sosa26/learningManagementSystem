<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Declaration extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // Your own constructor code
        $this->load->database();
        $this->load->library('session');
        // $this->load->library('stripe');
        /*cache control*/
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
        
    }

    public function index() {
        $this->declaration();
    }

    public function declaration() {
        $page_data['page_name'] = "declaration";
        $page_data['page_title'] = get_phrase('declaration');
        $this->load->view('frontend/'.get_frontend_settings('theme').'/index', $page_data);
    }

}