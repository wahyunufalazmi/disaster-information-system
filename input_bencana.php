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
    <title>Entri Data Bencana</title>
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
      <td><h2>FORM ENTRI DATA BERITA BENCANA OLEH ADMINISTRATOR</h2></td>
    </table>
      <center>
        
      <center>
      <form method="POST" action="" enctype="multipart/form-data" >
      <section class="base">
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
          <label>Dukuh</label>
          <input type="text" name="dukuh" required="" placeholder="tuliskan nama dukuh" />
        </div>
        <div>
          <label>Desa</label>
          <input type="text" name="desa" required="" placeholder="tuliskan nama desa" />
        </div>
        <div>
          <label>Kecamatan</label>
          <input type="text" name="kecamatan" required="" placeholder="tuliskan nama kecamatan" />
        </div>
        <div>
          <label>Tanggal Penetapan Status Tanggap Darurat / Surat Pernyataan Darurat</label>
          <input type="text" name="tanggalpenetapan" required="" placeholder="contoh format penulisan tanggal : 02/06/2019" />
        </div>
        <div>
          <label>Masa Tanggap Darurat (Dalam Hari)</label>
          <input type="text" name="masatanggap" required="" placeholder="tuliskan masa tanggap darurat" />
        </div>
        <div>
          <label>Jumlah KK / Keluarga Terdampak</label>
         <input type="number" name="kk" min="0" required="" placeholder="tulis angkanya saja, tulis 0 jika tidak ada" />
        </div>
        <div>
          <label>Jumlah Korban Hilang / Meninggal</label>
         <input type="text" name="korbanhilang" required="" placeholder="tulis angkanya saja, tulis 0 jika tidak ada" />
        </div>
        <div>
          <label>Jumlah Korban Luka Luka</label>
         <input type="text" name="korbanluka" required="" placeholder="tulis angkanya saja, tulis 0 jika tidak ada" />
        </div>
        <div>
          <label>Jumlah Korban Mengungsi</label>
         <input type="text" name="korbanmengungsi" required="" placeholder="tulis angkanya saja, tulis 0 jika tidak ada" />
        </div>
         <div>
          <label>Jumlah Rumah Rusak Ringan</label>
         <input type="text" name="rusakringan" required="" placeholder="tulis angkanya saja, tulis 0 jika tidak ada" />
        </div>
        <div>
          <label>Jumlah Rumah Rusak Sedang</label>
         <input type="text" name="rusaksedang" required="" placeholder="tulis angkanya saja, tulis 0 jika tidak ada" />
        </div>
         <div>
          <label>Jumlah Rumah Rusak Berat</label>
         <input type="text" name="rusakberat" required="" placeholder="tulis angkanya saja, tulis 0 jika tidak ada" />
        </div>
    
         <div>
          <label>Estimasi Kerugian</label>
         <input type="text" name="kerugian" required="" placeholder="tulis angkanya saja, tulis 0 jika tidak ada" />
        </div>
          <div>
          <label>Deskripsi Kejadian</label>
         <textarea cols="78" rows="5" name="deskripsi" required="" placeholder="deskripsikan kejadian tersebut (kronologi, reaksi masyarakat setempat, proses evakuasi, dll)....."></textarea>
        </div>
        <div>
          <label>Foto Yang Berkaitan Dengan Kejadian</label>
         <input type="file" name="gambar" required="" />
        </div>
        <div>
         <button type="submit" name="inputsaja" class="button1">Input Saja</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <button type="submit" name="inputpublikasikan" class="button2">Input Dan Publikasikan</button>
        </div>
        </section>
      </form>
  </body>
</html>

