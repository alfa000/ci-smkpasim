<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_siswa extends CI_Controller
{
	function __construct(){
  	 parent::__construct();
  	  $this->load->model('loginmodel');
	  $this->load->view('admin/layout/headerlogin');
      $this->load->view('admin/layout/footerlogin');
  	}
	public function index()
	{
		$data['title'] = "HALAMAN LOGIN PESERTA DIDIK BARU";
		$data['mod'] = "siswa";
		$this->load->view('login/login_siswa', $data);
	}

	function cek_login(){
		$data = array(
            'no_reg' => $this->input->post('noreg'),
            'nisn' => $this->input->post('password')
		);

		$valid = $this->loginmodel->loginsiswa($data);
		 if($valid->num_rows() == 1){
		  	 foreach ($valid->result() as $key) {
		  	 	$session_data['status'] = 'Online';
		  	 	$session_data['no_reg'] = $key->no_reg;
		  	 	$session_data['nm_siswa'] = $key->nm_siswa;
		  	 	$this->session->set_userdata($session_data);
		  	 }
		  	 if($this->session->userdata('status') == 'Online'){
		  	 	redirect(base_url('siswa'));
		  	 }
		  }else{
		  	 	//echo "<script>alert('Gagal Login: Cek ID pendaftaran , password!');history.go(-1);</script>";
		  }
	}

	
	public function logout(){
		$this->session->sess_destroy();
		redirect('login_siswa');
	}

}