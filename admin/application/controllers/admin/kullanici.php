<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Kullanici extends CI_Controller {

    public function __construct() {
        parent::__construct();
		$this->load->helper('url');
				$this->load->database();
        $this->load->library('form_validation');
         
    }

    public function index() {
	
		
		$query=$this->db->get("users");
				$data['veri']=$query->result();
				$this->load->view('admin/vwManageUser',$data);
				
    }

	public function uye_ekle()
		{
			$this->load->helper('form');
			$this->load->view('admin/vwAddUser');
		}

    public function ekle() {
        
		        		$this->load->model('admin_model');
						$data=array(
						'username' => $this->input->post('k_adi'),
						'email' => $this->input->post('email'),
						'user_type' => $this->input->post('type'),
						'password' => $this->input->post('pass')
						);

						$this->admin_model->insert_ogrenci($data);
						redirect("admin/kullanici");
    }

     public function uye_duzenle() {
        
		
                 $id = $this->uri->segment('4');
		         $query = $this->db->get_where("users",array("user_id"=>$id));
		         $data['page'] = $query->result();
	
				 $this->load->helper('form');
				 
				
			     $this->load->view('admin/vwEditUser',$data);
				
    }
    
	public function uye_guncelle()
		{  
			$id = $this->uri->segment('4'); // Parametre ile gönderilen "id" yi al
			$this->load->model('admin_model'); // Kayıt işleminin yapılacağı model
		
			// form nesnelerinden alınan veriler tablo alanları ile eşleştiriliyor
			$data=array(
			'username' => $this->input->post('k_adi'),
			'email' => $this->input->post('email'),
			'user_type' => $this->input->post('type'),
			'password' => $this->input->post('pass')
			);
		
			// Data dizisine yüklenen verileri models teki ilgili fonksiyona gönderme
			$this->admin_model->update_ogrenci($data,$id); //  fonksiypnua dataları id ile  gönder
		
			//redirect("ogrenci"); // Öğrenci ana sayfasına gönder
			$this->index();
			redirect("admin/users");
	
		}
    
     public function delete_user() {
		
		 		$this->load->model('admin_model'); // Kayıt işleminin yapılacağı model
		 		$id = $this->uri->segment('4'); // adresteki 3 nolu parametreyi alır
		 		$this->admin_model->delete_ogrenci($id); // Parametre ile alınan ID yi silme fonksiyonuna gönder
		 		redirect("users");
		 	
        // Code goes here
    }

	public function edit_post() {

		
		
		
		$id = $this->uri->segment('4'); // Parametre ile gönderilen "id" yi al
		         $query = $this->db->get_where("posts",array("post_id"=>$id)); // Veritabanından ilgili kaydı sorgula getir
		         $data['page'] = $query->result(); //Sonuçları $data değişkenine ata

				 $this->load->helper('form'); // Form kütüphanesini çağır


			     $this->load->view('admin/vwEditPost',$data); // Dataları belirtilen view dosyasına gönder

	   }
	   
   	public function hakkinda() {

		
		
		$id = $this->uri->segment('4'); // Parametre ile gönderilen "id" yi al
		$this->load->model('admin_model'); // Kayıt işleminin yapılacağı model
	
		// form nesnelerinden alınan veriler tablo alanları ile eşleştiriliyor
		$data=array(
		'baslik' => $this->input->post('baslik'),
		'hak' => $this->input->post('hak'),
		);
	
		// Data dizisine yüklenen verileri models teki ilgili fonksiyona gönderme
		$this->admin_model->update_hakkinda($data,0); //  fonksiypnua dataları id ile  gönder
	
		//redirect("ogrenci"); // Öğrenci ana sayfasına gönder
		$this->index();
		redirect("admin/users");

   	   }

	public function post_guncelle() // Düzenleme formundan gelen verileri güncelleme
		{  
			$id = $this->uri->segment('4'); // Parametre ile gönderilen "id" yi al
			$this->load->model('admin_model'); // Kayıt işleminin yapılacağı model

			// form nesnelerinden alınan veriler tablo alanları ile eşleştiriliyor
			$data=array(
			'post_title' => $this->input->post('numara'),
			'date_added' => $this->input->post('adsoy'),
			'post' => $this->input->post('cins')
			);

			// Data dizisine yüklenen verileri models teki ilgili fonksiyona gönderme
			$this->admin_model->update_post($data,$id); //  fonksiypnua dataları id ile  gönder

			//redirect("ogrenci"); // Öğrenci ana sayfasına gönder
			$this->index();
			redirect("admin/cms");

		}
    
    
    
    

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */