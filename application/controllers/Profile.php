<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model(array('Beritamodel','Profilmodel','Jurusanmodel'));
		$this->load->library('pagination');
	}

	function detail($slug =""){
       if($slug == ""){
       	 show_404();
       }else{
       	$this->load->model('Profilmodel');
		$baca = $this->Profilmodel->get_slug($slug);
		$data['baca'] = $baca;
       	$this->load->view('web/layout/header');
		$this->load->view('web/layout/banner2');
		$data['jurusan'] = $this->Jurusanmodel->get_jurusan();
	    $data['profil'] = $this->Profilmodel->get_profil();
	    $data['kategori'] = $this->Beritamodel->get_kategori_brt();
	    $data['berita'] = $this->Beritamodel->get_berita_terbaru();
		$this->load->view('web/layout/navbar',$data);
		$this->load->view('web/profile', $data);
		$this->load->view('web/layout/footer');
       }
	}
}
