<?php

include 'koneksi.php';
//print_r($_POST);

$id = $_POST['id'];
$id_gudang = $_POST['id_gudang'];
$id_pupuk = $_POST['id_pupuk'];


if (isset($_POST['simpan']) && $_POST['simpan'] != "") {

    $sql = "UPDATE gudang_to_pupuk SET id_gudang = '$id_gudang', id_pupuk = '$id_pupuk' WHERE id_gudang_to_pupuk='$id'";
    $query = mysqli_query($koneksi, $sql);

    header('location:gudang_to_pupuk.php');
} else {
    header('location:edit_gudang_to_pupuk.php');
}
?>