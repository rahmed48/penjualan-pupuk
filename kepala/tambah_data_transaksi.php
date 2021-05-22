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
                <?php
                include 'koneksi.php';
                $sql = "SELECT * FROM transaksi ";
                $query = mysqli_query($koneksi, $sql);
                ?>

                <?php
                if (isset($_GET['pesan'])) {
                    if ($_GET['pesan'] == "berhasil") {
                        echo "<div class='alert-list'>
                            <div class='alert alert-info alert-dismissible' role='alert'>
                                <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'><i class='notika-icon notika-close'></i></span></button> Permintaan Berhasil Dikirimkan, Tunggu Persetujuan untuk proses selanjutnya.
                            </div>
                            </div>";
                    } else {
                        echo "<div class='alert-list'>
                            <div class='alert alert-info alert-dismissible' role='alert'>
                                <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'><i class='notika-icon notika-close'></i></span></button> Permintaan Gagal Dikirimkan, Silahkan Coba Lagi.
                            </div>
                            </div>";
                    }
                }
                ?>

                <div class="row">
                    <div class="form-element-area">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-element-list">
                                        <div class="basic-tb-hd">
                                            <h2>Permintaan Baru</h2>
                                        </div>
                                        <form action="tambah_transaksi_act.php" method="POST">                                            
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">                                                    
                                                    <div class="chosen-select-act fm-cmp-mg">
                                                        <label class="nk-label">Pilih Distributor</label>
                                                        <?php
                                                        include 'koneksi.php';
                                                        $sql = "SELECT * FROM distributor ORDER BY id_distributor DESC";
                                                        $query = mysqli_query($koneksi, $sql);
                                                        ?>
                                                        <select name="id_distributor" class="chosen" data-placeholder="Pilih distributor"> 
                                                            <?php while ($data = mysqli_fetch_array($query)) { ?>
                                                                <option value="<?php echo $data['id_distributor']; ?>">
                                                                    <?php echo $data['nama_distributor']; ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <br>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">                                                    
                                                    <div class="chosen-select-act fm-cmp-mg">
                                                        <label class="nk-label">Pilih Produk</label>
                                                        <?php
                                                        include 'koneksi.php';
                                                        $sql = "SELECT gudang.nama_gudang,pupuk.jenis_pupuk,gudang_to_pupuk.id_gudang_to_pupuk
                                                                FROM gudang_to_pupuk
                                                                JOIN gudang ON gudang_to_pupuk.id_gudang=gudang.id_gudang
                                                                JOIN pupuk ON gudang_to_pupuk.id_pupuk=pupuk.id_pupuk";
                                                        $query = mysqli_query($koneksi, $sql);
                                                        ?>
                                                        <select name="id_gudang_to_pupuk" class="chosen" data-placeholder="Pilih Produk"> 
                                                            <?php while ($data = mysqli_fetch_array($query)) { ?>
                                                                <option value="<?php echo $data['id_gudang_to_pupuk']; ?>">
                                                                    <?php echo $data['nama_gudang']; ?> - <?php echo $data['jenis_pupuk']; ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>  

                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <div class="nk-int-st">
                                                            <div class="form-group nk-datapk-ctm form-elet-mg" id="data_1">
                                                                <label class="control-label">Tanggal Transaksi </label>
                                                                <div class="input-group date nk-int-st">
                                                                    <span class="input-group-addon"></span>
                                                                    <input type="text" class="form-control" name="tgl_transaksi">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <div class="nk-int-st">
                                                            <label class="nk-label">Jumlah Barang (Ton)</label>
                                                            <input class="form-control" type="number" name="jumlah" required>
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
            </div></div>
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