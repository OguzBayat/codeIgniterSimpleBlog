
<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Hakkinda extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
         if (!$this->session->userdata('is_admin_login')) {
            redirect('admin/home');
        }
    }

    public function index() {
	
				$query=$this->db->get("hakkinda"); 
				$data['gonder']=$query->result(); 
				$this->load->view('admin/vwEditHakkinda',$data);
				
    }

	public function add_post()
		{  // Öğrenci bilgi giriş formu sayfasına gönderir
			$this->load->helper('form');
			$this->load->view('admin/vwAddPost');
		}
		
		public function cevap() // Düzenleme formundan gelen verileri güncelleme
			{  
				$id = $this->uri->segment('4'); // Parametre ile gönderilen "id" yi al
				$this->load->model('admin_model'); // Kayıt işleminin yapılacağı model
		
				// form nesnelerinden alınan veriler tablo alanları ile eşleştiriliyor
				$data=array(
				'baslik' => $this->input->post('baslik'),
				'hak' => $this->input->post('hak'),
				);
		
				// Data dizisine yüklenen verileri models teki ilgili fonksiyona gönderme
				$this->admin_model->update_hakkinda($data,$id); //  fonksiypnua dataları id ile  gönder
		
				//redirect("ogrenci"); // Öğrenci ana sayfasına gönder
				$this->index();
				redirect("admin/users");
	
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
