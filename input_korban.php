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
    <title>Entri Data Korban Bencana</title>
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
    .button1 {
          background-color: lime;
          color: black;
          padding: 10px;
          text-decoration: none;
          font-size: 15px;
          font-style: bold;
          border: 0px;
          margin-top: 20px;
    }
        .button2 {
          background-color: yellow;
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
      background: silver;
    }
    </style>
  </head>
  <body>
    <table bgcolor="navy" align="center">
      <td><h2>FORM ENTRI KORBAN BENCANA OLEH ADMINISTRATOR</h2></td>
    </table>
      <center>
        
      <center>
      <form method="POST" action="" enctype="multipart/form-data" >
      <section class="base">
       <div>
          <label>Tipe / Jenis Bencana</label>
             <select name="tipe">

            <option value="Gempa Bumi">Gempa Bumi</option>
            <option value="Gunung Meletus">Gunung Meletus / Erupsi Vulkanik</option>
            <option value="Tsunami">Tsunami</option>
            <option value="Tanah Longsor">Tanah Longsor</option>
            <option value="Tanah Gerak">Tanah Gerak</option>
            <option value="Banjir">Banjir</option>
            <option value="Banjir Bandang">Banjir Bandang</option>
            <option value="Kekeringan">Kekeringan</option>
            <option value="Kebakaran Hutan / Lahan">Kebakaran Hutan / Lahan (Persawahan / Perkebunan)</option>
            <option value="Angin Topan">Angin Topan</option>
            <option value="Angin Hujan">Angin Hujan</option>
            <option value="Gelombang Pasang / Abrasi">Gelombang Pasang / Abrasi</option>
            <option value="Kebakaran Perumahan & Tempat Tinggal Warga">Kebakaran Perumahan & Tempat Tinggal Warga</option>
            
          </select>
        </div>
       <div>
          <label>Hari Terjadinya Bencana Alam Tersebut</label>
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
            <label>Tanggal Terjadinya Bencana Alam Tersebut</label>
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
            <label>Bulan Terjadinya Bencana Alam Tersebut</label>
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
          <label>Alamat Kejadian</label>
         <textarea cols="78" rows="5" name="alamat" required="" placeholder="tuliskan alamatnya secara lengkap....."></textarea>
        </div>
        <div>
          <label>Nama Kepala Keluarga</label>
          <input type="text" name="kepalakeluarga" required="" placeholder="tuliskan nama keluarga..." />
        </div>
        <div>
          <label>Jumlah Anggota Keluarga</label>
          <input type="number" name="anggotakeluarga" min="1" required="" placeholder="tuliskan jumlah anggota keluarga (angkanya saja)....." />
        </div>
        <div>
          <label>Jumlah Korban Luka Ringan Dalam Keluarga Tersebut</label>
          <input type="number" name="lukaringan" min="0" required="" placeholder="tulis angkanya saja, tulis 0 jika tidak ada korban luka ringan....." />
        </div>
       <div>
          <label>Jumlah Korban Luka Berat Dalam Keluarga Tersebut</label>
          <input type="number" name="lukaberat" min="0" required="" placeholder="tulis angkanya saja, tulis 0 jika tidak ada korban luka berat....." />
        </div>
       <div>
          <label>Jumlah Korban Meninggal  Dalam Keluarga Tersebut</label>
          <input type="number" name="meninggal" min="0" required="" placeholder="tulis angkanya saja, tulis 0 jika tidak ada korban luka meninggal....." />
        </div>
        <div>
          <label>Total Kerugian</label>
          <input type="number" name="kerugian" min="0" required="" placeholder="tulis angkanya saja, tulis 0 jika tidak ada kerugian....." />
        </div>
        <div>
          <label>Tingkat Kerugian Akibat Beencana Tersebut</label>
         <select name="tingkatkerugian">
            <option value="Ringan">Ringan</option>
            <option value="Sedang">Sedang</option>
            <option value="Berat">Berat</option>
            <option value="Tidak Ada">Tidak Ada</option>
          </select>
        </div><br>
        
        <div>
         <button type="submit" name="entry" class="button1">ENTRY DATA</button>
        </div>
        </section>
      </form>
  </body>
</html>

<?php


  if (isset($_POST['entry'])) {

  // membuat variabel untuk menampung data dari form
  $id = rand(1,999);
  $tipe = $_POST['tipe'];
  $hari = $_POST['hari'];
  $tanggal = $_POST['tanggal'];
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
  date_default_timezone_set('Asia/Jakarta');
  $uploaded = date("Y-m-d H:i:s");

  $query = "INSERT INTO korban (id, tipe, hari, tanggal, bulan, tahun, alamat, kepalakeluarga, anggotakeluarga, lukaringan, lukaberat, meninggal, kerugian, tingkatkerugian, uploaded) VALUES ('$id', '$tipe', '$hari', '$tanggal', '$bulan', '$tahun', '$alamat', '$kepalakeluarga', '$anggotakeluarga', '$lukaringan', '$lukaberat', '$meninggal', '$kerugian', '$tingkatkerugian', '$uploaded')";

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
                    echo "<script>alert('Data berhasil ditambah');window.location='tampil_korban.php';</script>";
                  }
      }

?>






