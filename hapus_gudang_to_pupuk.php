<?php

include 'koneksi.php';
$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM gudang_to_pupuk WHERE id_gudang_to_pupuk = '$id'");
header('location:gudang_to_pupuk.php');
?>