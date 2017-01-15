<?php
class M_db extends CI_Model
{
    function get_posts($number = 10, $start = 0)
    {
        $this->db->select();
        $this->db->from('posts');
        $this->db->where('active',1);
        $this->db->order_by('date_added','desc');
        $this->db->limit($number, $start);
        $query = $this->db->get();
        return $query->result_array();
    }
    function get_post_count()
    {
        $this->db->select()->from('posts')->where('active',1);
        $query = $this->db->get();
        return $query->num_rows;
    }
    function get_post($post_id)
    {
        $this->db->select();
        $this->db->from('posts');
        $this->db->where(array('active'=>1,'post_id'=>$post_id));
        $this->db->order_by('date_added','desc');
        $query = $this->db->get();
        return $query->first_row('array');
    }
	function get_hak($id)
    {
		$this->db->select('*');
				$this->db->from('hak');
				$query=$this->db->get();
				return $query->result();
				
     
    }
    function sorgu($email)
    {
        
        $query = $this->db->get_where("users",array("email"=>$email));
        return $query->result();
       
    }
    
    function insert_post($data)
    {
        $this->db->insert('posts',$data);
        return $this->db->insert_id();
    }
    
    function update_post($post_id, $data)
    {
        $this->db->where('post_id',$post_id);
        $this->db->update('posts',$data);
    }
    
    function delete_post($post_id)
    {
        $this->db->where('post_id',$post_id);
        $this->db->delete('posts');
    }
	
	function get_bilgi($user_id)
    {
        $this->db->select();
        $this->db->from('users');
        $this->db->where(array('user_id'=>$user_id));
        $query = $this->db->get();
        return $query->first_row('array');
    }
    function update_profil($user_id, $data)
    {
        $this->db->where('user_id',$user_id);
        $this->db->update('users',$data);
    }
    
    function get_getir($id)
    {
        $this->db->select('*');
        $this->db->from('hak');
        $query=$this->db->get();
        return $query->result();
        
        
    }
}
