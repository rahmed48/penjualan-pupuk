<?php include 'koneksi.php';

$nama_gudang    = $_POST['nama_gudang'];
$alamat_gudang  = $_POST['alamat_gudang'];
$id_prov        = $_POST['provinsi'];
$id_kab         = $_POST['kabupaten'];
$id_kec         = $_POST['kecamatan'];
$id_desa        = $_POST['kelurahan'];
$nama_kplgdg    = $_POST['nama_kplgdg'];
$hp_kplgdg      = $_POST['hp_kplgdg'];
$email_kplgdg   = $_POST['email_kplgdg'];

//print_r($_POST);
   
if (isset($_POST['simpan'])) {
    $sql="INSERT INTO gudang(nama_gudang,alamat_gudang, id_prov, id_kab, id_kec, id_desa, nama_kplgdg, hp_kplgdg, email_kplgdg)
    VALUES ('$nama_gudang','$alamat_gudang','$id_prov','$id_kab','$id_kec','$id_desa','$nama_kplgdg','$hp_kplgdg','$email_kplgdg')";
    echo $sql;
    mysqli_query($koneksi, $sql);

   header('location:gudang.php');
}

else {
    header('location:tambah_data_gudang.php');
}

?>