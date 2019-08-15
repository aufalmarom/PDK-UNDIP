<?php

class Presences extends CI_Model{
    
    public function get()
    {
        return $this->db->get('Presences')->result_array();
    }
    
}

?>
