<!DOCTYPE html>
<html>
<head>
	<title>Keuangan</title>
</head>
<body>
	<?php
	session_start();

	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}

	?>
	<h1>Halaman Bagian Keuangan</h1>

	<p>Halo <b><?php echo $_SESSION['username'];?></b> Anda telah login sebagai <b><?php echo $_SESSION['level'];?></b></p>
	<a href="logout.php">LOGOUT</a>

	<br/>
	<br/>

	<a><a href="https://www.google.com">Search Engine</a>-Anggitania Aurien</a>
</body>
</html>
