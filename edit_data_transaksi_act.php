<?php

include 'koneksi.php';
//print_r($_POST);

$id = $_POST['id'];
$id_distributor = $_POST['id_distributor'];
$id_gudang_to_pupuk = $_POST['id_gudang_to_pupuk'];
$tgl_transaksi = date("Y-m-d", strtotime($_POST['tgl_transaksi']));
$jumlah = $_POST['jumlah'];

//UNTUK MENGKALIKAN HARGA PUPUK DAN JUMLAH BARANG YANG DIBELI
$sql = "SELECT pupuk.harga_pupuk FROM gudang_to_pupuk
        JOIN pupuk ON gudang_to_pupuk.id_pupuk=pupuk.id_pupuk 
        WHERE id_gudang_to_pupuk='$id_gudang_to_pupuk'";
$query = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_assoc($query);


$harga_beli = $data['harga_pupuk'];
$harga_total = $jumlah*$harga_beli;

if (isset($_POST['simpan']) && $_POST['simpan'] != "") {

    $sql = "UPDATE transaksi SET id_distributor = '$id_distributor', id_gudang_to_pupuk = '$id_gudang_to_pupuk', tgl_transaksi = '$tgl_transaksi', jumlah = '$jumlah', harga_beli='$harga_beli', harga_total='$harga_total' WHERE id_transaksi='$id'";
    $query = mysqli_query($koneksi, $sql);

    header('location:transaksi.php');
} else {
    header('location:edit_data_transaksi.php');
}
?>