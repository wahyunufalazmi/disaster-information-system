<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
 <title>Preview Pengumuman</title>
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
<?php
$id    = mysqli_real_escape_string($koneksi,$_GET['id']);
$query = mysqli_query($koneksi,"SELECT * FROM pengumuman WHERE id='$id' ");
$data  = mysqli_fetch_array($query);
?><center>
<h1>Preview File PDF Pengumuman</h1>
<hr><font size="4" color="green">
<b>Judul Pengumuman :  <?php echo $data['judul'];?> </b><br><br></font> 
<hr>
<b>Tanggal Upload :  <?php echo $data['tanggal'];?> </b><br><br></font> 
<hr>
 <embed src="files/<?php echo $data['nama_file'];?>" type="application/pdf" width="90%" height="590" ></center>
</body>
</html> 