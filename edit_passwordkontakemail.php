<!DOCTYPE html>
<html>
<head>
    <title>Edit Password, Kontak & Email</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.3/jquery.min.js"></script>
   
</head>

<nav class="navbar navbar-dark bg-primary">
  <!-- Navbar content --><a class="navbar-brand" href="#"><b><font face="sans-serif" size="6" color="cyan">BPBD Boyolali</font>&nbsp &nbsp &nbsp</b>
  <font face="verdana" color="white"><i>"Terwujudnya Penanggulangan Bencana Secara Cepat, Tepat, Efektif dan Efisien" </i></font></a><br>
  </nav><br>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

}
</style>
<body>
<br>
<font face="verdana" color="green" size="5"><center>Form Edit Password, Kontak & Email</center></font><br>

<div> 
  <form action="" method="post">
    <label for="nip">USERNAME</label>
    <input type="text" id="nip" name="nip" onkeyup="cari_data()" placeholder="Inputkan username anda dengan benar.........."><br><br><br>

    <label for="password">BERIKUT ADALAH PASSWORD ANDA YANG LAMA, SILAHKAN ISIKAN YANG BARU JIKA INGIN MENGUBAHNYA</label>
    <input type="text" id="password" name="password"  placeholder="Akan terisi otomatis ketika anda sudah menginputkan NIP anda dengan benar..........">
    <br><br><br>

    <label for="nomor">BERIKUT ADALAH NOMOR KONTAK ANDA YANG LAMA, SILAHKAN ISIKAN YANG BARU JIKA INGIN MENGUBAHNYA</label>
    <input type="text" id="nomor" name="nomor"  placeholder="Akan terisi otomatis ketika anda sudah menginputkan NIP anda dengan benar..........">
    <br><br><br>

    <label for="email">BERIKUT ADALAH EMAIL ANDA YANG LAMA, SILAHKAN ISIKAN YANG BARU JIKA INGIN MENGUBAHNYA</label>
    <input type="text" id="email" name="email"  placeholder="Akan terisi otomatis ketika anda sudah menginputkan NIP anda dengan benar..........">

    <center>
    <input type="submit" value="UPDATE DATA" name="update">
  </form>
</div>



		<script type="text/javascript">
            function cari_data(){
                var nip = $("#nip").val();
                $.ajax({
                    type : 'GET',
                    url: 'baca_data_admin.php',
                    data:"nip="+nip ,
                }).success(function (data) {
                    var json = data,
                    obj = JSON.parse(json);
                    $('#password').val(obj.password);
                    $('#nomor').val(obj.nomor);
                    $('#email').val(obj.email);
                });
            }
        </script>


      
</body>
</html>

<?php
  include 'koneksi.php';

  if (isset($_POST['update'])) {
    $nip = $_POST['nip'];
    $password = $_POST['password'];
    $nomor = $_POST['nomor'];
    $email = $_POST['email'];

      $query  = "UPDATE admin SET password = '$password', nomor = '$nomor', email = '$email'";
                    $query .= "WHERE nip = '$nip'";
      $result = mysqli_query($koneksi, $query);
      // periska query apakah ada error
      if(!$result){
            die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                             " - ".mysqli_error($koneksi));
      } else {
        //tampil alert dan akan redirect ke halaman index.php
        //silahkan ganti index.php sesuai halaman yang akan dituju
          echo "<script>alert('Data berhasil diubah.');window.location='login.php';</script>";
      }
  }

?>