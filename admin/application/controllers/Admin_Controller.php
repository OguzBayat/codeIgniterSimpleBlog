<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Admin_controller extends CI_Controller {
        
        function __construct()
        {
            
            parent::__construct();
            $this->load->helper('url');
            $this->load->helper('form');
            $this->load->database();
            $this->load->model('Main_model');
            $this->load->model('Admin_model');
            $this->load->library('session');
            
            
        }

public function index()
{
    $this->load->view('admin/index');
}

    }