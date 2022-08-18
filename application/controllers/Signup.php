<?php if (! defined('BASEPATH')) exit ('No direct access allowed');

class Signup extends CI_Controller
{
    public function __construct (){
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model("User_model");
        $this->load->database();
    }

    public function index(){
        $this->load->view('header');
        $this->load->view('signup');
        $this->load->view('footer');
    }

    public function signup_user()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == true) 
        {
            $formArray['username'] = $this->input->post('username');
            $formArray['email_user'] = $this->input->post('email');
            $formArray['password_user'] = $this->input->post('password');
            $this->User_model->create_user($formArray);
            $this->session->set_flashdata('succes', 'Akun anda berhasil dibuat!');
            redirect(base_url() . 'index.php/Login');
        } 
        else {
            $this->session->set_flashdata('error', 'Silahkan masukkan data anda!');
            redirect(base_url(). 'index.php/Signup/');
        }
    }

}