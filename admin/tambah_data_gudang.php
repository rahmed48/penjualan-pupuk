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

                <?php
                include 'koneksi.php';
                $sql2 = "SELECT * FROM prov WHERE id_prov='11' OR id_prov='12' ORDER BY id_prov DESC";
                $query2 = mysqli_query($koneksi, $sql2);
                ?>
                <?php
                include 'koneksi.php';
                $sql3 = "SELECT * FROM kab WHERE id_kab LIKE '11%' OR id_kab LIKE '12%' ORDER BY id_kab DESC";
                $query3 = mysqli_query($koneksi, $sql3);
                ?>

                <div class="row">
                    <div class="form-element-area">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-element-list">
                                        <div class="basic-tb-hd">
                                            <h2>Tambah Data Gudang</h2>
                                        </div>
                                        <form action="tambah_data_gudang_act.php" method="POST">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <div class="nk-int-st">
                                                            <label class="nk-label">Nama Gudang</label>
                                                            <input type="text" name="nama_gudang" class="form-control" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <div class="nk-int-st">
                                                            <label class="nk-label">Alamat Gudang</label>
                                                            <input type="text" name="alamat_gudang" class="form-control" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">                                                    
                                                    <div>
                                                        <label class="nk-label">Provinsi</label>
                                                        <select class="form-control" name="provinsi" id="provinsi">
                                                            <option value=""></option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">                                                    
                                                    <div>
                                                        <label class="nk-label">Kabupaten / Kota</label>
                                                        <select class="form-control" name="kabupaten" id="kabupaten">
                                                            <option value=""></option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">                                                    
                                                    <div>
                                                        <label class="nk-label">Kecamatan</label>
                                                        <select class="form-control" name="kecamatan" id="kecamatan">
                                                            <option value=""></option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">                                                    
                                                    <div>
                                                        <label class="nk-label">Kelurahan/Desa</label>
                                                        <select class="form-control" name="kelurahan" id="kelurahan">
                                                            <option value=""></option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <div class="nk-int-st">
                                                            <label class="nk-label">Nama Kepala Gudang</label>
                                                            <input type="text" name="nama_kplgdg" class="form-control" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <div class="nk-int-st">
                                                            <label class="nk-label">No HP Kepala Gudang</label>
                                                            <input type="number" name="hp_kplgdg" class="form-control" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <div class="nk-int-st cmp-int-in cmp-email-over">
                                                            <label class="nk-label">E-Mail Kepala Gudang</label>
                                                            <input type="email" name="email_kplgdg" class="form-control" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tile-footer">
                                                <button type="button" onclick="javascript:history.back()" class="btn btn-info" ><i class="notika-icon notika-left-arrow"></i> Kembali</button>    
                                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModaltwo"><i class="notika-icon notika-checked"></i> Simpan</button>



                                                <div class="modal fade" id="myModaltwo" role="dialog">
                                                    <div class="modal-dialog modal-sm">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <h2>Yakin Akan Menyimpan  ??</h2>
                                                                <p>Data Yang Anda Masukkan Akan Langsung Tersimpan Ke Database Sistem, Dan Dapat Diubah Di Form Edit Data</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button class="btn btn-default" name="simpan" type="submit" value="simpan">Simpan</button>
                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </form>
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

        <script type="text/javascript">
                                                    $(document).ready(function () {
                                                        $.ajax({
                                                            type: 'POST',
                                                            url: "get_provinsi.php",
                                                            cache: false,
                                                            success: function (msg) {
                                                                $("#provinsi").html(msg);
                                                            }
                                                        });

                                                        $("#provinsi").change(function () {
                                                            var provinsi = $("#provinsi").val();
                                                            $.ajax({
                                                                type: 'POST',
                                                                url: "get_kabupaten.php",
                                                                data: {provinsi: provinsi},
                                                                cache: false,
                                                                success: function (msg) {
                                                                    $("#kabupaten").html(msg);
                                                                }
                                                            });
                                                        });

                                                        $("#kabupaten").change(function () {
                                                            var kabupaten = $("#kabupaten").val();
                                                            $.ajax({
                                                                type: 'POST',
                                                                url: "get_kecamatan.php",
                                                                data: {kabupaten: kabupaten},
                                                                cache: false,
                                                                success: function (msg) {
                                                                    $("#kecamatan").html(msg);
                                                                }
                                                            });
                                                        });

                                                        $("#kecamatan").change(function () {
                                                            var kecamatan = $("#kecamatan").val();
                                                            $.ajax({
                                                                type: 'POST',
                                                                url: "get_kelurahan.php",
                                                                data: {kecamatan: kecamatan},
                                                                cache: false,
                                                                success: function (msg) {
                                                                    $("#kelurahan").html(msg);
                                                                }
                                                            });
                                                        });
                                                    });
        </script>
        <!-- End JS area-->
    </body>

</html>