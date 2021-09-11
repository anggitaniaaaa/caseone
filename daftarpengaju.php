<!DOCTYPE html>
<html>
<head>
	<title> Daftar Pengaju</title>
	<link rel="stylesheet" type="text/css" href="styledaftarpengaju.css">
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
<table width="100%">
		<tr>
			<td colspan="4" width="1000px" align="right">
<a class="link" href="https://wa.widget.web.id/765f8e" target="_blank"><b>>>>>>Hubungi Admin Jika Ada Kendala<<<<<</b></a>
			</td>
		</tr>
	</table>
<!------------------------------------------>
	<br/>
<div class="pesan">
	<?php
	if(isset($_GET['pesan'])){
		$pesan = $_GET['pesan'];
		if($pesan == "input"){
			echo "Data Berhasil Diinput.";
		}else if ($pesan == "update"){
			echo "Data Berhasil Diupdate.";
		}else if ($pesan == "hapus"){
			echo "Data Berhasil Dihapus.";
		}
	}
	?>
</div>
	<br/>

	<a class="tombol" href="inputuser.php"><b> +Tambah Data Baru  </b></a>

	<h3 class="inputbaru"> Data Pengguna Website </h3>
	<table border = "1" class = "table" align="center" width="100%">
		<tr class="inputbaru1">
			<th width="25px">No</th>
			<th width="50px">NIP</th>
			<th width="50px">Username</th>
			<th width="50px">Posisi Pekerjaan</th>
			<th width="100px">Nomor Rekening</th>
			<th width="50px">Nama Pemilik Rekening</th>
			<th width="50px">Nama Bank</th>
			<th width="20px">Kode Bank</th>
			<th width="200px">Opsi</th>
		</tr>

		<?php
		include "koneksi.php";
		$q = $conn->query("SELECT * FROM pengguna")or die(mysqli_connect_error());
		$nomor = 1;
		while ($data = $q->fetch_assoc()):
		?>

		<tr align="center" class="inputbaru2">
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $data ['nip']; ?></td>
			<td><?php echo $data ['username']; ?></td>
			<td><?php echo $data ['posisi_pekerjaan']; ?></td>
			<td><?php echo $data ['nomor_rekening']; ?></td>
			<td><?php echo $data ['nama_rekening']; ?></td>
			<td><?php echo $data ['nama_bank']; ?></td>
			<td><?php echo $data ['kode_bank']; ?></td>
			<td>
				<a class="edit" href="update.php?id=<?php echo $data ['id']; ?>">Edit</a> |
				<a class="hapus" href="hapus.php?id=<?php echo $data ['id']; ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a>
			</td>
		</tr>
	<?php endwhile; ?>
	</table>
	</div>
</body>
</html>
		