<!DOCTYPE html>
<html>
    <head>
        <title>Codeigniter Upload</title>
    </head>
    <body>
 
        <h3>Upload File Dengan Codeigniter</h3>
 
        <?php
        echo form_open_multipart('siswa/upload');
        ?>
        <input type="text" name="no_reg">
        <input type="file" name="gambar1">
        <br>
        <input type="file" name="gambar2">
        <br>
        <input type="file" name="gambar3">
        <br>
        <button type="submit">Upload Gambar</button>
        <?php echo form_close(); ?>
 
    </body>
</html>