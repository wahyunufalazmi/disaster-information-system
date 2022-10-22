<!DOCTYPE html>
<html>
<head>
  <title>Berita Kegiatan / Acara</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  
</head>

<body>
  <nav class="navbar navbar-dark bg-primary">
  <!-- Navbar content --><a class="navbar-brand" href="#"><b><font face="sans-serif" size="6" color="cyan">BPBD Boyolali</font>&nbsp &nbsp &nbsp</b>
  <font face="verdana" color="white"><i>"Terwujudnya Penanggulangan Bencana Secara Cepat, Tepat, Efektif dan Efisien" </i></font></a><br>
</nav><br>
  <center>
    <h1><b>List Berita Acara</b></h1><hr>
    <?php
      include 'koneksi.php';
      $query = "SELECT * FROM acara ORDER BY uploaded DESC";
          $result = mysqli_query($koneksi, $query);
          $no = 1;
          while($row = mysqli_fetch_assoc($result))
          {

    ?>
    <style type="text/css">
      table{
        margin-right: 80px;
        margin-left: 80px;
        margin-top: 50px;
        margin-bottom: 50px;
      }
      td{
        text-align: justify;
        padding : 20px;
      }
      h3{
        text-align: center;
      }
    
    </style>
    <table align="center">
      <tr>
        <td><h3><?php echo $no; ?>.) Acara <?php echo $row['namaacara']; ?> Hari <?php echo $row['hari']; ?> Tanggal <?php echo $row['tanggal']; ?> <?php echo $row['bulan']; ?> <?php echo $row['tahun']; ?> di <?php echo $row['tempat']; ?></h3></td>
      </tr>
      <tr>
        <td>
          <center><img src="imguploaded/<?php echo $row['gambar']; ?>" style="width: 800px; height: 400px;"></center>
        </td>
      </tr>
      <tr>
        <td><b>Deskripsi Acara :</b><br><br>
          <?php echo $row['deskripsi']; ?>
        </td>
      </tr>
      <tr>
        <td>
           <b>Diselanggarakan Oleh :</b><br><br>
           <?php echo $row['penyelenggara']; ?>
        </td>
      </tr>
      <tr>
        <td>
          <hr>
        </td>
      </tr>
    <?php
        $no++; //untuk nomor urut terus bertambah 1
        }
      ?>
    </table>
  </center>
</body>
</html>