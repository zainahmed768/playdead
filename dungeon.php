<?php include 'inc/app.php' ?>
<!-- css start here -->
<link rel="stylesheet" href="css/castle.css">
<!-- css start here -->

<style>
.frame-wrapper {
    background-image: url('./img/dungeon-back.png') !important;
}
</style>

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
                <div class="Menus text-right">
                    <?php include 'inc/menu.php'; ?>
                </div>
            </div>
        </div>
        <!-- Menus -->

        <!-- Castle Sec Start Here -->
        <section class="castle_sec">
            <div class="container">
                <!-- Menus Start Here -->
                <?php include 'inc/castle-menus.php'?>
                <!-- Menus End Here -->
                <div class="heading_wrapper">
                    <figure><img src="img/dungeon-txt.png" alt="" class="img-fluid"></figure>
                </div>
            </div>
        </section>
        <!-- Castle Sec End Here -->

    </div>
</section>