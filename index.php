<!DOCTYPE html>
<html>
<head>
	<title>Beranda</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	  <nav class="navbar navbar-dark bg-primary">
  <!-- Navbar content --><a class="navbar-brand" href="#"><b><font face="sans-serif" size="6" color="cyan">BPBD Boyolali</font>&nbsp &nbsp &nbsp</b>
	  <font face="verdana" color="white"><i>"Terwujudnya Penanggulangan Bencana Secara Cepat, Tepat, Efektif dan Efisien" </i></font></a>
	  </nav>
 <style type="text/css">

        * {margin:0; padding:0}

        body {     
             background-image: url('images/bghome.jpeg');
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment:fixed;
            font-family:Gotham, "Helvetica Neue", Helvetica, Arial, sans-serif;
            color:white;
        }

        .nav1 {
            height:50px;
            background-color:green;
            line-height:50px;
            position:relative;
            top:0px;
            bottom: 0px;
            width:100%;
        }

        nav ul {
            list-style:none;
        }
        nav ul li a {
            float:left;
            width:302px;
            color:white;
            text-decoration:none;
            display:block;
            text-align:center;
        }
        nav ul li a:hover {
            background-color:lime;
            display:block;
        }
        /*css untuk menu hover dropdown*/
        nav ul li:hover .sub1 {display:block}

        nav ul li:hover .sub2 {display:block}

        nav ul li:hover .sub3 {display:block}



        nav ul .sub1 {
            display:none;
            position:absolute;
            left:Opx;
            top:0px;
            background-color:teal;
        }

        nav ul .sub2 {
            display:none;
            position:absolute;
            left:302px;
            top:0px;
            background-color:olive;
        }

        nav ul .sub3 {
            display:none;
            position:absolute;
            left:604px;
            top:0px;
            background-color:#4682B4;
        }

 

        .sub1 a:hover { color:blue }

        .sub2 a:hover { color:navy }

        .sub3 a:hover { color:sienna }

    

                /* [SLIDER] */
        #slider,  #slider .slide{
          width: 100%;
          height: 430px;
        }
        #slider {
          overflow: hidden;
          margin: 0 auto;
          font-size: 1.2em;
          background: teal;
        }
        #slider .container {
          position: relative;
          bottom: 0;
          right: 0;
          animation: slide-animation 15s infinite;
        }
        #slider .slide {
          position: relative;
          box-sizing: border-box;
          padding: 20px 20px;
        }

        @keyframes slide-animation {
          0% { 
            opacity: 0;
            bottom: 0;
          }
          11% {
            opacity: 1;
            bottom: 0; 
          }
          22% { bottom: 100%; }
          33% { bottom: 100%; }
          44% { bottom: 200%; }
          55% { bottom: 200%; }
          66% { bottom: 300%; }
          77% { bottom: 300%; }
          88% {
            opacity: 1;
            bottom: 400%; 
          }
          100% {
            opacity: 0;
            bottom: 400%;
          }

          p{
            text-align: center;
          }


       </style>

<nav class="nav1">
        <ul><b><b>
             <li><a href="">ADMINISTRATOR</a>
                <ul class="sub1">
                    <li><a href="register.php">REGISTER</a></li>
                    <li><a href="login.php">LOGIN</a></li>
                    <li><a href="tampil_list_admin.php">LIST ADMIN</a></li>
                     <li><a href="site.php">DESKRIPSI WEBSITE</a></li>
                </ul>
            </li>
             <li><a href="">LIST INFORMASI</a>
                <ul class="sub2">
                    <li><a href="tampil_berita_bencana.php">BERITA KEJADIAN BENCANA</a></li>
                    <li><a href="tampil_berita_acara.php">BERITA ACARA BPBD</a></li>
                      <li><a href="https://www.bmkg.go.id/cuaca/prakiraan-cuaca.bmkg?Kota=Boyolali&AreaID=501240&Prov=11">PREDIKSI CUACA BOYOLALI</a></li>
                     <li><a href="https://covid19.boyolali.go.id/">DATA COVID BOYOLALI</a></li>
                    <li><a href="https://merapi.bgl.esdm.go.id/">STATUS GUNUNG MERAPI</a></li>
                </ul>
            </li>

           <li><a href="">PENANGGULANGAN BENCANA</a>
                <ul class="sub3">
                    <li><a href="input_laporan.php">LAPORKAN BENCANA</a></li>
                    <li><a href="https://api.whatsapp.com/send?phone=6285877737310&text=Halo%20Admin%20Saya%20Mau%20Lapor.%20(isikan%20pesan%20anda%20disini.....)">HUBUNGI ADMIN LANGSUNG</a></li>
                    <li><a href="https://www.bnpb.go.id/">BNPB</a></li>
                </ul>
            </li>
        
        </ul></b></b>
    </nav><br>


  <center> 
  <table bgcolor="red"><td><font face="algerian" color="white" size="6" align="center" border="1"><b>PENGUMUMAN TERBARU</b></font></td></table>
  <div style="border: 1px solid rgb(204, 204, 204); padding: 5px; overflow: auto; width: 90%; height: 225px;background-color: rgb(255, 255, 255);">
  <table width="100%" border='0' cellpadding="2" cellspacing="2" bgcolor="white" height="300px">
    <tr>
     <th bgcolor="grey"><font size="3">&nbsp;&nbsp;&nbsp;JUDUL PENGUMUMAN</font></th>
     <th bgcolor="grey"><font size="3">TANGGAL</font></th>
     <th bgcolor="grey" ><font size="3">PREVIEW</font></th>
     
    </tr>
    <?php
    include 'koneksi.php';
    $query = mysqli_query($koneksi,"SELECT * FROM pengumuman ORDER BY tanggal DESC");
    while($data=mysqli_fetch_array($query))
    {
    ?>
    <tr>
     <td> <font color="black"><?php echo $data['judul'];?></font></td>
     <td> <font color="black"><?php echo $data['tanggal'];?></font></td>
     <td align="center"><a href="lihat_pengumuman.php?id=<?php echo $data['id'];?>"><img src="images/open.png" width="30px" height="30px;"></a></td>
    </tr>
    <?php
    }
    ?>
  </table></center><br><br><br>

   <center>
     <table bgcolor="black">
            <td>
              <font face="algerian" color="silver" size="7"><b>visi - misi</b></font>
            </td>
      </table>
    </center>

     <div id="slider">
      <div class="container">
        <div class="slide"><br><br><br><br><br><br>
          <center><h1>Visi BPBD Kabupaten Boyolali</h1></center>
        </div>
        <div class="slide">
          <br><br><br><br><br><br>
          <center><h4>Terwujudnya Sistem Penanganan Bencana Yang Cepat, Tepat, Efektif Dan Efisien</h4></center>
        </div>
        <div class="slide"><br><br><br><br><br><br>
          <center><h1>Misi BPBD Kabupaten Boyolali</h1></center>
        </div>
        <div class="slide">
          <p>
            <ol><br><br>
                <li>Meningkatnya upaya mitigasi, pencegahan, kesiapsiagaan dan pengurangan risiko bencana;</li>
                <li>Meningkatnya kapasitas penyelamatan dan penanganan masyarakat terdampak bencana;</li>
                <li>Meningkatnya kapasitas dan upaya pemulihan pasca bencana;</li>
                <li>Meningkatnya kualitas dan kuantitas sarana peralatan dan logistik bencana;</li>
                <li>Mengajak masyarakat agar ikut serta dalam andil penanggulangan dan pencegahan bencana</li>
                <li>Mengedukasi dan mensosialisasikan prosedur koordinasi penanggulangan bencana antara instansi dan masyarakat </li>
            </ol>
          </p>
        </div>
       <div class="slide"><br><br><br>
          <center><h1>Tujuan</h1></center><br>
          <center><h3>Mewujudkan Masyarakat Yang Siap, Sigap, Siaga Dan Tangguh Serta Kooperatif Juga Koordinatif Dalam Hal Penanggulangan Bencana</h3></center>
        </div>
      </div>
    </div>

    <center>
    <table border="0" width="90.99%" align="center">
      <font color="white">
       <tr>
        <td width="2%" bgcolor="black"></td>
        <td width="27.33%" bgcolor="black"></td>
        <td width="1%" bgcolor="black"></td>
        <td width="2%" bgcolor="black"></td>
        <td width="27.33%" bgcolor="black"><b><font face="algerian" size="5" color="silver">
        Bidang - bidang dan tugasnya</font></td>
        <td width="1%" bgcolor="black"></td>
        <td width="2%" bgcolor="black"></td>
        <td width="27.33%" bgcolor="black"></td>
       <td width="1%" bgcolor="black"></td>
      </tr>
      <tr>
        <td width="2%" bgcolor="purple"></td>
        <td width="27.33%" bgcolor="purple"><br><h4><b><u>Pencegahan & Kesiapsiagaan<br><br></td>
        <td width="1%" bgcolor="purple"></td>
        <td width="2%" bgcolor="brown"></td>
        <td width="27.33%" bgcolor="brown"><br><h4><b><u>Kedaruratan & Logistik<br><br></td>
        <td width="1%" bgcolor="brown"></td>
        <td width="2%" bgcolor="green"></td>
        <td width="27.33%" bgcolor="green"><br><h4><b><u>Rehabilitasi & Rekonstruksi<br><br></td>
       <td width="1%" bgcolor="green"></td>
      </tr>
        <tr>
        <td width="2%" bgcolor="purple"></td>
        <td width="27.33%" bgcolor="purple">Pelaksanaan analisis dan pengembangan informasi potensi bencana daerah<br></td>
        <td width="1%" bgcolor="purple"></td>
        <td width="2%" bgcolor="brown"></td>
        <td width="27.33%" bgcolor="brown">Pelaksanaan persiapan penetapan status keadaan darurat bencana<br><br></td>
        <td width="1%" bgcolor="brown"></td>
        <td width="2%" bgcolor="green"></td>
        <td width="27.33%" bgcolor="green">Pelaksanaan kegiatan pemulihan sosial psikologis, sosial ekonomis, sosial budaya, pelayanan kesehatan, fungsi pemerintahan, pelayanan publik, keamanan dan ketertiban<br><br></td>
       <td width="1%" bgcolor="green"></td>
      </tr>
      <tr>
        <td width="2%" bgcolor="purple"></td>
        <td width="27.33%" bgcolor="purple">Pelaksanaan penyusunan peta rawan bencana<br></td>
        <td width="1%" bgcolor="purple"></td>
        <td width="2%" bgcolor="brown"></td>
        <td width="27.33%" bgcolor="brown">Pelaksanaan koordinasi, kerjasama dan pengerahan sumber daya dalam penyelamatan dan evakuasi masyarakat korban bencana<br></td>
        <td width="1%" bgcolor="brown"></td>
        <td width="2%" bgcolor="green"></td>
        <td width="27.33%" bgcolor="green">Pelaksanaan kegiatan peningkatan fungsi pelayanan publik dan kondisi sosial, ekonomi dan budaya<br></td>
       <td width="1%" bgcolor="green"></td>
      </tr><br>
      <tr>
        <td width="2%" bgcolor="purple"></td>
        <td width="27.33%" bgcolor="purple">Pelaksanaan bimbingan teknis dan kerjasama pendidikan, pelatihan dan penyuluhan pembinaan kegiatan pencegahan dan mitigasi bencana<br><br></td>
        <td width="1%" bgcolor="purple"></td>
        <td width="2%" bgcolor="brown"></td>
        <td width="27.33%" bgcolor="brown">Pelaksanaan, inventarisasi, identifikasi dan perlindungan terhadap kelompok rentan korban bencana<br></td>
        <td width="1%" bgcolor="brown"></td>
        <td width="2%" bgcolor="green"></td>
        <td width="27.33%" bgcolor="green">Pelaksanaan kegiatan pembangkitan kembali kehidupan sosial budaya masyarakat<br></td>
       <td width="1%" bgcolor="green"></td>
      </tr><br>
      <tr>
        <td width="2%" bgcolor="purple"></td>
        <td width="27.33%" bgcolor="purple">Pelaksanaan fasilitasi pencegahan dan mitigasi bencana dalam penyusunan rencana tata ruang, pembangunan infrastruktur dan tata bangunan<br><br></td>
        <td width="1%" bgcolor="purple"></td>
        <td width="2%" bgcolor="brown"></td>
        <td width="27.33%" bgcolor="brown">Pelaksanaan inventarisasi dan identifikasi cakupan lokasi dan jumlah korban bencana<br></td>
        <td width="1%" bgcolor="brown"></td>
        <td width="2%" bgcolor="green"></td>
        <td width="27.33%" bgcolor="green">Pelaksanaan kegiatan perbaikan lingkungan, sarana dan prasarana umum<br></td>
       <td width="1%" bgcolor="green"></td>
      </tr><br>
      <tr>
        <td width="2%" bgcolor="purple"></td>
        <td width="27.33%" bgcolor="purple">Pelaksanaan pengembangan, pengujian dan penerapan sistem peringatan dini terjadinya bencana<br></td>
        <td width="1%" bgcolor="purple"></td>
        <td width="2%" bgcolor="brown"></td>
        <td width="27.33%" bgcolor="brown">Pelaksanaan pengkajian secara cepat dan tepat terhadap lokasi, kerusakan dan kerugian terjadinya bencana<br></td>
        <td width="1%" bgcolor="brown"></td>
        <td width="2%" bgcolor="green"></td>
        <td width="27.33%" bgcolor="green">Pelaksanaan kegiatan pembangunan kembali prasarana dan sarana sosial masyarakat dan keagamaan<br><br></td>
       <td width="1%" bgcolor="green"></td>
      </tr><br>
      <tr>
        <td width="2%" bgcolor="purple"></td>
        <td width="27.33%" bgcolor="purple">Pelaksanaan bimbingan teknis pengorganisasian, penyuluhan dan simulasi tentang mekanisme tanggap darurat<br></td>
        <td width="1%" bgcolor="purple"></td>
        <td width="2%" bgcolor="brown"></td>
        <td width="27.33%" bgcolor="brown">Pelaksanaan inventarisasi, identifikasi dan analisis gangguan pelayanan umum dan pemerintahan<br></td>
        <td width="1%" bgcolor="brown"></td>
        <td width="2%" bgcolor="green"></td>
        <td width="27.33%" bgcolor="green">Pelaksanaan kerjasama dan pengembangan partisipasi lembaga dan organisasi kemasyarakatan, dan dunia usaha dalam perbaikan dan pembangunan kembali lingkungan, sarana dan prasarana yang rusak akibat bencana<br></td>
       <td width="1%" bgcolor="green"></td>
      </tr><br>
      <tr>
        <td width="2%" bgcolor="purple"></td>
        <td width="27.33%" bgcolor="purple"><br></td>
        <td width="1%" bgcolor="purple"></td>
        <td width="2%" bgcolor="brown"></td>
        <td width="27.33%" bgcolor="brown">Pelaksanaan kerjasama penyediaan pangan, sandang, pelayanan kesehatan, psikososial serta penyediaan tempat penampungan dan tempat hunian<br><br></td>
        <td width="1%" bgcolor="brown"></td>
        <td width="2%" bgcolor="green"></td>
        <td width="27.33%" bgcolor="green"><br></td>
       <td width="1%" bgcolor="green"></td>
      </tr><br>
       <tr>
        <td width="2%" bgcolor="purple"></td>
        <td width="27.33%" bgcolor="purple"><br></td>
        <td width="1%" bgcolor="purple"></td>
        <td width="2%" bgcolor="brown"></td>
        <td width="27.33%" bgcolor="brown">Pelaksanaan kerjasama pemenuhan kebutuhan air bersih dan sanitasi bagi masyarakat korban bencana<br><br></td>
        <td width="1%" bgcolor="brown"></td>
        <td width="2%" bgcolor="green"></td>
        <td width="27.33%" bgcolor="green"><br></td>
       <td width="1%" bgcolor="green"></td>
      </tr><br>
    </font>
  </table><br>

  <div class=malasngoding-slider>
   <div class=isi-slider>
     <img src="images/depan.jpg" alt="1">
     <img src="images/pusdalops.jpeg" alt="2">
     <img src="images/sukarelawan.jpg" alt="3">
   </div>
 </div>

   <marquee>
      <table bgcolor="black">
        <td><font color="yellow" size="5" scrollamount="20">Official Office Phone Number (0276) 324518</font></td>
      </table>
    </marquee><br>

  <table bgcolor="black" width="100%"><td>
  <font face="calibri" color="silver"><marquee direction="right"><i>Site Version : V1.0 Under Copyright Act | Coded & Created By <a href="https://student.blog.dinus.ac.id/wahyunufalazmi/blogmaster-profile/"> Wahyu Nufal Azmi </a></i></marquee></font>
  </td></table>

</body>
</html>