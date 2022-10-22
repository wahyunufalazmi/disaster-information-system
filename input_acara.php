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
    <title>Entri Berita Acara</title>
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
        color: black;
      }
    button {
          background-color: chartreuse;
          color: black;
          padding: 10px;
          text-decoration: none;
          font-size: 15px;
          font-style: bold;
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
      background: navy;
    }
    </style>
  </head>
  <body>
    <table bgcolor="silver" align="center">
      <td><h2>FORM ENTRI BERITA ACARA OLEH ADMINISTRATOR</h2></td>
    </table>
      <center>
      <form method="POST" action="" enctype="multipart/form-data" >
      <section class="base">
        <div>
          <label>Nama Acara</label>
         <input type="text" name="namaacara" required="" placeholder="tulis nama acara....." />
        </div>
        <div>
          <label>Hari Penyelenggaraan Acara Terebut</label>
          <select name="hari">
            <option value="Senin">Senin</option>
            <option value="Selasa">Selasa</option>
            <option value="Rabu">Rabu</option>
            <option value="Kamis">Kamis</option>
            <option value="Jum'at">Jum'at</option>
            <option value="Sabtu">Sabtu</option>
            <option value="Minggu">Minggu</option>
          </select>
        </div>
        <div>
            <label>Tanggal Penyelenggaraan Acara Tersebut</label>
            <select name="tanggal">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
              <option value="13">13</option>
              <option value="14">14</option>
              <option value="15">15</option>
              <option value="16">16</option>
              <option value="17">17</option>
              <option value="18">18</option>
              <option value="19">19</option>
              <option value="20">20</option>
              <option value="21">21</option>
              <option value="22">22</option>
              <option value="23">23</option>
              <option value="24">24</option>
              <option value="25">25</option>
              <option value="26">26</option>
              <option value="27">27</option>
              <option value="28">28</option>
              <option value="29">29</option>
              <option value="30">30</option>
              <option value="31">31</option>
            </select>
          </div>
          <div>
            <label>Bulan Penyelenggaraan Acara Tersebut</label>
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
            </select>
          </div><br>
          <div>
          <label>Tahun</label>
         <input type="text" name="tahun" required="" placeholder="tulis tahun....." />
        </div>
        <div>
          <label>Tempat Penyelenggaraan</label>
         <textarea cols="77" rows="5" name="tempat" required="" placeholder="tuliskan tempat penyelenggaraan acara tersebut....."></textarea>
        </div>
        <div>
          <label>Deskripsi Acara</label>
         <textarea cols="77" rows="5" name="deskripsi" required="" placeholder="deskripsikan acara tersebut secara detail (latar belakang diselenggarakannya, tujuan diadakannya, jumlah partisipan, dll)....."></textarea>
        </div>
        <div>
          <label>Penyelenggara</label>
         <input type="text" name="penyelenggara" required="" placeholder="tulis siapa penyelenggaranya....." />
        </div>
        <div>
          <label>Dokumentasi Acara</label>
         <input type="file" name="gambar" required="" />
        </div>
        <div>
         <button type="submit" name="publikasikan">PUBLIKASIKAN</button>
        </div>
        </section>
      </form>
  </body>
</html>
  <?php
  include 'koneksi.php';

  if (isset($_POST['publikasikan'])) {
  $id = rand(1,999);
  $namaacara = $_POST['namaacara'];
  $hari = $_POST['hari'];
  $tanggal = $_POST['tanggal'];
  $bulan = $_POST['bulan'];
  $tahun = $_POST['tahun'];
  $tempat = $_POST['tempat'];
  $deskripsi = $_POST['deskripsi'];
  $penyelenggara = $_POST['penyelenggara'];
  $gambar = $_FILES['gambar']['name'];
  date_default_timezone_set('Asia/Jakarta');
   $uploaded = date("Y-m-d H:i:s");


//cek dulu jika ada gambar produk jalankan coding ini
if($gambar != "") {
  $ekstensi_diperbolehkan = array('png','jpg', 'jpeg', 'webm'); //ekstensi file gambar yang bisa diupload 
  $x = explode('.', $gambar); //memisahkan nama file dengan ekstensi yang diupload
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['gambar']['tmp_name'];   
  $angka_acak     = rand(1,999);
  $nama_gambar_baru = $angka_acak.'-'.$gambar; //menggabungkan angka acak dengan nama file sebenarnya
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {     
                move_uploaded_file($file_tmp, 'imguploaded/'.$nama_gambar_baru); //memindah file gambar ke folder gambar
                  // jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
                  $query = "INSERT INTO acara (id, namaacara, hari, tanggal, bulan, tahun, tempat, deskripsi, penyelenggara,  gambar, uploaded) VALUES ('$id', '$namaacara', '$hari', '$tanggal', '$bulan', '$tahun', '$tempat', '$deskripsi', '$penyelenggara', '$nama_gambar_baru', '$uploaded')";
                  $result = mysqli_query($koneksi, $query);
                  // periska query apakah ada error
                  if(!$result)
                  {
                      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
                  }
                 else 
                 {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil ditambah');window.location='tampil_acara.php';</script>";
                  }

        } 
        else 
        {     
             //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                echo "<script>alert('Ekstensi gambar yang boleh hanya jpg, png, jpeg, webm');window.location='input_acara.php';</script>";
        }
} 
else {
   echo "<script>alert('Tolong pilih gambar untuk diupload terlebih dahulu');window.location='input_acara.php';</script>";
}

  }

  // membuat variabel untuk menampung data dari form
  

  ?>
