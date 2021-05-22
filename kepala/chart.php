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
        include 'partial/mainmenu4.php';
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
                                        
                                        
                                        <?php
                                        include 'koneksi.php';
                                        $sql = "SELECT COUNT(jenis_pupuk) AS jumlah,nama_gudang
                                                FROM gudang_to_pupuk
                                                JOIN gudang ON gudang_to_pupuk.id_gudang=gudang.id_gudang
                                                JOIN pupuk ON gudang_to_pupuk.id_pupuk=pupuk.id_pupuk
                                                group by nama_gudang";
                                        $query = mysqli_query($koneksi, $sql);
                                        $chart = array();
                                        while ($data = mysqli_fetch_array($query)) {
                                            $chart['jumlah'][] = $data['jumlah'];
                                            $chart['nama_gudang'][] = $data['nama_gudang'];
                                        }
                                        ?>

                                        <?php
                                        include 'koneksi.php';
                                        $sql2 = "SELECT COUNT(nama_distributor) AS jumlah, nama_distributor
                                                 FROM transaksi 
                                                 JOIN distributor ON transaksi.id_distributor=distributor.id_distributor
                                                 group by nama_distributor";
                                        $query2 = mysqli_query($koneksi, $sql2);
                                        $chart2 = array();
                                        while ($data2 = mysqli_fetch_array($query2)) {
                                            $chart2['jumlah'][] = $data2['jumlah'];
                                            $chart2['nama_distributor'][] = $data2['nama_distributor'];
                                        }
                                        ?>
                                        
                                        <?php
                                        include 'koneksi.php';
                                        $sql3 = "SELECT COUNT(id_gudang) AS jumlah, nm_prov
                                                 FROM gudang
                                                 JOIN prov ON prov.id_prov=gudang.id_prov
                                                 group by nm_prov";
                                        $query3 = mysqli_query($koneksi, $sql3);
                                        $chart3 = array();
                                        while ($data3 = mysqli_fetch_array($query3)) {
                                            $chart3['jumlah'][] = $data3['jumlah'];
                                            $chart3['nm_prov'][] = $data3['nm_prov'];
                                        }
                                        ?>

                                        <?php
                                        include 'koneksi.php';
                                        $sql4 = "SELECT COUNT(id_gudang) AS jumlah, nm_kab
                                                 FROM gudang
                                                 JOIN kab ON kab.id_kab=gudang.id_kab
                                                 group by nm_kab";
                                        $query4 = mysqli_query($koneksi, $sql4);
                                        $chart4 = array();
                                        while ($data4 = mysqli_fetch_array($query4)) {
                                            $chart4['jumlah'][] = $data4['jumlah'];
                                            $chart4['nm_kab'][] = $data4['nm_kab'];
                                        }
                                        ?>

                                        <div class = "row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class = "normal-table-list mg-t-30">
                                                    <h3>Jenis Pupuk Yang Tersedia Pada Setiap Gudang</h3>
                                                    <canvas id="chart1"></canvas>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class = "normal-table-list mg-t-30">
                                                    <h3>Jumlah Transaksi Yang Dilakukan Distributor</h3>
                                                    <canvas id="chart2"></canvas>
                                                </div>
                                            </div>
                                        </div>

                                        <div class = "row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class = "normal-table-list mg-t-30">
                                                    <h3>Jumlah Gudang Pada Tiap Provinsi</h3>
                                                    <canvas id="chart3"></canvas>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class = "normal-table-list mg-t-30">
                                                    <h3>Jumlah Gudang Pada Tiap Kabupaten</h3>
                                                    <canvas id="chart4"></canvas>
                                                </div>
                                            </div>
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

<script src="path/to/chartjs/dist/Chart.js"></script>


<script>
    var kategoriChartCanvas = $("#chart1").get(0).getContext("2d");
    var kategoriChart = new Chart(kategoriChartCanvas, {
        type: 'bar',
        data: {
            labels: <?php echo json_encode($chart['nama_gudang']) ?>,
            datasets: [{
                    label: 'Jumlah',
                    data: <?php echo json_encode($chart['jumlah']) ?>,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.5)',
                        'rgba(54, 162, 235, 0.5)',
                        'rgba(149, 380, 106, 0.5)',
                        'rgba(235, 142, 52, 0.5)',
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
        type: 'line',
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
        type: 'pie',
        data: {
            labels: <?php echo json_encode($chart3['nm_prov']) ?>,
            datasets: [{
                    label: '#',
                    data: <?php echo json_encode($chart3['jumlah']) ?>,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.5)',
                        'rgba(54, 162, 235, 0.5)',
                        'rgba(149, 380, 106, 0.5)',
                        'rgba(235, 142, 52, 0.5)',
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
    var kategoriChartCanvas = $("#chart4").get(0).getContext("2d");
    var kategoriChart = new Chart(kategoriChartCanvas, {
        type: 'doughnut',
        data: {
            labels: <?php echo json_encode($chart4['nm_kab']) ?>,
            datasets: [{
                    label: '#',
                    data: <?php echo json_encode($chart4['jumlah']) ?>,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.5)',
                        'rgba(54, 162, 235, 0.5)',
                        'rgba(149, 380, 106, 0.5)',
                        'rgba(235, 142, 52, 0.5)',
                        'rgba(149, 380, 106, 0.5)',
                        'rgba(235, 142, 52, 0.5)',
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