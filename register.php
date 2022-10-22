<!DOCTYPE html>
<html>
  <head>
    <title>Form Registrasi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  
  </head><br>
  <body>
  
  <style type="text/css">
    a{text-decoration: none; font-size: 20px;font-family: sans-serif;padding: 14px 10px}
    ul{padding: 14px}
    li{list-style: none; display: inline;}
    li a{background: blue; color:white;}
    li a:hover{background: cyan; color:black;}
    .navi{background: blue; height: 54px}

    body{
      background-color: #00BFFF;
      color: white;
    }

    <nav class="navbar navbar-dark bg-primary">
  <!-- Navbar content --><a class="navbar-brand" href="#"><b><font face="sans-serif" size="6" color="cyan">BPBD Boyolali</font>&nbsp &nbsp &nbsp</b>
  <font face="verdana" color="white"><i>"Terwujudnya Penanggulangan Bencana Secara Cepat, Tepat, Efektif dan Efisien" </i></font></a>
  </nav>
</style><br>
      <h1><center>SILAHKAN REGISTRASI SEBAGAI ADMIN</center></h1><br>
        <div class="col-md-6 offset-md-3">
        <form action="" method="post">
          <div class="form-group">
            <h4><font color="red">*Semua field harus diisi dengan data yang valid</font></h4><br>
            <h2><label>USERNAME</label></h2>
            <input type="text" class="form-control" name="nip"  placeholder="disarankan huruf kecil semua & tanpa spasi (contoh : adminpusdalops). . . . . . ." required>
          </div>
          <div class="form-group">
            <h2><label>Nama Lengkap</label></h2>
            <input type="text" class="form-control" name="nama"  placeholder="masukkan nama lengkap (huruf kapital semua). . . . . . ." required>
          </div>
          <div class="form-group">
            <h2><label>Password</label></h2>
            <input type="password" class="form-control" name="password"  placeholder="masukkan password. . . . . . . " required>
          </div>
          <div class="form-group">
            <h2><label>Email</label></h2>
            <input type="email" class="form-control" name="email"  placeholder="masukkan email. . . . . . . " required>
          </div>
          <div class="form-group">
            <h2><label>Nomor Telepon / HP</label></h2>
            <input type="text" class="form-control" name="nomor"  placeholder="masukkan nomor telepon / HP. . . . . . ." required>
          </div>
          <div class="form-group">
            <h2><label>Bidang / Divisi</label><br></h2>
            <select name="bidang">
              <option value="Bidang 1">Bidang 1</option>
              <option value="Bidang 2">Bidang 2</option>
              <option value="Bidang 3">Bidang 3</option>
              <option value="Sekretariat">Sekretariat</option>
              <option value="Pusdalops">Pusdalops</option>
            </select>
          </div>
          <div class="form-group">
            <h2><label>Jabatan</label></h2>
            <input type="text" class="form-control" name="jabatan"  placeholder="masukkan jabatan. . . . . . ." required>
          </div>
          <div class="form-group">
            <h2><label>Input Kata Kunci Keamanan Tambahan</label></h2>
            <h4><font color="red">*penting</font></h4>
            <input type="password" class="form-control" name="question"  placeholder="tuliskan kata kunci keamanan dengan benar" required>
          </div>
         
         <input type="submit" value="DAFTAR" name="daftar" class="btn btn-primary"><br><br>


    </body>
</html>

<?php
    include 'koneksi.php';

    if(isset($_POST['daftar']))
    {
      $question = $_POST['question'];
      $answer = "BPBDKABUPATENBOYOLALI";

      if($question != $answer)
      {
        echo "<script>alert('Tolong isi kata kunci keamanan tambahan dengan jawaban dan format yang benar !');</script>";
      }
      else
      {
        $id = rand(1,999);
        $nip = $_POST['nip'];
        $nama = $_POST['nama'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $nomor = $_POST['nomor'];
        $bidang = $_POST['bidang'];
        $jabatan = $_POST['jabatan'];

        mysqli_query($koneksi, "INSERT INTO admin (id, nip, password, nama, email, nomor, bidang, jabatan) VALUES ('$id', '$nip', '$password', '$nama', '$email', '$nomor', '$bidang', '$jabatan')");
        echo "<script>alert('Registrasi berhasil, silahkan login untuk melanjutkan');window.location='login.php'</script>";
      }
    }
?>