<div class="content-wrapper">

   <section class="content-header">
      <h3>
        <?php echo $judul ?>
        <small></small>
      </h3>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('Admin') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Berita</li>
      </ol>
    </section>

  <section class="content container-fluid">
    <div class="box">
      <!-- /.box-header -->

        <?php 
          $data=$this->session->flashdata('sukses');
          if($data!=""){ ?>
            <div id="notifikasi" class="alert alert-success"><strong>Sukses! </strong> <?=$data;?></div>
        <?php } ?>

        <?php 
          $data2=$this->session->flashdata('error');
          if($data2!=""){ ?>
            <div id="notifikasi" class="alert alert-danger"><strong> Error! </strong> <?=$data2;?></div>
        <?php } ?>

      <div class="box-body">
        <form action="<?php echo site_url('backend/berita/add_berita'); ?>" method="post" role="form" enctype="multipart/form-data">
          <div class="form-group row">
            <label class="col-md-2">ID Berita</label>
            <div class="col-md-10"><input type="text" name="id_berita" value="<?= $idberita ?>" readonly required class="form-control"></div>
          </div>
          <div class="form-group row">
            <label class="col-md-2">Judul</label>
            <div class="col-md-10"><input type="text" name="judul" required class="form-control"></div>
          </div>
          <div class="form-group row">
            <label class="col-md-2">Kategori</label>
            <div class="col-md-10">
            <select class="form-control" required="" name="id_ktg_berita">
              <option value="">-Pilih Kategori-</option>
            <?php
            foreach ($kategori as $ktg) {
              echo "<option value='".$ktg->id_ktg_berita."'>".$ktg->kategori."</option>";
            }
             ?>
            </select>
            </div>
          </div>
          <div class="form-group row">
              <label class="col-md-2">Gambar</label>
              <div class="col-md-10"><input type="file" name="gambar" required class="form-control"></div>
            </div>
          <div class="form-group row">
            <label class="col-md-2">Konten</label>
            <div class="col-md-10"><textarea id="editor1" name="konten"></textarea></div>
          </div>
          <button type="submit" class="btn btn-primary"> Simpan</button>
        </form>
      </div>
      <!-- /.box-body -->

    <!-- MODAL EDIT -->
    <style>
        #image-holder {
            margin-top: 8px;
        }
        
        #image-holder img {
            border: 8px solid #DDD;
            max-width:100%;
        }
    </style>

    </div>
  </section>
</div>