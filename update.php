<!DOCTYPE html>
<html>
<head>
  <title> Input Data Pengguna</title>
  <link rel="stylesheet" type="text/css" href="styleupdate.css">
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
require_once 'koneksi.php';

// cek id
if (isset($_GET['id'])) {
  $id = $_GET['id'];

  // ambil data berdasarkan id_produk
  $q = $conn->query("SELECT * FROM pengguna WHERE id = '$id'");

  foreach ($q as $data) :
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


  <h3 class="inputbaru">Halaman Edit Data</h3>
  <form action="proses-update.php" method="post" class="inputbaru1">
    <table>
      <tr>
        <td><input type="hidden" name="id" value="<?= $data['id'] ?>">
        <td>Username</td>
        <td width="2%"></td>
        <td class="inputbaru2"><input type="text" name="username" value="<?= $data['username'] ?>"></td>
        <td width="15%"></td>
        <td>Nomor Rekening</td>
        <td width="2%"></td>
        <td class="inputbaru3"><input type="text" name="nomor_rekening" value="<?= $data['nomor_rekening'] ?>"></td>
      </tr>
      <tr>
        <td></td>
        <td>Password</td>
        <td width="2%"></td>
        <td class="inputbaru2"><input type="text" name="password" value="<?= $data['password'] ?>"></td>
        <td width="15%"></td>
        <td>Nama Pemilik Rekening</td>
        <td width="2%"></td>
        <td class="inputbaru3"><input type="text" name="nama_rekening" value="<?= $data['nama_rekening'] ?>"></td>
      </tr>
      <tr>
        <td></td>
        <td>Level Pengguna</td>
        <td width="2%"></td>
        <td class="inputbaru2">
          <select name="level" value="<?= $data['level'] ?>">
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
        <td class="inputbaru3"><input type="text" name="nama_bank" value="<?= $data['nama_bank'] ?>"></td>
      </tr>
      <tr>
        <td></td>
        <td>NIP</td>
        <td width="2%"></td>
        <td class="inputbaru2"><input type="text" name="nip" value="<?= $data['nip'] ?>"></td>
        <td width="15%"></td>
        <td>Kode Bank</td>
        <td width="2%"></td>
        <td class="inputbaru3">
          <select name="kode_bank" value="<?= $data['kode_bank'] ?>">
            <option value="-----">-----</option>
            <option value="Bank BCA">Bank BCA - 014</option>
            <option value="Bank Mandiri">Bank Mandiri - 008</option>
            <option value="Bank BNI">Bank BNI - 009</option>
            <option value="Bank BRI">Bank BRI - 002</option>
            <option value="Bank CIMB Niaga/CIMB Niaga Syariah">Bank CIMB Niaga / CIMB Niaga Syariah - 022</option>
            <option value="Bank Muamalat">Bank Muamalat - 147</option>
            <option value="Bank BTPN/Jenius">Bank BTPN / Jenius - 213</option>
            <option value="Bank BTN">Bank BTN - 200</option>
            <option value="Bank Permata">Bank Permata - 013</option>
            <option value="Bank Danamon">Bank Danamon - 011</option>
            <option value="Bank BII Maybank">Bank BII Maybank - 016</option>
            <option value="Bank Mega">Bank Mega - 426</option>
            <option value="Bank Sinarmas">Bank Sinarmas - 153</option>
            <option value="Bank Commonwealth">Bank Commonwealth - 950</option>
            <option value="Bank OCBC NISP">Bank OCBC NISP - 028</option>
          </select>
        </td>
      </tr>
      <tr>
        <td></td>
        <td>Posisi Pekerjaan</td>
        <td width="2%"></td>
        <td class="inputbaru2">
          <input type="text" name="posisi_pekerjaan" value="<?= $data['posisi_pekerjaan'] ?>">
            
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
        <td><input type="submit" name="submit" value="Update" class="tombol"></td>
      </div>
    </div>
      </tr>
    </table>
  </form>
  </div>

  <?php
  endforeach;
}
?>
</body>
</html>