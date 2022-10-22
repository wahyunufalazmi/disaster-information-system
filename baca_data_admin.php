<?php
include 'koneksi.php';

$nip=$_GET['nip'];
$kueri=mysqli_query($koneksi, "SELECT * FROM admin WHERE nip='$nip'");
$admin=mysqli_fetch_array($kueri);
$data=array(
            
            'password' =>$admin['password'],
             'nomor'=>$admin['nomor'],
             'email'=>$admin['email']
            );	 
echo json_encode($data);

?>
