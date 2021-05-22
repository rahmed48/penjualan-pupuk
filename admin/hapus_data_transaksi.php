<?php

include 'koneksi.php';
$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM transaksi WHERE id_transaksi = '$id'");
header('location:transaksi.php');
?>