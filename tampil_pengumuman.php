<hr><center><br><br><h1>
<b>List File PDF Hasil Upload<br></h1>
	<a href="input_pengumuman.php"><button>INPUT PENGUMUMAN</button></a><br><br>
	<table width="90%" border='1' cellpadding="2" cellspacing="2" bgcolor="#000000">
		<tr>
		 <th bgcolor="aqua"><h4>Judul Pengumuman</h4></th>
		 <th bgcolor="aqua"><h4>Tanggal Upload</h4></th>
		 <th bgcolor="aqua" width="100">Lihat</th>
		 <th bgcolor="aqua" width="100">Hapus</th>
		</tr>
		<?php
		include 'koneksi.php';
		$query = mysqli_query($koneksi,"SELECT * FROM pengumuman ORDER BY tanggal DESC");
		while($data=mysqli_fetch_array($query))
		{
		?>
		<tr>
		 <td bgcolor="#ffffff"><?php echo $data['judul'];?></td>
		 <td bgcolor="#ffffff"><?php echo $data['tanggal'];?></td>
		 <th bgcolor="#ffffff"><br><a href="lihat_pengumuman.php?id=<?php echo $data['id'];?>">Lihat File</a></th>
		 <th bgcolor="#ffffff"><br><a href="hapus_pengumuman.php?id=<?php echo $data['id'];?>" 
		 	onclick="return confirm('Anda yakin akan menghapus pengumuman ini?')">Hapus File</a></th>
		</tr>
		<?php
		}
		?>
	</table>