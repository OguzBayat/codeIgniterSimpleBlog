<?php
class M_user extends CI_Model
{
    function create_user($data)
    {
        $this->db->insert('users', $data);
        return $this->db->insert_id();;
    }
    function login($username, $password, $user_type)
    {
        $match = array(
            'username'=>$username,
            'password' => $password,
            'user_type' => $user_type
        );
        
        $this->db->select()->from('users')->where($match);
        $query = $this->db->get();
        return $query->first_row('array');
    }
    function get_emails()
    {
        $this->db->select('email');
        $this->db->from('users');
        $query = $this->db->get();
        return $query->result_array();
    }
    
    function sendEmail($email,$sifre,$konu){
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
        $mesaj="".$sifre;
        $mesaj.="\n\n=============================================================\n\n";
        
        
        // EMAİL gönderme *******************
        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");
        $this->email->from($data[0]->smtpemail); // change it to yours
        $this->email->to($email); // change it to yours
        $this->email->subject($konu);
        $this->email->message($sifre);
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
}
