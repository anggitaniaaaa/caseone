<!DOCTYPE html>
<html>
<head>
	<title> Input Data Pengguna</title>
	<link rel="stylesheet" type="text/css" href="styleinputuser.css">
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
	<div class="container">

	<?php
	session_start();

	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}

	?>

<!------------------------------------------>

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
	<b><a class="posisi" href="halaman_admin.php">Kembali ke Beranda</a></b>
		</td>
		<td width="55%" align="right">
			<img src="gambar/fb.png" style= "width: 150px;  height: 40px; border-radius: 20px;" class="gambar2"/><img src="gambar/ig.png" style= "width: 155px;  height: 30px; border-radius: 20px;" class="gambar3"/><img src="gambar/phone.png" style= "width: 155px;  height: 30px; border-radius: 20px;" class="gambar3"/><img src="gambar/email.png" style= "width: 150px;  height: 40px; border-radius: 20px;" class="gambar2"/>
		</td>
	</tr>
</table>
<!------------------------------------------>
	<br/>

	<h3 class="inputbaru">Input Data Pengguna Baru</h3>
	<form action="aksi-inputuser.php" method="post" class="inputbaru1">
		<table>
			<tr>
				<td>Username</td>
				<td width="2%"></td>
				<td class="inputbaru2"><input type="text" name="username"></td>
				<td width="15%"></td>
				<td>Nomor Rekening</td>
				<td width="2%"></td>
				<td class="inputbaru3"><input type="text" name="nomor_rekening"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td width="2%"></td>
				<td class="inputbaru2"><input type="text" name="password"></td>
				<td width="15%"></td>
				<td>Nama Pemilik Rekening</td>
				<td width="2%"></td>
				<td class="inputbaru3"><input type="text" name="nama_rekening"></td>
			</tr>
			<tr>
				<td>Level Pengguna</td>
				<td width="2%"></td>
				<td class="inputbaru2">
					<select name="level">
						<option value="-----">-----</option>
						<option value="Admin Website">Admin Website</option>
						<option value="Kepala Sekolah">Kepala Sekolah</option>
						<option value="Direktur Operasional">Direktur Operasional</option>
						<option value="Bagian Keuangan">Bagian Keuangan</option>
						<option value="Pengaju Dana">Pengaju Dana</option>
					</select>
				</td>
				<td width="15%"></td>
				<td>Nama Bank</td>
				<td width="2%"></td>
				<td class="inputbaru3"><input type="text" name="nama_bank"></td>
			</tr>
			<tr>
				<td>NIP</td>
				<td width="2%"></td>
				<td class="inputbaru2"><input type="text" name="nip"></td>
				<td width="15%"></td>
				<td>Kode Bank</td>
				<td width="2%"></td>
				<td class="inputbaru3"><input type="text" name="kode_bank"></td>
			</tr>
			<tr>
				<td>Posisi Pekerjaan</td>
				<td width="2%"></td>
				<td class="inputbaru2">
					<input type="text" name="posisi_pekerjaan">
						
				</td>
				<td width="15%"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
		<div class="zoom-effect">
			<div class="kotak">
				<td><input type="submit" name="submit" value="Simpan" class="tombol"></td>
			</div>
		</div>
			</tr>
		</table>
	</form>
	</div>
</body>
</html>
