<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Video extends CI_Controller {

function __construct()
	{
		parent::__construct();
		$this->load->model(array('Videomodel','Profilmodel','Jurusanmodel','Beritamodel'));
		$this->load->library('pagination');
	}

 function index(){
		$data['jurusan'] = $this->Jurusanmodel->get_jurusan();
 	   	$this->load->model('Galerimodel');
 	    $data['video'] = $this->Videomodel->get_video();
 	    $this->load->view('web/layout/header');
		$this->load->view('web/layout/banner2');
		$data['jurusan'] = $this->Jurusanmodel->get_jurusan();
	    $data['profil'] = $this->Profilmodel->get_profil();
	    $data['kategori'] = $this->Beritamodel->get_kategori_brt();
		$this->load->view('web/layout/navbar',$data);
		$this->load->view('web/video', $data);
		$this->load->view('web/layout/footer');
 }

}
