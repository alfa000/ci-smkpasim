  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Peserta Ujian
        <?php foreach ($psb->result_array() as $row):?>
        <small><?=$row['no_reg']?></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
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
            <div class="box-footer">
              <a href="cetak_profile"  target="_blank" class="fa fa-print btn btn-primary"> Print Profile</a>
            </div>
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
              <table id="example1" class="table table-bordered table-striped">
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
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <a href="cetak_kpu"  target="_blank" class="fa fa-print btn btn-primary"> Print Kartu Peserta Ujian</a>
            </div>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <?php endforeach; ?>
  </div>
  <!-- /.content-wrapper -->