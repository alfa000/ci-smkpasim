<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model(array('Gurumodel','Siswamodel','Beritamodel','Galerimodel','Slidemodel','Pendaftaranmodel','Jurusanmodel','Profilmodel'));
		$this->load->library(array('FPDF','upload'));
		define('FPDF_FONTPATH', $this->config->item('fonts_path'));
		
	}

	public function index()
	{

		$this->load->view('web/layout/header');
		$home['slide'] = $this->Slidemodel->get_slide();
		$home['jmlsiswa'] = $this->Siswamodel->get_jml_siswa();
		$home['jmlguru'] = $this->Gurumodel->get_jml_guru();
		$home['jmlpendaftaran'] = $this->Pendaftaranmodel->get_jml_pendaftaran();
		$home['jmlgaleri'] = $this->Galerimodel->get_jml_galeri();
		$home['berita'] = $this->Beritamodel->get_berita_terbaru();
		$home['guru'] = $this->Gurumodel->get_guru();
		$home['galeri'] = $this->Galerimodel->get_galeri();
		$data['jurusan'] = $this->Jurusanmodel->get_jurusan();
	    $data['profil'] = $this->Profilmodel->get_profil();
	    $nomor['data']  = $this->Pendaftaranmodel->auto_inc();
		$this->load->view('web/layout/banner2',$home);
		$this->load->view('web/layout/navbar', $data);
		$this->load->view('web/pendaftaran', $nomor);
		$this->load->view('web/layout/footer');

	
	}

	public function registrasi()
	{
		if (empty($this->input->post('noreg'))) {
			redirect('pendaftaran');
		}

		$noreg 	= $this->input->post('noreg');
		$nama 	= $this->input->post('nama');
		$nisn 	= $this->input->post('nisn');
		$gender = $this->input->post('jk');

		$data = array(
			'no_reg' 	=> $noreg,
			'nm_siswa' 	=> $nama,
			'nisn' 		=> $nisn,
			'jenkel' 	=> $gender,
			'tgl_daftar' => date('Y-m-d'),
		);

		$input = $this->Pendaftaranmodel->insert_pendaftaran($data);
		if ($input) {
			$this->session->set_userdata($data);
			redirect('pendaftaran/sukses/');
		} else {
			redirect('pendaftaran');
		}
	}

	public function sukses()
	{
		$this->load->view('web/layout/header');
		$kode 				= $this->session->userdata('no_reg');;
		$data['id'] 		= $kode;
		$home['galeri'] 	= $this->Galerimodel->get_galeri();
		$data['jurusan'] 	= $this->Jurusanmodel->get_jurusan();
	    $data['profil'] 	= $this->Profilmodel->get_profil();
	    $data['daftar']  	= $this->Pendaftaranmodel->get_daftar($kode);
	    $data['mod'] 		= "siswa";
		$this->load->view('web/layout/banner2',$home);
		$this->load->view('web/layout/navbar', $data);
		$this->load->view('web/sukses', $data);
		$this->load->view('web/layout/footer');
	}
}
