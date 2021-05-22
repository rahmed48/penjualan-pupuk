<?php

include 'koneksi.php';


$id = $_POST['id'];
$nama_distributor           = $_POST['nama_distributor'];
$email_distributor          = $_POST['email_distributor'];
$no_telepon                 = $_POST['no_telepon'];
$alamat_distributor         = $_POST['alamat_distributor'];
$id_prov                    = $_POST['id_prov'];
$id_kab                     = $_POST['id_kab'];

if (isset($_POST['simpan']) && $_POST['simpan'] != "") {
    $sql = "UPDATE distributor SET nama_distributor  = '$nama_distributor', email_distributor  = '$email_distributor ', no_telepon  = '$no_telepon ', alamat_distributor  = '$alamat_distributor ',id_prov = '$id_prov', id_kab = '$id_kab' WHERE id_distributor='$id'";
    $query = mysqli_query($koneksi, $sql);

    header('location:distributor.php');
} else {
    header('location:edit_data_distributor.php');
}
?>