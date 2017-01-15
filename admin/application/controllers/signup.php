<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Signup extends CI_Controller {

  
    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index() {
           $arr['page'] ='signup';
        $this->load->view('vwSignup',$arr);
    }


}

