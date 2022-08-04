<?php include 'inc/app.php' ?>
<!-- css start here -->
<link rel="stylesheet" href="css/login.css">
<!-- css start here -->
<!-- Detail Section Start Here -->
<section class="fram-sec">
    <div class="frame-wrapper">
        <div class="border-left">
            <img src="img/borderleft.png" class="img-fluid" alt="">
        </div>
        <div class="centerLogoDv">
            <figure><img src="img/logodv.png" alt=""></figure>
        </div>
        <div class="border-right">
            <img src="img/borderright.png" class="img-fluid" alt="">
        </div>
        <!-- LOGO -->
        <div class="TopCenter">
            <?php include 'inc/logo.php'; ?>
        </div>
        <!-- LOGO -->

        <!-- Menus -->
        <div class="row">
            <div class="col-md-7">

            </div>
            <div class="col-md-5">

            </div>
        </div>
        <!-- Menus -->

        <!-- Main Content Start Here -->
        <div class="login">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4">

                    </div>
                    <div class="col-lg-4">
                        <div class="login-wrapper">
                            <form action="">
                                <h4 class="text-center">Log In</h4>
                                <div class="form-group">
                                    <input type="text" class="login-field form-control" placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="login-field form-control" placeholder="Password">
                                </div>
                                <div class="form-group row">
                                <div class="col-md-6 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Remember me</label>
                                </div>
                                <div class="col-md-6 text-right">
                                    <a href="" class="forget-password">Forgot Password?</a>
                                </div>
                                </div>
                                <div class="form-group">
                                    <a href="welcome.php" class="form-submit">Log in</a>
                                </div>
                                <!-- <div class="form-group text-center">
                                    <span class="create-account">Don't have account sign-up &nbsp; <a href="signup.php">Sign up</a></span>
                                </div> -->
                                
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4">

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>