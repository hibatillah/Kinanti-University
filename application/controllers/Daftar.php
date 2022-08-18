<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Daftar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('session');
        $this->load->database();
        $this->load->model('Daftar_model');
    }

	public function dataDaftar()
    {
        $nama=$_POST["nama"];
        $nik=$_POST["nik"];
        $tempat_lahir=$_POST["tempat_lahir"];
        $tanggal_lahir=$_POST["tanggal_lahir"];
        $jk=$_POST["jk"];
        $kewarganegaraan=$_POST["kewarganegaraan"];
        $agama=$_POST["agama"];
        $nama_ibu=$_POST["nama_ibu"];
        $email=$_POST["email"];
        $no_telp=$_POST["no_telp"];
        $alamat=$_POST["alamat"];
        $kode_pos=$_POST["kode_pos"];
        $provinsi=$_POST["provinsi"];
        $kabupaten=$_POST["kabupaten"];
        $kecamatan=$_POST["kecamatan"];
        $pendidikan=$_POST["pendidikan"];
        $sekolah=$_POST["sekolah"];
        $nilai_raport=$_POST["nilai_raport"];
        $prog1=$_POST["prog1"];
        $prog2=$_POST["prog2"];
	
        if(
            !empty($nama) && !empty($nim) && !empty($kelas) && !empty($username)
            && !empty($password) && !empty($password) && !empty($password) 
        ) 
        {
            "INSERT INTO mahasiswa
            (nama,nim,kelas,username,password)
            VALUES ('$nama','$nim','$kelas','$username','$password','$password'
			,'$password','$password','$password','$password','$password','$password'
			,'$password','$password','$password','$password','$password','$password'
			,'$password')";
            header('location:Modul9_MenuMahasiswa.php'); // arahkan kembali
        } else{
            header('location:Modul9_FormInsert.php');
        }
    }
	
    public function Daftar()
	{
		$data = array(
	        'nama' => $this->input->post('nama'),
	        'nik' => $this->input->post('nik'),
	        'tempat_lahir' => $this->input->post('tempat_lahir'),
	        'tanggal_lahir' => $this->input->post('tanggal_lahir'),
	        'jk' => $this->input->post('jk'),
	        'kewarganegaraan' => $this->input->post('kewarganegaraan'),
	        'agama' => $this->input->post('agama'),
	        'nama_wali' => $this->input->post('nama_wali'),
	        'email' => $this->input->post('email'),
	        'no_telp' => $this->input->post('no_telp'),
	        'alamat' => $this->input->post('alamat'),
	        'kode_pos' => $this->input->post('kode_pos'),
	        'provinsi' => $this->input->post('provinsi'),
	        'kabupaten' => $this->input->post('kabupaten'),
	        'kecamatan' => $this->input->post('kecamatan'),
	        'pendidikan' => $this->input->post('pendidikan'),
	        'sekolah' => $this->input->post('sekolah'),
	        'nilai_raport' => $this->input->post('nilai_raport'),
	        'prog1' => $this->input->post('prog1'),
	        'prog2' => $this->input->post('prog2'),
		);
        $this->Daftar_model->insertDataDaftar('data_daftar', $data);
	}
}
