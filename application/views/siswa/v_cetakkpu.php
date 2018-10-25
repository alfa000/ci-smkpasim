<?php foreach ($psb->result_array() as $row):?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Kartu Peserta Ujian</title>
<style type="text/css">
.judul {
	background-color: #06C;
	color: #FFF;
}
#data {
	font-size: 16px;
}
#tabel {
	border: thin solid #999;
	background-color: #CCC;
}
</style>
</head>

<body>
<table width="400" border="0" align="center" id="tabel">
  <tr>
    <td><div align="center" class="judul">
      <h2>KARTU PESERTA<BR />
      UJIAN Psikotes</h2>
    </div></td>
  </tr>
  <tr>
    <td><div align="center">
      <h3>SMK Pasim Plus Kota Sukabumi</h3>
    </div></td>
  </tr>
  <tr>
    <td><div align="center">
      <h2><img width="150px" src="<?=base_url()?>assets/upload/images/<?=$row['pic_foto']?>"></h2>
    </div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><div align="center" id="data"><?=$row['nm_siswa']?></div></td>
  </tr>
  <tr>
    <td><div align="center" id="data"><?=$row['no_reg']?></div></td>
  </tr>
  <?php endforeach; ?>
    <?php foreach($ujian->result_array() as $row):?>
  <tr>
    <td><div align="center" id="data"><?=$row['no_ujian']?>| <?=$row['ruang_ujian']?> | <?=$row['tgl_ujian']?> <?=$row['jam_ujian']?></div></td>
  </tr>
   <?php endforeach; ?>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
<script type="text/javascript">
  var css = '@page { size: landscape; }',
    head = document.head || document.getElementsByTagName('head')[0],
    style = document.createElement('style');

style.type = 'text/css';
style.media = 'print';

if (style.styleSheet){
  style.styleSheet.cssText = css;
} else {
  style.appendChild(document.createTextNode(css));
}

head.appendChild(style);

window.print();

  window.print();
</script>