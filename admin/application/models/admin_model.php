<?php
    class Admin_Model extends CI_Model {
        
        function __construct() {
            parent::__construct();
        }
        
        public function insert_ogrenci($data)
        {
            if ($this->db->insert("users",$data)) // users tablosuna dataları ekle
            {
                return true;
            }
        }
        public function insert_post($data)
        {
            if ($this->db->insert("posts",$data)) // posts tablosuna dataları ekle
            {
                return true;
            }
        }
        
        public function insert_haber($data)
        {
            if ($this->db->insert("haber",$data)) // posts tablosuna dataları ekle
            {
                return true;
            }
        }
        
        
        
        public function delete_ogrenci($id)
        {
            $this->db-> where('user_id', $id);
            $this->db->delete('users');
            redirect(base_url().'admin/users');
        }
        
        public function delete_post($id)
        {
            $this->db-> where('post_id', $id);
            $this->db->delete('posts');
            redirect(base_url().'admin/cms');
        }
        
        public function update_ogrenci($data,$id)  // İd si ve datası gönderileb verileri günceller
        {
            $this->db->where('user_id', $id);
            $this->db->update('users' ,$data);
            return true;
        }
        
        public function update_post($data,$id)  // İd si ve datası gönderileb verileri günceller
        {
            $this->db->where('post_id', $id);
            $this->db->update('posts' ,$data);
            return true;
        }
        
        public function okunud_olarak_isaretle($data,$id){
            $this->db->where('id', $id);
            $this->db->update('gelen' ,$data);
            
        }
        
        public function update_hak($data,$id)  // İd si ve datası gönderileb verileri günceller
        {
            $this->db->where('id', $id);
            $this->db->update('hak' ,$data);
            return true;
        }
        public function update_ayar($data,$id)  // İd si ve datası gönderileb verileri günceller
								{
                                    $this->db->where('id', $id);
                                    $this->db->update('hak' ,$data);
                                    return true;
                                }
        public function update_iletisim($data,$id)  // İd si ve datası gönderileb verileri günceller
								{
                                    $this->db->where('id', $id);
                                    $this->db->update('hak' ,$data);
                                    return true;
                                }
        
        public function cevap_ver($data,$mail)  // İd si ve datası gönderileb verileri günceller
        {
            $this->db->where('your_email', $mail);
            return true;
        }
        
        function sendEmail($email,$adsoyad,$icerik){
            $this->load->library('email');
            // Email Ayarlarını veritabanından okuma
            $query=$this->db->get("settings"); // settings tablasonun veritananından çek
            $data=$query->result(); // Sonuçları veri değişkenine yükle
            
            // Email Server Ayarları
            $config = Array(
                            'protocol' => 'smtp',
                            'smtp_host' => $data[0]->smtpServer,
                            'smtp_port' => $data[0]->smtpport,
                            'smtp_user' => $data[0]->smtpemail, // change it to yours
                            'smtp_pass' => $data[0]->password, // change it to yours
                            'mailtype' => 'html',
                            'charset' => 'utf-8',
                            'wordwrap' => TRUE
                            );
            // İstediğiniz şekilde mail içeriğini html olarak oluşturabilirsiniz
            $mesaj="".$icerik;
            $mesaj.="\n\n=============================================================\n\n";
            $mesaj.="Gönderen :".$data[0]->name."\n";
            $mesaj.="Telefon :".$data[0]->tel."\n";
            $mesaj.="Fax :".$data[0]->fax."\n";
            $mesaj.="E-Mail :".$data[0]->email."\n";
            $mesaj.="Şehir     :".$data[0]->sehir."\n";
            $mesaj.="Adresimiz :".$data[0]->adres."\n";
            
            // EMAİL gönderme *******************
            $this->load->library('email', $config);
            $this->email->set_newline("\r\n");
            $this->email->from($data[0]->smtpemail); // change it to yours
            $this->email->to($email); // change it to yours
            $this->email->subject($adsoyad);
            $this->email->message($mesaj); 
            //print_r($config);	
            //print_r($mesaj);	
            //Send mail 
            if($this->email->send()){
                return "1";
            }else{
                show_error($this->email->print_debugger()); // ayrıntılı hata dökümü için
                return "0";
            }
								}					
        
        function login($username,$password) 
        {
            
            $this->db->select('*');
            $this->db->from('ogrenciler');
            $this->db->where('kullanici', $username);
            $this->db->where('sifre', $password);
            $this->db->limit(1);
            
            
            $query = $this->db->get();
            if($query->num_rows() == 1) {
                return $query->result(); 
            } else {
                return false; 
            }
        }
    }