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
        <?php
        include 'partial/headertoparea.php';
        // Load file headertoparea.php 
        ?>
        <!-- End Header Top Area -->

        <!-- Mobile Menu start -->
        <?php
        include 'partial/mobilemenu.php';
        // Load file mobilemenu.php 
        ?>
        <!-- Mobile Menu end -->

        <!-- Main Menu area start-->
        <?php
        include 'partial/mainmenu3.php';
        // Load file mainmenu.php 
        ?>
        <!-- Main Menu area End-->


        <!-- BIAR DITENGAH ISINYA -->
        <div class="normal-table-area">
            <div class="container">
                <!-- BIAR DITENGAH ISINYA -->

                <!-- BAGIAN ISINYA DISINI -->
                <!-- BAGIAN ISINYA DISINI -->
                <!-- BAGIAN ISINYA DISINI -->




                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="data-table-list mg-t-30">
                            <div class="basic-tb-hd">
                                <h2>Permintaan Ditolak</h2>
                            </div>
                            <div class="table-responsive">
                                <div class="bsc-tbl-bdr">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>NO</th>
                                                <th>NAMA GUDANG</th>
                                                <th>NAMA PRODUK</th>
                                                <th>BANYAK BARANG</th>
                                                <th>HARGA TOTAL</th>
                                                <th>STATUS</th>
                                                <th>#</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            include 'koneksi.php';
                                            include 'uang.php';
                                            $distributor = $_SESSION['email_user'];
                                            $sql = "SELECT *
                                                   FROM transaksi 
                                                   JOIN distributor ON transaksi.id_distributor=distributor.id_distributor
                                                   JOIN gudang_to_pupuk ON transaksi.id_gudang_to_pupuk=gudang_to_pupuk.id_gudang_to_pupuk
                                                   JOIN gudang ON gudang_to_pupuk.id_gudang=gudang.id_gudang
                                                   JOIN pupuk ON gudang_to_pupuk.id_pupuk=pupuk.id_pupuk
                                                   JOIN user ON distributor.email_distributor=user.email_user
                                                   WHERE status='ditolak' AND user.email_user='$distributor'";
                                            $query = mysqli_query($koneksi, $sql);
                                            $nomor = 1;

                                            while ($data = mysqli_fetch_array($query)) {
                                                ?>
                                            
                                                <tr>
                                                    <td><?php echo $nomor++; ?></td>
                                                    <td><?php echo $data['nama_gudang']; ?></td>
                                                    <td><?php echo $data['jenis_pupuk']; ?></td>
                                                    <td class="text-center"><?php echo $data['jumlah']; ?> Ton</td>
                                                    <td><?php echo rupiah3($data['harga_total']); ?></td>
                                                    <td><?php echo $data['status']; ?></td>
                                                    <td>
                                                        <div class="row">
                                                            <a href="detail_permintaan.php?id=<?php echo $data['id_transaksi']; ?>"class="btn btn-info notika-btn-teal">Detail</a>
                                                        </div>
                                                    </td>                                                    
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>


    <!-- BAGIAN ISINYA HABIS -->
    <!-- BAGIAN ISINYA HABIS -->
    <!-- BAGIAN ISINYA HABIS -->

    <!-- BIAR DITENGAH ISINYA -->
</div>
</div>
<!-- BIAR DITENGAH ISINYA -->

<!-- Start Footer area-->
<?php
include 'partial/footer.php';
// Load file head.php 
?>
<!-- End Footer area-->
<!-- Start JS area-->
<?php
include 'partial/js.php';
// Load file head.php 
?>
<!-- End JS area-->
</body>

</html>