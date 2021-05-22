<?php

include 'koneksi.php';

$jenis_pupuk = $_POST['jenis_pupuk'];
$harga_pupuk = $_POST['harga_pupuk'];
$rumus_kimia = $_POST['rumus_kimia'];

if (isset($_POST['simpan'])) {
    $sql = "INSERT INTO pupuk(jenis_pupuk,harga_pupuk,rumus_kimia) VALUES ('$jenis_pupuk','$harga_pupuk','$rumus_kimia')";
    echo $sql;
    mysqli_query($koneksi, $sql);

    header('location:pupuk.php');
} else {
    header('location:tambah_data_pupuk.php');
}
?>