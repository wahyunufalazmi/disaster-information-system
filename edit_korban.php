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
    $query = "SELECT * FROM korban WHERE id='$id'";
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
    <title>Edit Data Korban Bencana</title>
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
      <td><h2>Edit Data Korban Bencana <?php echo $data['tipe']; ?> Tanggal <?php echo $data['tanggal']; ?> <?php echo $data['bulan']; ?> <?php echo $data['tahun']; ?> Di <?php echo $data['alamat']; ?></h2></td>
    </table>
      <center>
        
      <center>
      <form method="POST" action="" enctype="multipart/form-data" >
      <section class="base">
        <!-- menampung nilai id produk yang akan di edit -->
        <input name="id" value="<?php echo $data['id']; ?>"  hidden />
        <div>
          <label>Tipe</label>
           <input type="text" required="" name="tipe" value="<?php echo $data['tipe']; ?>" />
        </div>
        <div>
          <label>Hari</label>
           <input type="text" name="hari" required="" value="<?php echo $data['hari']; ?>" />
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
          <label>Alamat</label>
           <input type="text" name="alamat" required="" value="<?php echo $data['alamat']; ?>" />
        </div>
        <div>
          <label>Nama Kepala Keluarga</label>
           <input type="text" name="kepalakeluarga" required="" value="<?php echo $data['kepalakeluarga']; ?>" />
        </div>
        <div>
          <label>Jumlah Anggota Keluarga</label>
           <input type="number" min="1" name="anggotakeluarga" required="" value="<?php echo $data['anggotakeluarga']; ?>" />
        </div>
        <div>
          <label>Jumlah Korban Luka Ringan</label>
           <input type="number" min="0" name="lukaringan" required="" value="<?php echo $data['lukaringan']; ?>" />
        </div>
        <div>
          <label>Jumlah Korban Luka Berat</label>
           <input type="number" min="0" name="lukaberat" required="" value="<?php echo $data['lukaberat']; ?>" />
        </div>
        <div>
          <label>Jumlah Korban Meninggal</label>
           <input type="number" min="0" name="meninggal" required="" value="<?php echo $data['meninggal']; ?>" />
        </div>
        <div>
          <label>Estimasi Total Kerugian</label>
           <input type="number" min="0" name="kerugian" required="" value="<?php echo $data['kerugian']; ?>" />
        </div>
        <div>
          <label>Tingkat Kerugian</label>
           <input type="text" name="tingkatkerugian" required="" value="<?php echo $data['tingkatkerugian']; ?>" />
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
    $tipe = $_POST['tipe'];
    $tanggal = $_POST['tanggal'];
    $hari = $_POST['hari'];
    $bulan = $_POST['bulan'];
    $tahun = $_POST['tahun'];
    $alamat = $_POST['alamat'];
    $kepalakeluarga = $_POST['kepalakeluarga'];
    $anggotakeluarga = $_POST['anggotakeluarga'];
    $lukaringan = $_POST['lukaringan'];
    $lukaberat = $_POST['lukaberat'];
    $meninggal = $_POST['meninggal'];
    $kerugian = $_POST['kerugian'];
    $tingkatkerugian = $_POST['tingkatkerugian'];

     $query  = "UPDATE korban SET tipe = '$tipe', tanggal = '$tanggal', hari = '$hari', bulan = '$bulan', tahun = '$tahun', alamat = '$alamat', kepalakeluarga = '$kepalakeluarga', anggotakeluarga = '$anggotakeluarga', lukaringan = '$lukaringan', lukaberat = '$lukaberat', meninggal = '$meninggal', kerugian = '$kerugian', tingkatkerugian = '$tingkatkerugian'";
                    $query .= "WHERE id = '$id'";
                    $result = mysqli_query($koneksi, $query);
                    // periska query apakah ada error
                    if(!$result){
                        die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                             " - ".mysqli_error($koneksi));
                    } else {
                      //tampil alert dan akan redirect ke halaman index.php
                      //silahkan ganti index.php sesuai halaman yang akan dituju
                      echo "<script>alert('Data berhasil diubah.');window.location='tampil_korban.php';</script>";
                    }
  }

?>

