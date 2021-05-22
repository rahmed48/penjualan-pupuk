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
                $sql = "SELECT * FROM pendaftaran WHERE id_pendaftaran='$id'";
                $query = mysqli_query($koneksi, $sql);
                $data = mysqli_fetch_assoc($query)
                ?> 

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="data-table-list mg-t-30">
                            <div class="basic-tb-hd">
                                <h2>Detail Permintaan</h2>

                            </div>
                            <form action="pendaftaran_act.php" method="POST">
                                <input  type="hidden" name="id" class="form-control" value="<?php echo $data['id_pendaftaran']; ?>">
                                <div class="table-responsive">
                                    <div class="bsc-tbl">
                                        <table class="table table-sc-ex">

                                            <?php
                                            include 'koneksi.php';
                                            $sql = "SELECT *
                                                FROM pendaftaran
                                                JOIN prov ON pendaftaran.id_prov=prov.id_prov
                                                JOIN kab ON pendaftaran.id_kab=kab.id_kab
                                                JOIN kec ON pendaftaran.id_kec=kec.id_kec
                                                JOIN desa ON pendaftaran.id_desa=desa.id_desa
                                                WHERE id_pendaftaran='$id'";
                                            $query = mysqli_query($koneksi, $sql);
                                            $nomor = 1;

                                            while ($data = mysqli_fetch_array($query)) {
                                                ?>

                                                <tbody>
                                                    <tr>
                                                        <td>NAMA CALON DISTRIBUTOR :</td>
                                                        <td><?php echo $data['nama_distributor']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>USERNAME</td>
                                                        <td><?php echo $data['username']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>E-MAIL</td></td>
                                                        <td><?php echo $data['email_distributor']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>NO TELEPON</td>
                                                        <td><?php echo $data['no_telepon']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>ALAMAT</td>
                                                        <td><?php echo $data['nm_desa']; ?>, <?php echo $data['nm_kec']; ?>, <?php echo $data['nm_kab']; ?>, <?php echo $data['nm_prov']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>DETAIL ALAMAT</td>
                                                        <td><?php echo $data['alamat_distributor']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>FOTO</td>
                                                        <td><img src=../images/<?php echo $data['foto'] ?> width="100px"></td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        
                                        <?php } ?>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <h3>Setujui Distributor ??</h3>
                                            <p>Jika setuju maka distributor ini akan menjadi distributor resmi, dan mengirim pemberitahuan ke email distributor bahwa telah disetujui</p>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <button type="button" onclick="javascript:history.back()" class="btn btn-info" ><i class="notika-icon notika-left-arrow"></i> Kembali</button>    
                                                    <button class="btn btn-primary" name="setuju" type="submit" value="setuju"><i class="notika-icon notika-checked"></i> Setuju</button>
                                                    <button class="btn btn-danger" name="tolak" type="submit" value="tolak"><i class="notika-icon notika-close"></i> Tolak</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
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
        <!-- End JS area-->
    </body>

</html>