<?php if (! defined('BASEPATH')) exit ('No direct access allowed');

class Login extends CI_Controller
{
    public function __construct (){
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model("User_model");
        $this->load->database();
    }

    public function index(){
        $this->load->view('header');
        $this->load->view('login');
        $this->load->view('footer');
    }

    public function checkLogin()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == true) {
            $username = $this->input->post('username');
            $user = $this->User_model->getByUsername($username);

            if (!empty($user)) 
            {
                $password = $this->input->post('password');
                if ($password == $user['password_user']) 
                {
                    $userArray['user_id'] = $user['user_id'];
                    $userArray['username'] = $user['username'];
                    $this->session->set_userdata('user', $userArray);
                    redirect(base_url() . 'index.php/Active');
                } 
                else {
                    $this->session->set_flashdata('error', 'Username atau password anda salah!');
                    redirect(base_url() . 'index.php/Login');
                }
            } 
            else {
                $this->session->set_flashdata('error', 'Username atau password anda salah!');
                redirect(base_url() . 'index.php/Login');
            }
        } 
        else {
            $this->session->set_flashdata('error', 'Silahkan masukkan username dan password anda!');
            redirect(base_url() . 'index.php/Login');
        }
    }

    function logout(){
        $this->session->sess_destroy();
        redirect(base_url('index.php/Main/'));
    }

    // ===============================================

    public function login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        
        if($username == null or $password == null)
        {
            redirect(base_url(). 'index.php/Login');
        }
        else {
            $data = $this->User_model->where("username", $username);
            if($data['password_user'] != md5($password))
            {
                redirect(base_url(). 'index.php/Login');
            }
            else{
                $session = [
                    'user_id' => $data['user_id'],
                    'username' => $data['username'],
                    'password_user' => $data['password_user'],
                ];
                $this->session->set_userdata('user', $session);
                redirect(base_url(). 'index.php/Active/');
            }
        }
    }

    public function user_login_process() 
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
        
        if ($this->form_validation->run() == FALSE) 
        {
            redirect(base_url(). 'index.php/Login/');
        } 
        else {
            $data = array(
                'username' => $this->input->post('username'),
                'password_user' => $this->input->post('password')
            );
            $result = $this->User_model->login($data);
            
            if ($result == TRUE) 
            {
                $username = $this->input->post('username');
                $result = $this->User_model->read_user_information($username);
                
                if ($result != false) {
                    $session_data = array(
                        'username' => $result[0]->user_name,
                        'email' => $result[0]->user_email,
                    );
                    // Add user data in session
                    $this->session->set_userdata('logged_in', $session_data);
                    redirect(base_url(). 'index.php/Active/');
                }
            } 
            else {
                redirect(base_url(). 'index.php/Login/');
            }
        }
    }
        
    public function checking()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $passwordx = md5($password);
        $cek = $this->User_model->check_user($username, $passwordx);

        if($cek->num_rows() == 1)
        {
            foreach($cek->result() as $data)
            {
                $sess_data['user_id'] = $data->user_id;
                $sess_data['username'] = $data->username;
                $this->session->set_userdata($sess_data);
            }
            redirect(base_url(). 'index.php/Active');
        }
        else {
            redirect(base_url(). 'index.php/Login');
        }
    }
        
}
