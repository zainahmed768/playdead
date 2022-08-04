<?php include 'inc/app.php' ?>
<!-- css start here -->
<link rel="stylesheet" href="css/characterstats.css">
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
            <div class="col-md-7">

            </div>
            <div class="col-md-5">
                <div class="Menus text-right">

                </div>
            </div>
        </div>
        <!-- Menus -->
        <!-- Main Content Start Here -->
        <section class="main-content">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <figure>
                            <img src="img/Character.png" alt="">
                        </figure>
                    </div>
                </div>
                <div class="row pt-5">
                    <div class="col-lg-4"></div>
                    <div class="col-lg-4"></div>
                    <div class="col-lg-4">
                        <div class="character-stats-wrapper">
                            <h4>Characters Stats</h4>
                            <form action="">
                                <div class="from-group row my-3">
                                    <div class="col-lg-4">
                                        <label for="Kills">Kills</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="text" class="from-control">
                                    </div>
                                </div>
                                <div class="from-group row my-3">
                                    <div class="col-lg-4">
                                        <label for="Deaths">Deaths</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="text" class="from-control">
                                    </div>
                                </div>
                                <div class="from-group row my-3">
                                    <div class="col-lg-4">
                                        <label for="Wins">Wins</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="text" class="from-control">
                                    </div>
                                </div>
                                <div class="from-group row my-3">
                                    <div class="col-lg-4">
                                        <label for="Losses">Losses</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="text" class="from-control">
                                    </div>
                                </div>
                            </form>
                            <div class="awards-wrapper pt-4">
                                <h4>Awards</h4>
                                
                                <h6> <a href="gamegrid.php"> <img src="img/charactersta.png" alt=""> Orange Dragon Slayer</a></h6>
                                <h6><img src="img/darkwar.png" alt="">Drak Worrior</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Main Content ends Here -->
    </div>
</section>
<?php include 'inc/footerlinks.php' ?>