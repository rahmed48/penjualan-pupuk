<?php include 'koneksi.php';

$nama_gudang    = $_POST['nama_gudang'];
$alamat_gudang  = $_POST['alamat_gudang'];
$id_prov        = $_POST['id_prov'];
$id_kab         = $_POST['id_kab'];
$nama_kplgdg    = $_POST['nama_kplgdg'];
$hp_kplgdg      = $_POST['hp_kplgdg'];
$email_kplgdg   = $_POST['email_kplgdg'];
   
if (isset($_POST['simpan'])) {
    $sql="INSERT INTO gudang(nama_gudang,alamat_gudang,id_prov, id_kab, nama_kplgdg, hp_kplgdg, email_kplgdg)
    VALUES ('$nama_gudang','$alamat_gudang','$id_prov','$id_kab','$nama_kplgdg','$hp_kplgdg','$email_kplgdg')";
    echo $sql;
    mysqli_query($koneksi, $sql);

    header('location:gudang.php');
}

else {
    header('location:tambah_data_gudang.php');
}

?>