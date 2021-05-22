<?php include 'koneksi.php';

$nama_distributor           = $_POST['nama_distributor'];
$email_distributor          = $_POST['email_distributor'];
$no_telepon                 = $_POST['no_telepon'];
$username                   = $_POST['username'];
$password                   = $_POST['password'];
$alamat_distributor         = $_POST['alamat_distributor'];
$id_prov                    = $_POST['provinsi'];
$id_kab                     = $_POST['kabupaten'];
$id_kec                     = $_POST['kecamatan'];
$id_desa                    = $_POST['kelurahan'];
   
if (isset($_POST['simpan'])) {
    $sql="INSERT INTO pendaftaran(nama_distributor,email_distributor,no_telepon,username,password,alamat_distributor, id_prov, id_kab, id_kec, id_desa, level)
    VALUES ('$nama_distributor','$email_distributor','$no_telepon','$username','$password','$alamat_distributor','$id_prov','$id_kab','$id_kec','$id_desa','distributor')";
    echo $sql;
    mysqli_query($koneksi, $sql);

    header('location:distributor.php');
}

else {
    header('location:tambah_data_distributor.php');
}

?>