<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{

	public function index()
	{
		$this->load->model('Form_model');
		$profile = $this->Form_model->tampil();
		$data['pilih_prodi'] = $profile;

		$this->load->view('header_active');
		$this->load->view('profile', $data);
		$this->load->view('footer_active');
	}
}