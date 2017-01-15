<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Cms extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
         if (!$this->session->userdata('is_admin_login')) {
            redirect('admin/home');
        }
    }

    public function index() {
	
				$query=$this->db->get("posts"); 
				$data['gonder']=$query->result(); 
				$this->load->view('admin/vwCms',$data);
				
    }

	public function add_post()
		{  // Öğrenci bilgi giriş formu sayfasına gönderir
			$this->load->helper('form');
			$this->load->view('admin/vwAddPost');
		}
    public function add_haber()
    {  // Öğrenci bilgi giriş formu sayfasına gönderir
        $this->load->helper('form');
        $this->load->view('admin/vwHaber');
    }

    public function ekle() {
        
		        		$this->load->model('admin_model'); // Kayıt işleminin yapılacağı model
						// Kayıt formundandan bilgileri al
						// form nesnelerinden alınan veriler tablo alanları ile eşleştiriliyor
						$data=array(
						'post_title' => $this->input->post('numara'),
						'post' => $this->input->post('adsoy'),
						'active' => 1,
                        'image_path' => '/oguz/uploads/images/'.$this->resim_yukle("images"),
						);

						// Data dizisine yüklenen verileri models teki ilgili fonksiyona gönderme
						$this->admin_model->insert_post($data); // ekleme fonk. dataları gönder
						redirect("admin/cms");
    }
    
    public function haberekle() {
        
        $this->load->model('admin_model'); // Kayıt işleminin yapılacağı model
        // Kayıt formundandan bilgileri al
        // form nesnelerinden alınan veriler tablo alanları ile eşleştiriliyor
        $data=array(
                    'haber' => $this->input->post('haber'),
                    'active' => 1,
                    );
        
        // Data dizisine yüklenen verileri models teki ilgili fonksiyona gönderme
        $this->admin_model->insert_haber($data); // ekleme fonk. dataları gönder
        redirect("admin/dashboard");
    }
    
    function resim_yukle($data){
        $config['upload_path'] = "uploads/$data/"; // dosyayi upload edecegimiz klasör
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $this->load->library('upload', $config);
        $sonuc = $this->upload->do_upload('image_path');
        $upload_data = $this->upload->data();
        $file_name =$upload_data['file_name'];
        return $file_name;
    }
    
    

    public function add_user() {
        $arr['page'] = 'user';
        $this->load->view('admin/vwAddUser',$arr);
    }

     public function edit_user() {
        $arr['page'] = 'user';
        $this->load->view('admin/vwEditUser',$arr);
    }
    
     public function block_user() {
        // Code goes here
    }
    
     public function delete_post() {
        	$this->load->model('admin_model'); 
	 		$id = $this->uri->segment('4'); 
	 		$this->admin_model->delete_post($id); 
	 		redirect("posts");
    }
    
    
    
    

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */