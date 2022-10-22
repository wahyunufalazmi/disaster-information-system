<?php

	include 'koneksi.php';

	$bulan = $_POST['bulan'];
	$tahun = $_POST['tahun'];
  $penanggungjawab = $_POST['penanggungjawab'];
  $nip = $_POST["nip"];

	echo "";
?>
<!DOCTYPE html>
<html>
<head>
  <title>Bencana Per Bulan</title>
</head>

<body>
  <style type="text/css">
    button{
      background-color: white;
      color: white;
       border: 0;
       outline:none;
       width: 100%;
       height: 50px;
    }
  </style>

<button onclick="window.print()">Print Halaman Ini</button>
<br><h1 align='center'>Laporan Kejadian Bencana Bulan <?php echo $bulan; echo " "; echo $tahun ?> Kabupaten Boyolali</h1>
<table border="1">
        <thead>
          <tr bgcolor="silver">
            <th>No</th>
            <th>Hari</th>
            <th>Tanggal</th>
            <th>Jenis Bencana</th>
            <th>Dukuh</th>
            <th>Desa</th>
            <th>Kecamatan</th>
            <th>Tanggal Penetapan Status Tanggap Darurat</th>
            <th>Masa Tanggap Darurat</th>
            <th>Jumlah Korban Hilang Atau Meninggal</th>
            <th>Jumlah KK Terdampak</th>
            <th>Estimasi Total Kerugian</th>
            <th>Deskripsi</th>
            <th>Dokumentasi</th>
    
          </tr>
        </thead>
      
         <?php
          $data = mysqli_query($koneksi, "SELECT * FROM bencana WHERE bulan = '$bulan' AND tahun = '$tahun'");
          $no = 1;
         while ($array = mysqli_fetch_array($data)) :
        ?>
        <tbody>
          <tr>
          <td><?php echo $no; ?></td>
            <td><?php echo $array['hari'];?></td>
            <td><?php echo $array['tanggal'];?> <?php echo $array['bulan'];?> <?php echo $array['tahun'];?></td>
            <td><?php echo $array['tipe'];?></td>
            <td><?php echo $array['dukuh'];?></td>
            <td><?php echo $array['desa'];?></td>
            <td><?php echo $array['kecamatan'];?></td>
            <td><?php echo $array['tanggalpenetapan'];?></td>
            <td><?php echo $array['masatanggap'];?></td>
            <td><?php 
            $kh = $array['korbanhilang'];
            if ($kh != 0) {
              echo number_format($array['korbanhilang']);
            }
            else{
              echo "Nihil";
            }
            ?></td>
            
            <td><?php 
            $kk = $array['kk'];
            if ($kk != 0) {
              echo number_format($array['kk']);
            }
            else{
              echo "Nihil";
            }
            ?></td>
           

          
           <td><?php 
            $ker = $array['kerugian'];
            if ($ker != 0) {
              echo "Rp. ";
              echo number_format($array['kerugian']);
            }
            else{
              echo "Nihil";
            }
            ?></td>
            <td><?php echo $array['deskripsi'];?></td>
           <td><img src="imguploaded/<?php echo $array['gambar']; ?>" style="width: 150px; height: 120px;"></td>
           <?php $no++; endwhile; ?>
         </tr>
        </tbody>
      
      </table ><br><br>

      <center><h1>Intensitas Terjadinya Bencana Alam Bulan <?php echo $bulan; ?> Tahun <?php echo $tahun; ?></h1></center>
      <table border="1" align="center">
        <thead>
          <tr bgcolor="silver">
            <th>Kecamatan</th>
            <th>Gempa</th>
            <th>Gunung Meletus</th>
            <th>Tsunami</th>
            <th>Longsor</th>
            <th>Tanah Gerak</th>
            <th>Banjir</th>
            <th>Banjir Bandang</th>
            <th>Kekeringan</th>
            <th>Karhutla</th>
            <th>Topan</th>
            <th>Angin Hujan</th>
            <th>Gelombang Pasang / Abrasi</th>
            <th>Kebakaran Perumahan</th>
    
          </tr>
        </thead>
          <?php
              include 'koneksi.php';
          ?>
        <tbody>
         <tr>
            <td>Selo</td>
            <td>
              <?php
                $tipe = "Gempa Bumi";
                $kec = "Selo";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Gunung meletus";
                $kec = "Selo";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Tsunami";
                $kec = "Selo";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Tanah longsor";
                $kec = "Selo";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Tanah gerak";
                $kec = "Selo";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Banjir";
                $kec = "Selo";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Banjir bandang";
                $kec = "Selo";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Kekeringan";
                $kec = "Selo";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Kebakaran hutan / lahan";
                $kec = "Selo";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Angin Topan";
                $kec = "Selo";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Angin hujan";
                $kec = "Selo";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Gelombang pasang / abrasi";
                $kec = "Selo";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
                  <td>
              <?php
                $tipe = "Kebakaran perumahan & tempat tinggal warga";
                $kec = "Selo";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
          
          </tr>
          <tr>
            <td>Ampel</td>
            <td>
              <?php
                $tipe = "Gempa Bumi";
                $kec = "Ampel";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Gunung meletus";
                $kec = "Ampel";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Tsunami";
                $kec = "Ampel";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Tanah longsor";
                $kec = "Ampel";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Tanah gerak";
                $kec = "Ampel";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Banjir";
                $kec = "Ampel";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Banjir bandang";
                $kec = "Ampel";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Kekeringan";
                $kec = "Ampel";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Kebakaran hutan / lahan";
                $kec = "Ampel";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Angin Topan";
                $kec = "Ampel";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Angin hujan";
                $kec = "Ampel";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Gelombang pasang / abrasi";
                $kec = "Ampel";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
                  <td>
              <?php
                $tipe = "Kebakaran perumahan & tempat tinggal warga";
                $kec = "Ampel";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
          </tr>
           <tr>
            <td>Gladagsari</td>
            <td>
              <?php
                $tipe = "Gempa Bumi";
                $kec = "Gladasari";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Gunung meletus";
                $kec = "Gladasari";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Tsunami";
                $kec = "Gladasari";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Tanah longsor";
                $kec = "Gladasari";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Tanah gerak";
                $kec = "Gladasari";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Banjir";
                $kec = "Gladasari";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Banjir bandang";
                $kec = "Gladasari";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Kekeringan";
                $kec = "Gladasari";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Kebakaran hutan / lahan";
                $kec = "Gladasari";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Angin Topan";
                $kec = "Gladasari";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Angin hujan";
                $kec = "Gladasari";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Gelombang pasang / abrasi";
                $kec = "Gladasari";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
                  <td>
              <?php
                $tipe = "Kebakaran perumahan & tempat tinggal warga";
                $kec = "Gladasari";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
          </tr>
          <tr>
            <td>Cepogo</td>
             <td>
              <?php
                $tipe = "Gempa Bumi";
                $kec = "Cepogo";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Gunung meletus";
                $kec = "Cepogo";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Tsunami";
                $kec = "Cepogo";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Tanah longsor";
                $kec = "Cepogo";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Tanah gerak";
                $kec = "Cepogo";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Banjir";
                $kec = "Cepogo";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Banjir bandang";
                $kec = "Cepogo";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Kekeringan";
                $kec = "Cepogo";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Kebakaran hutan / lahan";
                $kec = "Cepogo";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Angin Topan";
                $kec = "Cepogo";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Angin hujan";
                $kec = "Cepogo";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Gelombang pasang / abrasi";
                $kec = "Cepogo";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
                  <td>
              <?php
                $tipe = "Kebakaran perumahan & tempat tinggal warga";
                $kec = "Cepogo";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
          </tr>
            <tr>
            <td>Musuk</td>
             <td>
              <?php
                $tipe = "Gempa Bumi";
                $kec = "Musuk";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Gunung meletus";
                $kec = "Musuk";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Tsunami";
                $kec = "Musuk";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Tanah longsor";
                $kec = "Musuk";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Tanah gerak";
                $kec = "Musuk";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Banjir";
                $kec = "Musuk";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Banjir bandang";
                $kec = "Musuk";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Kekeringan";
                $kec = "Musuk";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Kebakaran hutan / lahan";
                $kec = "Musuk";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Angin Topan";
                $kec = "Musuk";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Angin hujan";
                $kec = "Musuk";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Gelombang pasang / abrasi";
                $kec = "Musuk";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
                  <td>
              <?php
                $tipe = "Kebakaran perumahan & tempat tinggal warga";
                $kec = "Musuk";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
          </tr>
            <tr>
            <td>Tamansari</td>
            <td>
              <?php
                $tipe = "Gempa Bumi";
                $kec = "Tamansari";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Gunung meletus";
                $kec = "Tamansari";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Tsunami";
                $kec = "Tamansari";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Tanah longsor";
                $kec = "Tamansari";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Tanah gerak";
                $kec = "Tamansari";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Banjir";
                $kec = "Tamansari";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Banjir bandang";
                $kec = "Tamansari";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Kekeringan";
                $kec = "Tamansari";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Kebakaran hutan / lahan";
                $kec = "Tamansari";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Angin Topan";
                $kec = "Tamansari";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Angin hujan";
                $kec = "Tamansari";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Gelombang pasang / abrasi";
                $kec = "Tamansari";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
                  <td>
              <?php
                $tipe = "Kebakaran perumahan & tempat tinggal warga";
                $kec = "Tamansari";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
          </tr>
            <tr>
            <td>Boyolali</td>
            <td>
              <?php
                $tipe = "Gempa Bumi";
                $kec = "Boyolali";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Gunung meletus";
                $kec = "Boyolali";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Tsunami";
                $kec = "Boyolali";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Tanah longsor";
                $kec = "Boyolali";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Tanah gerak";
                $kec = "Boyolali";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Banjir";
                $kec = "Boyolali";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Banjir bandang";
                $kec = "Boyolali";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Kekeringan";
                $kec = "Boyolali";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Kebakaran hutan / lahan";
                $kec = "Boyolali";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Angin Topan";
                $kec = "Boyolali";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Angin hujan";
                $kec = "Boyolali";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Gelombang pasang / abrasi";
                $kec = "Boyolali";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
                  <td>
              <?php
                $tipe = "Kebakaran perumahan & tempat tinggal warga";
                $kec = "Boyolali";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
          </tr>
            <tr>
            <td>Mojosongo</td>
            <td>
              <?php
                $tipe = "Gempa Bumi";
                $kec = "Mojosongo";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Gunung meletus";
                $kec = "Mojosongo";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Tsunami";
                $kec = "Mojosongo";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Tanah longsor";
                $kec = "Mojosongo";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Tanah gerak";
                $kec = "Mojosongo";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Banjir";
                $kec = "Mojosongo";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Banjir bandang";
                $kec = "Mojosongo";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Kekeringan";
                $kec = "Mojosongo";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Kebakaran hutan / lahan";
                $kec = "Mojosongo";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Angin Topan";
                $kec = "Mojosongo";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Angin hujan";
                $kec = "Mojosongo";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Gelombang pasang / abrasi";
                $kec = "Mojosongo";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
                  <td>
              <?php
                $tipe = "Kebakaran perumahan & tempat tinggal warga";
                $kec = "Mojosongo";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
          </tr>    
          <tr>
            <td>Teras</td>
            <td>
              <?php
                $tipe = "Gempa Bumi";
                $kec = "Teras";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Gunung meletus";
                $kec = "Teras";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Tsunami";
                $kec = "Teras";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Tanah longsor";
                $kec = "Teras";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Tanah gerak";
                $kec = "Teras";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Banjir";
                $kec = "Teras";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Banjir bandang";
                $kec = "Teras";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Kekeringan";
                $kec = "Teras";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Kebakaran hutan / lahan";
                $kec = "Teras";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Angin Topan";
                $kec = "Teras";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Angin hujan";
                $kec = "Teras";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Gelombang pasang / abrasi";
                $kec = "Teras";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
                  <td>
              <?php
                $tipe = "Kebakaran perumahan & tempat tinggal warga";
                $kec = "Teras";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
          </tr>
            <tr>
            <td>Sawit</td>
            <td>
              <?php
                $tipe = "Gempa Bumi";
                $kec = "Sawit";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Gunung meletus";
                $kec = "Sawit";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Tsunami";
                $kec = "Sawit";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Tanah longsor";
                $kec = "Sawit";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Tanah gerak";
                $kec = "Sawit";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Banjir";
                $kec = "Sawit";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Banjir bandang";
                $kec = "Sawit";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Kekeringan";
                $kec = "Sawit";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Kebakaran hutan / lahan";
                $kec = "Sawit";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Angin Topan";
                $kec = "Sawit";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Angin hujan";
                $kec = "Sawit";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Gelombang pasang / abrasi";
                $kec = "Sawit";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
                  <td>
              <?php
                $tipe = "Kebakaran perumahan & tempat tinggal warga";
                $kec = "Sawit";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
          </tr>
            <tr>
            <td>Banyudono</td>
            <td>
              <?php
                $tipe = "Gempa Bumi";
                $kec = "Banyudono";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Gunung meletus";
                $kec = "Banyudono";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Tsunami";
                $kec = "Banyudono";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Tanah longsor";
                $kec = "Banyudono";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Tanah gerak";
                $kec = "Banyudono";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Banjir";
                $kec = "Banyudono";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Banjir bandang";
                $kec = "Banyudono";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Kekeringan";
                $kec = "Banyudono";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Kebakaran hutan / lahan";
                $kec = "Banyudono";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Angin Topan";
                $kec = "Banyudono";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Angin hujan";
                $kec = "Banyudono";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Gelombang pasang / abrasi";
                $kec = "Banyudono";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
                  <td>
              <?php
                $tipe = "Kebakaran perumahan & tempat tinggal warga";
                $kec = "Banyudono";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
          </tr>
            <tr>
            <td>Sambi</td>
            <td>
              <?php
                $tipe = "Gempa Bumi";
                $kec = "Sambi";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Gunung meletus";
                $kec = "Sambi";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Tsunami";
                $kec = "Sambi";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Tanah longsor";
                $kec = "Sambi";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Tanah gerak";
                $kec = "Sambi";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Banjir";
                $kec = "Sambi";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Banjir bandang";
                $kec = "Sambi";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Kekeringan";
                $kec = "Sambi";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Kebakaran hutan / lahan";
                $kec = "Sambi";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Angin Topan";
                $kec = "Sambi";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Angin hujan";
                $kec = "Sambi";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Gelombang pasang / abrasi";
                $kec = "Sambi";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
                  <td>
              <?php
                $tipe = "Kebakaran perumahan & tempat tinggal warga";
                $kec = "Sambi";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
          </tr>
            <tr>
            <td>Ngemplak</td>
            <td>
              <?php
                $tipe = "Gempa Bumi";
                $kec = "Ngemplak";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Gunung meletus";
                $kec = "Ngemplak";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Tsunami";
                $kec = "Ngemplak";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Tanah longsor";
                $kec = "Ngemplak";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Tanah gerak";
                $kec = "Ngemplak";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Banjir";
                $kec = "Ngemplak";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Banjir bandang";
                $kec = "Ngemplak";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Kekeringan";
                $kec = "Ngemplak";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Kebakaran hutan / lahan";
                $kec = "Ngemplak";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Angin Topan";
                $kec = "Ngemplak";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Angin hujan";
                $kec = "Ngemplak";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Gelombang pasang / abrasi";
                $kec = "Ngemplak";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
                  <td>
              <?php
                $tipe = "Kebakaran perumahan & tempat tinggal warga";
                $kec = "Ngemplak";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
          </tr>
            <tr>
            <td>Nogosari</td>
              <td>
              <?php
                $tipe = "Gempa Bumi";
                $kec = "Nogosari";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Gunung meletus";
                $kec = "Nogosari";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Tsunami";
                $kec = "Nogosari";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Tanah longsor";
                $kec = "Nogosari";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Tanah gerak";
                $kec = "Nogosari";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Banjir";
                $kec = "Nogosari";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Banjir bandang";
                $kec = "Nogosari";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Kekeringan";
                $kec = "Nogosari";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Kebakaran hutan / lahan";
                $kec = "Nogosari";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Angin Topan";
                $kec = "Nogosari";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Angin hujan";
                $kec = "Nogosari";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Gelombang pasang / abrasi";
                $kec = "Nogosari";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
                  <td>
              <?php
                $tipe = "Kebakaran perumahan & tempat tinggal warga";
                $kec = "Nogosari";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
          </tr>
            <tr>
            <td>Simo</td>
         <td>
              <?php
                $tipe = "Gempa Bumi";
                $kec = "Simo";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Gunung meletus";
                $kec = "Simo";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Tsunami";
                $kec = "Simo";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Tanah longsor";
                $kec = "Simo";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Tanah gerak";
                $kec = "Simo";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Banjir";
                $kec = "Simo";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Banjir bandang";
                $kec = "Simo";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Kekeringan";
                $kec = "Simo";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Kebakaran hutan / lahan";
                $kec = "Simo";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Angin Topan";
                $kec = "Simo";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Angin hujan";
                $kec = "Simo";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Gelombang pasang / abrasi";
                $kec = "Simo";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
                  <td>
              <?php
                $tipe = "Kebakaran perumahan & tempat tinggal warga";
                $kec = "Simo";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
          </tr>
            <tr>
            <td>Karanggede</td>
  <td>
              <?php
                $tipe = "Gempa Bumi";
                $kec = "Karanggede";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Gunung meletus";
                $kec = "Karanggede";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Tsunami";
                $kec = "Karanggede";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Tanah longsor";
                $kec = "Karanggede";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Tanah gerak";
                $kec = "Karanggede";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Banjir";
                $kec = "Karanggede";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Banjir bandang";
                $kec = "Karanggede";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Kekeringan";
                $kec = "Karanggede";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Kebakaran hutan / lahan";
                $kec = "Karanggede";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Angin Topan";
                $kec = "Karanggede";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Angin hujan";
                $kec = "Karanggede";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Gelombang pasang / abrasi";
                $kec = "Karanggede";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
                  <td>
              <?php
                $tipe = "Kebakaran perumahan & tempat tinggal warga";
                $kec = "Karanggede";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
          </tr>
            <tr>
            <td>Klego</td>
        <td>
              <?php
                $tipe = "Gempa Bumi";
                $kec = "Klego";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Gunung meletus";
                $kec = "Klego";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Tsunami";
                $kec = "Klego";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Tanah longsor";
                $kec = "Klego";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Tanah gerak";
                $kec = "Klego";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Banjir";
                $kec = "Klego";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Banjir bandang";
                $kec = "Klego";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Kekeringan";
                $kec = "Klego";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Kebakaran hutan / lahan";
                $kec = "Klego";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Angin Topan";
                $kec = "Klego";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Angin hujan";
                $kec = "Klego";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Gelombang pasang / abrasi";
                $kec = "Klego";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
                  <td>
              <?php
                $tipe = "Kebakaran perumahan & tempat tinggal warga";
                $kec = "Klego";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
          </tr>
            <tr>
            <td>Andong</td>
       <td>
              <?php
                $tipe = "Gempa Bumi";
                $kec = "Andong";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Gunung meletus";
                $kec = "Andong";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Tsunami";
                $kec = "Andong";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Tanah longsor";
                $kec = "Andong";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Tanah gerak";
                $kec = "Andong";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Banjir";
                $kec = "Andong";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Banjir bandang";
                $kec = "Andong";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Kekeringan";
                $kec = "Andong";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Kebakaran hutan / lahan";
                $kec = "Andong";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Angin Topan";
                $kec = "Andong";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Angin hujan";
                $kec = "Andong";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Gelombang pasang / abrasi";
                $kec = "Andong";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
                  <td>
              <?php
                $tipe = "Kebakaran perumahan & tempat tinggal warga";
                $kec = "Andong";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
          </tr>
            <tr>
            <td>Kemusu</td>
