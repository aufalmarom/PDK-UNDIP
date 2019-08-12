<?php

class Users extends CI_Model{
    
    public function get()
    {
        return $this->db->get('Users')->result_array();
    }
    
}

?>
