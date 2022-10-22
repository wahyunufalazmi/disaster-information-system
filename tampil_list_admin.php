<!DOCTYPE html>
<html>
  <head>
    <title>List Administrator</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
  </head>
  <body>
  <nav class="navbar navbar-dark bg-primary">
  <!-- Navbar content --><a class="navbar-brand" href="#"><b><font face="sans-serif" size="6" color="cyan">BPBD Boyolali</font>&nbsp &nbsp &nbsp</b>
  <font face="verdana" color="white"><i>"Terwujudnya Penanggulangan Bencana Secara Cepat, Tepat, Efektif dan Efisien" </i></font></a><br>
</nav><br>
    <center><h1>List Admin Yang Dapat Dihubungi</h1><br>
    <table class="table table-striped ">
      <thead class="thead-dark">
        <tr>
          <th>No</th>
          <th>Nama Admin</th>
          <th>Bidang / Divisi</th>
          <th>Tugas Bidang</th>
          <th>Jabatan</th>
          <th>Kontak</th>
          <th>Email</th>
     
        </tr>
    </thead>
    <tbody>
      <?php
      include 'koneksi.php';
      // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
      $query = "SELECT * FROM admin ORDER BY bidang ASC";
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
          <td><?php echo $row['nama']; ?></td>
          <td><?php echo $row['bidang']; ?></td>
          <td>
            <?php

              $bidang = $row['bidang'];
              if ($bidang == "Bidang 1") {
                echo "Pencegahan & Kesiapsiagaan";
              }elseif ($bidang == "Bidang 2") {
                echo "Kedaruratan & Logistik";
              }elseif ($bidang == "Bidang 3") {
                echo "Rehabilitasi & Rekonstruksi";
              }elseif ($bidang == "Sekretariat") {
                echo "Sekretariat";
              }else if($bidang == "Pusdalops"){
                echo "Pengendalian Operasi";
              }else{
                  echo "Pengembangan Sistem Informasi";
              }

            ?>
          </td>
          <td><?php echo $row['jabatan']; ?></td>
          <td><?php echo $row['nomor']; ?></td>
          <td><?php echo $row['email']; ?></td>
      </tr>
         
      <?php
        $no++; //untuk nomor urut terus bertambah 1
      }
      ?>
    </tbody>
    </table>
  </body>
</html>