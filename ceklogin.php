<?php

session_start();

include 'koneksi.php';

$username=$_POST['username'];
$password=$_POST['password'];

$login=mysqli_query($conn, "select * from pengguna where username='$username' and password='$password'");

$cek=mysqli_num_rows($login);

if($cek>0){
	$data=mysqli_fetch_assoc($login);

	if($data['level']=="Admin Website"){

		$_SESSION['username']=$username;
		$_SESSION['level']="Admin Website";

		header("location: halaman_admin.php");

	}else if($data['level']=="Kepala Sekolah"){

		$_SESSION['username']=$username;
		$_SESSION['level']="Kepala Sekolah";

		header("location: halaman_kepala_sekolah.php");

	}else if($data['level']=="Direktur Operasional"){

		$_SESSION['username']=$username;
		$_SESSION['level']="Direktur Operasional";

		header("location: halaman_direktur.php");

	}else if($data['level']=="Bagian Keuangan"){

		$_SESSION['username']=$username;
		$_SESSION['level']="Bagian Keuangan";

		header("location: halaman_keuangan.php");

	}else if($data['level']=="Pengaju Dana"){

		$_SESSION['username']=$username;
		$_SESSION['level']="Pengaju Dana";

		header("location: halaman_pengaju.php");
		
	}else{

		header("location: index.php?pesan=gagal");
	}

}else{
	header("location: index.php?pesan=gagal");
}

?>