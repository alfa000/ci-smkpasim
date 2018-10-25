<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model(array('Galerimodel','Profilmodel','Jurusanmodel','Beritamodel'));
		$this->load->library('pagination');
	}

	function baca($slug = ""){
		if($slug == ""){
			show_404();
		}else{
			$this->load->model('M_Blog');
			$baca = $this->M_Blog->get_slug($slug);
			$data['baca'] = $baca;
			$this->load->view('web/layout/header');
		    $this->load->view('web/layout/banner2');
		    $data['jurusan'] = $this->Jurusanmodel->get_jurusan();
	    	$data['profil'] = $this->Profilmodel->get_profil();
	    	$data['bterbaru'] = $this->Beritamodel->get_berita_terbaru();
	    	$data['kategori'] = $this->Beritamodel->get_kategori_brt();
		    $this->load->view('web/layout/navbar',$data);
		    $this->load->view('web/single', $data);
		    $this->load->view('web/layout/footer');
		}
	}
 function kategori(){
 	 if($this->uri->segment(3) == ""){
 	 	show_404();
 	 }else{
			$this->load->view('web/layout/header');
		    $this->load->view('web/layout/banner2');
		    $data['jurusan'] = $this->Jurusanmodel->get_jurusan();
	    	$data['profil'] = $this->Profilmodel->get_profil();
	    	$data['random'] = $this->Beritamodel->get_berita_random();
	    	$data['bterbaru'] = $this->Beritamodel->get_berita_terbaru();
	    	$data['katagori1'] = $this->Beritamodel->get_by_uri($this->uri->segment(3));
	    	$data['kategori'] = $this->Beritamodel->get_kategori_brt();
	    	$data['kat'] = $this->Beritamodel->get_berita_by_kat($this->uri->segment(3)) or die(show_404());
		    $this->load->view('web/layout/navbar',$data);
		    $this->load->view('web/kategori', $data);
		    $this->load->view('web/layout/footer');
 	 }
 }
}
