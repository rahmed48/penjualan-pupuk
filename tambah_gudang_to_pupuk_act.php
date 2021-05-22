<?php

include 'koneksi.php';

$id_gudang = $_POST['id_gudang'];
$id_pupuk = $_POST['id_pupuk'];

if (isset($_POST['simpan'])) {
    $sql = "INSERT INTO gudang_to_pupuk(id_gudang,id_pupuk)
    VALUES ('$id_gudang','$id_pupuk')";
    echo $sql;
    mysqli_query($koneksi, $sql);

    header('location:gudang_to_pupuk.php');
} else {
    header('location:tambah_gudang_to_pupuk.php');
}
?>