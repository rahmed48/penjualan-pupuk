<?php

include 'koneksi.php';


$id = $_POST['id'];
$jenis_pupuk = $_POST['jenis_pupuk'];
$harga_pupuk = $_POST['harga_pupuk'];
$rumus_kimia = $_POST['rumus_kimia'];

if (isset($_POST['simpan']) && $_POST['simpan'] != "") {
    $sql = "UPDATE pupuk SET jenis_pupuk  = '$jenis_pupuk', harga_pupuk = '$harga_pupuk', rumus_kimia = '$rumus_kimia' WHERE id_pupuk='$id'";
    $query = mysqli_query($koneksi, $sql);

    header('location:pupuk.php');
} else {
    header('location:edit_data_pupuk.php');
}
?>