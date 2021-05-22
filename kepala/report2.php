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
        include 'partial/mainmenu5.php';
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
                    <div class="form-element-area">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-element-list">
                                        <form action="report.php" method="POST">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                    <div class="form-group">
                                                        <div class="nk-int-st">
                                                            <input tye="text" name="tanggal" id="daterange" style="background: #fff; padding: 5px 10px; border: 1px solid #ccc; width: 100%">                                                

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                    <div class="form-group">
                                                        <div class="nk-int-st">
                                                            <button class="btn btn-primary" type="submit" value="reset">Reload</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>

                                        <?php
                                        //DateRangePicker Format
                                        error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
                                        include 'koneksi.php';
                                        $tanggal = $_POST ['tanggal'];
                                        $dates = explode(' s/d ', $tanggal);
                                        $startDate = date('Y-m-d', strtotime($dates[0]));
                                        $endDate = date('Y-m-d', strtotime($dates[1]));
                                        $startDatelihat = date('d-M-Y', strtotime($dates[0]));
                                        $endDatelihat = date('d-M-Y', strtotime($dates[1]));


                                        //Jumlah Transaksi
                                        $sql = "SELECT SUM(jumlah) AS jumlah, tgl_transaksi
                                                FROM transaksi 
                                                WHERE tgl_transaksi BETWEEN '$startDate' AND '$endDate' group by tgl_transaksi";
                                        $query = mysqli_query($koneksi, $sql);
                                        $chart = array();

                                        while ($data = mysqli_fetch_array($query)) {
                                            $chart['jumlah'][] = $data['jumlah'];
                                            $chart['tgl_transaksi'][] = $data['tgl_transaksi'];
                                        }

                                        //Jumlah Transaksi Yang Dilakukan Distributor
                                        $sql2 = "SELECT COUNT(nama_distributor) AS jumlah, nama_distributor
                                                 FROM transaksi 
                                                 JOIN distributor ON transaksi.id_distributor=distributor.id_distributor
                                                 WHERE tgl_transaksi BETWEEN '$startDate' AND '$endDate'
                                                 GROUP BY nama_distributor";
                                        $query2 = mysqli_query($koneksi, $sql2);
                                        $chart2 = array();
                                        while ($data2 = mysqli_fetch_array($query2)) {
                                            $chart2['jumlah'][] = $data2['jumlah'];
                                            $chart2['nama_distributor'][] = $data2['nama_distributor'];
                                        }

                                        //Jumlah Pupuk Yang Terjual
                                        $sql3 = "SELECT SUM(transaksi.jumlah) AS jumlah, pupuk.jenis_pupuk
                                                 FROM transaksi 
                                                 JOIN gudang_to_pupuk ON transaksi.id_gudang_to_pupuk=gudang_to_pupuk.id_gudang_to_pupuk
                                                 JOIN pupuk ON gudang_to_pupuk.id_pupuk=pupuk.id_pupuk
                                                 WHERE tgl_transaksi BETWEEN '$startDate' AND '$endDate'
                                                 GROUP BY pupuk.jenis_pupuk";
                                        $query3 = mysqli_query($koneksi, $sql3);
                                        $chart3 = array();
                                        while ($data3 = mysqli_fetch_array($query3)) {
                                            $chart3['jumlah'][] = $data3['jumlah'];
                                            $chart3['jenis_pupuk'][] = $data3['jenis_pupuk'];
                                        }
                                        ?>

                                        <div class = "row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class = "normal-table-list mg-t-30">
                                                    <h2 class="text-center">Laporan Transaksi <?php echo $startDatelihat; ?> Sampai <?php echo $endDatelihat; ?></h2>
                                                </div>
                                            </div>
                                        </div>
                                        <div class = "row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class = "normal-table-list mg-t-30">
                                                    <h3>Jumlah Transaksi</h3>
                                                    <canvas id="chart1"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        <div class = "row">
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                <div class = "normal-table-list mg-t-30">
                                                    <h3>Jumlah Transaksi Yang Dilakukan Distributor</h3>
                                                    <canvas id="chart2"></canvas>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                <div class = "normal-table-list mg-t-30">
                                                    <h3>Jumlah Pupuk Yang Terjual (Dalam Ton)</h3>
                                                    <canvas id="chart3"></canvas>
                                                </div>
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
        <script type="text/javascript">
            $('#daterange').daterangepicker({
                locale: {
                    format: 'DD-MM-YYYY',
                    separator: ' s/d ',
                },
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                startDate: moment().startOf('month'),
                endDate: moment().endOf('month')
            });

        </script>

        <script src="path/to/chartjs/dist/Chart.js"></script>


        <script>
            var kategoriChartCanvas = $("#chart1").get(0).getContext("2d");
            var kategoriChart = new Chart(kategoriChartCanvas, {type: 'line',
                data: {
                    labels: <?php echo json_encode($chart['tgl_transaksi']) ?>,
                    datasets: [{
                            label: '#',
                            data: <?php echo json_encode($chart['jumlah']) ?>,
                            backgroundColor: [
                                'rgba(54, 162, 235, 0.5)',
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

        <script>
            var kategoriChartCanvas = $("#chart2").get(0).getContext("2d");
            var kategoriChart = new Chart(kategoriChartCanvas, {
                type: 'doughnut',
                data: {
                    labels: <?php echo json_encode($chart2['nama_distributor']) ?>,
                    datasets: [{
                            label: '#',
                            data: <?php echo json_encode($chart2['jumlah']) ?>,
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.5)',
                                'rgba(54, 162, 235, 0.5)',
                                'rgba(149, 380, 106, 0.5)',
                                'rgba(235, 142, 52, 0.5)',
                                'rgba(209, 250, 106, 0.5)',
                                'rgba(109, 250, 6, 0.5)',
                                'rgba(255, 99, 132, 0.5)',
                                'rgba(54, 162, 235, 0.5)',
                                'rgba(149, 380, 106, 0.5)',
                                'rgba(235, 142, 52, 0.5)',
                                'rgba(209, 250, 106, 0.5)',
                                'rgba(109, 250, 6, 0.5)',
                                'rgba(255, 99, 132, 0.5)',
                                'rgba(54, 162, 235, 0.5)',
                                'rgba(149, 380, 106, 0.5)',
                                'rgba(235, 142, 52, 0.5)',
                                'rgba(209, 250, 106, 0.5)',
                                'rgba(109, 250, 6, 0.5)',
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

        <script>
            var kategoriChartCanvas = $("#chart3").get(0).getContext("2d");
            var kategoriChart = new Chart(kategoriChartCanvas, {
                type: 'doughnut',
                data: {
                    labels: <?php echo json_encode($chart3['jenis_pupuk']) ?>,
                    datasets: [{
                            label: '#',
                            data: <?php echo json_encode($chart3['jumlah']) ?>,
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.5)',
                                'rgba(54, 162, 235, 0.5)',
                                'rgba(149, 380, 106, 0.5)',
                                'rgba(235, 142, 52, 0.5)',
                                'rgba(209, 250, 106, 0.5)',
                                'rgba(109, 250, 6, 0.5)',
                                'rgba(255, 99, 132, 0.5)',
                                'rgba(54, 162, 235, 0.5)',
                                'rgba(149, 380, 106, 0.5)',
                                'rgba(235, 142, 52, 0.5)',
                                'rgba(209, 250, 106, 0.5)',
                                'rgba(109, 250, 6, 0.5)',
                                'rgba(255, 99, 132, 0.5)',
                                'rgba(54, 162, 235, 0.5)',
                                'rgba(149, 380, 106, 0.5)',
                                'rgba(235, 142, 52, 0.5)',
                                'rgba(209, 250, 106, 0.5)',
                                'rgba(109, 250, 6, 0.5)',
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
        <!-- End JS area-->
    </body>

</html>