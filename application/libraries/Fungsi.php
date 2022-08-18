<?php

Class Fungsi
{
    protected $ci;

    function __construct()
    {
        $this->ci =& get_instance();
    }

    public function get_id(){
        $this->ci->load->model('User_model');
        $id = $this->ci->session->userdata('user_id');
        $user_id = $this->ci->User_model->getID($id)->row;
        return $user_id;
    }
    
}