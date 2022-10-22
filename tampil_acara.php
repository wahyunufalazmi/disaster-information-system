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
    <title>List Data Seluruh Acara</title>
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
   
    </style>
  </head>
  <body>
  <nav class="navbar navbar-dark bg-primary">
  <!-- Navbar content --><a class="navbar-brand" href="#"><b><font face="sans-serif" size="6" color="cyan">BPBD Boyolali</font>&nbsp &nbsp &nbsp</b>
  <font face="verdana" color="white"><i>"Terwujudnya Penanggulangan Bencana Secara Cepat, Tepat, Efektif dan Efisien" </i></font></a><br>
</nav><br>
    <center><h1>Data Seluruh Acara</h1></center>
    <h5>(*Geser halaman web ke kanan untuk melihat keseluruhan data dan scroll kebawah untuk melihat data lainnya)</h5><br>
    <center><a href="input_acara.php"><input type="button" class="btn btn-primary" value="INPUT DATA"></a><br/><br></center>
    <table align="center" class="table table-stripped">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama Acara</th>
          <th>Tanggal</th>
          <th>Tempat Penyelenggaraan</th>
          <th>Deskripsi Acara</th>
          <th>Nama Penyelenggara</th>
          <th>Dokumentasi Acara</th>
          <th>Opsi Terhadap Data</th>
        </tr>
    </thead>
    <tbody>
      <?php
      // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
      $query = "SELECT * FROM acara ORDER BY uploaded DESC";
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
          <td><?php echo $row['namaacara']; ?></td>
          <td><?php echo $row['hari']; ?>, <?php echo $row['tanggal']; ?>  <?php echo $row['bulan']; ?> <?php echo $row['tahun']; ?></td>
          <td><?php echo $row['tempat']; ?></td>
          <td><?php echo $row['deskripsi']; ?></td>
          <td><?php echo $row['penyelenggara']; ?></td>        
          <td><img src="imguploaded/<?php echo $row['gambar']; ?>" style="width: 150px; height: 120px;"></td>
          <td> <a href="edit_acara.php?id=<?php echo $row['id']; ?>"><input type="button" class="btn btn-info" value="EDIT DATA"></a><br><br>
              <a href="hapus_acara.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">
              <input type="button" class="btn btn-danger" value="HAPUS DATA">
              </a><br><br>
          </td>
      </tr>
         
      <?php
        $no++; //untuk nomor urut terus bertambah 1
      }
      ?>
    </tbody>
    </table>
  </body>
</html>