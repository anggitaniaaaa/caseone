<!DOCTYPE html>
<html>
<head>
	<title>Admin Website</title>
	<link rel="stylesheet" type="text/css" href="styleadmin.css">
</head>
<body>
	<?php
	session_start();

	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}

	?>
<!------------------------------------------	
	<table width="100%" border="1">
		<tr rowspan="4">
			<td width="20px">
			<marquee direction="left" height="200"><img src="gambar/so.png" style= "width: 200px;  height: 200px; border-radius: 20px;" class="gambar2"/></marquee>
			</td>
------------------------------------------		
		<tr>	
		<td width="40px">
			<marquee direction="right">
				<img src="gambar/fb.png" style= "width: 200px;  height: 30px;border-radius: 20px;" class="gambar3"/>
				<img src="gambar/ig.png" style= "width: 200px;  height: 30px; border-radius: 20px;" class="gambar3"/>
			</marquee>
------------------------------------------		
		<td width="40px">
			<marquee direction="right">
				<img src="gambar/fb.png" style= "width: 200px;  height: 30px;border-radius: 20px;" class="gambar3"/>
				<img src="gambar/ig.png" style= "width: 200px;  height: 30px; border-radius: 20px;" class="gambar3"/>
			</marquee>
		</tr>
------------------------------------------>	
	<table width="100%">
		<tr>
			<td width="5%" align="right">
				<img src="gambar/so.png" style= "width: 200px;  height: 200px; border-radius: 20px;" class="gambar1"/>
			</td>
			<td width="95%">
				<h1 align="center" class="so"><font face= "Brush Script MT">STUDENT ONE ISLAMIC SCHOOL</font></h1><p/>
				<h2 align="center" class="so2"><font face= "Brush Script MT">Submission Website</font></h2><p/>
			</td>
		</tr>
	</table>
<!------------------------------------------>		
<table width="100%">
	<tr>
		<td width="45%">
	<div class="tanggal">
		<?php
$timezone = new DateTimeZone('Asia/Jakarta');
$date = new DateTime();
$date->setTimeZone($timezone);

echo $date->format('l, d-m-Y H:i:s a') . '<br/>';
		?>
	</div>
	<div class="posisi">Anda telah login sebagai <b><?php echo $_SESSION['level'];?></b></div>
		</td>
		<td width="55%" align="right">
			<img src="gambar/fb.png" style= "width: 150px;  height: 40px; border-radius: 20px;" class="gambar2"/><img src="gambar/ig.png" style= "width: 155px;  height: 30px; border-radius: 20px;" class="gambar3"/><img src="gambar/phone.png" style= "width: 155px;  height: 30px; border-radius: 20px;" class="gambar3"/><img src="gambar/email.png" style= "width: 150px;  height: 40px; border-radius: 20px;" class="gambar2"/>
		</td>
	</tr>
</table>

<!------------------------------------------>

	<table width="100%">
		<tr>
			<td colspan="4" width="1000px" align="right">
	<p class="orang">Selamat datang, <b><?php echo $_SESSION['username'];?></b></p>
	<a class="link" href="https://wa.widget.web.id/765f8e" target="_blank"><b>Hubungi Admin Jika Ada Kendala</b></a>
			</td>
		</tr>

<!------------------------------------------>
		
		<tr rowspan="2">
			<td width="250px" align="center">
	<div class="zoom-effectinput">
		<p class="inputdata"><a href="inputuser.php"><img src="gambar/inputdata.png" style= "width: 200px;  height: 200px; border-radius: 100px;"/></a></p>
	</div>
			</td>
			<td width="250px" align="center">
	<div class="zoom-effectlist">
		<p class="listpengaju"><a href="daftarpengaju.php"><img src="gambar/listpengaju.png" style= "width: 200px;  height: 200px; border-radius: 100px;"/></a></p>
	</div>
			</td>
			<td width="250px" align="center">
	<div class="zoom-effectstatus">
		<p class="statuspengaju"><img src="gambar/statuspengajuan.png" style= "width: 200px;  height: 200px; border-radius: 100px;"/></p>
	</div>
			</td>	
			<td width="250px" align="center" border="1">
	<div class="zoom-effectprofil">
		<p class="profiledit"><a href="formpengajuan.php"><img src="gambar/profiledit.png" style= "width: 150px;  height: 150px; border-radius: 100px;"/></a></p>
	</div>
	<div class="zoom-effectkeluar">
		<p class="keluar"><a href="logout.php"><img src="gambar/logout.png" style= "width: 150px;  height: 150px; border-radius: 100px;"/></a></p>
	</div>
			</td>		
		</tr>	

<!------------------------------------------>
		<tr>
			<td>
			
	<br/>
	<br/>

	
</body>
</html>
