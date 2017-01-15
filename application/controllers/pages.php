<?php

class Pages extends CI_Controller
{
	public function __construct() {
        parent::__construct();
        $this->load->model('m_gonder');
        $this->load->model('m_db');
    }
    
    function news()
    {
        $dene['posts'] = $this->m_db->get_posts(5);
        $this->load->model('m_db');
        $id=0;
        $class_name = array(
                            'home_class'=>'',
                            'login_class' =>'',
                            'register_class' => '',
                            'upload_class'=>'',
                            'news_class'=>'active',
                            'contact_class'=>'');
        $this->load->model('m_db');
        $id=1;
        $veri['hakkimizda']=$this->m_db->get_getir($id);
        $merge = array_merge($veri, $class_name);
        $this->load->view('header',$merge);
        $data['hakkimizda']=$this->m_db->get_hak($id);
        $birles = array_merge($dene, $data);
        $this->load->view('news',$birles);
        $this->load->view('footer');
    }


    
    
    function contact()
    {
        $data['posts'] = $this->m_db->get_posts(5);
        $class_name = array(
            'home_class'=>'', 
            'login_class' =>'', 
            'register_class' => '',
            'upload_class'=>'',
            'news_class'=>'',
            'contact_class'=>'active');
        
        $this->load->model('m_db');
        $id=1;
        $veri['hakkimizda']=$this->m_db->get_getir($id);
        $merge = array_merge($veri, $class_name);
        $this->load->view('header',$merge);
        $this->load->view('v_contact',$data);
        $this->load->view('footer');
    }
    
    


	function register()
    {
        
		$data = array(
            'your_name' => $this->input->post('your_name'),
            'your_email' => $this->input->post('your_email'),
            'your_enquiry' => $this->input->post('your_enquiry'),
        );
		
       $this->m_gonder->create_mesaj($data);
        
        redirect(base_url().'blog/');
	}
	
	function aboutus()
    {
        $dene['posts'] = $this->m_db->get_posts(5);
		$this->load->model('m_db');
        $id=0;
        $class_name = array(
            'home_class'=>'', 
            'login_class' =>'', 
            'register_class' => '',
            'upload_class'=>'active',
            'news_class'=>'',                
            'contact_class'=>'');
        $this->load->model('m_db');
        $id=1;
        $veri['hakkimizda']=$this->m_db->get_getir($id);
        $merge = array_merge($veri, $class_name);
        $this->load->view('header',$merge);
		$data['hakkimizda']=$this->m_db->get_hak($id);
        $birles = array_merge($dene, $data);
        $this->load->view('v_upload_form',$birles);
        $this->load->view('footer');
    }
}
