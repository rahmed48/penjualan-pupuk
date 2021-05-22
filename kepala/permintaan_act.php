<?php

include 'koneksi.php';
//print_r($_POST);

$id = $_POST['id'];

if (isset($_POST['setuju']) && $_POST['setuju'] != "") {

    $sql = "UPDATE transaksi SET status = 'disetujui', tgl_disetujui = current_timestamp() WHERE id_transaksi='$id'";
    $query = mysqli_query($koneksi, $sql);

    header('location:permintaan.php');
} else if (isset($_POST['tolak']) && $_POST['tolak'] != "") {

    $sql = "UPDATE transaksi SET status = 'ditolak', komentar = 'Tidak Ada Komentar' WHERE id_transaksi='$id'";
    $query = mysqli_query($koneksi, $sql);

    header('location:permintaan.php');
} else {
    header('location:detail_permintaan.php');
}
?>