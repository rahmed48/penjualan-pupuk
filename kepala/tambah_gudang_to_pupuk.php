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
                $sql = "SELECT gudang.nama_gudang , pupuk.jenis_pupuk
                        FROM gudang_to_pupuk ";
                $query = mysqli_query($koneksi, $sql);
                ?>

                <div class="row">
                    <div class="form-element-area">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-element-list">
                                        <div class="basic-tb-hd">
                                            <h2>Tambah Data Ketersediaan</h2>
                                        </div>
                                        <form action="tambah_gudang_to_pupuk_act.php" method="POST">                                            
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">                                                    
                                                    <div class="chosen-select-act fm-cmp-mg">
                                                        <label class="nk-label">Pilih Gudang</label>
                                                        <?php
                                                        include 'koneksi.php';
                                                        $sql = "SELECT * FROM gudang ORDER BY id_gudang DESC";
                                                        $query = mysqli_query($koneksi, $sql);
                                                        ?>
                                                        <select name="id_gudang" class="chosen" data-placeholder="Pilih Gudang"> 
                                                            <?php while ($data = mysqli_fetch_array($query)) { ?>
                                                                <option value="<?php echo $data['id_gudang']; ?>">
                                                                    <?php echo $data['nama_gudang']; ?></option>
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
                                                        $sql = "SELECT * FROM pupuk ORDER BY id_pupuk DESC";
                                                        $query = mysqli_query($koneksi, $sql);
                                                        ?>
                                                        <select name="id_pupuk" class="chosen" data-placeholder="Pilih Pupuk"> 
                                                            <?php while ($data = mysqli_fetch_array($query)) { ?>
                                                                <option value="<?php echo $data['id_pupuk']; ?>">
                                                                    <?php echo $data['jenis_pupuk']; ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div> 
                                            <br>
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