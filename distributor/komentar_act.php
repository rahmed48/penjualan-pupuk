<?php

include 'koneksi.php';
//print_r($_POST);

$id = $_POST['id'];
$komentar = $_POST['komentar'];

if (isset($_POST['kirim']) && $_POST['kirim'] != "") {

    $sql = "UPDATE transaksi SET komentar = '$komentar' WHERE id_transaksi='$id'";
    $query = mysqli_query($koneksi, $sql);

    header('location:permintaan.php');
} else {
    header('location:detail_permintaan.php');
}
?>