<?php

include 'koneksi.php';

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

//print_r($_POST);

if (isset($_POST['simpan'])) {
    $sql = "INSERT INTO transaksi (id_distributor,id_gudang_to_pupuk,tgl_transaksi,jumlah,status,harga_beli,harga_total,tgl_input)
    VALUES ('$id_distributor','$id_gudang_to_pupuk','$tgl_transaksi','$jumlah','Menunggu','$harga_beli','$harga_total',current_timestamp())";
    echo $sql;
    mysqli_query($koneksi, $sql);

    header('location:tambah_data_transaksi.php?pesan=berhasil');
} else {
    header('location:tambah_data_transaksi.php?pesan=gagal');
}
?>