<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Active extends CI_Controller {

	public function index()
	{
		$this->load->view('header_active');
		$this->load->view('home_active');
		$this->load->view('footer_active');
	}
	
	public function prodi()
	{
		$this->load->view('header_active');
		$this->load->view('prodi_active');
		$this->load->view('footer_active');
	}

	public function tentang()
	{
		$this->load->view('header_active');
		$this->load->view('tentang');
		$this->load->view('footer_active');
	}
	
	public function form1()
	{
		$this->load->view('form1');
	}
	
}