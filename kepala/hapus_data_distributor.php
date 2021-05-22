<?php

include 'koneksi.php';
$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM distributor WHERE id_distributor = '$id'");
header('location:distributor.php');
?>