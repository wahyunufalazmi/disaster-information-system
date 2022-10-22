 <?php
  // memanggil file koneksi.php untuk membuat koneksi
  include 'koneksi.php';
  
    session_start();
  if($_SESSION['status']!="login"){
    header("location:login.php?pesan=belum_login");
  }


  // mengecek apakah di url ada nilai GET id
  if (isset($_GET['id'])) {
    // ambil nilai id dari url dan disimpan dalam variabel $id
    $id = ($_GET["id"]);

    // menampilkan data dari database yang mempunyai id=$id
    $query = "SELECT * FROM bencana WHERE id='$id'";
    $result = mysqli_query($koneksi, $query);
    // jika data gagal diambil maka akan tampil error berikut
    if(!$result){
      die ("Query Error: ".mysqli_errno($koneksi).
         " - ".mysqli_error($koneksi));
    }
    // mengambil data dari database
    $data = mysqli_fetch_assoc($result);
      // apabila data tidak ada pada database maka akan dijalankan perintah ini
       if (!count($data)) {
          echo "<script>alert('Data tidak ditemukan pada database');window.location='tampil_bencana.php';</script>";
       }
  } else {
    // apabila tidak ada data GET id pada akan di redirect ke index.php
    echo "<script>alert('Masukkan data id');window.location='tampil_bencana.php';</script>";
  }         
  ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Edit Data Bencana</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.3/jquery.min.js"></script>
    <style type="text/css">

      body{
      background-image: url('images/bghome.jpeg');
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment:fixed;
    }

      * {
        font-family: "Trebuchet MS";
      }
      h2 {
        text-transform: uppercase;
        color: white;
      }
    button {
          background-color: orange;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 15px;
          border: 0px;
          margin-top: 20px;
    }
    label {
      margin-top: 20px;
      float: left;
      text-align: left;
      width: 100%;
      color: white;
    }
    input {
      padding: 6px;
      width: 100%;
      box-sizing: border-box;
      background: #f8f8f8;
      border: 2px solid #ccc;
      outline-color: salmon;
    }
    div {
      width: 100%;
      height: auto;
    }
    .base {
      width: 600px;
      height: auto;
      padding: 20px;
      margin-left: auto;
      margin-right: auto;
      background: grey;
    }
    </style>
  </head>
  <body>
    <table bgcolor="maroon" align="center">
      <td><h2>Edit Data Bencana <?php echo $data['tipe']; ?> Tanggal <?php echo $data['tanggal']; ?> <?php echo $data['bulan']; ?> <?php echo $data['tahun']; ?> Di Desa <?php echo $data['desa']; ?></h2></td>
    </table>
      <center>
        
      <center>
      <form method="POST" action="" enctype="multipart/form-data" >
      <section class="base">
        <!-- menampung nilai id produk yang akan di edit -->
        <input name="id" value="<?php echo $data['id']; ?>"  hidden />
        <div>
          <label>Hari</label>
           <input type="text" required="" name="hari" value="<?php echo $data['hari']; ?>" />
        </div>
        <div>
          <label>Tanggal</label>
           <input type="text" name="tanggal" required="" value="<?php echo $data['tanggal']; ?>" />
        </div>
           <div>
          <label>Bulan</label>
           <input type="text" name="bulan" required="" value="<?php echo $data['bulan']; ?>" />
        </div>
           <div>
          <label>Tahun</label>
           <input type="text" name="tahun" required="" value="<?php echo $data['tahun']; ?>" />
        </div>
        <div>
          <label>Dukuh</label>
           <input type="text" name="dukuh" required="" value="<?php echo $data['dukuh']; ?>" />
        </div>
        <div>
          <label>Desa</label>
           <input type="text" name="desa" required="" value="<?php echo $data['desa']; ?>" />
        </div>
        <div>
          <label>Kecamatan</label>
           <input type="text" name="kecamatan" required="" value="<?php echo $data['kecamatan']; ?>" />
        </div>
        <div>
          <label>Tanggal Penetapan Status Tanggap Darurat</label>
           <input type="text" name="tanggalpenetapan" required="" value="<?php echo $data['tanggalpenetapan']; ?>" />
        </div>
        <div>
          <label>Masa Tanggap</label>
           <input type="text" name="masatanggap" required="" value="<?php echo $data['masatanggap']; ?>" />
        </div>
        <div>
          <label>Jumlah KK Terdampak</label>
           <input type="text" name="kk" required="" value="<?php echo $data['kk']; ?>" />
        </div>
        <div>
          <label>Jumlah Korban Hilang / Menninggal</label>
           <input type="text" name="korbanhilang" required="" value="<?php echo $data['korbanhilang']; ?>" />
        </div>
        <div>
          <label>Jumlah Korban Luka Luka</label>
           <input type="text" name="korbanluka" required="" value="<?php echo $data['korbanluka']; ?>" />
        </div>
        <div>
          <label>Jumlah Korban Mengungsi</label>
           <input type="text" name="korbanmengungsi" required="" value="<?php echo $data['korbanmengungsi']; ?>" />
        </div>
        <div>
          <label>Jumlah Rumah Kerusakan Ringan</label>
           <input type="text" name="rusakringan" required="" value="<?php echo $data['rusakringan']; ?>" />
        </div>
        <div>
          <label>Jumlah Rumah Kerusakan Sedang</label>
           <input type="text" name="rusaksedang" required="" value="<?php echo $data['rusaksedang']; ?>" />
        </div>
        <div>
          <label>Jumlah Rumah Kerusakan Berat</label>
           <input type="text" name="rusakberat" required="" value="<?php echo $data['rusakberat']; ?>" />
        </div>
        <div>
          <label>Kerugian</label>
           <input type="text" name="kerugian" required="" value="<?php echo $data['kerugian']; ?>" />
        </div>
        <div>
          <label>Deskripsi</label>
           <input type="text" id="deskripsi" name="deskripsi" required=""value="<?php echo $data['deskripsi']; ?>" />
        </div>
        <div>
          <label>Dokumentasi</label>
          <img src="imguploaded/<?php echo $data['gambar']; ?>" style="width: 120px;float: left;margin-bottom: 5px;">
          <input type="file" name="gambar" />
          <i style="float: left;font-size: 15px;color: yellow">Abaikan jika tidak merubah foto bencana</i>
        </div>
        <div>
         <button type="submit" name="update">UPDATE DATA</button>
        </div>
        </section>
      </form>
  </body>
