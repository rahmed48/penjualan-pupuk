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
                        <button name="simpan" type="submit" value="simpan" class="btn btn-login btn-success btn-float"><i class="notika-icon notika-right-arrow right-arrow-ant"></i></button>
                    </div>

                    <div class="nk-navigation nk-lg-ic">
                        <a href="register.php" data-ma-action="nk-login-switch" data-ma-block="#l-register"><i class="notika-icon notika-plus-symbol"></i> <span>Register</span></a>
                    </div>
                </form>
            </div>

            <!-- Start JS area-->
            <?php
            include 'partial/js.php';
// Load file head.php 
            ?>
            <!-- End JS area-->
    </body>

</html>