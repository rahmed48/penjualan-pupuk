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
                $id = $_GET ['id'];
                $sql = "SELECT * FROM transaksi WHERE id_transaksi='$id'";
                $query = mysqli_query($koneksi, $sql);
                $data = mysqli_fetch_assoc($query)
                ?> 

                <div class="row">
                    <div class="form-element-area">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-element-list">
                                        <div class="basic-tb-hd">
                                            <h2>Edit Transaksi</h2>
                                        </div>
                                        <form action="edit_data_transaksi_act.php" method="POST">
                                            <input  type="hidden" name="id" class="form-control" value="<?php echo $data['id_transaksi']; ?>">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">                                                    
                                                    <div class="chosen-select-act fm-cmp-mg">
                                                        <label class="nk-label">Pilih Distributor</label>
                                                        <?php
                                                        include 'koneksi.php';

                                                        $sql2 = "SELECT * FROM distributor";
                                                        $query2 = mysqli_query($koneksi, $sql2);
                                                        ?>
                                                        <select name="id_distributor" id="id_distributor" class="chosen" data-placeholder="Pilih Gudang"> 
                                                            <?php $selected = ""; ?>

                                                            <?php while ($row = mysqli_fetch_array($query2)) { ?>
                                                                <?php if ($row['id_distributor'] == $data['id_distributor']) { ?>
                                                                    <?php $selected = 'selected'; ?>

                                                                    <?php
                                                                } else {
                                                                    $selected = "";
                                                                }
                                                                ?>
                                                                <option value="<?php echo $row['id_distributor']; ?>" <?php echo $selected; ?>>
                                                                    <?php echo $row['nama_distributor']; ?>
                                                                </option>
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

                                                        $sql3 = "SELECT *
                                                                FROM gudang_to_pupuk
                                                                JOIN gudang ON gudang_to_pupuk.id_gudang=gudang.id_gudang
                                                                JOIN pupuk ON gudang_to_pupuk.id_pupuk=pupuk.id_pupuk";

                                                        $query3 = mysqli_query($koneksi, $sql3);
                                                        ?>
                                                        <select name="id_gudang_to_pupuk" id="id_gudang_to_pupuk" class="chosen" data-placeholder="Pilih Pupuk"> 
                                                            <?php $selected = ""; ?>

                                                            <?php while ($row = mysqli_fetch_array($query3)) { ?>
                                                                <?php if ($row['id_gudang_to_pupuk'] == $data['id_gudang_to_pupuk']) { ?>
                                                                    <?php $selected = 'selected'; ?>

                                                                    <?php
                                                                } else {
                                                                    $selected = "";
                                                                }
                                                                ?>
                                                                <option value="<?php echo $row['id_gudang_to_pupuk']; ?>" <?php echo $selected ?>>
                                                                    <?php echo $row['nama_gudang']; ?> - <?php echo $row['jenis_pupuk']; ?>
                                                                </option>
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
                                                                    <input type="text" class="form-control" name="tgl_transaksi" value="<?php echo $data['tgl_transaksi']; ?>">
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
                                                            <label class="control-label">Jumlah Barang </label>
                                                            <input class="form-control" type="number" name="jumlah" value="<?php echo $data['jumlah'];?>">
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