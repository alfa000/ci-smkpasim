<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jurusan extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model(array('Gurumodel','Siswamodel','Beritamodel','Galerimodel','Slidemodel','Pendaftaranmodel','Jurusanmodel','Profilmodel'));
		$this->load->library(array('FPDF','upload'));
		define('FPDF_FONTPATH', $this->config->item('fonts_path'));
		
	}

	public function detail($slug)
	{

		$this->load->view('web/layout/header');
		$this->load->view('web/layout/banner2');
		$data['jurusan'] = $this->Jurusanmodel->get_jurusan();
	    $data['profil'] = $this->Profilmodel->get_profil();
	    $jrs= $this->Jurusanmodel->get_jurusan_by_slug($slug);
		$data['jrs']=$jrs;
		$data['kategori'] = $this->Beritamodel->get_kategori_brt();
		$this->load->view('web/layout/navbar', $data);
		$this->load->view('web/jurusan');
		$this->load->view('web/layout/footer');
	}
}
