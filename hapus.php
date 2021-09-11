<?php

require_once 'koneksi.php';

// cek id
if (isset($_GET['id'])) {
  $id = $_GET['id'];

  // perintah hapus data berdasarkan id yang dikirimkan
  $q = $conn->query("DELETE FROM pengguna WHERE id = '$id'");

  header('Location:daftarpengaju.php?pesan=hapus');
}
?>