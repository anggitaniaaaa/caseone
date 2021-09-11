<?php
require_once 'koneksi.php';

if (isset($_POST['submit'])) {
$nip = $_POST['nip'];
$username = $_POST['username'];
$posisi = $_POST['posisi_pekerjaan'];
$norek = $_POST['nomor_rekening'];
$narek = $_POST['nama_rekening'];
$bank = $_POST['nama_bank'];
$kode = $_POST['kode_bank'];
$password = $_POST['password'];
$level = $_POST['level'];
mysqli_select_db($db_name, $conn);

 $conn->query ("INSERT INTO pengguna SET nip='$nip', username='$username', posisi_pekerjaan='$posisi', nomor_rekening='$norek', nama_rekening='$narek', nama_bank='$bank', kode_bank='$kode', password='$password', level='$level'");

  header('Location: daftarpengaju.php?pesan=input');
}
?>