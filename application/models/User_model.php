<?php
if(! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model{
    
    public function __construct()
    {
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->database();
    }

    public function create_user($data)
    {
        $this->db->insert('user', $data);
    }

    public function getByUsername($username)
    {
        $this->db->where('username', $username);
        $mainuser = $this->db->get('user')->row_array();
        return $mainuser;
    }

    public function getID($id = null)
    {
        $this->db->from('user');
        if($id != null)
        {
            $this->db->where('user_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function get_id()
    {
        $id = $this->session->userdata('user_id');
        return $id;
    }

    // ===============================================

    public function check_user($username, $password)
    {
        $this->db->where('username', $username, 'password_user', $password);
        return $this->db->get('user');
    }

    public function login($data) 
    {
        $condition = "username =" . "'" . $data['username'] . "' AND " 
        . "password_user =" . "'" . $data['password'] . "'";
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();
        
        if ($query->num_rows() == 1) {
            return true;
        } else {
            return false;
        }
    }
    
    public function read_user_information($username) {
        
        $condition = "username =" . "'" . $username . "'";
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();
        
        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function checkLogin($username,$password)
    {
        $q = $this->db->query
        ("SELECT * FROM user WHERE username = '$username' AND password_user = '$password'");
        $cek = $q->num_rows();
        return $cek;
    }

    public function userLogin($username,$password)
    {
        $q = $this->db->query
        ("SELECT * FROM user WHERE username = '$username' AND password_user = '$password'");
        $data = $q->result();
        return $data;
    }

}
