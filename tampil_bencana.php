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
    <title>List Data Seluruh Bencana</title>
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
        background-color: red;
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
    <center><h1>Data Seluruh Kejadian Bencana</h1></center>
    <h5>(*Geser halaman web ke kanan untuk melihat keseluruhan data dan scroll kebawah untuk melihat data lainnya)</h5><br>
    <center><a href="input_bencana.php"><input type="button" class="btn btn-primary" value="INPUT DATA"></a><br/><br>
    <form action="tampil_bencana_perbulan.php" method="post">
    Tampil Berdasarkan Bulan &nbsp;&nbsp;&nbsp; 
    <select name="bulan">
              <option value="Januari">Januari</option>
              <option value="Februari">Februari</option>
              <option value="Maret">Maret</option>
              <option value="April">April</option>
              <option value="Mei">Mei</option>
              <option value="Juni">Juni</option>
              <option value="Juli">Juli</option>
              <option value="Agustus">Agustus</option>
              <option value="September">September</option>
              <option value="Oktober">Oktober</option>
              <option value="November">November</option>
              <option value="Desember">Desember</option>
            </select>&nbsp;&nbsp;&nbsp;
    <input type="text" name="tahun" placeholder="Tuliskan tahun.....">&nbsp;&nbsp;&nbsp;
    <input type="text" name="penanggungjawab" placeholder="Nama penanggungjawab">&nbsp;&nbsp;&nbsp;
    <input type="text" name="nip" placeholder="NIP penanggungjawab">&nbsp;&nbsp;&nbsp;
    <button name="submit">TAMPILKAN</button></form><br>
    <b><h5>-------------------------Atau-------------------------</h5></b><br>
    <form action="tampil_bencana_pertahun.php" method="post">
    Tampil Berdasarkan Tahun &nbsp;&nbsp;&nbsp; <input type="text" name="tahun" placeholder="Tuliskan tahun.....">&nbsp;&nbsp;&nbsp;
    <input type="text" name="penanggungjawab" placeholder="Nama penanggungjawab">&nbsp;&nbsp;&nbsp;
    <input type="text" name="nip" placeholder="NIP penanggungjawab">&nbsp;&nbsp;&nbsp;
    <button name="submit">TAMPILKAN</button>
    </form>
    </center><br><br>
    <div style="border: 1px solid rgb(204, 204, 204); padding: 5px; overflow: auto; width: 100%; height: 700px;background-color: rgb(255, 255, 255);">
    <table >
      <thead>
        <tr>
          <th>No</th>
          <th>Hari</th>
          <th>Tanggal</th>
          <th>Jenis Bencana</th>
          <th>Dukuh</th>
          <th>Desa</th>
          <th>Kecamatan</th>
          <th>Tanggal Penetapan Status Tanggap Darurat</th>
          <th>Masa Tanggap Darurat</th>
          <th>Jumlah KK Terdampak</th>
          <th>Jumlah Korban Hilang / Meninggal</th>
          <th>Jumlah Korban Luka Luka</th>
          <th>Jumlah Korban Mengungsi</th>
          <th>Jumlah Rumah Kerusakan Ringan</th>
          <th>Jumlah Rumah Kerusakan Sedang</th>
          <th>Jumlah Rumah Kerusakan Berat</th>
          <th>Estimasi Kerugian</th>
          <th>Deskripsi</th>
          <th>Dokumentasi</th>
          <th>Opsi Terhadap Data</th>
        </tr>
    </thead>
    <tbody>
      <?php
      // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
      $query = "SELECT * FROM bencana ORDER BY uploaded DESC";
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
          <td><?php echo $row['hari']; ?></td>
          <td><?php echo $row['tanggal']; ?>  <?php echo $row['bulan']; ?> <?php echo $row['tahun']; ?></td>
          <td><?php echo $row['tipe']; ?></td>
          <td><?php echo $row['dukuh']; ?></td>
          <td><?php echo $row['desa']; ?></td>
          <td><?php echo $row['kecamatan']; ?></td>
          <td><?php echo $row['tanggalpenetapan']; ?></td>
          <td><?php echo $row['masatanggap']; ?></td>
          <td><?php $kel = $row['kk'];
                if($kel!=0){
                  echo number_format($row['kk']);
                }
                else{
                  echo "Nihil";
                }
              ?>
          </td>
          <td><?php $kh = $row['korbanhilang'];
                if($kh!=0){
                  echo number_format($row['korbanhilang']);
                }
                else{
                  echo "Nihil";
                }
              ?>
          </td>
          <td><?php $kl = $row['korbanluka'];
                if($kl!=0){
                  echo number_format($row['korbanluka']);
                }
                else{
                  echo "Nihil";
                }
              ?>
          </td>
          <td><?php $km = $row['korbanmengungsi'];
                if($km!=0){
                  echo number_format($row['korbanmengungsi']);
                }
                else{
                  echo "Nihil";
                }
              ?>
          </td>
           <td><?php $rr = $row['rusakringan'];
                if($rr!=0){
                  echo number_format($row['rusakringan']);
                }
                else{
                  echo "Nihil";
                }
              ?>
          </td>
            <td><?php $rs = $row['rusaksedang'];
                if($rs!=0){
                  echo number_format($row['rusaksedang']);
                }
                else{
                  echo "Nihil";
                }
              ?>
          </td>
            <td><?php $rb = $row['rusakberat'];
                if($rb!=0){
                  echo number_format($row['rusakberat']);
                }
                else{
                  echo "Nihil";
                }
              ?>
          </td>
          <td><?php 
          $ker = $row['kerugian'];
          if ($ker != 0) {
            echo "Rp. ";
            echo number_format($row['kerugian']);
          }
          else{
            echo "Nihil";
          }
           ?></td>
          <td><?php echo $row['deskripsi']; ?></td>        
          <td><img src="imguploaded/<?php echo $row['gambar']; ?>" style="width: 150px; height: 120px;"></td>
          <td> <a href="edit_bencana.php?id=<?php echo $row['id']; ?>"><input type="button" class="btn btn-info" value="EDIT DATA"></a><br><br>
              <a href="hapus_bencana.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">
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
  </div>
  </body>
</html>