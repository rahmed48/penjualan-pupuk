<!doctype html>
<html class="no-js" lang="">

    <head>
        <?php
        // Load file head.php 
        include 'session.php';
        include 'partial/head.php';
        ?>
    </head>

    <body>
        <!--[if lt IE 8]>
                <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
            <![endif]-->
        <!-- Start Header Top Area -->

        <!-- End Header Top Area -->

        <!-- Mobile Menu start -->

        <!-- Mobile Menu end -->

        <!-- Main Menu area start-->

        <!-- Main Menu area End-->


        <!-- BIAR DITENGAH ISINYA -->
        <!-- BIAR DITENGAH ISINYA -->

        <!-- BAGIAN ISINYA DISINI -->
        <!-- BAGIAN ISINYA DISINI -->
        <!-- BAGIAN ISINYA DISINI -->


        <?php
        include 'koneksi.php';
        $id = $_GET ['id'];
        $sql = "SELECT * FROM transaksi WHERE id_transaksi='$id'";
        $query = mysqli_query($koneksi, $sql);
        $data = mysqli_fetch_assoc($query)
        ?> 

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <center>

                    <h2>Detail Transaksi</h2>
                    <h4>Penjualan Produk PT Pupuk Iskandar Muda</h4>

                </center>
                <div class="data-table-list mg-t-30">
                    <div class="basic-tb-hd">

                    </div>
                    <form action="permintaan_act.php" method="POST">
                        <input  type="hidden" name="id" class="form-control" value="<?php echo $data['id_transaksi']; ?>">
                        <div class="table-responsive">
                            <div class="bsc-tbl">
                                <table class="table table-sc-ex">

                                    <?php
                                    include 'koneksi.php';
                                    include 'uang.php';
                                    $sql = "SELECT *
                                                   FROM transaksi 
                                                   JOIN distributor ON transaksi.id_distributor=distributor.id_distributor
                                                   JOIN gudang_to_pupuk ON transaksi.id_gudang_to_pupuk=gudang_to_pupuk.id_gudang_to_pupuk
                                                   JOIN gudang ON gudang_to_pupuk.id_gudang=gudang.id_gudang
                                                   JOIN pupuk ON gudang_to_pupuk.id_pupuk=pupuk.id_pupuk
                                                   WHERE id_transaksi='$id'";
                                    $query = mysqli_query($koneksi, $sql);
                                    $nomor = 1;

                                    while ($data = mysqli_fetch_array($query)) {
                                        ?>

                                        <tbody>
                                            <tr>
                                                <td>Nama Distributor</td>
                                                <td><?php echo $data['nama_distributor']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Alamat Distributor</td>
                                                <td><?php echo $data['alamat_distributor']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>No Telepon</td></td>
                                                <td><?php echo $data['no_telepon']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Tanggal Permintaan</td>
                                                <td><?php echo date("d-m-Y", strtotime($data['tgl_transaksi'])); ?></td>
                                            </tr>
                                            <tr>
                                                <td>Nama Produk</td>
                                                <td><?php echo $data['jenis_pupuk']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Asal Gudang</td>
                                                <td><?php echo $data['nama_gudang']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Jumlah Permintaan</td>
                                                <td><?php echo $data['jumlah']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Harga (Per Ton)</td>
                                                <td><?php echo rupiah3($data['harga_pupuk']); ?></td>
                                            </tr>
                                            <tr>
                                                <td>Harga Total</td>
                                                <td><?php echo rupiah3($data['harga_total']); ?></td>
                                            </tr>
                                            <tr>
                                                <td>Status</td>
                                                <td>Sedang Dikirimkan</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <br>
                                    <br>
                                    <br>
                                    <div style="width:200px;float:right">
                                        .............., <?php echo date('d M Y'); ?>
                                        <br>
                                        <br>
                                        <br>
                                        <br>
                                        <br>
                                        <p>..........................................</p>
                                    </div>
                                <?php } ?>                                        
                            </div>
                        </div>
                    </form>
                </div>

            </div>

        </div>


        <!-- BAGIAN ISINYA HABIS -->
        <!-- BAGIAN ISINYA HABIS -->
        <!-- BAGIAN ISINYA HABIS -->

        <!-- BIAR DITENGAH ISINYA -->
        <!-- BIAR DITENGAH ISINYA -->

        <!-- Start Footer area-->

        <!-- End Footer area-->
        <!-- Start JS area-->
        <?php
        include 'partial/js.php';
// Load file head.php 
        ?>

        <script>
            window.print();
        </script>
        <!-- End JS area-->
    </body>

</html>