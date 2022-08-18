<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Form_model extends CI_Model
{
    public function __construct()
    {
        $this->load->library('form_validation');
        $this->load->database();
    }

    public function data_pendaftar($pendaftar)
    {
        $this->db->insert('data_pendaftar', $pendaftar);
    }

    public function data_wali($wali)
    {
        $this->db->insert('data_wali', $wali);
        return $this->db->insert_id();
    }

    public function data_alamat($alamat)
    {
        $this->db->insert('alamat', $alamat);
        return $this->db->insert_id();
    }

    public function data_pendidikan($pendidikan)
    {
        $this->db->insert('pendidikan_akhir', $pendidikan);
        return $this->db->insert_id();
    }

    public function data_prodi($prodi)
    {
        $this->db->insert('pilih_prodi', $prodi);
        return $this->db->insert_id();
    }

    public function getData()
    {
        $this->db->select('*');
        $this->db->from('data_pendaftar');
        $result = $this->db->get()->result_array();
        return $result;
    }

    public function tampil()
    {
        $this->db->select('*');
        $data = $this->db->get('pilih_prodi')->result();
        return $data;
    }
}
