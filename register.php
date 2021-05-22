<!doctype html>
<html class="no-js" lang="">

    <head>
        <?php
        // Load file head.php 
        include 'partial/head.php';
        ?>
    </head>

    <body>
        <?php
        include 'partial/atas.php';
        // Load file headertoparea.php 
        ?>
        <br>
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
                                            <h2>Register Distributor</h2>
                                        </div>
                                        <form action="register_act.php" method="POST"  enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <div class="nk-int-st">
                                                            <label class="nk-label">Nama Distributor</label>
                                                            <input type="text" name="nama_distributor" class="form-control" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <div class="nk-int-st cmp-int-in cmp-email-over">
                                                            <label class="nk-label">Email Distributor</label>
                                                            <input type="email" name="email_distributor" class="form-control" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <div class="nk-int-st">
                                                            <label class="nk-label">No Telepon</label>
                                                            <input type="number" name="no_telepon" class="form-control" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <div class="nk-int-st">
                                                            <label class="nk-label">Username</label>
                                                            <input type="text" name="username" class="form-control" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <div class="nk-int-st cmp-int-in cmp-email-over">
                                                            <label class="nk-label">Password</label>
                                                            <input type="password" name="password" class="form-control" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">                                                    
                                                    <div>
                                                        <label class="nk-label">Provinsi</label>
                                                        <select class="form-control" name="provinsi" id="provinsi" required>
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
                                                        <select class="form-control" name="kabupaten" id="kabupaten" required>
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
                                                        <select class="form-control" name="kecamatan" id="kecamatan" required>
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
                                                        <select class="form-control" name="kelurahan" id="kelurahan" required>
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
                                                            <label class="nk-label">Detail Alamat</label>
                                                            <input type="text" name="alamat_distributor"
                                                                   class="form-control" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <div class="nk-int-st">
                                                            <label class="nk-label">Foto</label>
                                                            <input class="form-control" type="file" name="foto" accept="image/*" required>
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
                                                                <p>Data Yang Anda Masukkan Akan Langsung Terkirim Ke Admin, Tunggu Persetujuan Dari Admin Untuk Penjadi Distributor Resmi</p>
                                                                <p>Jika Telah Disetujui Oleh Admin, Anda Akan Menerima Email Bahwa Telah Disetujui, Yang Dikirim Ke EMail Yang Telah Anda Isi</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button class="btn btn-default" name="simpan" type="submit" value="simpan">Simpan</button>
                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                                            </div>
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