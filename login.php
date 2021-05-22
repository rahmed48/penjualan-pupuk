<!doctype html>
<html class="no-js" lang="">

    <head>
        <?php
        include 'partial/head.php';
        // Load file head.php 
        ?>
    </head>

    <body>

        <div class="login-content">
            <!-- Login -->

            <div class="nk-block toggled" id="l-login">
                <form action="cek_login.php" method="POST">
                    <div class="nk-form">
                        <div><img src="img/logo/pimlogo.png" width="200px"/></div>
                        <label><h3>Login PT.Pupuk Iskandar Muda</h3></label>
                        <br>
                        <div class="input-group">
                            <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-support"></i></span>
                            <div class="nk-int-st">
                                <input type="text" name="username" class="form-control" placeholder="Username" required>
                            </div>
                        </div>
                        <div class="input-group mg-t-15">
                            <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-edit"></i></span>
                            <div class="nk-int-st">
                                <input type="password" name="password" class="form-control" placeholder="Password" required>
                            </div>
                        </div>
                        <br>
                        <div class="mg-t-15">
                        <button name="simpan" type="submit" value="simpan" class="btn btn-primary waves-effect"> LOGIN </button>
                    </div>
                    </div>

                    <div class="nk-navigation nk-lg-ic">
                        <a href="register.php" data-ma-action="nk-login-switch" data-ma-block="#l-register"><i class="notika-icon notika-plus-symbol"></i> <span>Register</span></a>
                    </div>
                </form>
            </div>

        </div>

        <!-- Start JS area-->
        <?php
        include 'partial/js.php';
// Load file head.php 
        ?>
        <!-- End JS area-->
    </body>

</html>