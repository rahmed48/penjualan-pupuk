<?php

include 'koneksi.php';
//print_r($_POST);

$id = $_POST['id'];

if (isset($_POST['setuju']) && $_POST['setuju'] != "") {

    $sql2 = "INSERT INTO distributor(nama_distributor,email_distributor,no_telepon,alamat_distributor, id_prov, id_kab, id_kec, id_desa, foto)
            SELECT nama_distributor,email_distributor,no_telepon,alamat_distributor,id_prov,id_kab,id_kec,id_desa,foto FROM pendaftaran WHERE id_pendaftaran='$id'";

    $sql3 = "INSERT INTO user(nama_user,username,password,level)
            SELECT nama_distributor,username,password,level FROM pendaftaran WHERE id_pendaftaran='$id'";

    $query2 = mysqli_query($koneksi, $sql2);
    $query3 = mysqli_query($koneksi, $sql3);
    $query4 = mysqli_query($koneksi, "DELETE FROM pendaftaran WHERE id_pendaftaran = '$id'");

    /////// the message
    $msg = "Anda Diterima Sebagai Distributor";

    ////// use wordwrap() if lines are longer than 70 characters
    $msg = wordwrap($msg, 70);

    ////// send email
    mail("SELECT email_distributor FROM pendaftaran WHERE id_pendaftaran = '$id' ", "Pendaftaran Distributor", $msg);

    header('location:pendaftaran.php');
} else if (isset($_POST['tolak']) && $_POST['tolak'] != "") {

    $query4 = mysqli_query($koneksi, "DELETE FROM pendaftaran WHERE id_pendaftaran = '$id'");

    header('location:pendaftaran.php');
} else {
    header('location:detail_pendaftaran.php');
}
?>