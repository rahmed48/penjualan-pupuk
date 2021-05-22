<?php

include 'koneksi.php';
$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM gudang WHERE id_gudang = '$id'");
header('location:gudang.php');
?>