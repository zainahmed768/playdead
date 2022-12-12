<?php include 'inc/app.php' ?>
<!-- css start here -->
<link rel="stylesheet" href="css/character-creation.css">
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
                                <img src="img/character-creation.png" class="img-fluid" alt="">
                            </figure>
                        </div>
                        <div class="character-form-wrapper">
                            <form action="">
                                <div class="from-group row">
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" value="The warrior">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Type Character Name">
                                    </div>
                                </div>
                                <div class="form-group row mt-4">
                                    <div class="col-md-4">
                                        <div class="input-images"></div>

                                    </div>
                                </div>
                                <div class="form-group ammo row">
                                    <div class="col-md-6">
                                        <label for="ammo">ammo</label>
                                        <input type="text" class="form-control sm">
                                        <input type="text" class="form-control sm">
                                        <input type="text" class="form-control sm">
                                        <input type="text" class="form-control sm">
                                        <input type="text" class="form-control sm">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="ammo">armor pvp</label>
                                        <input type="text" class="form-control sm">
                                        <input type="text" class="form-control sm">
                                        <input type="text" class="form-control sm">
                                        <input type="text" class="form-control sm">
                                    </div>
                                </div>
                                <div class="form-group ammo row">
                                    <div class="col-md-6">
                                        <label for="ammo">armor pve</label>
                                        <input type="text" class="form-control sm">
                                        <input type="text" class="form-control sm">
                                        <input type="text" class="form-control sm">
                                        <input type="text" class="form-control sm">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="ammo">awards</label>
                                        <input type="text" class="form-control sm">
                                        <input type="text" class="form-control sm">
                                        <input type="text" class="form-control sm">
                                        <input type="text" class="form-control sm">
                                        <input type="text" class="form-control sm">
                                    </div>
                                </div>
                                <div class="form-group ammo row">
                                    <div class="col-md-6">
                                        <label for="bionics">bionics</label>
                                        <input type="text" class="form-control sm">
                                        <input type="text" class="form-control sm">
                                        <input type="text" class="form-control sm">
                                        <input type="text" class="form-control sm">
                                        <input type="text" class="form-control sm">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="potions">potions</label>
                                        <input type="text" class="form-control sm">
                                        <input type="text" class="form-control sm">
                                        <input type="text" class="form-control sm">
                                        <input type="text" class="form-control sm">
                                    </div>
                                </div>
                                <div class="form-group ammo row">
                                    <div class="col-md-6">
                                        <label for="gems">gems & glyphs</label>
                                        <input type="text" class="form-control sm">
                                        <input type="text" class="form-control sm">
                                        <input type="text" class="form-control sm">
                                        <input type="text" class="form-control sm">
                                        <input type="text" class="form-control sm">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="pets">pets</label>
                                        <input type="text" class="form-control sm">
                                        <input type="text" class="form-control sm">
                                        <input type="text" class="form-control sm">
                                        <input type="text" class="form-control sm">
                                        <input type="text" class="form-control sm">
                                    </div>
                                </div>
                                <div class="form-group ammo row">
                                    <div class="col-md-6">
                                        <label for="gems">grenades</label>
                                        <input type="text" class="form-control sm">
                                        <input type="text" class="form-control sm">
                                        <input type="text" class="form-control sm">
                                        <input type="text" class="form-control sm">
                                        <input type="text" class="form-control sm">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="pets">skin</label>
                                        <input type="text" class="form-control sm">
                                        <input type="text" class="form-control sm">
                                        <input type="text" class="form-control sm">
                                        <input type="text" class="form-control sm">
                                    </div>
                                </div>
                                <div class="form-group ammo row">
                                    <div class="col-md-6">
                                        <label for="gems">legends</label>
                                        <input type="text" class="form-control sm">
                                        <input type="text" class="form-control sm">
                                        <input type="text" class="form-control sm">
                                        <input type="text" class="form-control sm">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="pets">smokes & sparks</label>
                                        <input type="text" class="form-control sm">
                                        <input type="text" class="form-control sm">
                                        <input type="text" class="form-control sm">
                                        <input type="text" class="form-control sm">
                                        <input type="text" class="form-control sm">
                                    </div>
                                </div>
                                <div class="form-group ammo row">
                                    <div class="col-md-6">
                                        <label for="gems">misc</label>
                                        <input type="text" class="form-control sm">
                                        <input type="text" class="form-control sm">
                                        <input type="text" class="form-control sm">
                                        <input type="text" class="form-control sm">
                                        <input type="text" class="form-control sm">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="pets">stronghold</label>
                                        <input type="text" class="form-control sm">
                                        <input type="text" class="form-control sm">
                                        <input type="text" class="form-control sm">
                                        <input type="text" class="form-control sm">
                                    </div>
                                </div>
                                <div class="form-group ammo row">
                                    <div class="col-md-6">
                                        <label for="gems">player buffs</label>
                                        <input type="text" class="form-control sm">
                                        <input type="text" class="form-control sm">
                                        <input type="text" class="form-control sm">
                                        <input type="text" class="form-control sm">
                                        <input type="text" class="form-control sm">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="pets">weapons</label>
                                        <input type="text" class="form-control sm">
                                        <input type="text" class="form-control sm">
                                        <input type="text" class="form-control sm">
                                        <input type="text" class="form-control sm">
                                        <input type="text" class="form-control sm">
                                    </div>
                                </div>
                                <div class="form-group mt-4">
                                    <button class="btn">submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3"></div>
                </div>
            </div>
        </section>
    </div>
</section>
<?php include 'inc/footerlinks.php' ?>