<?php

class Upload extends CI_Controller {

    function __construct() 
    {
        parent::__construct();
        $this->load->model('m_db');
    }

    function hak($id) {
		$this->load->model('m_db');
		$data['hak'] = $this->m_db->get_hak($id);
        $class_name = array(
            'home_class' => '',
            'login_class' => '',
            'register_class' => '',
            'upload_class' => 'active',
            'news_class'=>'',
            'contact_class' => '');
        
        $this->load->view('header',$class_name);
        $this->load->view('v_upload_form', $data);
        $this->load->view('footer');
    }
	
	

}
