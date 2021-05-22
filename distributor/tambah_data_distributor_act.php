<?php include 'koneksi.php';

$nama_distributor           = $_POST['nama_distributor'];
$email_distributor          = $_POST['email_distributor'];
$no_telepon                 = $_POST['no_telepon'];
$alamat_distributor         = $_POST['alamat_distributor'];
$id_prov                    = $_POST['id_prov'];
$id_kab                     = $_POST['id_kab'];
   
if (isset($_POST['simpan'])) {
    $sql="INSERT INTO distributor(nama_distributor,email_distributor,no_telepon, alamat_distributor, id_prov, id_kab)
    VALUES ('$nama_distributor','$email_distributor','$no_telepon','$alamat_distributor','$id_prov','$id_kab')";
    echo $sql;
    mysqli_query($koneksi, $sql);

    header('location:distributor.php');
}

else {
    header('location:tambah_data_distributor.php');
}

?>