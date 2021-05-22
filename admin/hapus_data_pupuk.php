<?php

include 'koneksi.php';
$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM pupuk WHERE id_pupuk = '$id'");
header('location:pupuk.php');
?>