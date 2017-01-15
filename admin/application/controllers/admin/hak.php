<?php
    
    if (!defined('BASEPATH'))
    exit('No direct script access allowed');
    
    class Hak extends CI_Controller {
     
        public function __construct() {
            parent::__construct();
            $this->load->library('form_validation');
            if (!$this->session->userdata('is_admin_login')) {
                redirect('admin/home');
            }
        }
        
        public function index() {
            
            $query=$this->db->get("hak");
            $data['gonder']=$query->result();
            $this->load->view('admin/vwHak',$data);
            
        }
        
        public function cevap() // Düzenleme formundan gelen verileri güncelleme
        {
            $id = $this->uri->segment('4'); // Parametre ile gönderilen "id" yi al
			         $query = $this->db->get_where("hak",array("id"=>$id)); // Veritabanýndan ilgili kaydý sorgula getir
			         $data['page'] = $query->result(); //Sonuçlarý $data deðiþkenine ata
            
            $this->load->helper('form'); // Form kütüphanesini çaðýr
            
            
            $this->load->view('admin/vwHak',$data);
            
        }
        
        public function haber() // Düzenleme formundan gelen verileri güncelleme
        {
            $id = $this->uri->segment('4'); // Parametre ile gönderilen "id" yi al
			         $query = $this->db->get_where("haber",array("id"=>$id)); // Veritabanýndan ilgili kaydý sorgula getir
			         $data['page'] = $query->result(); //Sonuçlarý $data deðiþkenine ata
            
            $this->load->helper('form'); // Form kütüphanesini çaðýr
            
            
            $this->load->view('admin/vwHaber',$data);
            
        }
        
        public function ayar() // Düzenleme formundan gelen verileri güncelleme
        {
            $id = $this->uri->segment('4'); // Parametre ile gönderilen "id" yi al
            $query = $this->db->get_where("hak",array("id"=>$id)); // Veritabanýndan ilgili kaydý sorgula getir
            $data['page'] = $query->result(); //Sonuçlarý $data deðiþkenine ata
            
            $this->load->helper('form'); // Form kütüphanesini çaðýr
            
            
            $this->load->view('admin/vwAyar',$data);
            
        }
        public function icerik() // Düzenleme formundan gelen verileri güncelleme
        {
            $id = $this->uri->segment('4'); // Parametre ile gönderilen "id" yi al
            $query = $this->db->get_where("hak",array("id"=>$id)); // Veritabanýndan ilgili kaydý sorgula getir
            $data['page'] = $query->result(); //Sonuçlarý $data deðiþkenine ata
            
            $this->load->helper('form'); // Form kütüphanesini çaðýr
            
            
            $this->load->view('admin/vwIcerik',$data);
            
        }
        public function hak_guncelle() // Düzenleme formundan gelen verileri güncelleme
        {
            $id = $this->uri->segment('4'); // Parametre ile gönderilen "id" yi al
            $this->load->model('admin_model'); // Kayýt iþleminin yapýlacaðý model
            
            // form nesnelerinden alýnan veriler tablo alanlarý ile eþleþtiriliyor
            $data=array(
                        'baslik' => $this->input->post('numara'),
                        'icerik' => $this->input->post('adsoy'),
                        );
            
            // Data dizisine yüklenen verileri models teki ilgili fonksiyona gönderme
            $this->admin_model->update_hak($data,$id); //  fonksiypnua datalarý id ile  gönder
            
            //redirect("ogrenci"); // Öðrenci ana sayfasýna gönder
            $this->index();
            redirect("admin/");
            
        }
        public function ayar_guncelle() // Düzenleme formundan gelen verileri güncelleme
        {
            $id = $this->uri->segment('4'); // Parametre ile gönderilen "id" yi al
            $this->load->model('admin_model'); // Kayýt iþleminin yapýlacaðý model
            
            // form nesnelerinden alýnan veriler tablo alanlarý ile eþleþtiriliyor
            $data=array(
                        'baslik' => $this->input->post('numara'),
                        'icerik' => $this->input->post('adsoy'),
                        'title' => $this->input->post('title'),
                        'firma_adi' => $this->input->post('firma_adi'),
                        'keywords' => $this->input->post('keywords'),
                        'email' => $this->input->post('email'),
                        'smtp_mail' => $this->input->post('smtp')
                        );
            
            // Data dizisine yüklenen verileri models teki ilgili fonksiyona gönderme
            $this->admin_model->update_ayar($data,$id); //  fonksiypnua datalarý id ile  gönder
            
            //redirect("ogrenci"); // Öðrenci ana sayfasýna gönder
            $this->index();
            redirect("admin/");
            
        }
        public function iletisim_guncelle() // Düzenleme formundan gelen verileri güncelleme
        {
            $id = $this->uri->segment('4'); // Parametre ile gönderilen "id" yi al
            $this->load->model('admin_model'); // Kayýt iþleminin yapýlacaðý model
            
            // form nesnelerinden alýnan veriler tablo alanlarý ile eþleþtiriliyor
            $data=array(
                        'tel' => $this->input->post('tel'),
                        'fax' => $this->input->post('fax'),
                        'email' => $this->input->post('email'),
                        'adres' => $this->input->post('adres')
                        
                        );
            
            // Data dizisine yüklenen verileri models teki ilgili fonksiyona gönderme
            $this->admin_model->update_iletisim($data,$id); //  fonksiypnua datalarý id ile  gönder
            
            //redirect("ogrenci"); // Öðrenci ana sayfasýna gönder
            $this->index();
            redirect("admin/");
            
        }
        
        
        public function add_post()
        {  // Öðrenci bilgi giriþ formu sayfasýna gönderir
            $this->load->helper('form');
            $this->load->view('admin/vwAddPost');
        }
        
        public function ekle() {
            
		        		$this->load->model('admin_model'); // Kayýt iþleminin yapýlacaðý model
            // Kayýt formundandan bilgileri al
            // form nesnelerinden alýnan veriler tablo alanlarý ile eþleþtiriliyor
            $data=array(
                        'post_title' => $this->input->post('numara'),
                        'post' => $this->input->post('adsoy')
                        );
            
            // Data dizisine yüklenen verileri models teki ilgili fonksiyona gönderme
            $this->admin_model->insert_post($data); // ekleme fonk. datalarý gönder
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