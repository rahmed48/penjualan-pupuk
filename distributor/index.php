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
        include 'partial/mainmenu1.php';
// Load file mainmenu.php 
        ?>
        <!-- Main Menu area End-->


        <!-- BIAR DITENGAH ISINYA -->
        <!-- cek apakah sudah login -->

        <div class="normal-table-area">
            <div class="container">
                <!-- BIAR DITENGAH ISINYA -->

                <!-- BAGIAN ISINYA DISINI -->
                <!-- BAGIAN ISINYA DISINI -->
                <!-- BAGIAN ISINYA DISINI -->


                <div class="row">


                    <?php
                    error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
                    include 'koneksi.php';
                    $sql = "SELECT SUM(jumlah) as hasil FROM transaksi
                        JOIN gudang_to_pupuk ON transaksi.id_gudang_to_pupuk=gudang_to_pupuk.id_gudang_to_pupuk
                        JOIN gudang ON gudang_to_pupuk.id_gudang=gudang.id_gudang
                        JOIN pupuk ON gudang_to_pupuk.id_pupuk=pupuk.id_pupuk";
                    $query = mysqli_query($koneksi, $sql);
                    $data = mysqli_fetch_array($query);
                    ?>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                            <div class="website-traffic-ctn">
                                <h2><span class="counter"><?php echo $data ['hasil']; ?></span> Ton</h2>
                                <p>Pupuk Yang Terjual</p>
                            </div>
                            <div><img src="img/logo/transaksi.png"/></div>
                        </div>
                    </div>
               

                    <?php
                    error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
                    include 'koneksi.php';
                    $sql3 = "SELECT COUNT(id_gudang) as hasil FROM gudang";
                    $query3 = mysqli_query($koneksi, $sql3);
                    $data3 = mysqli_fetch_array($query3);
                    ?>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                            <div class="website-traffic-ctn">
                                <h2><span class="counter"><?php echo $data3 ['hasil']; ?></span></h2>
                                <p>Jumlah Gudang</p>
                            </div>
                            <div><img src="img/logo/gudang.png"/></div>
                        </div>
                    </div>                    


                    <?php
                    error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
                    include 'koneksi.php';
                    $sql4 = "SELECT COUNT(id_pupuk) as hasil FROM pupuk";
                    $query4 = mysqli_query($koneksi, $sql4);
                    $data4 = mysqli_fetch_array($query4);
                    ?>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                            <div class="website-traffic-ctn">
                                <h2><span class="counter"><?php echo $data4 ['hasil']; ?></span></h2>
                                <p>Jumlah Produk</p>
                            </div>
                            <div><img src="img/logo/pupuk.png"/></div>
                        </div>
                    </div>
                </div>

                
                <div class="row">
                    

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class = "normal-table-list mg-t-30">
                            <div class="contact-list">
                                <div class="contact-win">
                                        <?php
                                            include 'koneksi.php';
                                            $distributor = $_SESSION['email_user'];
                                            $sql = "SELECT *
                                                   FROM distributor 
                                                   JOIN user ON distributor.email_distributor=user.email_user
                                                   WHERE user.email_user='$distributor'";
                                            $query = mysqli_query($koneksi, $sql);

                                            while ($data = mysqli_fetch_array($query)) {
                                                ?>
                                        <img src=../images/<?php echo $data['foto'] ?> width="100px">
                                            <?php } ?>
                                    <div class="conct-sc-ic">
                                        <a class="btn" href="https://web.facebook.com/"><i class="notika-icon notika-facebook"></i></a>
                                        <a class="btn" href="https://twitter.com/"><i class="notika-icon notika-twitter"></i></a>
                                        <a class="btn" href="https://id.pinterest.com/"><i class="notika-icon notika-pinterest"></i></a>
                                    </div>
                                </div>
                                <div class="contact-ctn">
                                    <div class="contact-ad-hd">
                                        </label>
                                        <p class="ctn-ads">SELAMAT DATANG</p>
                                        <h2><?php echo $_SESSION['nama_user'] ?></h2>
                                    </div>
                                </div>
                                <BR>
                                <div class="social-st-list">
                                    <div class="social-sn">
                                        <a class="btn btn-danger" href="logout.php">Logout</a>
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


        <script src="path/to/chartjs/dist/Chart.js"></script>


        <script>
            var kategoriChartCanvas = $("#linechart").get(0).getContext("2d");
            var kategoriChart = new Chart(kategoriChartCanvas, {type: 'line',
                data: {
                    labels: <?php echo json_encode($chart['tgl_transaksi']) ?>,
                    datasets: [{
                            label: '#',
                            data: <?php echo json_encode($chart['jumlah']) ?>,
                            backgroundColor: [
                                'rgba(35, 142, 255, 0.7)',
                            ]

                        }]
                },
                options: {
                    legend: {
                        display: true,
                        position: 'right'
                    },
                    responsive: true
                }
            });

        </script>

    </body>

</html>