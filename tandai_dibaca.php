<?php
	include 'koneksi.php';

	if (isset($_GET['id'])) {
		$id = $_GET['id'];

		 $query = "SELECT * FROM laporan WHERE id='$id'";
   		 $result = mysqli_query($koneksi, $query);
   		 $data = mysqli_fetch_assoc($result);
   		 $status = $data['status'];
   		 $read = 1;
   		 $update = "UPDATE laporan SET status = '$read' WHERE id = '$id'";
   		 $result = mysqli_query($koneksi, $update);
   		 if ($result) {
   		 	echo "<script>alert('Laporan sudah dibaca.');window.location='tampil_laporan.php';</script>";
   		 }
	}

?>