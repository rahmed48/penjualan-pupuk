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
                                <h2>Calon Distributor Menunggu Persetujuan</h2>
                            </div>
                            <div class="table-responsive">
                                <div class="bsc-tbl-bdr">
                                    <table class="table table-bordered" >
                                        <thead>
                                            <tr>
                                                <th>NO</th>
                                                <th>NAMA CALON DISTRIBUTOR</th>
                                                <th>ALAMAT</th>
                                                <th>DETAIL ALAMAT</th>
                                                <th>#</th>
                                            </tr>
                                            <?php
                                            include 'koneksi.php';
                                            $sql = "SELECT *
                                                FROM pendaftaran
                                                JOIN prov ON pendaftaran.id_prov=prov.id_prov
                                                JOIN kab ON pendaftaran.id_kab=kab.id_kab
                                                JOIN kec ON pendaftaran.id_kec=kec.id_kec
                                                JOIN desa ON pendaftaran.id_desa=desa.id_desa";
                                            $query = mysqli_query($koneksi, $sql);
                                            $nomor = 1;

                                            while ($data = mysqli_fetch_array($query)) {
                                                echo "<tr>";
                                                ?>
                                                <tr>
                                                    <td><?php echo $nomor++; ?></td>
                                                    <td><?php echo $data['nama_distributor']; ?></td>
                                                    <td><?php echo $data['nm_desa']; ?>, <?php echo $data['nm_kec']; ?>, <?php echo $data['nm_kab']; ?>, <?php echo $data['nm_prov']; ?></td>
                                                    <td><?php echo $data['alamat_distributor']; ?></td>
                                                    <td >
                                                        <div >
                                                            <a href="detail_pendaftaran.php?id=<?php echo $data['id_pendaftaran']; ?>"class="btn btn-info notika-btn-teal">Detail</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </thead>
                                    </table>
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