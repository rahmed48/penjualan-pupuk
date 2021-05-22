<?php

include 'koneksi.php';
$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM pendaftaran WHERE id_pendaftaran = '$id'");
header('location:pendaftaran.php');
?>