
<?php

	$berdasarkan = $_POST['berdasarkan'];
	if($berdasarkan == "tanggalnbencana")
	{
?>
	<center><h3>Isi Beberapa Parameter Berikut Ini Dengan Benar</h3>
	<form action="berdasarkan_tanggalnbencana.php" method="post">
	 <br>Bencana &nbsp;&nbsp;&nbsp;
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
            
          </select>&nbsp;&nbsp;&nbsp;
        Tanggal &nbsp;&nbsp;&nbsp;<select name="tanggal">
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
            </select>&nbsp;&nbsp;&nbsp;
      Bulan &nbsp;&nbsp;&nbsp;<select name="bulan">
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
            </select> &nbsp;&nbsp;&nbsp;
      Tahun &nbsp;&nbsp;&nbsp;<input type="text" name="tahun" placeholder="input tahun...">
      <input type="text" name="penanggungjawab" placeholder="Nama penanggungjawab">&nbsp;&nbsp;&nbsp;
      <input type="text" name="nip" placeholder="NIP penanggungjawab">&nbsp;&nbsp;&nbsp;
       <input type='submit' name='ok' value='ENTER'>
    </form>

<?php
	}elseif($berdasarkan == "bulannbencana"){
?>

	<center><h3>Isi Beberapa Parameter Berikut Ini Dengan Benar</h3>
	<form action="berdasarkan_bulannbencana.php" method="post">
	 <br>Bencana &nbsp;&nbsp;&nbsp;
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
            
          </select>&nbsp;&nbsp;&nbsp;
      Bulan &nbsp;&nbsp;&nbsp;<select name="bulan">
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
            </select> &nbsp;&nbsp;&nbsp;
      Tahun &nbsp;&nbsp;&nbsp;<input type="text" name="tahun" placeholder="input tahun...">
      <input type="text" name="penanggungjawab" placeholder="Nama penanggungjawab">&nbsp;&nbsp;&nbsp;
    <input type="text" name="nip" placeholder="NIP penanggungjawab">&nbsp;&nbsp;&nbsp;
       <input type='submit' name='ok' value='ENTER'>
     </form>

<?php
	}elseif($berdasarkan == "tahunnbencana")
	{
?>

	<center><h3>Isi Beberapa Parameter Berikut Ini Dengan Benar</h3>
	<form action="berdasarkan_tahunnbencana.php" method="post">
	 <br>Bencana &nbsp;&nbsp;&nbsp;
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
            
          </select>&nbsp;&nbsp;&nbsp;
      Tahun &nbsp;&nbsp;&nbsp;<input type="text" name="tahun" placeholder="input tahun..."> 
      <input type="text" name="penanggungjawab" placeholder="Nama penanggungjawab">&nbsp;&nbsp;&nbsp;
    <input type="text" name="nip" placeholder="NIP penanggungjawab">&nbsp;&nbsp;&nbsp;
      <input type='submit' name='ok' value='ENTER'>	
    </form>
<?php
  }elseif($berdasarkan == "bencana")
  {
?>

  <center><h3>Isi Beberapa Parameter Berikut Ini Dengan Benar</h3>
  <form action="berdasarkan_bencana.php" method="post">
   <br>Bencana &nbsp;&nbsp;&nbsp;
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
            
          </select>&nbsp;&nbsp;&nbsp;
          <input type="text" name="penanggungjawab" placeholder="Nama penanggungjawab">&nbsp;&nbsp;&nbsp;
    <input type="text" name="nip" placeholder="NIP penanggungjawab">&nbsp;&nbsp;&nbsp;
     <input type='submit' name='ok' value='ENTER'> 
    </form>
<?php
  }elseif($berdasarkan == "tanggal")
  {
?>

<center><h3>Isi Beberapa Parameter Berikut Ini Dengan Benar</h3>
  <form action="berdasarkan_tanggal.php" method="post">
   <br>
        Tanggal &nbsp;&nbsp;&nbsp;<select name="tanggal">
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
            </select>&nbsp;&nbsp;&nbsp;
      Bulan &nbsp;&nbsp;&nbsp;<select name="bulan">
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
            </select> &nbsp;&nbsp;&nbsp;
      Tahun &nbsp;&nbsp;&nbsp;<input type="text" name="tahun" placeholder="input tahun..."> 
      <input type="text" name="penanggungjawab" placeholder="Nama penanggungjawab">&nbsp;&nbsp;&nbsp;
    <input type="text" name="nip" placeholder="NIP penanggungjawab">&nbsp;&nbsp;&nbsp;
      <input type='submit' name='ok' value='ENTER'>
    </form>

  <?php
  }elseif($berdasarkan == "bulan"){
?>

  <center><h3>Isi Beberapa Parameter Berikut Ini Dengan Benar</h3>
  <form action="berdasarkan_bulan.php" method="post">
   <br>
      Bulan &nbsp;&nbsp;&nbsp;<select name="bulan">
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
            </select> &nbsp;&nbsp;&nbsp;
      Tahun &nbsp;&nbsp;&nbsp;<input type="text" name="tahun" placeholder="input tahun..."> 
      <input type="text" name="penanggungjawab" placeholder="Nama penanggungjawab">&nbsp;&nbsp;&nbsp;
    <input type="text" name="nip" placeholder="NIP penanggungjawab">&nbsp;&nbsp;&nbsp;
      <input type='submit' name='ok' value='ENTER'>
     </form>
<?php
  }elseif($berdasarkan == "tahun"){
?>

  <center><h3>Isi Beberapa Parameter Berikut Ini Dengan Benar</h3>
  <form action="berdasarkan_tahun.php" method="post">
   <br>
      Tahun &nbsp;&nbsp;&nbsp;<input type="text" name="tahun" placeholder="input tahun..."> 
      <input type="text" name="penanggungjawab" placeholder="Nama penanggungjawab">&nbsp;&nbsp;&nbsp;
    <input type="text" name="nip" placeholder="NIP penanggungjawab">&nbsp;&nbsp;&nbsp;
      <input type='submit' name='ok' value='ENTER'>
     </form>
   <?php
      }
    ?>