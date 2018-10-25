<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

  function __construct(){
    parent::__construct();
    $this->load->model('M_psb');
        $this->load->helper('url','form');
        $this->load->library('form_validation','session'); 
      if($this->session->userdata('status') != 'Online'){
        redirect('login_psb');
      }
  }
  public function index()
  {
    $data['data']=$this->M_psb->tampil_psb();
    $data['title'] = "FORM REGISTRASI PESERTA DIDIK BARU";
    $data['header']=$this->uri->segment('2');
    $this->load->view('siswa/header.php', $data);
    $this->load->view('siswa/v_formprofil.php',$data);
    $this->load->view('siswa/footer.php');
  }

  public function simpan_psb(){
        $config = array(
               'upload_path' => "./assets/upload/images",
               'allowed_types' => "jpg|png|jpeg|jpg",
               'overwrite' => TRUE,
      );
        //load library
        $this->load->library('upload', $config);
         //upload gambar 1 
         if(!$this->upload->do_upload('gambar1')){
          $error = $this->upload->display_errors();
           echo "<script>alert('$error');history.go(-1);</script>";
         }else{
          $gambar = $this->upload->data();
          $data = array(
                          'no_reg' => $this->input->post('no_reg'),
                          'tgl_up_foto' => date('y-m-d'),
                          'pic_foto' => $gambar['file_name']
                        );
          $this->M_crud->simpan($data,  'dok_foto');

         }
         if(!$this->upload->do_upload('gambar2')){
          $error = $this->upload->display_errors();
           echo "<script>alert('$error');history.go(-1);</script>";
         }else{
          $gambar2 = $this->upload->data();
          $data = array(
                          'no_reg' => $this->input->post('no_reg'),
                          'tgl_up_ijazah' => date('y-m-d'),
                          'pic_dok_ijazah' => $gambar2['file_name']
                        );
          $this->M_crud->simpan($data,  'dok_ijazah');

         }
          if(!$this->upload->do_upload('gambar3')){
          $error = $this->upload->display_errors();
           echo "<script>alert('$error');history.go(-1);</script>";
         }else{
          $gambar3 = $this->upload->data();
          $data = array(
                          'no_reg' => $this->input->post('no_reg'),
                          'tgl_up_kk' => date('y-m-d'),
                          'pic_dok_kk' => $gambar3['file_name']
                        );
          $this->M_crud->simpan($data,  'dok_kk');
         }
          $this->db->select('Right(psb.nis,3) as kode ',false);
          $this->db->order_by('nis', 'desc');
          $this->db->limit(1);
          $query = $this->db->get('psb');
          if($query->num_rows()<>0){
            $a = $query->row();
            $kode = intval($a->kode)+1;
          }else{
            $kode = 1;
          }
          $date=date('y');
          $kodemax = str_pad($kode,5,"0",STR_PAD_LEFT);
          $nis  = $date.$kodemax;

         $data = array(
          'status_aktivasi' => 'Y',
          'nis' => $nis,
          'tmp_lahir' => $this->input->post('tmp_lahir'),
          'tgl_lahir' => $this->input->post('tgl_lahir'),
          'agama' => $this->input->post('agama'),
          'anak_ke' => $this->input->post('anak_ke'),
          'jml_saudara' => $this->input->post('jml_saudara'),
          'status_anak' => $this->input->post('status_anak'),
          'tinggi_badan' => $this->input->post('tinggi_badan'),
          'berat_badan' => $this->input->post('berat_badan'),
          'gol_darah' => $this->input->post('gol_darah'),
          'alamat_siswa' => $this->input->post('alamat'),
          'kota_kab' => $this->input->post('kota_kab'),
          'kode_pos' => $this->input->post('kode_pos'),
          'hp_siswa' => $this->input->post('hp_siswa'),
          'tlp_siswa' => $this->input->post('tlp_siswa'),
          'status_rumah_siswa' => $this->input->post('status_rumah_siswa'),
          'kendaraan' => $this->input->post('kendaraan'),
          'alamat_sekolah' => $this->input->post('alamat_sekolah'),
          'no_ijazah' => $this->input->post('no_ijazah'),
          'tgl_ijazah' => $this->input->post('tgl_ijazah'),
          'thn_ijazah' => $this->input->post('thn_ijazah'),
          'nilai_un' => $this->input->post('nilai_un'),
          'prestasi_akademik' => $this->input->post('prestasi_akademik'),
          'prestasi_olahraga' => $this->input->post('prestasi_olahraga'),
          'prestasi_kesenian' => $this->input->post('prestasi_kesenian'),
          'nm_orangtua_ayah' => $this->input->post('nm_orangtua_ayah'),
          'nm_orangtua_ibu' => $this->input->post('nm_orangtua_ibu'),
          'pekerjaan_ayah' => $this->input->post('pekerjaan_ayah'),
          'pekerjaan_ibu' => $this->input->post('pekerjaan_ibu'),
          'penghasilan_ayah' => $this->input->post('penghasilan_ayah'),
          'penghasilan_ibu' => $this->input->post('penghasilan_ibu'),
          'alamat_orgtua' => $this->input->post('alamat_orgtua'),
          'kota_kab_orgtua' => $this->input->post('kota_kab_orgtua'),
          'hp_orgtua' => $this->input->post('hp_orgtua'),
          'nm_wali' => $this->input->post('nm_wali'),
          'pekerjaan_wali' => $this->input->post('pekerjaan_wali'),
          'penghasilan_wali' => $this->input->post('penghasilan_wali'),
          'alamat_wali' => $this->input->post('alamat_wali'),
          'hp_wali' => $this->input->post('hp_wali'),
          'penanggung_biaya' => $this->input->post('penanggung_biaya'),
          );
         $noreg = $this->input->post('no_reg');

          $validasi = $this->db->update('psb', $data, array('no_reg' => $noreg));
          $post = $this->input->post();
          $result = array();
          $total_post = count($post['mapel']);
          foreach($post['mapel'] AS $key => $val)
          {
          $result[] = array(
          "no_reg" => $this->input->post('no_reg'),
          "id_mapel" => $post['mapel'][$key],
          'nil1' => $post['nil1'][$key],
          'nil2' => $post['nil2'][$key],
          'nil3' => $post['nil3'][$key],
          'nil4' => $post['nil4'][$key],
          'nil5' => $post['nil5'][$key],
          'nil_ratarata' => ($post['nil1'][$key]+$post['nil2'][$key]+$post['nil3'][$key]+$post['nil4'][$key]+$post['nil5'][$key])/5,
          );
          }
          $validasi2= $this->M_raport->input_raport($result);

          $this->db->get('ujian_masuk');
          $this->db->select('Right(ujian_masuk.no_ujian,3) as kode ',false);
          $this->db->order_by('no_ujian', 'desc');
          $this->db->limit(1);
          $query = $this->db->get('ujian_masuk');
          if($query->num_rows()<>0){
            $data = $query->row();
            $kode = intval($data->kode)+1;
          }else{
            $kode = 1;
          }
            $date=date('ym');
            $kodemax = str_pad($kode,3,"0",STR_PAD_LEFT);
            $kodeujian  = "USB".$date.$kodemax;
          $this->db->get('ujian_masuk');
          $this->db->select('ruang_ujian,count(Right(ujian_masuk.ruang_ujian,3)) as jumlah ',false);
          $this->db->group_by('ruang_ujian', 'desc');
          $this->db->limit(1);
          $query = $this->db->get('ujian_masuk');
          if($query->num_rows()<>0){
            $data = $query->row();
            if ($data->jumlah>=30) {
              $kode = intval($data->jumlah)+1;
              $kodemax = str_pad($kode,3,"0",STR_PAD_LEFT);
            $koderuang  = "R".$kodemax;
            }else{
              $koderuang = $data->ruang_ujian;
            }
          }else{
            $kode = 1;
            $kodemax = str_pad($kode,3,"0",STR_PAD_LEFT);
            $koderuang  = "R".$kodemax;
          }
            $tgl=$this->db->get('tanggal_ujian');
            $tglujian=$tgl->row();
          $ujian = array(
            'no_ujian' => $kodeujian,
            'no_reg' => $this->input->post('no_reg'),
            'tgl_ujian' => $tglujian->tanggal,
            'jam_ujian' => $tglujian->jam,
            'ruang_ujian' => $koderuang,
          );
          $validasi3=$this->db->insert('ujian_masuk',$ujian);
          if(!$validasi && !$validasi2 && !$validasi3){
          echo "<script>alert('Gagal melakukan input data !');history.go(-1);</script>";
         }else{
          redirect('siswa/stk');
         }
  }
  function stk()
  {
    $data['title'] = "DATA PESERTA UJIAN/TESTING";
    $data['header']=$this->uri->segment('2');
    $this->load->view('siswa/header',$data);
    $this->load->view('siswa/page_kosong');
    $this->load->view('siswa/footer');
   }
  function tampil_siswa(){
    $data['title'] = "DATA PESERTA UJIAN/TESTING";
    $data['header']=$this->uri->segment('2');
    $this->load->view('siswa/header',$data);
    $data['psb']=$this->M_psb->psb_id($this->session->userdata('no_reg'));
    $data['ujian']=$this->M_psb->ujian($this->session->userdata('no_reg'));
    $data['foto']=$this->db->query("SELECT * FROM dok_foto,dok_ijazah,dok_kk where dok_foto.no_reg=dok_ijazah.no_reg and dok_foto.no_reg=dok_kk.no_reg and dok_foto.no_reg='".$this->session->userdata('no_reg')."'");
    $this->load->view('siswa/v_datasiswa.php',$data);
    $this->load->view('siswa/footer.php');
  }
  function cetak_profile()
  {
    $data['psb']=$this->M_psb->psb_id($this->session->userdata('no_reg'));
    $data['raport']=$this->M_raport->tampil_raport_id($this->session->userdata('no_reg'));
    $data['ujian']=$this->M_psb->ujian($this->session->userdata('no_reg'));
    $this->load->view('siswa/v_cetakprofile.php',$data);
  }
  function cetak_kpu()
  {
    $data['psb']=$this->M_psb->psb_id($this->session->userdata('no_reg'));
    $data['raport']=$this->M_raport->tampil_raport_id($this->session->userdata('no_reg'));
    $data['ujian']=$this->M_psb->ujian($this->session->userdata('no_reg'));
    $this->load->view('siswa/v_cetakkpu.php',$data);
  }
}