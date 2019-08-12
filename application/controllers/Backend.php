<?php

class Backend extends CI_Controller{

    public function index()
    {
        $this->load->model('Users');
        $data['users'] = $this->Users->get();

        $this->load->view('backend/layouts/dashboard', $data);

    }
    
}


?>
