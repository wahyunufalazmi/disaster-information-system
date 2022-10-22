<?php
include 'koneksi.php';

  session_start();
  if($_SESSION['status']!="login"){
    header("location:login.php?pesan=belum_login");
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <title>List Laporan Bencana</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  
  </head>
  <body>

  <nav class="navbar navbar-dark bg-primary">
  <!-- Navbar content --><a class="navbar-brand" href="#"><b><font face="sans-serif" size="6" color="cyan">BPBD Boyolali</font>&nbsp &nbsp &nbsp</b>
  <font face="verdana" color="white"><i>"Terwujudnya Penanggulangan Bencana Secara Cepat, Tepat, Efektif dan Efisien" </i></font></a><br>
</nav><br>

  <center><font face="calibri" color="green"><h2>Data Laporan dan Pengaduan Kejadian Bencana Oleh Warga</h2></font><br>
      
  <table class="table table-striped table-dark ">
        <thead>
          <tr >
             <th scope="col">No</th>
            <th scope="col">Nama Lengkap Pelapor</th>
            <th scope="col">Kontak / No. Telepon Pelapor</th>
            <th scope="col">Usia Pelapor</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Alamat Pelapor</th>
            <th scope="col">Jenis Bencana</th>
            <th scope="col">Deskripsi Bencana</th>
            <th scope="col">Tempat Kejadian Bencana</th>
            <th scope="col">Tanggal Pengaduan</th>
            <th scope="col">Status Laporan</th>
            <th scope="col">Foto Penguat Laporan</th>
            <th scope="col">Tombol</th>
    
          </tr>
        </thead>
        <?php
          $data = mysqli_query($koneksi, "SELECT * FROM laporan ORDER BY tanggal DESC");
          $no = 1;
         while ($array = mysqli_fetch_array($data)) :
        ?>
        <tbody>
          <tr>
          <td><?php echo $no; ?></td>
            <td><?php echo $array['nama'];?></td>
            <td><?php echo $array['kontak'];?></td>
            <td><?php echo number_format($array['usia']);?></td>
            <td><?php echo $array['kelamin']; ?></td>
            <td><?php echo $array['alamat']; ?></td>
            <td><?php echo $array['tipe']; ?></td>
            <td><?php echo $array['deskripsi']; ?></td>
            <td><?php echo $array['tempat']; ?></td>
            <td><?php echo $array['tanggal']; ?></td>
            <td>
              <?php

                  $status = $array['status'];
                  if ($status == 0) {
                    echo "<font color='yellow'><b>Laporan Belum Dibaca</b></font>";
                  }else{
                    echo "<font color='lime'><b>Laporan Sudah Dibaca</b></font>";
                  }

              ?>
            </td>
            <td><img src="imguploaded/<?php echo $array['gambar']; ?>" style="width: 150px; height: 120px;"></td>
             <td> <a href="tandai_dibaca.php?id=<?php echo $array['id']; ?>"><input type="button" class="btn btn-info" value="Tandai Sudah Dibaca"></a><br><br>
                <a href="hapus_laporan.php?id=<?php echo $array['id']; ?>" onclick="return confirm('Anda yakin akan menghapus laporan ini?')">
              <input type="button" class="btn btn-danger" value="Hapus Laporan">
              </a><br><br></td>
         <?php $no++; endwhile; ?>
        </tbody>
      </table ><br>
    </body>
</html>