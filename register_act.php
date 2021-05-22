<?php

include 'koneksi.php';

$nama_distributor = $_POST['nama_distributor'];
$email_distributor = $_POST['email_distributor'];
$no_telepon = $_POST['no_telepon'];
$username = $_POST['username'];
$password = md5($_POST['password']);
$alamat_distributor = $_POST['alamat_distributor'];
$id_prov = $_POST['provinsi'];
$id_kab = $_POST['kabupaten'];
$id_kec = $_POST['kecamatan'];
$id_desa = $_POST['kelurahan'];
$foto = $_FILES['foto']['name'];
$target = "images/".basename($foto);
$msg = "";

if (isset($_POST['simpan'])) {

    $sql = "INSERT INTO pendaftaran(nama_distributor,email_distributor,no_telepon,username,password, alamat_distributor, id_prov, id_kab, id_kec, id_desa,foto,level)
    VALUES ('$nama_distributor','$email_distributor','$no_telepon','$username','$password','$alamat_distributor','$id_prov','$id_kab','$id_kec','$id_desa','$foto','distributor')";
    echo $sql;
    mysqli_query($koneksi, $sql);

    if (move_uploaded_file($_FILES['foto']['tmp_name'], $target)) {
        $msg = "Image uploaded successfully";
    } else {
        $msg = "Failed to upload image";
    }header('location:distributor.php');
} else {
    header('location:login.php');
}
?>
