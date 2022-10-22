 <?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
 <title>Form Input Pengumuman</title>
 <style type="text/css">
 body {
  font-family: verdana;
  font-size: 12px;
 }
 a {
  text-decoration: none;
  color: #3050F3;
 }
 a:hover {
  color: #000F5E;
 } 
</style>
</head>
<body>

<h1>Form Untuk Mengunggah File Pengumuman</h1>
<hr>
<form action="" method="POST" enctype="multipart/form-data">
<table width="1000" border="0">
<tr>
 <td width="200"><b><h3>Judul Pengumuman</td>
 <td>
 	<textarea cols="100" rows="10" placeholder="tuliskan judul pengumuman disini....." required="" name="judul"></textarea>
 </td>
</tr>
<tr>
 <td width="200"><b><h3>Pilih File PDF</td>
 <td><input type="file" name="nama_file" required></td>
</tr>
<tr>
 <td width="150"><br><br><br><br><br></td>
 <td align="center"><input type="submit" value="Upload File" name="upload"></td>
</tr>
</table>
</form>



	</body>
</html>


<?php

	if (isset($_POST['upload'])) {
        $id = rand(1,999);
        $judul    = $_POST['judul'];
        $ekstensi_diperbolehkan    = array('pdf','docx');
        $nama    = $_FILES['nama_file']['name'];
        $x        = explode('.', $nama);
        $ekstensi    = strtolower(end($x));
        $ukuran        = $_FILES['nama_file']['size'];
        $file_tmp    = $_FILES['nama_file']['tmp_name']; 
    	date_default_timezone_set('Asia/Jakarta');
        $tanggal = date("Y-m-d H:i:s");

     
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
            if($ukuran < 10044070){ 
                move_uploaded_file($file_tmp, 'files/'.$nama);
                $query    = mysqli_query($koneksi,"INSERT INTO pengumuman VALUES('$id', '$judul', '$tanggal', '$nama')");
                if($query){
                    echo "<script>alert('Pengumuman berhasil diupload');window.location='tampil_pengumuman.php';</script>";
                }
                else{
                    echo "<script>alert('Pengumuman gagal diupload');window.location='input_pengumuman.php';</script>";
                }
            }
            else{
                echo "<script>alert('Ukuran file terlalu besar');window.location='input_pengumuman.php';</script>";
            }
        }
        else{
            echo "<script>alert('Jenis file yang boleh diupload hanya PDF dan MS Word');window.location='input_pengumuman.php';</script>";
        }

	}

?>