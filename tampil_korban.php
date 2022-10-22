<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  
    session_start();
  if($_SESSION['status']!="login"){
    header("location:login.php?pesan=belum_login");
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <title>List Data Korban Bencana</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style type="text/css">
      * {
        font-family: "Trebuchet MS";
      }
      h1 {
        text-transform: uppercase;
       
      }
      h5{
        color: red;
        text-align: center;
      }
    table {
      border: solid 1px white;
      border-collapse: collapse;
      border-spacing: 0;
      border-top: 20px;
      border-bottom: 20px;
      border-left: 20px;
      border-right: 20px;
    }
    table thead th {
        background-color: purple;
        border: solid 1px #DDEEEE;
        color: white;
        padding: 10px;
        text-align: left;
        text-decoration: none;
    }
    table tbody td {
        border: solid 1px silver;
        color: #333;
        padding: 10px;
        text-shadow: 1px 1px 1px #fff;
    }
    </style>
  </head>
  <body>
  <nav class="navbar navbar-dark bg-primary">
  <!-- Navbar content --><a class="navbar-brand" href="#"><b><font face="sans-serif" size="6" color="cyan">BPBD Boyolali</font>&nbsp &nbsp &nbsp</b>
  <font face="verdana" color="white"><i>"Terwujudnya Penanggulangan Bencana Secara Cepat, Tepat, Efektif dan Efisien" </i></font></a><br>
</nav><br>
    <center><h1>Data Seluruh Korban Terdampak Bencana</h1></center>
    <h5>(*Geser halaman web ke kanan untuk melihat keseluruhan data dan scroll kebawah untuk melihat data lainnya)</h5><br>
    <form action="tampilkan_berdasarkan.php" method="post">
    <center>Cetak Berdasarkan : &nbsp;&nbsp;&nbsp;
      <select name="berdasarkan">
        <option value="bencana">Bencana</option>
        <option value="tanggal">Tanggal</option>
        <option value="bulan">Bulan</option>
        <option value="tahun">Tahun</option>
        <option value="tanggalnbencana">Tanggal & Bencana</option>
        <option value="bulannbencana">Bulan & Bencana</option>
        <option value="tahunnbencana">Tahun & Bencana</option>
      </select>&nbsp;&nbsp;&nbsp;
      <input type="submit" name="submit" value="OK">
    </form></center><br>
    <center><a href="input_korban.php"><input type="button" class="btn btn-primary" value="INPUT DATA"></a><br/><br></center>
    <table align="center">
      <thead>
        <tr>
          <th>No</th>
          <th>Jenis Bencana</th>
          <th>Tanggal</th>
          <th>Alamat</th>
          <th>Nama Kepala Keluarga</th>
          <th>Jumlah Anggota Keluarga</th>
          <th>Jumlah Korban Luka Ringan</th>
          <th>Jumlah Korban Luka Berat</th>
          <th>Jumlah Korban Meninggal</th>
          <th>Estimasi Total Kerugian</th>
          <th>Tingkat Kerugian</th>
          <th>Opsi Terhadap Data</th>
        </tr>
    </thead>
    <tbody>
      <?php
      // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
      $query = "SELECT * FROM korban ORDER BY uploaded DESC";
      $result = mysqli_query($koneksi, $query);
      //mengecek apakah ada error ketika menjalankan query
      if(!$result){
        die ("Query Error: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));
      }

      //buat perulangan untuk element tabel dari data mahasiswa
      $no = 1; //variabel untuk membuat nomor urut
      // hasil query akan disimpan dalam variabel $data dalam bentuk array
      // kemudian dicetak dengan perulangan while
      while($row = mysqli_fetch_assoc($result))
      {
      ?>
       <tr>
      
          <td><?php echo $no; ?></td>
          <td><?php echo $row['tipe']; ?></td>
          <td><?php echo $row['hari'].", ".$row['tanggal']." ".$row['bulan']." ".$row['tahun']; ?></td>
          <td><?php echo $row['alamat']; ?></td>
          <td><?php echo "Bpk. ".$row['kepalakeluarga']; ?></td>
          <td><?php echo number_format($row['anggotakeluarga']); echo " jiwa"; ?></td>  
          <td>
            <?php

              $lr = $row['lukaringan'];
              if ($lr != 0) {
                echo $lr." orang";
              }else{
                echo "Nihil";
              }

            ?>
          </td>
           <td>
            <?php

              $lb = $row['lukaberat'];
              if ($lb != 0) {
                echo $lb." orang";
              }else{
                echo "Nihil";
              }

            ?>
          </td>  
           <td>
            <?php

              $m = $row['meninggal'];
              if ($m != 0) {
                echo $m." orang";
              }else{
                echo "Nihil";
              }

            ?>
          </td>
              <td>
            <?php

              $k = $row['kerugian'];
              if ($k != 0) {
                echo "Rp. ".$k;
              }else{
                echo "Nihil";
              }

            ?>
          </td>         
          <td><?= $row['tingkatkerugian']; ?></td> 
          <td> <a href="edit_korban.php?id=<?php echo $row['id']; ?>"><input type="button" class="btn btn-info" value="EDIT DATA"></a><br><br>
              <a href="hapus_korban.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">
              <input type="button" class="btn btn-danger" value="HAPUS DATA">
              </a><br><br>
          </td>
      </tr>
         
      <?php
        $no++; //untuk nomor urut terus bertambah 1
      }
      ?>
    </tbody>
    </table><br><br>
    <table border="1" width="1220px" align="center">
        <tr>
          <td>
            <?php

            $koneksi = mysqli_connect("localhost","root","","bpbd");

            $query = "SELECT SUM(kerugian) FROM korban";    
            $result = mysqli_query($koneksi,$query) or die(mysql_error());

        // Print out result
            while($row = mysqli_fetch_array($result)){    
            echo "<b>Total kerugian keseluruhan = RP. ". number_format($row['SUM(kerugian)']); echo "</b><br /><br>";
            }

            ?>
          </td>
          <td>
              <?php

            $query = "SELECT SUM(lukaringan) FROM korban";    
            $result = mysqli_query($koneksi,$query) or die(mysql_error());

        // Print out result
            while($row = mysqli_fetch_array($result)){    
            echo "<b>Total korban luka ringan = ". number_format($row['SUM(lukaringan)']); echo " orang</b><br /><br>";
           }

              ?>
          </td>
          <td>
            <?php

             $query = "SELECT SUM(lukaberat) FROM korban";    
            $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
            while($row = mysqli_fetch_array($result)){    
                echo "<b>Total korban luka berat = ". number_format($row['SUM(lukaberat)']); echo " orang</b><br /><br>";
              
            }

              ?>
          </td>
          <td>
            <?php

            $query = "SELECT SUM(meninggal) FROM korban";    
            $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
            while($row = mysqli_fetch_array($result)){    
                echo "<b>Total korban meninggal = ". number_format($row['SUM(meninggal)']); echo " orang</b><br /><br>";
                
            }

              ?>
          </td>
        </tr>
        <tr>
          <td>
          <?php

       

        // Make a MySQL Connection
            $query = "SELECT tipe, SUM(kerugian) FROM korban GROUP BY tipe";    
            $result = mysqli_query($koneksi,$query) or die(mysql_error());

        // Print out result
            while($row = mysqli_fetch_array($result)){    
            echo "Total kerugian karena ". $row['tipe']. " = RP. ". number_format($row['SUM(kerugian)']); echo "<br /><b><hr></b><br>";
            }

          ?>
        </td>
        <td>
          <?php

            

        // Make a MySQL Connection
            $query = "SELECT tipe, SUM(lukaringan) FROM korban GROUP BY tipe";    
            $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
            while($row = mysqli_fetch_array($result)){    
                echo "Karena ". $row['tipe']. " = ". number_format($row['SUM(lukaringan)']); echo " orang<br /><b><hr></b><br>";
            }

          ?>
        </td>
        <td>
          <?php

         

            // Make a MySQL Connection
            $query = "SELECT tipe, SUM(lukaberat) FROM korban GROUP BY tipe";    
            $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
            while($row = mysqli_fetch_array($result)){    
                echo "Karena ". $row['tipe']. " = ". number_format($row['SUM(lukaberat)']); echo " orang<br /><b><hr></b><br>";
            }

          ?>
        </td>
        <td>
          <?php

          

            // Make a MySQL Connection
            $query = "SELECT tipe, SUM(meninggal) FROM korban GROUP BY tipe";    
            $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
            while($row = mysqli_fetch_array($result)){    
                echo "Karena ". $row['tipe']. " = ". number_format($row['SUM(meninggal)']); echo " orang<br /><b><hr></b><br>";
            }

          ?>
        </td>
        </tr>
      </table><br><br>
  </body>
</html>