<td>
              <?php
                $tipe = "Gempa Bumi";
                $kec = "Kemusu";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Gunung meletus";
                $kec = "Kemusu";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Tsunami";
                $kec = "Kemusu";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Tanah longsor";
                $kec = "Kemusu";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Tanah gerak";
                $kec = "Kemusu";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Banjir";
                $kec = "Kemusu";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Banjir bandang";
                $kec = "Kemusu";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Kekeringan";
                $kec = "Kemusu";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Kebakaran hutan / lahan";
                $kec = "Kemusu";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Angin Topan";
                $kec = "Kemusu";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Angin hujan";
                $kec = "Kemusu";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Gelombang pasang / abrasi";
                $kec = "Kemusu";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
                  <td>
              <?php
                $tipe = "Kebakaran perumahan & tempat tinggal warga";
                $kec = "Kemusu";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
          </tr>
            <tr>
            <td>Wonosegoro</td>
       <td>
              <?php
                $tipe = "Gempa Bumi";
                $kec = "Wonosegoro";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Gunung meletus";
                $kec = "Wonosegoro";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Tsunami";
                $kec = "Wonosegoro";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Tanah longsor";
                $kec = "Wonosegoro";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Tanah gerak";
                $kec = "Wonosegoro";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Banjir";
                $kec = "Wonosegoro";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Banjir bandang";
                $kec = "Wonosegoro";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Kekeringan";
                $kec = "Wonosegoro";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Kebakaran hutan / lahan";
                $kec = "Wonosegoro";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Angin Topan";
                $kec = "Wonosegoro";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Angin hujan";
                $kec = "Wonosegoro";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Gelombang pasang / abrasi";
                $kec = "Wonosegoro";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
                  <td>
              <?php
                $tipe = "Kebakaran perumahan & tempat tinggal warga";
                $kec = "Wonosegoro";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
          </tr>
            <tr>
            <td>Wonosamodro</td>
          <td>
              <?php
                $tipe = "Gempa Bumi";
                $kec = "Wonosamodro";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Gunung meletus";
                $kec = "Wonosamodro";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Tsunami";
                $kec = "Wonosamodro";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Tanah longsor";
                $kec = "Wonosamodro";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Tanah gerak";
                $kec = "Wonosamodro";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Banjir";
                $kec = "Wonosamodro";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Banjir bandang";
                $kec = "Wonosamodro";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Kekeringan";
                $kec = "Wonosamodro";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Kebakaran hutan / lahan";
                $kec = "Wonosamodro";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Angin Topan";
                $kec = "Wonosamodro";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Angin hujan";
                $kec = "Wonosamodro";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Gelombang pasang / abrasi";
                $kec = "Wonosamodro";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
                  <td>
              <?php
                $tipe = "Kebakaran perumahan & tempat tinggal warga";
                $kec = "Wonosamodro";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
          </tr>
            <tr>
            <td>Juwangi</td>
         <td>
              <?php
                $tipe = "Gempa Bumi";
                $kec = "Juwangi";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Gunung meletus";
                $kec = "Juwangi";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Tsunami";
                $kec = "Juwangi";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Tanah longsor";
                $kec = "Juwangi";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Tanah gerak";
                $kec = "Juwangi";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Banjir";
                $kec = "Juwangi";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Banjir bandang";
                $kec = "Juwangi";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Kekeringan";
                $kec = "Juwangi";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Kebakaran hutan / lahan";
                $kec = "Juwangi";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Angin Topan";
                $kec = "Juwangi";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Angin hujan";
                $kec = "Juwangi";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
            <td>
              <?php
                $tipe = "Gelombang pasang / abrasi";
                $kec = "Juwangi";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
                  <td>
              <?php
                $tipe = "Kebakaran perumahan & tempat tinggal warga";
                $kec = "Juwangi";
                $query = "SELECT COUNT(*) FROM bencana WHERE tipe = '$tipe' AND bulan = '$bulan' AND tahun = '$tahun' AND kecamatan = '$kec'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
              ?>
            </td>
          </tr>
            <tr>
            <td>Total</td>
              <td>
                <?php
                $tipe = "Gempa bumi";
                
                $query = "SELECT COUNT(tipe) FROM bencana WHERE bulan = '$bulan' AND tahun = '$tahun' AND tipe = '$tipe'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
               ?>
              </td>
            <td>
                <?php
                $tipe = "Gunung meletus";
                
                $query = "SELECT COUNT(tipe) FROM bencana WHERE bulan = '$bulan' AND tahun = '$tahun' AND tipe = '$tipe'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
               ?>
              </td>
            <td>
                <?php
                $tipe = "Tsunami";
                
                $query = "SELECT COUNT(tipe) FROM bencana WHERE bulan = '$bulan' AND tahun = '$tahun' AND tipe = '$tipe'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
               ?>
              </td>
            <td>
                <?php
                $tipe = "Tanah longsor";
                
                $query = "SELECT COUNT(tipe) FROM bencana WHERE bulan = '$bulan' AND tahun = '$tahun' AND tipe = '$tipe'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
               ?>
              </td>
            <td>
                <?php
                $tipe = "Tanah gerak";
                
                $query = "SELECT COUNT(tipe) FROM bencana WHERE bulan = '$bulan' AND tahun = '$tahun' AND tipe = '$tipe'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
               ?>
              </td>
            <td>
                <?php
                $tipe = "Banjir";
                
                $query = "SELECT COUNT(tipe) FROM bencana WHERE bulan = '$bulan' AND tahun = '$tahun' AND tipe = '$tipe'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
               ?>
              </td>
            <td>
                <?php
                $tipe = "Banjir bandang";
                
                $query = "SELECT COUNT(tipe) FROM bencana WHERE bulan = '$bulan' AND tahun = '$tahun' AND tipe = '$tipe'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
               ?>
              </td>
            <td>
                <?php
                $tipe = "Kekeringan";
                
                $query = "SELECT COUNT(tipe) FROM bencana WHERE bulan = '$bulan' AND tahun = '$tahun' AND tipe = '$tipe'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
               ?>
              </td>
            <td>
                <?php
                $tipe = "Kebakaran hutan / lahan";
                
                $query = "SELECT COUNT(tipe) FROM bencana WHERE bulan = '$bulan' AND tahun = '$tahun' AND tipe = '$tipe'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
               ?>
              </td>
            <td>
                <?php
                $tipe = "Angin topan";
                
                $query = "SELECT COUNT(tipe) FROM bencana WHERE bulan = '$bulan' AND tahun = '$tahun' AND tipe = '$tipe'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
               ?>
              </td>
            <td>
                <?php
                $tipe = "Angin hujan";
                
                $query = "SELECT COUNT(tipe) FROM bencana WHERE bulan = '$bulan' AND tahun = '$tahun' AND tipe = '$tipe'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
               ?>
              </td>
            <td>
                <?php
                $tipe = "Gelombang pasang / abrasi";
                
                $query = "SELECT COUNT(tipe) FROM bencana WHERE bulan = '$bulan' AND tahun = '$tahun' AND tipe = '$tipe'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
               ?>
              </td>
            <td>
                <?php
                $tipe = "Kebakaran perumahan & tempat tinggal warga";
                
                $query = "SELECT COUNT(tipe) FROM bencana WHERE bulan = '$bulan' AND tahun = '$tahun' AND tipe = '$tipe'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
                while($row = mysqli_fetch_array($result)){  
                $implode = implode($row);
                $substr = substr($implode, 1);
                
                if ($substr != 0) {
                  echo $substr;  
                }else
                {
                  echo "";
                }
               }
               ?>
              </td>
          </tr>
        </tbody>
      </table ><br><br>

      <center><h1>Total Korban Akibat Bencana Bulan <?php echo $bulan; ?> <?php echo $tahun; ?></h1></center>
      <table border="1" align="center">
        <thead>
          <tr bgcolor="silver">

              <th>
                <?php

              $query = "SELECT SUM(korbanhilang) FROM bencana WHERE bulan = '$bulan' AND tahun = '$tahun'";    
              $result = mysqli_query($koneksi,$query) or die(mysql_error());

          // Print out result
              while($row = mysqli_fetch_array($result)){    
              echo "<b>Total korban hilang = ". number_format($row['SUM(korbanhilang)']); echo "</b><br /><br>";
             }

                ?>
            </th>
            <th>
              <?php

               $query = "SELECT SUM(korbanluka) FROM bencana WHERE bulan = '$bulan' AND tahun = '$tahun'";    
              $result = mysqli_query($koneksi,$query) or die(mysql_error());

              // Print out result
              while($row = mysqli_fetch_array($result)){    
                  echo "<b>Total korban luka luka = ". number_format($row['SUM(korbanluka)']); echo "</b><br /><br>";
                
              }

                ?>
            </th>
            <th>
              <?php

              $query = "SELECT SUM(korbanmengungsi) FROM bencana WHERE bulan = '$bulan' AND tahun = '$tahun'";    
              $result = mysqli_query($koneksi,$query) or die(mysql_error());

              // Print out result
              while($row = mysqli_fetch_array($result)){    
                  echo "<b>Total korban mengungsi = ". number_format($row['SUM(korbanmengungsi)']); echo "</b><br /><br>";
                  
              }

                ?>
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
             <td>
                <?php

                  

              // Make a MySQL Connection
                  $query = "SELECT tipe, kecamatan, SUM(korbanhilang) FROM bencana WHERE bulan = '$bulan' AND tahun = '$tahun' GROUP BY tipe";    
                  $result = mysqli_query($koneksi,$query) or die(mysql_error());

                  // Print out result
                  while($row = mysqli_fetch_array($result)){    
                      echo "karena ". $row['tipe']. " : ". number_format($row['SUM(korbanhilang)']); echo "<br />";
                      echo "kecamatan ".$row['kecamatan']."<br><hr><br>";
                  }

                ?>
            </td>
            <td>
                <?php

                  

              // Make a MySQL Connection
                  $query = "SELECT tipe, kecamatan, SUM(korbanluka) FROM bencana WHERE bulan = '$bulan' AND tahun = '$tahun' GROUP BY tipe";    
                  $result = mysqli_query($koneksi,$query) or die(mysql_error());

                  // Print out result
                  while($row = mysqli_fetch_array($result)){    
                      echo "karena ".  $row['tipe']. " : ". number_format($row['SUM(korbanluka)']); echo "<br />";
                      echo "kecamatan ".$row['kecamatan']."<br><hr><br>";
                  }

                ?>
            </td>
            <td>
                <?php

                  

              // Make a MySQL Connection
                  $query = "SELECT tipe, kecamatan, SUM(korbanmengungsi) FROM bencana WHERE bulan = '$bulan' AND tahun = '$tahun' GROUP BY tipe";    
                  $result = mysqli_query($koneksi,$query) or die(mysql_error());

                  // Print out result
                  while($row = mysqli_fetch_array($result)){    
                      echo "karena ".  $row['tipe']. " : ". number_format($row['SUM(korbanmengungsi)']); echo "<br />";
                      echo "kecamatan ".$row['kecamatan']."<br><hr><br>";
                  }

                ?>
            </td>
          </tr>
        </tbody>
      </table><br><br>


      <center><h1>Total Rumah Rusak Akibat Bencana Bulan <?php echo $bulan; ?> <?php echo $tahun; ?></h1></center>
      <table border="1" align="center">
        <thead>
          <tr bgcolor="silver">

              <th>
                <?php

              $query = "SELECT SUM(rusakringan) FROM bencana WHERE bulan = '$bulan' AND tahun = '$tahun'";    
              $result = mysqli_query($koneksi,$query) or die(mysql_error());

          // Print out result
              while($row = mysqli_fetch_array($result)){    
              echo "<b>Total rumah rusak ringan = ". number_format($row['SUM(rusakringan)']); echo "</b><br /><br>";
             }

                ?>
            </th>
            <th>
              <?php

               $query = "SELECT SUM(rusaksedang) FROM bencana WHERE bulan = '$bulan' AND tahun = '$tahun'";    
              $result = mysqli_query($koneksi,$query) or die(mysql_error());

              // Print out result
              while($row = mysqli_fetch_array($result)){    
                  echo "<b>Total rumah rusak sedang = ". number_format($row['SUM(rusaksedang)']); echo "</b><br /><br>";
                
              }

                ?>
            </th>
            <th>
              <?php

              $query = "SELECT SUM(rusakberat) FROM bencana WHERE bulan = '$bulan' AND tahun = '$tahun'";    
              $result = mysqli_query($koneksi,$query) or die(mysql_error());

              // Print out result
              while($row = mysqli_fetch_array($result)){    
                  echo "<b>Total rumah rusak berat = ". number_format($row['SUM(rusakberat)']); echo "</b><br /><br>";
                  
              }

                ?>
            </th>
             <th>
              <?php

              $query = "SELECT SUM(kerugian) FROM bencana WHERE bulan = '$bulan' AND tahun = '$tahun'";    
              $result = mysqli_query($koneksi,$query) or die(mysql_error());

              // Print out result
              while($row = mysqli_fetch_array($result)){    
                  echo "<b>Total kerugian = Rp. ". number_format($row['SUM(kerugian)']); echo "</b><br /><br>";
                  
              }

                ?>
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
             <td>
                <?php

                  

              // Make a MySQL Connection
                  $query = "SELECT tipe, kecamatan, SUM(rusakringan) FROM bencana WHERE bulan = '$bulan' AND tahun = '$tahun' GROUP BY tipe";    
                  $result = mysqli_query($koneksi,$query) or die(mysql_error());

                  // Print out result
                  while($row = mysqli_fetch_array($result)){    
                      echo "karena ". $row['tipe']. " : ". number_format($row['SUM(rusakringan)']); echo "<br />";
                      echo "kecamatan ".$row['kecamatan']."<br><hr><br>";
                  }

                ?>
            </td>
            <td>
                <?php

                  

              // Make a MySQL Connection
                  $query = "SELECT tipe, kecamatan, SUM(rusaksedang) FROM bencana WHERE bulan = '$bulan' AND tahun = '$tahun' GROUP BY tipe";    
                  $result = mysqli_query($koneksi,$query) or die(mysql_error());

                  // Print out result
                  while($row = mysqli_fetch_array($result)){    
                      echo "karena ".  $row['tipe']. " : ". number_format($row['SUM(rusaksedang)']); echo "<br />";
                      echo "kecamatan ".$row['kecamatan']."<br><hr><br>";
                  }

                ?>
            </td>
            <td>
                <?php

                  

              // Make a MySQL Connection
                  $query = "SELECT tipe, kecamatan, SUM(rusakberat) FROM bencana WHERE bulan = '$bulan' AND tahun = '$tahun' GROUP BY tipe";    
                  $result = mysqli_query($koneksi,$query) or die(mysql_error());

                  // Print out result
                  while($row = mysqli_fetch_array($result)){    
                      echo "karena ".  $row['tipe']. " : ". number_format($row['SUM(rusakberat)']); echo "<br />";
                      echo "kecamatan ".$row['kecamatan']."<br><hr><br>";
                  }

                ?>
            </td>
            <td>
                <?php

                  

              // Make a MySQL Connection
                  $query = "SELECT tipe, kecamatan, SUM(kerugian) FROM bencana WHERE bulan = '$bulan' AND tahun = '$tahun' GROUP BY tipe";    
                  $result = mysqli_query($koneksi,$query) or die(mysql_error());

                  // Print out result
                  while($row = mysqli_fetch_array($result)){    
                      echo "karena ".  $row['tipe']. " : Rp. ". number_format($row['SUM(kerugian)']); echo "<br />";
                      echo "kecamatan ".$row['kecamatan']."<br><hr><br>";
                  }

                ?>
            </td>
          </tr>
        </tbody>
      </table><br><br><br>

   <table align="right" class="ttd">
     <tr>
       <td align="center"> PENANGGUNGJAWAB</td>
     </tr>
     <tr>
       <td align="center">BADAN PENANGGULANGAN BENCANA DAERAH</td>
     </tr>
     <tr>
       <td align="center">KABUPATEN BOYOLALI</td>
     </tr>
     <tr>
       <td align="center"><br><br><br><br><br></td>
     </tr>
     <tr>
       <td align="center"><?=  $penanggungjawab; ?></td>
     </tr>
     <tr>
       <td align="center"><?=  $nip; ?></td>
     </tr>
   </table>
    </body>
</html>
