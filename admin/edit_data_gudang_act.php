<?php

include 'koneksi.php';
print_r($_POST);

$id = $_POST['id'];
$nama_gudang = $_POST['nama_gudang'];
$alamat_gudang = $_POST['alamat_gudang'];
$id_prov        = $_POST['provinsi'];
$id_kab         = $_POST['kabupaten'];
$id_kec         = $_POST['kecamatan'];
$id_desa        = $_POST['kelurahan'];
$nama_kplgdg = $_POST['nama_kplgdg'];
$hp_kplgdg = $_POST['hp_kplgdg'];
$email_kplgdg = $_POST['email_kplgdg'];

if (isset($_POST['simpan']) && $_POST['simpan'] != "") {

    $sql = "UPDATE gudang SET nama_gudang = '$nama_gudang', alamat_gudang = '$alamat_gudang', id_prov = '$id_prov', id_kab = '$id_kab', id_kec = '$id_kec', id_desa = '$id_desa', nama_kplgdg = '$nama_kplgdg', hp_kplgdg = '$hp_kplgdg', email_kplgdg = '$email_kplgdg' WHERE id_gudang='$id'";
    $query = mysqli_query($koneksi, $sql);

    header('location:gudang.php');
} else {
    header('location:edit_data_gudang.php');
}
?>