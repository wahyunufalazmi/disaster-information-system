
<!DOCTYPE html>
<html>
  <head>
    <title>Form Pengaduan Bencana</title>
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
      background: maroon;
    }
    </style>
  </head>
  <body>
    <table bgcolor="silver" align="center">
      <td><h2>FORM PENGADUAN / PELAPORAN BENCANA</h2></td>
    </table>
      <center>
      <form method="POST" action="" enctype="multipart/form-data" >
      <section class="base">
        <div>
          <label>Nama Lengkap</label>
         <input type="text" name="nama" required="" placeholder="tulis nama lengkap anda....." />
        </div>
         <div>
          <label>Kontak Yang Dapat Dihubungi (No. Telp, WA, Line, Telegram)</label>
         <input type="text" name="kontak" required="" placeholder="tulis kontak anda....." />
        </div>
        <div>
          <label>Usia</label>
         <input type="number" min="1" name="usia" required="" placeholder="tulis angkanya saja....." />
        </div>
        <div>
            <label>Jenis Kelamin</label>
            <select name="kelamin">
              <option value="Pria">Pria</option>
              <option value="Wanita">Wanita</option>
            </select>
          </div>
        <div>
          <label>Alamat Lengkap</label>
         <textarea cols="77" rows="5" name="alamat" required="" placeholder="tuliskan tempat penyelenggaraan acara tersebut....."></textarea>
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
          <label>Deskripsi / Kronologi Bencana</label>
         <textarea cols="77" rows="5" name="deskripsi" required="" placeholder="tuliskan deskripsi / kronologi bencana tersebut menurut anda....."></textarea>
        </div>
        <div>
          <label>Tempat Terjadinya Bencana</label>
         <textarea cols="77" rows="5" name="tempat" required="" placeholder="tuliskan secara detail tempat terjadinya bencana tersebut tersebut....."></textarea>
        </div>
        <div>
          <label>Foto Bukti Penguat Laporan</label>
         <input type="file" name="gambar" required="" />
        </div>
        <div>
         <button type="submit" name="laporkan">LAPORKAN</button>
        </div>
        </section>
      </form>
  </body>
</html>
  <?php
  include 'koneksi.php';

  if (isset($_POST['laporkan'])) {
  $id = rand(1,999);
  $nama = $_POST['nama'];
  $kontak = $_POST['kontak'];
  $usia = $_POST['usia'];
  $kelamin = $_POST['kelamin'];
  $tipe = $_POST['tipe'];
  $deskripsi = $_POST['deskripsi'];
  $tempat = $_POST['tempat'];
  date_default_timezone_set('Asia/Jakarta');
  $tanggal = date("Y-m-d H:i:s");
  $status = 0;
  $gambar = $_FILES['gambar']['name'];



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
                  $query = "INSERT INTO laporan (id, nama, kontak, usia, kelamin, tipe, deskripsi, tempat, tanggal, status, gambar) VALUES ('$id', '$nama', '$kontak', '$usia', '$kelamin', '$tipe', '$deskripsi', '$tempat', '$tanggal', $status, '$nama_gambar_baru')";
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
                    echo "<script>alert('Laporan telah dikirim, terimakasih sudah melaporkan');window.location='index.php';</script>";
                  }

        } 
        else 
        {     
             //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                echo "<script>alert('Ekstensi gambar yang boleh hanya jpg, png, jpeg, webm');window.location='input_laporan.php';</script>";
        }
} 
else {
   echo "<script>alert('Tolong pilih gambar untuk diupload terlebih dahulu');window.location='input_laporan.php';</script>";
}

  }

  // membuat variabel untuk menampung data dari form
  

  ?>
