<?php include 'inc/app.php' ?>
<!-- css start here -->
<link rel="stylesheet" href="css/guildcreation.css">
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
        <section class="character">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-6">
                        <div class="character-creation text-center">
                            <figure>
                                <img src="img/guildcreation.png" class="img-fluid" alt="">
                            </figure>
                        </div>
                        <div class="character-form-wrapper">
                            <form action="">
                                <div class="from-group row">
                                    <div class="col-md-6">
                                        <label for="GuildName">Guild Name</label>
                                        <input type="text" class="form-control" placeholder="Type here">
                                    </div>
                                </div>
                                <div class="form-group my-3">
                                    <textarea name="" placeholder="Description ..." class="form-control" id="" cols="30"
                                        rows="8"></textarea>
                                </div>
                                <div class="form-group row mt-4">
                                    <div class="col-md-4">
                                        <div class="input-images"></div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" placeholder="Guild Leader">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" placeholder="Add Co-Leader">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" placeholder="Search Player">
                                    </div>
                                    <div class="col-lg-6">
                                        <button class="btn">create guild</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3"></div>
                </div>
            </div>
        </section>
        <!-- Main Content ends Here -->
    </div>
</section>
<?php include 'inc/footerlinks.php' ?>