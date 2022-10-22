<!DOCTYPE html>
<html>
<head>
	<title>Berita Bencana</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  
</head>

<body>
	<nav class="navbar navbar-dark bg-primary">
  <!-- Navbar content --><a class="navbar-brand" href="#"><b><font face="sans-serif" size="6" color="cyan">BPBD Boyolali</font>&nbsp &nbsp &nbsp</b>
  <font face="verdana" color="white"><i>"Terwujudnya Penanggulangan Bencana Secara Cepat, Tepat, Efektif dan Efisien" </i></font></a><br>
</nav><br>
	<center>
		<h1><b>List Berita Kejadian Bencana</b></h1><hr>
		<?php
			include 'koneksi.php';
			$query = "SELECT * FROM berita ORDER BY id DESC";
      		$result = mysqli_query($koneksi, $query);
      		$no = 1;
      		while($row = mysqli_fetch_assoc($result))
      		{

		?>
		<style type="text/css">
			table{
				margin-right: 80px;
				margin-left: 80px;
				margin-top: 50px;
				margin-bottom: 50px;
			}
			td{
				text-align: justify;
				padding : 20px;
			}
		
		</style>
		<table align="center">
			<tr>
				<td><h2><?php echo $no; ?>.) Bencana <?php echo $row['tipe']; ?> Hari <?php echo $row['hari']; ?> Tanggal <?php echo $row['tanggal']; ?> <?php echo $row['bulan']; ?> <?php echo $row['tahun']; ?> Di Dukuh <?php echo $row['dukuh']; ?> Desa <?php echo $row['desa']; ?> Kecamatan <?php echo $row['kecamatan']; ?></h2></td>
			</tr>
			<tr>
				<td>
					<center><img src="imguploaded/<?php echo $row['gambar']; ?>" style="width: 800px; height: 400px;"></center>
				</td>
			</tr>
			<tr>
				<td><b>Deskripsi Berita :</b><br><br>
					<?php echo $row['deskripsi']; ?>
				</td>
			</tr>
			<tr>
				<td>
					 <b>Detail lainnya :</b><br><br>
					 <ul>
					 	
					 	<li>Jumlah anggota keseluruhan KK terdampak : <?php echo $row['kk']; ?> </li>
					 	<li>Jumlah korban hilang / meninggal :
					 	 <?php 
					 	$kh = $row['korbanhilang'];
					 	if ($kh!=0) {
					 	 	echo $kh; echo " orang";
					 	 } else echo "nihil";
					 	 ?></li>
					 	 	<li>Jumlah korban luka luka :
					 	 <?php 
					 	$kl = $row['korbanluka'];
					 	if ($kl!=0) {
					 	 	echo $kl; echo " orang";
					 	 } else echo "nihil";
					 	 ?></li>

					 	 <li>Jumlah korban mengungsi :
					 	 <?php 
					 	$km = $row['korbanmengungsi'];
					 	if ($km!=0) {
					 	 	echo $km; echo " orang";
					 	 } else echo "nihil";
					 	 ?></li>

					 	 	<li>Jumlah rumah dengan tingkat kerusakan ringan :
					 	 <?php 
					 	$rr = $row['rusakringan'];
					 	if ($rr!=0) {
					 	 	echo $rr; echo " buah";
					 	 } else echo "nihil";
					 	 ?></li>

					 	 	<li>Jumlah rumah dengan tingkat kerusakan sedang :
					 	 <?php 
					 	$rs = $row['rusaksedang'];
					 	if ($rs!=0) {
					 	 	echo $rs; echo " buah";
					 	 } else echo "nihil";
					 	 ?></li>

					 	  	<li>Jumlah rumah dengan tingkat kerusakan berat :
					 	 <?php 
					 	$rb = $row['rusakberat'];
					 	if ($rb!=0) {
					 	 	echo $rb; echo " buah";
					 	 } else echo "nihil";
					 	 ?></li>

					 	  	<li>Estimasi total kerugian akibat bencana :
					 	 <?php 
					 	$k = $row['kerugian'];
					 	if ($k!=0) {
					 		echo "Rp. ";
					 	 	echo number_format($k);
					 	 } else echo "nihil";
					 	 ?></li>
					 </ul>
				</td>
			</tr>
			<tr>
				<td>
					<hr>
				</td>
			</tr>
	  <?php
        $no++; //untuk nomor urut terus bertambah 1
      	}
      ?>
		</table>
	</center>
</body>
</html>