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
        include 'partial/mainmenu2.php';
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
                        <div class="normal-table-list mg-t-30">
                            <div class="basic-tb-hd">
                                <h2>Tabel Ketersediaan</h2>
                                <a href="tambah_gudang_to_pupuk.php" class="btn btn-primary" role="button">Tambah Data</a>
                            </div>
                            <div class="table-responsive">
                                <div class="bsc-tbl-bdr">
                                    <table id="data-table-basic" class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>NO</th>
                                                <th>NAMA GUDANG</th>
                                                <th>PRODUK YANG TERSEDIA</th>
                                                <th>PENGATURAN</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            include 'koneksi.php';
                                            $sql = "SELECT *
                                                   FROM gudang_to_pupuk 
                                                   JOIN gudang ON gudang_to_pupuk.id_gudang=gudang.id_gudang
                                                   JOIN pupuk ON gudang_to_pupuk.id_pupuk=pupuk.id_pupuk
                                                   ORDER BY gudang.nama_gudang ASC";
                                            $query = mysqli_query($koneksi, $sql);
                                            $nomor = 1;

                                            while ($data = mysqli_fetch_array($query)) {
                                                ?>
                                                <tr>
                                                    <td><?php echo $nomor++; ?></td>
                                                    <td><?php echo $data ['nama_gudang']; ?></td>
                                                    <td><?php echo $data ['jenis_pupuk']; ?></td>
                                                    <td>
                                                        <a href="edit_gudang_to_pupuk.php?id=<?php echo $data['id_gudang_to_pupuk']; ?>"class="btn btn-danger notika-btn-teal">Edit</a>
                                                        <a href="hapus_gudang_to_pupuk.php?id=<?php echo $data['id_gudang_to_pupuk']; ?>"class="btn btn-danger notika-btn-teal">Hapus</a>
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