</html>

<?php

  if (isset($_POST['update'])) {
     $id = $_POST['id'];
  $hari = $_POST['hari'];
  $tanggal = $_POST['tanggal'];
  $bulan = $_POST['bulan'];
  $tahun = $_POST['tahun'];
  $dukuh = $_POST['dukuh'];
  $desa = $_POST['desa'];
  $kecamatan = $_POST['kecamatan'];
  $tanggalpenetapan = $_POST['tanggalpenetapan'];
  $masatanggap = $_POST['masatanggap'];
  $kk = $_POST['kk'];
  $korbanhilang = $_POST['korbanhilang'];
  $korbanluka = $_POST['korbanluka'];
  $korbanmengungsi = $_POST['korbanmengungsi'];
  $rusakringan = $_POST['rusakringan'];
  $rusaksedang = $_POST['rusaksedang'];
  $rusakberat = $_POST['rusakberat'];
  $kerugian = $_POST['kerugian'];
  $deskripsi = $_POST['deskripsi'];
  $gambar = $_FILES['gambar']['name'];
  //cek dulu jika merubah gambar produk jalankan coding ini
  if($gambar != "") {
    $ekstensi_diperbolehkan = array('png','jpg', 'jpeg', 'webm'); //ekstensi file gambar yang bisa diupload 
    $x = explode('.', $gambar); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['gambar']['tmp_name'];   
    $angka_acak     = rand(1,999);
    $nama_gambar_baru = $angka_acak.'-'.$gambar; //menggabungkan angka acak dengan nama file sebenarnya
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {
                  move_uploaded_file($file_tmp, 'imguploaded/'.$nama_gambar_baru); //memindah file gambar ke folder gambar
                      
                    // jalankan query UPDATE berdasarkan ID yang produknya kita edit
                   $query  = "UPDATE bencana SET hari = '$hari', tanggal = '$tanggal', bulan = '$bulan', tahun = '$tahun', dukuh = '$dukuh', desa = '$desa', kecamatan = '$kecamatan', tanggalpenetapan = '$tanggalpenetapan', masatanggap = '$masatanggap', kk = '$kk', korbanhilang = '$korbanhilang', korbanluka = '$korbanluka', korbanmengungsi = '$korbanmengungsi', rusakringan = '$rusakringan', rusaksedang = '$rusaksedang', rusakberat = '$rusakberat', kerugian = '$kerugian', deskripsi = '$deskripsi', gambar = '$nama_gambar_baru'";
                    $query .= "WHERE id = '$id'";
                    $result = mysqli_query($koneksi, $query);
                    // periska query apakah ada error
                    if(!$result){
                        die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                             " - ".mysqli_error($koneksi));
                    } else {
                      //tampil alert dan akan redirect ke halaman index.php
                      //silahkan ganti index.php sesuai halaman yang akan dituju
                      echo "<script>alert('Data berhasil diubah.');window.location='tampil_bencana.php';</script>";
                    }
              } else {     
               //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                  echo "<script>alert('Ekstensi gambar yang boleh hanya jpg, png, jpeg, dan webm.');window.location='input_bencana.php';</script>";
              }
    } else {
      // jalankan query UPDATE berdasarkan ID yang produknya kita edit
    $query  = "UPDATE bencana SET hari = '$hari', tanggal = '$tanggal', bulan = '$bulan', tahun = '$tahun', dukuh = '$dukuh', desa = '$desa', kecamatan = '$kecamatan', tanggalpenetapan = '$tanggalpenetapan', masatanggap = '$masatanggap', kk = '$kk', korbanhilang = '$korbanhilang', korbanluka = '$korbanluka', korbanmengungsi = '$korbanmengungsi', rusakringan = '$rusakringan', rusaksedang = '$rusaksedang', rusakberat = '$rusakberat', kerugian = '$kerugian', deskripsi = '$deskripsi'";
                    $query .= "WHERE id = '$id'";
      $result = mysqli_query($koneksi, $query);
      // periska query apakah ada error
      if(!$result){
            die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                             " - ".mysqli_error($koneksi));
      } else {
        //tampil alert dan akan redirect ke halaman index.php
        //silahkan ganti index.php sesuai halaman yang akan dituju
          echo "<script>alert('Data berhasil diubah.');window.location='tampil_bencana.php';</script>";
      }
    }
  }

?>

