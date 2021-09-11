<?php
$host = 'localhost';
$username = 'root';
$password = '';
$db_name = 'submission'; // nama databasenya
$conn = new mysqli($host, $username, $password, $db_name);

if(mysqli_connect_errno()){
	echo "Koneksi Gagal !!!" .mysqli_connect_error();
}
?>