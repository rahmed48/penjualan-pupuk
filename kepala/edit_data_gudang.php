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
                $id = $_GET ['id'];
                $sql = "SELECT * FROM gudang WHERE id_gudang='$id'";
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
                                            <h2>Edit Data Gudang</h2>
                                        </div>
                                        <form action="edit_data_gudang_act.php" method="POST">
                                            <input  type="hidden" name="id" class="form-control" value="<?php echo $data['id_gudang']; ?>">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <div class="nk-int-st">
                                                            <label class="nk-label">Nama Gudang</label>
                                                            <input type="text" name="nama_gudang" class="form-control" 
                                                                   value="<?php echo $data['nama_gudang']; ?>">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <div class="nk-int-st">
                                                            <label class="nk-label">Alamat Gudang</label>
                                                            <input type="text" name="alamat_gudang" class="form-control" 
                                                                   value="<?php echo $data['alamat_gudang']; ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>                                            
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <div class="nk-int-st">
                                                            <label class="nk-label">Nama Kepala Gudang</label>
                                                            <input type="text" name="nama_kplgdg" class="form-control" 
                                                                   value="<?php echo $data['nama_kplgdg']; ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <div class="nk-int-st">
                                                            <label class="nk-label">No HP Kepala Gudang</label>
                                                            <input type="text" name="hp_kplgdg" class="form-control" 
                                                                   value="<?php echo $data['hp_kplgdg']; ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <div class="nk-int-st cmp-int-in cmp-email-over">
                                                            <label class="nk-label">E-Mail Kepala Gudang</label>
                                                            <input type="text" name="email_kplgdg" class="form-control" 
                                                                   value="<?php echo $data['email_kplgdg']; ?>">                                                                   
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">                                                    
                                                    <div class="chosen-select-act fm-cmp-mg">
                                                        <label class="nk-label">Provinsi</label>
                                                        <?php
                                                        include 'koneksi.php';

                                                        $id = $_GET ['id'];
                                                        $sql2 = "SELECT * FROM prov WHERE id_prov='11' OR id_prov='12'";
                                                        $query2 = mysqli_query($koneksi, $sql2);
                                                        ?>
                                                        <select name="id_prov" id="id_prov" class="chosen" data-placeholder="Pilih Wilayah"> 
                                                            <?php $selected = ""; ?>

                                                            <?php while ($row = mysqli_fetch_array($query2)) { ?>
                                                                <?php if ($row['id_prov'] == $data['id_prov']) { ?>
                                                                    <?php $selected = 'selected'; ?>

                                                                    <?php
                                                                } else {
                                                                    $selected = "";
                                                                }
                                                                ?>
                                                                <option value="<?php echo $row['id_prov']; ?>" <?php echo $selected ?>>
                                                                    <?php echo $row['nm_prov']; ?>
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
                                                        <label class="nk-label">Kabupaten / Kota</label>
                                                        <?php
                                                        include 'koneksi.php';
                                                        $id = $_GET ['id'];
                                                        $sql3 = "SELECT * FROM kab WHERE id_kab LIKE '11%' OR id_kab LIKE '12%'";
                                                        $query3 = mysqli_query($koneksi, $sql3);
                                                        ?>
                                                        <select name="id_kab" class="chosen" data-placeholder="Pilih Wilayah"> 
                                                            <?php $selected = ""; ?>

                                                            <?php while ($row = mysqli_fetch_array($query3)) { ?>
                                                                <?php if ($row['id_kab'] == $data['id_kab']) { ?>
                                                                    <?php $selected = 'selected'; ?>

                                                                    <?php
                                                                } else {
                                                                    $selected = "";
                                                                }
                                                                ?>
                                                                <option value="<?php echo $row['id_kab']; ?>" <?php echo $selected ?>>
                                                                    <?php echo $row['nm_kab']; ?>
                                                                </option>   
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
        <!-- End JS area-->
    </body>

</html>