<?php

    if (isset($_POST['inputpublikasikan'])) {
    $id = rand(1,999);
    $hari = $_POST['hari'];
    $tanggal = $_POST['tanggal'];
    $bulan = $_POST['bulan'];
    $tahun = $_POST['tahun'];
    $tipe = $_POST['tipe'];
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
                    $query = "INSERT INTO bencana (id, hari, tanggal, bulan, tahun, tipe, dukuh, desa, kecamatan, tanggalpenetapan, masatanggap, kk, korbanhilang, korbanluka, korbanmengungsi, rusakringan, rusaksedang, rusakberat, kerugian, deskripsi, gambar, uploaded) VALUES ('$id', '$hari', '$tanggal', '$bulan', '$tahun', '$tipe', '$dukuh', '$desa', '$kecamatan', '$tanggalpenetapan', '$masatanggap', '$kk', '$korbanhilang', '$korbanluka', '$korbanmengungsi', '$rusakringan', '$rusaksedang', '$rusakberat', '$kerugian', '$deskripsi', '$nama_gambar_baru', '$uploaded')";

                    $query1 = "INSERT INTO berita (id, hari, tanggal, bulan, tahun, tipe, dukuh, desa, kecamatan, kk, korbanhilang, korbanluka, korbanmengungsi, rusakringan, rusaksedang, rusakberat, kerugian, deskripsi, gambar, uploaded) VALUES ('$id', '$hari', '$tanggal', '$bulan', '$tahun', '$tipe', '$dukuh', '$desa', '$kecamatan', '$kk', '$korbanhilang', '$korbanluka', '$korbanmengungsi', '$rusakringan', '$rusaksedang', '$rusakberat', '$kerugian', '$deskripsi', '$nama_gambar_baru', '$uploaded')";

                    $result = mysqli_query($koneksi, $query);
                    $result1 = mysqli_query($koneksi, $query1);

                    // periska query apakah ada error
                    if(!$result && !$result1)
                    {
                        die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                             " - ".mysqli_error($koneksi));
                    }
                   else 
                   {
                      //tampil alert dan akan redirect ke halaman index.php
                      //silahkan ganti index.php sesuai halaman yang akan dituju
                      echo "<script>alert('Data berhasil ditambah dan dipublikasikan');window.location='tampil_berita_bencana.php';</script>";
                    }

          } 
          else 
          {     
               //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                  echo "<script>alert('Ekstensi gambar yang boleh hanya jpg, png, jpeg, webm');window.location='input_bencana.php';</script>";
          }
  } 
  else {
     echo "<script>alert('Tolong pilih gambar untuk diupload terlebih dahulu');window.location='input_bencana.php';</script>";
   }
  
  }


  if (isset($_POST['inputsaja'])) {

    include 'koneksi.php';

  // membuat variabel untuk menampung data dari form
  $id = rand(1,999);
  $hari = $_POST['hari'];
  $tanggal = $_POST['tanggal'];
  $bulan = $_POST['bulan'];
  $tahun = $_POST['tahun'];
  $tipe = $_POST['tipe'];
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
                  $query = "INSERT INTO bencana (id, hari, tanggal, bulan, tahun, tipe, dukuh, desa, kecamatan, tanggalpenetapan, masatanggap, kk, korbanhilang, korbanluka, korbanmengungsi, rusakringan, rusaksedang, rusakberat, kerugian, deskripsi, gambar, uploaded) VALUES ('$id', '$hari', '$tanggal', '$bulan', '$tahun', '$tipe', '$dukuh', '$desa', '$kecamatan', '$tanggalpenetapan', '$masatanggap', '$kk', '$korbanhilang', '$korbanluka', '$korbanmengungsi', '$rusakringan', '$rusaksedang', '$rusakberat', '$kerugian', '$deskripsi', '$nama_gambar_baru', '$uploaded')";
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
                    echo "<script>alert('Data berhasil ditambah');window.location='tampil_bencana.php';</script>";
                  }

        } 
        else 
        {     
             //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                echo "<script>alert('Ekstensi gambar yang boleh hanya jpg, png, jpeg, webm');window.location='input_bencana.php';</script>";
        }
} 
else {
   echo "<script>alert('Tolong pilih gambar untuk diupload terlebih dahulu');window.location='input_bencana.php';</script>";
}
  }

?>






