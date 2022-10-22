<?php 
  session_start();
  if($_SESSION['status']!="login"){
    header("location:login.php?pesan=belum_login");
  }
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Home Admin</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    </head>
    <body>

	<style type="text/css">
      table{
        text-align: center;
        color: green;
      }
      td{
        padding: 30px;
      }
      tr{
        padding: 30px;
      }
	</style>
   <nav class="navbar navbar-dark bg-primary">
  <!-- Navbar content --><a class="navbar-brand" href="#"><b><font face="sans-serif" size="6" color="cyan">BPBD Boyolali</font>&nbsp &nbsp &nbsp</b>
  <font face="verdana" color="white"><i>"Terwujudnya Penanggulangan Bencana Secara Cepat, Tepat, Efektif dan Efisien" </i></font></a><br>
  </nav><br>

    <center><font face="verdana" size="6" color="brown">Halaman Administrator</font></center><br>
    
    <center>
    <table align="center">
      <tr>
        <td><a href="tampil_laporan.php"><img src="images/lihatlaporan.png" width="170px" height="170px"></a></td>
        <td><a href="tampil_korban.php"><img src="images/inputbencana.jpg" width="170px" height="170px"></a></td>
        <td><a href="tampil_bencana.php"><img src="images/beritabencana.jpg" width="170px" height="170px"></a></td>
        <td><a href="tampil_acara.php"><img src="images/beritaacara.png" width="170px" height="170px"></a></td>
        <td><a href="tampil_pengumuman.php"><img src="images/pengumuman.jpg" width="170px" height="170px"></a></td>
        <td><a href="edit_passwordkontakemail.php"><img src="images/userpass.jpg" width="170px" height="170px"></a></td>
      </tr>
      <tr><b>
        <td>Lihat Laporan Bencana</td>
        <td>Rekap Data Korban Bencana</td>
        <td>Berita Dan Rekap Data Bencana</td>
        <td>Berita Acara</td>
        <td>Pengumuman</td>
        <td>Edit Password, Kontak & Email</td>
      </b></tr>
    </table><br><br><br>
    <a href="logout.php"><button class="btn btn-dark">Logout</button></a></center>
    </body>
</html>

