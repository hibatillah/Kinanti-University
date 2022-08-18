<?php if (! defined('BASEPATH')) exit ('No direct access allowed');

class Form extends CI_Controller
{
    public function __construct (){
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model("Form_model");
        $this->load->model("User_model");
        $this->load->database();
    }

    public function index()
    {   
        $this->load->view('header_active');
        $this->load->view('form');
        $this->load->view('footer_active');
    }

    public function getID()
    {
        $id = $this->User_model->get_id();
        echo $id;
    }

    public function form_data()
    {
        $this->form_validation->set_rules('nama_pendaftar', 'Nama_pendaftar', 'trim|required');
        $this->form_validation->set_rules('nik_pendaftar', 'Nik_pendaftar', 'trim|required');
        $this->form_validation->set_rules('tempatlahir_pendaftar', 'Tempatlahir_pendaftar', 'trim|required');
        $this->form_validation->set_rules('tanggallahir_pendaftar', 'Tanggallahir_pendaftar', 'trim|required');
        $this->form_validation->set_rules('kewarganegaraan_pendaftar', 'Kewarganegaraan_pendaftar', 'trim|required');
        $this->form_validation->set_rules('email_pendaftar', 'Email_pendaftar', 'trim|required');
        $this->form_validation->set_rules('telp_pendaftar', 'Telp_pendaftar', 'trim|required');
        $this->form_validation->set_rules('agama_pendaftar',  'Agama_pendaftar','trim|required');
        $this->form_validation->set_rules('jk_pendaftar', 'JK_pendaftar', 'trim|required');
        $this->form_validation->set_rules('sekolah', 'Sekolah', 'trim|required');
        $this->form_validation->set_rules('jurusan_sekolah', 'jJrusan_sekolah', 'trim|required');
        $this->form_validation->set_rules('nilai_akhir', 'Nilai_akhir', 'trim|required');
        $this->form_validation->set_rules('provinsi', 'Provinsi', 'trim|required');
        $this->form_validation->set_rules('kabupaten', 'Kabupaten', 'trim|required');
        $this->form_validation->set_rules('kecamatan', 'Kecamatan', 'trim|required');
        $this->form_validation->set_rules('kelurahan', 'Kelurahan', 'trim|required');
        $this->form_validation->set_rules('RT', 'RT', 'trim|required');
        $this->form_validation->set_rules('RW', 'RW', 'trim|required');
        $this->form_validation->set_rules('kode_pos', 'Kode_pos', 'trim|required');
        $this->form_validation->set_rules('alamat_lengkap', 'Alamat_lengkap', 'trim|required');
        $this->form_validation->set_rules('nama_wali', 'Nama_wali', 'trim|required');
        $this->form_validation->set_rules('nik_wali', 'NIK_wali', 'trim|required');
        $this->form_validation->set_rules('tempatlahir_wali', 'Tempatlahir_wali', 'trim|required');
        $this->form_validation->set_rules('tanggallahir_wali', 'Tanggallahir_wali', 'trim|required');
        $this->form_validation->set_rules('kewarganegaraan_wali', 'Kewarganegaraan_wali', 'trim|required');
        $this->form_validation->set_rules('penghasilan_wali', 'Penghasilan_wali', 'trim|required');
        $this->form_validation->set_rules('telp_wali', 'Telp_wali', 'trim|required');
        $this->form_validation->set_rules('agama_wali', 'Agama_wali', 'trim|required');
        $this->form_validation->set_rules('jk_wali', 'JK_wali', 'trim|required');
        $this->form_validation->set_rules('prodi1', 'Prodi1', 'trim|required');
        $this->form_validation->set_rules('prodi2', 'Prodi2', 'trim|required');
        
        if ($this->form_validation->run() == true) 
        {
            $pendaftar['nama_pendaftar'] = $this->input->post('nama_pendaftar');
            $pendaftar['nik_pendaftar'] = $this->input->post('nik_pendaftar');
            $pendaftar['tempatlahir_pendaftar'] = $this->input->post('tempatlahir_pendaftar');
            $pendaftar['tanggallahir_pendaftar'] = $this->input->post('tanggallahir_pendaftar');
            $pendaftar['kewarganegaraan_pendaftar'] = $this->input->post('kewarganegaraan_pendaftar');
            $pendaftar['email_pendaftar'] = $this->input->post('email_pendaftar');
            $pendaftar['telp_pendaftar'] = $this->input->post('telp_pendaftar');
            $pendaftar['agama_pendaftar'] = $this->input->post('agama_pendaftar');
            $pendaftar['jk_pendaftar'] = $this->input->post('jk_pendaftar');
            $pendidikan['sekolah'] = $this->input->post('sekolah');
            $pendidikan['jurusan_sekolah'] = $this->input->post('jurusan_sekolah');
            $pendidikan['nilai_akhir'] = $this->input->post('nilai_akhir');
            $alamat['provinsi'] = $this->input->post('provinsi');
            $alamat['kabupaten'] = $this->input->post('kabupaten');
            $alamat['kecamatan'] = $this->input->post('kecamatan');
            $alamat['kelurahan'] = $this->input->post('kelurahan');
            $alamat['RT'] = $this->input->post('RT');
            $alamat['RW'] = $this->input->post('RW');
            $alamat['kode_pos'] = $this->input->post('kode_pos');
            $alamat['alamat_lengkap'] = $this->input->post('alamat_lengkap');
            $wali['nama_wali'] = $this->input->post('nama_wali');
            $wali['nik_wali'] = $this->input->post('nik_wali');
            $wali['tempatlahir_wali'] = $this->input->post('tempatlahir_wali');
            $wali['tanggallahir_wali'] = $this->input->post('tanggallahir_wali');
            $wali['kewarganegaraan_wali'] = $this->input->post('kewarganegaraan_wali');
            $wali['penghasilan_wali'] = $this->input->post('penghasilan_wali');
            $wali['telp_wali'] = $this->input->post('telp_wali');
            $wali['agama_wali'] = $this->input->post('agama_wali');
            $wali['jk_wali'] = $this->input->post('jk_wali');
            $prodi['prodi1'] = $this->input->post('prodi1');
            $prodi['prodi2'] = $this->input->post('prodi2');
            $wali_id = $this->Form_model->data_wali($wali);
            $alamat_id = $this->Form_model->data_alamat($alamat);
            $pendidikan_id = $this->Form_model->data_pendidikan($pendidikan);
            $prodi_id = $this->Form_model->data_prodi($prodi);
            
            $pendaftar['wali_id'] = $wali_id;
            $pendaftar['alamat_id'] = $alamat_id;
            $pendaftar['pendidikan_id'] = $pendidikan_id;
            $pendaftar['pilihprodi_id'] = $prodi_id;
            // $pendaftar = $this->session->get_id();
            $this->Form_model->data_pendaftar($pendaftar);
            
            redirect(base_url() . 'index.php/Profile');
        } 
        else {
            redirect(base_url(). 'index.php/Main/');
        }
    }
    
}