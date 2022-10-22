<?php

	include 'koneksi.php';



	$tahun = $_POST['tahun'];
    $penanggungjawab = $_POST['penanggungjawab'];
  $nip = $_POST["nip"];


?>
  <style type="text/css">
    button{
      background-color: white;
      color: white;
       border: 0;
       outline:none;
       width: 100%;
       height: 50px;
    }
  </style>

<button onclick="window.print()">Print Halaman Ini</button>
<h1 align="center">Data Seluruh Bencana Tahun <?= $tahun ?></h1>
<table border="1">
        <thead>
          <tr bgcolor="silver">
             <th scope="col">No</th>
            <th scope="col">Jenis Bencana</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Alamat Lengkap</th>
            <th scope="col">Kepala Keluarga</th>
            <th scope="col">Anggota Keluarga</th>
            <th scope="col">Jumlah Korban Luka Ringan</th>
            <th scope="col">Jumlah Korban Luka Berat</th>
            <th scope="col">Jumlah Korban Meninggal</th>
            <th scope="col">Kerugian Material</th>
            <th scope="col">Tingkat Kerugian</th>
    
          </tr>
        </thead>
         <?php
          $data = mysqli_query($koneksi, "SELECT * FROM korban WHERE   tahun = '$tahun'");
          $no = 1;
         while ($array = mysqli_fetch_array($data)) :
        ?>
         <tbody>
          <tr>
          <td><?php echo $no; ?></td>
            <td><?php echo $array['tipe'];?></td>
            <td><?php echo $array['tanggal'];?> <?php echo $array['bulan'];?> <?php echo $array['tahun'];?></td>
            <td><?php echo $array['alamat']; ?> </td>
            <td>Bpk. <?php echo $array['kepalakeluarga']; ?></td>
  <td>
              <?php
              $ak = $array['anggotakeluarga'];
              if ($ak!=0) {
                 echo number_format($array['anggotakeluarga']);
                 echo " jiwa";
               } else echo "Nihil";
               
               ?>
                
              </td>
               <td>
              <?php
              $lr = $array['lukaringan'];
              if ($lr!=0) {
                 echo number_format($array['lukaringan']);
                 echo " orang";
               } else echo "Nihil";
               
               ?>
                
              </td>
                <td>
              <?php
              $lb = $array['lukaberat'];
              if ($lb!=0) {
                 echo number_format($array['lukaberat']);
                 echo " orang";
               } else echo "Nihil";
               
               ?>
                
              </td>
                <td>
              <?php
              $m = $array['meninggal'];
              if ($m!=0) {
                 echo number_format($array['meninggal']);
                 echo " orang";
               } else echo "Nihil";
               
               ?>
                
              </td>
               <td>
              <?php
              $k = $array['kerugian'];
              if ($k!=0) {
                echo "Rp. ";
                 echo number_format($array['kerugian']);
                 
               } else echo "Nihil";
               
               ?>
                
              </td>
            <td>
              <?php
                echo $array['tingkatkerugian'];
                

              ?>
            </td>
           <?php $no++; endwhile; ?>
          </tr>
          <tr>
           <td></td>
           <td></td>
           <td></td>
           <td></td>
           <td></td>
           <td>
     
           </td>
           <td bgcolor="silver">
                                       <?php

             $query = "SELECT SUM(lukaringan) FROM korban WHERE   tahun = '$tahun'";    
            $result = mysqli_query($koneksi,$query) or die(mysql_error());

        // Print out result
            while($row = mysqli_fetch_array($result)){    
            echo "<b>Total : ". number_format($row['SUM(lukaringan)']); echo "</b><br /><br>";
           }
         ?>
           </td>
           <td bgcolor="silver">
                       <?php

            $query = "SELECT SUM(lukaberat) FROM korban WHERE   tahun = '$tahun'";    
            $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
            while($row = mysqli_fetch_array($result)){    
                echo "<b>Total : ". number_format($row['SUM(lukaberat)']); echo "</b><br /><br>";
            }
        ?>
           </td>
           <td bgcolor="silver">
                    <?php

            $query = "SELECT SUM(meninggal) FROM korban WHERE   tahun = '$tahun'";    
            $result = mysqli_query($koneksi,$query) or die(mysql_error());

            // Print out result
            while($row = mysqli_fetch_array($result)){    
                echo "<b>Total : ". number_format($row['SUM(meninggal)']); echo "</b><br /><br>";
      
            }
        ?>
           </td>
           <td bgcolor="silver">
                       <?php

                  $query = "SELECT SUM(kerugian) FROM korban WHERE   tahun = '$tahun' ";    
                  $result = mysqli_query($koneksi,$query) or die(mysql_error());

              // Print out result
                  while($row = mysqli_fetch_array($result)){    
                  echo "<b>Total : RP. ". number_format($row['SUM(kerugian)']); echo "</b><br /><br>";
                  
                }
              ?>
           </td>
           <td></td>
         </tr>
        </tbody>
      </table ><br><br><br>
<table align="right" class="ttd">
     <tr>
       <td align="center"> PENANGGUNGJAWAB</td>
     </tr>
     <tr>
       <td align="center">BADAN PENANGGULANGAN BENCANA DAERAH</td>
     </tr>
     <tr>
       <td align="center">KABUPATEN BOYOLALI</td>
     </tr>
     <tr>
       <td align="center"><br><br><br><br><br></td>
     </tr>
     <tr>
       <td align="center"><?=  $penanggungjawab; ?></td>
     </tr>
     <tr>
       <td align="center"><?=  $nip; ?></td>
     </tr>
   </table>
     
