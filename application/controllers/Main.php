<?php defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{

	public function index()
	{
		$this->load->view('header');
		$this->load->view('home');
		$this->load->view('footer');
	}

	public function prodi()
	{
		$this->load->view('header');
		$this->load->view('prodi');
		$this->load->view('footer');
	}

	public function tentang()
	{
		$this->load->view('header');
		$this->load->view('tentang');
		$this->load->view('footer');
	}
	
}
