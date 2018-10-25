
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Silahkan Isi Form DI Bawah Ini
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Advanced Elements</li>
      </ol>
    </section>

    <!-- Main content -->
    <form role="form" method="post" enctype="multipart/form-data" action="<?php echo base_url()?>siswa/simpan_psb">
    <section class="content" id="siswa">
          <div class="box box-primary">
              <div class="box-body">
              <div class="col-md-12">
                <h3 class="box-title text-primary">Profil Siswa</h3>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="exampleInputEmail1">No Reg</label>
                  <input type="text" class="form-control" required="" name="no_reg"  value="<?php echo $this->session->userdata('no_reg')?>" readonly>
                </div>
              </div>
              <div class="col-md-9">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama</label>
                  <input type="text" class="form-control" value="<?php echo $this->session->userdata('nm_siswa') ?>">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Tempat Lahir</label>
                  <input type="text" required="" name="tmp_lahir" class="form-control"  placeholder="Masukan Tempat Lahir">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Tanggal Lahir</label>
                  <input type="date" class="form-control" required="" name="tgl_lahir">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="exampleInputEmail1">Agama</label>
                  <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" required="" name="agama">
                    <option value="">Pilih Agama</option>
                    <option value="Islam">Islam</option>
                    <option value="Islam">Krister</option>
                    <option value="Islam">Khatolik</option>
                    <option value="Islam">Hindu</option>
                    <option value="Islam">Bunda</option>
                  </select>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="exampleInputEmail1">Alamat</label>
                  <textarea class="form-control" rows="4" placeholder="jl.xxxx km xx no xx rt xx rw xx" required="" name="alamat"></textarea>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Kota/Kab</label>
                  <input type="text" class="form-control"  placeholder="Masukan Kota/Kab" required="" name="kota_kab">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Kode Pos</label>
                  <input type="text" class="form-control"  placeholder="Masukan Kode Pos" required="" name="kode_pos">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">No HP/Tlp</label>
                  <input type="number" class="form-control"  placeholder="Masukan No HP" required="" name="hp_siswa">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="number" class="form-control"  placeholder="Masukan No HP" required="" name="hp_siswa">
                </div>
              </div>
            </div>
          </div>
    </section>
          <section class="content" id="ortu">
              <div class="box box-primary">
              <div class="box-body">
              <div class="col-md-12">
                <h3 class="box-title text-primary">Data Orang Tua/Wali</h3>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Ayah</label>
                  <input type="text" class="form-control" required="" name="nm_orangtua_ayah" placeholder="Masukan Nama ayah">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="exampleInputEmail1">Pekerjaan </label>
                  <input type="text" class="form-control" required="" name="pekerjaan_ayah" placeholder="Masukan Pekerjaan ayah">
                </div>
              </div>  
              <div class="col-md-12">
                <div class="form-group">
                  <label for="exampleInputEmail1">Pendidikan Terakhir</label>
                  <input type="text" class="form-control" required="" name="pekerjaan_ayah" placeholder="Masukan Pekerjaan ayah">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Ibu</label>
                  <input type="text" class="form-control" required="" name="nm_orangtua_ibu" placeholder="Masukan Nama Ibu">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="exampleInputEmail1">Pekerjaan Ibu</label>
                  <input type="text" class="form-control" required="" name="pekerjaan_ibu" placeholder="pekerjaan ibu">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="exampleInputEmail1">Pendidikan Terakhir</label>
                  <input type="text" class="form-control" required="" name="pekerjaan_ayah" placeholder="Masukan Pekerjaan ayah">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="exampleInputEmail1">Alamat Orang Tua</label>
                  <textarea class="form-control" rows="4" required="" name="alamat_orgtua"></textarea>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Kota/kab</label>
                  <input type="text" class="form-control" required="" name="kota_kab_orgtua" placeholder="kota/kab">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Kode Pos</label>
                  <input type="text" class="form-control" required="" name="kode_pos_orgtua" placeholder="Kode pos">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="exampleInputEmail1">No HP/Tlp</label>
                  <input type="number" class="form-control" required="" name="hp_orgtua" placeholder="Masukan No HP">
                </div>
              </div>
            </div>
          </div>
          </section>
          <section class="content" id="akademik">
              <div class="box box-primary">
              <div class="box-body">
              <div class="col-md-12">
                <h3 class="box-title text-primary">Data Potensi Akademik</h3>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="exampleInputEmail1">Rata-rata Ranking Kelas</label>
                  <input type="text" class="form-control" required="" name="nm_orangtua_ayah" placeholder="">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="exampleInputEmail1">Rata-rata Nilai Ijazah </label>
                  <input type="text" class="form-control" required="" name="pekerjaan_ayah" placeholder="">
                </div>
              </div>  
              <div class="col-md-10">
                <div class="form-group">
                  <label for="exampleInputEmail1">Pernah Mendapat Beasiswa</label>
                  <input type="text" class="form-control" required="" name="pekerjaan_ayah" placeholder="">
                </div>
              </div>
              <div class="col-md-2">
                <div class="form-group">
                  <label for="exampleInputEmail1">Tahun</label>
                  <input type="text" class="form-control" required="" name="pekerjaan_ayah" placeholder="Tahun">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="exampleInputEmail1">Bidang Yang Diminati</label>
                  <input type="text" class="form-control" required="" name="nm_orangtua_ibu" placeholder="">
                </div>
              </div>
            </div>
          </div>
          </section>
          <section class="content" id="sekolah">
              <div class="box box-primary">
              <div class="box-body">
              <div class="col-md-12">
                <h3 class="box-title text-primary">Data Asal Sekolah</h3>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Sekolah Asal </label>
                  <input type="text" class="form-control" required="" name="nm_orangtua_ayah" placeholder="">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="exampleInputEmail1">Tahun MAsuk SMP Sederajat </label>
                  <input type="text" class="form-control" required="" name="pekerjaan_ayah" placeholder="">
                </div>
              </div>  
              <div class="col-md-12">
                <div class="form-group">
                  <label for="exampleInputEmail1">Alamat Sekolah </label>
                  <textarea class="form-control" rows="4" required="" name="alamat_orgtua"></textarea>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="exampleInputEmail1">Informasi Didapat Dari</label>
                  <input type="text" class="form-control" required="" name="nm_orangtua_ibu" placeholder="">
                </div>
              </div>
            </div>
          </div>
          </section>
          <section class="content" id="dokumen">
            <div class="box box-primary">
              <div class="box-body">
                <div class="col-md-12">
                <h3 class="box-title text-primary">Unggah Kelengkapan Dokument</h3>
              </div>
                <div class="col-md-4">
                <div class="form-group">
                  <label for="exampleInputFile">Foto Siswa</label>
                  <input type="file" required="" name="gambar1">
                  <p class="help-block">Masukan foto Siswa</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="exampleInputFile">Foto Kartu Keluarga</label>
                  <input type="file" required="" name="gambar2">
                  <p class="help-block">Masukan foto Kartu Keluarga</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="exampleInputFile">Foto Ijazah</label>
                  <input type="file" required="" name="gambar3">
                  <p class="help-block">Masukan foto Ijazah</p>
                </div>
              </div>
              </div>
            </div>
          </section>
          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
          </form>
      </div>
  </div>
  <!-- /.content-wrapper -->
  