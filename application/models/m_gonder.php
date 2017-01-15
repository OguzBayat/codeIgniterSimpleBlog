<?php
class M_gonder extends CI_Model
{
    function create_mesaj($data)
    {
        $this->db->insert('gelen', $data);
        return $this->db->insert_id();
    }
    
}
