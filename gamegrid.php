<?php include 'inc/app.php' ?>
<!-- css start here -->
<link rel="stylesheet" href="css/gamegrid.css">
<!-- css start here -->
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
            <!-- <div class="col-md-7">

            </div> -->
            <div class="col-md-12">
                <div class="Menus text-right">
                    <?php include 'inc/menu.php'; ?>
                </div>
            </div>
        </div>
        <!-- Menus -->
        <!-- Main Content Start Here -->
        <section class="game-grid">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8">
                        <div class="game-grid-wrapper text-center">
                            <h5 class="animate__animated animate__fadeInDown">Game Grid Coming Soon</h5>
                            <h4 class="animate__animated animate__fadeInDown">please create your character</h4>
                            <div class="btn-wrapper mt-5">
                                <button onclick="location.href='thearchives.php'" class="btn">Continue....</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2"></div>
                </div>
            </div>
        </section>
        <!-- Main Content ends Here -->
    </div>
</section>
<?php include 'inc/footerlinks.php' ?>