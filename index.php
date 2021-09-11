<html>
<head>
	<title>Selamat Datang</title>
	<link rel="stylesheet" type="text/css" href="styleindex.css">
</head>
<body>
	<table>
		<tr>
			<td rowspan="2">
		<p><img src="gambar/2021.png" style= "width: 450px;  height: 800px; border-radius: 100px;" class="gambar1"/></p>
			</td>
		</tr>
		<tr>
			<td>
	<?php
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
		echo "<div class='alert'><b>Username atau Password tidak sesuai !</b></div>";
	}
}
?>
			</td>
		</tr>
		<tr>
			<td>
<div class="kolom_login"><!--kotak_login-->
	<p class="tulis_login"><font face= "arial black">Silahkan lakukan login</font></p><!--tulisan_login-->

	<form action="ceklogin.php" method="post"><!--cek_login-->
		<label><b>Username</b></label>
		<input type="text" name="username" class="formlogin" placeholder="username..." required="required"><!--form_login-->

		<label><b>Password</b></label>
		<input type="password" name="password" class="formlogin" placeholder="password..." required="required">
<div class="zoom-effect">
	<div class="kotak">
		<input type="submit" class="tombol" value="LOGIN"><!--tombol_login-->
	</div>
</div>
		<br/>
		<center>
			<a class="link" href="https://wa.widget.web.id/a5276c" target="_blank">Hubungi Admin Untuk Daftar Akun</a>
			<p><img src="gambar/WA.png" style= "width: 100px;  height: 100px;"/></p>
		</center>
	</form>

</div>
			</td>
		</tr>
	</table>
</body>
</html>
