<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Connection extends CI_Controller {

	public function index()
	{
		mysqli_connect("localhost","root","","KinantiUniversity");
		if (mysqli_connect_errno ()) {
			echo "Failed to connect to MySQL: ". mysqli_connect_error();
		} else {
			echo "Berhasil Terhubung!";
		}
	}

} ?>