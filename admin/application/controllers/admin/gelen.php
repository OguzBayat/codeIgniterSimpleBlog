<?php
    
    if (!defined('BASEPATH'))
    exit('No direct script access allowed');
    
    class Gelen extends CI_Controller {
        
        public function __construct() {
            parent::__construct();
            $this->load->library('form_validation');
            if (!$this->session->userdata('is_admin_login')) {
                redirect('admin/home');
            }
        }
        
        public function index() {
            
            $query=$this->db->get("gelen");
            $data['gonder']=$query->result();
            $this->load->view('admin/vwMesaj',$data);
            
        }
        
        public function cevap_bekle() // Düzenleme formundan gelen verileri güncelleme
        {
            $id = $this->uri->segment('4'); // Parametre ile gönderilen "id" yi al
            $this->load->model('admin_model'); // Kayıt işleminin yapılacağı model
            
            // form nesnelerinden alınan veriler tablo alanları ile eşleştiriliyor
            
            $post_title=$this->input->post('email');
            $data_added=$this->input->post('adsoyad');
            $post=$this->input->post('icerik');
            $post2 = $this->input->post('konu');
            
            
            $sonuc=$this->admin_model->sendEmail($post_title,$data_added,$post);
            if($sonuc=="1"){
                redirect("admin/gelen");
            }else{
                echo "0";
            }
            
            // Data dizisine yüklenen verileri models teki ilgili fonksiyona gönderme
            //  fonksiypnua dataları id ile  gönder
            
            //redirect("ogrenci"); // Öğrenci ana sayfasına gönder
            
            
            
        }
        
        public function cevap() // Düzenleme formundan gelen verileri güncelleme
        {
            $id = $this->uri->segment('4'); // Parametre ile gönderilen "id" yi al
			         $query = $this->db->get_where("gelen",array("id"=>$id)); // Veritabanından ilgili kaydı sorgula getir
            
            
			         $data['page'] = $query->result(); //Sonuçları $data değişkenine ata
            
            $this->load->helper('form'); // Form kütüphanesini çağır
            
            
            $this->load->view('admin/vwCevap',$data);
            
            
            
        }
        
        public function okundu() // Düzenleme formundan gelen verileri güncelleme
        {
            $this->load->model('admin_model');
            
            $id = $this->uri->segment('4'); // Parametre ile gönderilen "id" yi al
            // Veritabanından ilgili kaydı sorgula getir
            
            
            $data['okundu_id'] = 1; //Sonuçları $data değişkenine ata
            $this->admin_model->okunud_olarak_isaretle($data,$id);
            $this->load->helper('form'); // Form kütüphanesini çağır
            
            redirect('admin/gelen');
            
            
        }
        
        
        
        public function add_post()
        {  // Öğrenci bilgi giriş formu sayfasına gönderir
            $this->load->helper('form');
            $this->load->view('admin/vwAddPost');
        }
        
        public function ekle() {
            
		        		$this->load->model('admin_model'); // Kayıt işleminin yapılacağı model
            // Kayıt formundandan bilgileri al
            // form nesnelerinden alınan veriler tablo alanları ile eşleştiriliyor
            $data=array(
                        'post_title' => $this->input->post('numara'),
                        'post' => $this->input->post('adsoy')
                        );
            
            // Data dizisine yüklenen verileri models teki ilgili fonksiyona gönderme
            $this->admin_model->insert_post($data); // ekleme fonk. dataları gönder
            redirect("admin/cms");
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