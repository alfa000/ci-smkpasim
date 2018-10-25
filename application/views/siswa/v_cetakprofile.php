<!DOCTYPE html>
<html>
<head>
	<title>Data Diri Siswa</title>
</head>
<body>
  <?php foreach ($psb->result_array() as $row):?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Siswa
        <small><?=$row['no_reg']?></small>
      </h1>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
            <!-- /.box-header -->
          <div class="box box-primary">
            <div class="box-header">
              <h2 class="box-title text-primary"><b>Profil</b></h2>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table width="100%">
            <tr>
              <td>NIS</td>
              <td>:</td>
              <td><?=$row['nis']?></td>
              <td rowspan="14"><img width="350px" src="<?=base_url()?>assets/upload/images/<?=$row['pic_foto']?>"></td>
            </tr>
            <tr>
              <td>NISN</td>
              <td>:</td>
              <td><?=$row['nisn']?></td>
            </tr>
            <tr>
              <td>Nama</td>
              <td>:</td>
              <td><?=$row['nm_siswa']?></td>
            </tr>
            <tr>
              <td>Tempat Lahir</td>
              <td>:</td>
              <td><?=$row['tmp_lahir']?></td>
            </tr>
            <tr>
              <td>Tanggal Lahir</td>
              <td>:</td>
              <td><?=$row['tgl_lahir']?></td>
            </tr>
            <tr>
              <td>Jenis Kelamin</td>
              <td>:</td>
              <td><?=$row['jns_kelamin']?></td>
            </tr>
            <tr>
              <td>Agama</td>
              <td>:</td>
              <td><?=$row['agama']?></td>
            </tr>
            <tr>
              <td>Golongan Darah</td>
              <td>:</td>
              <td><?=$row['gol_darah']?></td>
            </tr>
            <tr>
              <td>Alamat Siswa</td>
              <td>:</td>
              <td><?=$row['alamat_siswa']?></td>
            </tr>
             <tr>
              <td>Kota/Kab</td>
              <td>:</td>
              <td><?=$row['kota_kab']?></td>
            </tr>
             <tr>
              <td>Kode Pos</td>
              <td>:</td>
              <td><?=$row['kode_pos']?></td>
            </tr>
             <tr>
              <td>No HP</td>
              <td>:</td>
              <td><?=$row['hp_siswa']?></td>
            </tr>
            <tr>
              <td>TLP</td>
              <td>:</td>
              <td><?=$row['tlp_siswa']?></td>
            </tr>
            <tr>
              <td>Email</td>
              <td>:</td>
              <td><?=$row['email_siswa']?></td>
            </tr>
          </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
<?php
endforeach;
?>
  <section class="content">
      <div class="row">
        <div class="col-xs-12">
            <!-- /.box-header -->
          <div class="box">
            <div class="box-header">
              <h2 class="box-title"><b>Data Ujian</b></h2>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped" border="1" width="100%">
                <thead>
                <tr>
                  <th>No Ujian</th>
                  <th>No Regitrasi </th>
                  <th>Tanggal Ujian</th>
                  <th>Jam Ujian</th>
                  <th>Ruang Ujian</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($ujian->result_array() as $row): ?>
                <tr>
                  <td><?=$row['no_ujian'];?></td>
                  <td><?=$row['no_reg'];?></td>
                  <td><?=$row['tgl_ujian'];?></td>
                  <td><?=$row['jam_ujian'];?></td>
                  <td><?=$row['ruang_ujian'];?></td>
                </tr>
              <?php endforeach; ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
            <!-- /.box-header -->
          <div class="box">
            <div class="box-header">
              <h2 class="box-title"><b>Data Orang Tua</b></h2>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table width="100%">
                <?php foreach ($psb->result_array() as $row):
                ?>
            <tr>
              <td>Nama Ayah</td>
              <td>:</td>
              <td><?=$row['nm_orangtua_ayah']?></td>
            </tr>
            <tr>
              <td>Nama Ibu</td>
              <td>:</td>
              <td><?=$row['nm_orangtua_ibu']?></td>
            </tr>
            <tr>
              <td>Pekerjaan Ayah</td>
              <td>:</td>
              <td><?=$row['pekerjaan_ayah']?></td>
            </tr>
            <tr>
              <td>Pekerjaan Ibu</td>
              <td>:</td>
              <td><?=$row['pekerjaan_ibu']?></td>
            </tr>
            <tr>
              <td>Penghasilan Ayah</td>
              <td>:</td>
              <td><?=$row['penghasilan_ayah']?></td>
            </tr>
            <tr>
              <td>Penghasilan Ibu</td>
              <td>:</td>
              <td><?=$row['penghasilan_ibu']?></td>
            </tr>
            <tr>
              <td>Alamat</td>
              <td>:</td>
              <td><?=$row['alamat_orgtua']?></td>
            </tr>
            <tr>
              <td>Kota/kab</td>
              <td>:</td>
              <td><?=$row['kota_kab_orgtua']?></td>
            </tr>
            <tr>
              <td>Kode Pos</td>
              <td>:</td>
              <td><?=$row['kode_pos_orgtua']?></td>
            </tr>
             <tr>
              <td>HP</td>
              <td>:</td>
              <td><?=$row['hp_orgtua']?></td>
            </tr>
             <tr>
              <td>Nama Wali</td>
              <td>:</td>
              <td><?=$row['nm_wali']?></td>
            </tr>
             <tr>
              <td>Pekerjaan Wali</td>
              <td>:</td>
              <td><?=$row['pekerjaan_wali']?></td>
            </tr>
            <tr>
              <td>Penghasilan Wali</td>
              <td>:</td>
              <td><?=$row['penghasilan_wali']?></td>
            </tr>
            <tr>
              <td>Alamat</td>
              <td>:</td>
              <td><?=$row['alamat_wali']?></td>
            </tr>
            <tr>
              <td>HP</td>
              <td>:</td>
              <td><?=$row['hp_wali']?></td>
            </tr>
            <tr>
              <td>Penanggung Biaya</td>
              <td>:</td>
              <td><?=$row['penanggung_biaya']?></td>
            </tr>
           <?php 
         endforeach;
            ?>
          </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
            <!-- /.box-header -->
          <div class="box">
            <div class="box-header">
              <h2 class="box-title"><b>Data Raport</b></h2>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped" border="1" width="100%">
                <thead>
                <tr>
                  <th>Mapel</th>
                  <th>Nilai 1</th>
                  <th>Nilai 2</th>
                  <th>Nilai 3</th>
                  <th>Nilai 4</th>
                  <th>Nilai 5</th>
                  <th>Rata-rata</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($raport->result_array() as $row){?>
                <tr>
                  <td><?=$row['mapel'];?></td>
                  <td><?=$row['nil1'];?></td>
                  <td><?=$row['nil2'];?></td>
                  <td><?=$row['nil3'];?></td>
                  <td><?=$row['nil4'];?></td>
                  <td><?=$row['nil5'];?></td>
                  <td><?=$row['nil_ratarata'];?></td>
                </tr>
              <?php } ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
  </div>
  <!-- /.content-wrapper -->

</body>
</html>
<script type="text/javascript">
	window.print();
</script>