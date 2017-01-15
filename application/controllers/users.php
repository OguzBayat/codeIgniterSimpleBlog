<?php

class Users extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('m_user');
        $this->load->model('m_db');
    }
    function login()
    {
        $dene['posts'] = $this->m_db->get_posts(5);
        if($this->session->userdata("user_id"))//If already logged in
        {
            redirect(base_url());//redirect to the blog page
        }
        $data['error'] = 0;
        if($this->input->post())//data inputed for login
        {
            $username = $this->input->post('username', TRUE);
            $password = $this->input->post('password', TRUE);
            $user_type = $this->input->post('user_type', TRUE);
            $user = $this->m_user->login($username, $password, $user_type);
            if(!$user){ $data['error'] = 1;}//when user doesn't exist
            else //when user exist
            {
                $this->session->set_userdata('user_id', $user['user_id']);
                $this->session->set_userdata('username', $user['username']);
                $this->session->set_userdata('user_type',$user['user_type']);
                redirect(base_url().'blog/');
            }
        }
        $birles = array_merge($dene, $data);
        $class_name = array(
            'home_class'=>'', 
            'login_class' => 'active',
            'register_class' => '',
            'upload_class'=>'',
            'news_class'=>'',
            'contact_class'=>'');
        $this->load->model('m_db');
        $id=1;
        $veri['hakkimizda']=$this->m_db->get_getir($id);
        $merge = array_merge($veri, $class_name);
        $this->load->view('header',$merge);
        $this->load->view('v_login',$birles);
        $this->load->view('footer');
    }
    function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url().'blog/');
    }
    function unut_form()
    {
        $data['posts'] = $this->m_db->get_posts(5);
        $class_name = array(
                            'home_class'=>'',
                            'login_class' => 'active',
                            'register_class' => '',
                            'upload_class'=>'',
                            'news_class'=>'',
                            'contact_class'=>'');
        $this->load->model('m_db');
        $id=1;
        $veri['hakkimizda']=$this->m_db->get_getir($id);
        $merge = array_merge($veri, $class_name);
        $this->load->view('header',$merge);
        $this->load->view('unut',$data);
        $this->load->view('footer');
        
    }
    function unut()
    {
       
        
        $this->load->model('m_user');
        $email = $this->input->post('email');
        $konu = 'Şifreniz';
        $sifre = '123456';
        $sonuc = $this->m_user->sendEmail($email,$sifre,$konu);
        if($sonuc=="1"){
            redirect("blog");
        }else{
            echo "0";
        }
        
        
        
       
        
    }
    function register()
    {
        $dene['posts'] = $this->m_db->get_posts(5);
        $data['error'] = NULL;
        if($this->input->post())
        {
            $config = array(
                array(
                    'field' => 'username',
                    'label' => 'Username',
                    'rules' => 'trim|required|min_length[3]|is_unique[users.username]'//is unique username in the user's table of DB
                ),
                array(
                    'field' => 'password',
                    'label' => 'Password',
                    'rules' => 'trim|required|min_length[5]|max_length[20]'
                ),
                array(
                    'field' => 'passconf',
                    'label' => 'Password confirmed',
                    'rules' => 'trim|required|matches[password]',
                ),
                array(
                    'field' => 'user_type',
                    'label' => 'User type',
                    'rules' => 'trim|required',
                ),
                array(
                    'field' => 'email',
                    'label' => 'Email',
                    'rules' => 'trim|required|is_unique[users.email]|valid_email',//is unique email in the user's table of DB
                ),
            );
            $this->load->library('form_validation');
            $this->form_validation->set_rules($config);
            if($this->form_validation->run() == FALSE)
            {
                $data['error'] = validation_errors();
            }
            else 
            {
                $data = array(
                    'username' => $this->input->post('username'),
                    'email' => $this->input->post('email'),
                    'password' => ($this->input->post('password')),
                    'user_type' => $this->input->post('user_type'),
                );
                $user_id = $this->m_user->create_user($data);
                $this->session->set_userdata('user_id',$user_id);
                $this->session->set_userdata('username',$this->input->post('username'));
                $this->session->set_userdata('user_type',$this->input->post('user_type'));
                redirect(base_url().'blog/');
            }
            
        }
        $birles = array_merge($dene, $data);
        $class_name = array(
            'home_class'=>'', 
            'login_class' =>'', 
            'register_class' => 'active',
            'upload_class'=>'',
            'news_class'=>'',
            'contact_class'=>'');
        
        $this->load->model('m_db');
        $id=1;
        $veri['hakkimizda']=$this->m_db->get_getir($id);
        $merge = array_merge($veri, $class_name);
        $this->load->view('header',$merge);
        $this->load->view('v_register',$birles);
        $this->load->view('footer');
    }
    
}
