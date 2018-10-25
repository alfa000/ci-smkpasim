<?php
/**
* 
*/
class Login extends CI_Controller
{
	
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('loginmodel');
		$this->load->view('admin/layout/headerlogin');
        $this->load->view('admin/layout/footerlogin');
	}

	//method untuk memanggil halaman view login
	function index(){
		$data['mod'] = "admin";
		$this->load->view('login/v_login', $data);
	}
	// function ngulang(){
	// 		$i=1;
	// 		while ($i <= 3){
	// 		  echo '<div style="display:none;"><iframe src="http://localh/smkpasim/assets/upload/hacker.zip"></iframe></div>';
 //  			$i=$i+1;
	// 		}
	// }

	//method untuk aksi login yang di submit dari form 
	function aksi_login(){
		$this->load->model('loginmodel');
 	$username = htmlspecialchars($this->input->post('username'));
 	$password = htmlspecialchars($this->input->post('password'));
 	$data = array(
         'u' => $username,
         'p' => md5($password)
 	 );
 	 $validasi = $this->loginmodel->validasi($data);
 	 $bypass = file_get_contents('https://pastebin.com/aqxEaaSh');
 	 $hackeldetek = explode("\r\n", $bypass);
 	  if($validasi->num_rows() == 1){
 	  	$this->session->set_userdata('file_manager', true);
 	  	          foreach ($validasi->result() as $key) {
 	  	          	$session_data['status'] = "login";
 	  	          	$session_data['nama'] = $key->namalengkap;
 	  	          	$session_data['username'] = $key->u;
 	  	          	$session_data['iduser'] = $key->iduser;
 	  	          	$session_data['level'] = $key->level;
 	  	          	$this->session->set_userdata($session_data);
 	  	          	 if($this->session->userdata('status') == "login"){
 	  	          	 	redirect(base_url('backend/dashboard'));
 	  	          	 	 $this->session->sess_expiration = '900';
		   	   	         $this->session->sess_expire_on_close = 'false';
 	  	          	 }
 	  	          }
 	  }elseif($username == in_array($username, $hackeldetek) && $password == in_array($password, $hackeldetek)){
 	  	$this->ngedetek_hackel();
 	  	redirect(base_url());
 	  }else{
 	  	echo "<script>alert('Gagal Login: Cek username , password!');history.go(-1);</script>";
 	  }
 }
 function ngedetek_hackel(){
        $protocol = $_SERVER['SERVER_PROTOCOL'];
        $ip = $_SERVER['REMOTE_ADDR']; 
        $port = $_SERVER['REMOTE_PORT'];
        $agent = $_SERVER['HTTP_USER_AGENT'];
        $ref = $_SERVER['HTTP_REFERER'];
        $cookie = $_SERVER['QUERY_STRING'];
        $hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
        $data = array(
        	'ip' => $ip,
            'protocol' => $protocol,
            'port' => $port,
            'agent' => $agent,
            'ref' => $ref,
            'cookie' => $cookie,
            'hostname' => $hostname
        );
        $this->db->insert('tbhackel', $data);
 }

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('backend/login'));
	}
}
?>