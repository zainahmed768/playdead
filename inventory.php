<?php include 'inc/app.php' ?>
<!-- css start here -->
<link rel="stylesheet" href="css/inventory.css">
<!-- css start here -->
<!-- Detail Section Start Here -->
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
    <!-- inventory section starts here -->
    <div class="main-content">
        <section class="invent-sec">
            <div class="container">
                <div class="inventroy-Box">
                    <div class="row">
                        <div class="col-sm-4"></div>
                        <div class="col-sm-4">
                            <div class="title text-center">
                                <figure><img src="img/inventorytxt.png" alt=""></figure>
                            </div>
                            <div class="search-Box">
                                <form>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Search item here">
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-sm-4"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <div class="inventories">
                                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                                    aria-orientation="vertical">
                                    <ul class="inventory-links">
                                        <li><a class="nav-link" id="v-pills-home-tab" data-toggle="pill"
                                                href="#v-pills-home" role="tab" aria-controls="v-pills-home"
                                                aria-selected="true">ammo</a></li>
                                        <li> <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill"
                                                href="#v-pills-profile" role="tab" aria-controls="v-pills-profile"
                                                aria-selected="false">armor pve</a></li>
                                        <li><a class="nav-link" id="v-pills-messages-tab" data-toggle="pill"
                                                href="#v-pills-messages" role="tab" aria-controls="v-pills-messages"
                                                aria-selected="false">armor pvp</a></li>
                                        <li><a class="nav-link" id="v-pills-settings-tab" data-toggle="pill"
                                                href="#v-pills-settings" role="tab" aria-controls="v-pills-settings"
                                                aria-selected="false">awards</a></li>
                                        <li><a class="nav-link" id="v-pills-bionics-tab" data-toggle="pill"
                                                href="#v-pills-bionics" role="tab" aria-controls="v-pills-bionics"
                                                aria-selected="false">bionics</a></li>
                                        <li><a class="nav-link" id="v-pills-gems-tab" data-toggle="pill"
                                                href="#v-pills-gems" role="tab" aria-controls="v-pills-gems"
                                                aria-selected="false">gems & glyphs</a></li>
                                        <li><a class="nav-link" id="v-pills-grenades-tab" data-toggle="pill"
                                                href="#v-pills-grenades" role="tab" aria-controls="v-pills-grenades"
                                                aria-selected="false">grenades</a></li>
                                        <li><a class="nav-link" id="v-pills-legends-tab" data-toggle="pill"
                                                href="#v-pills-legends" role="tab" aria-controls="v-pills-legends"
                                                aria-selected="false">legends</a></li>
                                        <li><a class="nav-link" id="v-pills-misc-tab" data-toggle="pill"
                                                href="#v-pills-misc" role="tab" aria-controls="v-pills-misc"
                                                aria-selected="false">misc</a></li>
                                        <li><a class="nav-link" id="v-pills-player-tab" data-toggle="pill"
                                                href="#v-pills-player" role="tab" aria-controls="v-pills-player"
                                                aria-selected="false">player buffs</a></li>
                                        <li><a class="nav-link" id="v-pills-potions-tab" data-toggle="pill"
                                                href="#v-pills-potions" role="tab" aria-controls="v-pills-potions"
                                                aria-selected="false">potions</a></li>
                                        <li><a class="nav-link" id="v-pills-pets-tab" data-toggle="pill"
                                                href="#v-pills-pets" role="tab" aria-controls="v-pills-pets"
                                                aria-selected="false">pets</a></li>
                                        <li><a class="nav-link" id="v-pills-skin-tab" data-toggle="pill"
                                                href="#v-pills-skin" role="tab" aria-controls="v-pills-skin"
                                                aria-selected="false">skin</a></li>
                                        <li><a class="nav-link" id="v-pills-smokes-tab" data-toggle="pill"
                                                href="#v-pills-smokes" role="tab" aria-controls="v-pills-smokes"
                                                aria-selected="false">smokes & sparks</a></li>
                                        <li><a class="nav-link" id="v-pills-stronghold-tab" data-toggle="pill"
                                                href="#v-pills-stronghold" role="tab" aria-controls="v-pills-stronghold"
                                                aria-selected="false">stronghold</a></li>
                                        <li><a class="nav-link" id="v-pills-weapons-tab" data-toggle="pill"
                                                href="#v-pills-weapons" role="tab" aria-controls="v-pills-weapons"
                                                aria-selected="false">weapons</a></li>
                                    </ul>
                                </div>
                                <!-- <ul class="inventory-links">
                                    <li><a class="active" href="#">ammo</a></li>
                                    <li><a href="#">armor pve</a></li>
                                    <li><a href="#">armor pvp</a></li>
                                    <li><a href="#">awards</a></li>
                                    <li><a href="#">bionics</a></li>
                                    <li><a href="#">gems & glyphs</a></li>
                                    <li><a href="#">grenades</a></li>
                                    <li><a href="#">legends</a></li>
                                    <li><a href="#">misc</a></li>
                                    <li><a href="#">player buffs</a></li>
                                    <li><a href="#">potions</a></li>
                                    <li><a href="#">pets</a></li>
                                    <li><a href="#">skin</a></li>
                                    <li><a href="#">smokes & sparks</a></li>
                                    <li><a href="#">stronghold</a></li>
                                    <li><a href="#">weapons</a></li>
                                </ul> -->
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                    aria-labelledby="v-pills-home-tab">
                                    <div class="inventory-selection">
                                        <!-- row 1 starts here -->
                                        <div class="row">
                                            <div class="col-1">
                                                <a href="inventory-detail.php">
                                                    <div class="inventory-itemBox">
                                                        <figure><img src="img/inventory1.png" alt=""></figure>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory3.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory3.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory3.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory3.png" alt=""></figure>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- row 1 starts here -->
                                        <!-- row 2 starts here -->
                                        <div class="row">
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory4.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory5.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory6.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory4.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory5.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory6.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory4.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory5.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory6.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory4.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory5.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory6.png" alt=""></figure>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- row 2 starts here -->
                                        <!-- row 3 starts here -->
                                        <div class="row">
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- row 3 starts here -->
                                        <!-- row 4 starts here -->
                                        <div class="row">
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory9.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory9.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory9.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory9.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- row 4 starts here -->
                                        <!-- row 5 starts here -->
                                        <div class="row">
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory10.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory8.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory5.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory10.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory8.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory5.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory10.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory8.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory5.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory10.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- row 5 starts here -->
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                    aria-labelledby="v-pills-profile-tab">
                                    <div class="inventory-selection">
                                        <!-- row 1 starts here -->
                                        <div class="row">
                                            <div class="col-1">
                                                <a href="inventory-detail.php">
                                                    <div class="inventory-itemBox">
                                                        <figure><img src="img/inventory1.png" alt=""></figure>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory3.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory3.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory3.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory3.png" alt=""></figure>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- row 1 starts here -->
                                        <!-- row 2 starts here -->
                                        <div class="row">
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory4.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory5.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory6.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory4.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory5.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory6.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory4.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory5.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory6.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory4.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory5.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory6.png" alt=""></figure>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- row 2 starts here -->
                                        <!-- row 3 starts here -->
                                        <div class="row">
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- row 3 starts here -->
                                        <!-- row 4 starts here -->
                                        <div class="row">
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory9.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory9.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory9.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory9.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- row 4 starts here -->
                                        <!-- row 5 starts here -->
                                        <div class="row">
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory10.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory8.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory5.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory10.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory8.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory5.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory10.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory8.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory5.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory10.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- row 5 starts here -->
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                                    aria-labelledby="v-pills-messages-tab">
                                    <div class="inventory-selection">
                                        <!-- row 1 starts here -->
                                        <div class="row">
                                            <div class="col-1">
                                                <a href="inventory-detail.php">
                                                    <div class="inventory-itemBox">
                                                        <figure><img src="img/inventory1.png" alt=""></figure>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory3.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory3.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory3.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory3.png" alt=""></figure>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- row 1 starts here -->
                                        <!-- row 2 starts here -->
                                        <div class="row">
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory4.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory5.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory6.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory4.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory5.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory6.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory4.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory5.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory6.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory4.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory5.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory6.png" alt=""></figure>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- row 2 starts here -->
                                        <!-- row 3 starts here -->
                                        <div class="row">
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- row 3 starts here -->
                                        <!-- row 4 starts here -->
                                        <div class="row">
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory9.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory9.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory9.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory9.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- row 4 starts here -->
                                        <!-- row 5 starts here -->
                                        <div class="row">
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory10.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory8.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory5.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory10.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory8.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory5.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory10.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory8.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory5.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory10.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- row 5 starts here -->
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                                    aria-labelledby="v-pills-settings-tab">
                                    <div class="inventory-selection">
                                        <!-- row 1 starts here -->
                                        <div class="row">
                                            <div class="col-1">
                                                <a href="inventory-detail.php">
                                                    <div class="inventory-itemBox">
                                                        <figure><img src="img/inventory1.png" alt=""></figure>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory3.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory3.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory3.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory3.png" alt=""></figure>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- row 1 starts here -->
                                        <!-- row 2 starts here -->
                                        <div class="row">
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory4.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory5.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory6.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory4.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory5.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory6.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory4.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory5.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory6.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory4.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory5.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory6.png" alt=""></figure>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- row 2 starts here -->
                                        <!-- row 3 starts here -->
                                        <div class="row">
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- row 3 starts here -->
                                        <!-- row 4 starts here -->
                                        <div class="row">
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory9.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory9.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory9.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory9.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- row 4 starts here -->
                                        <!-- row 5 starts here -->
                                        <div class="row">
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory10.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory8.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory5.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory10.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory8.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory5.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory10.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory8.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory5.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory10.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- row 5 starts here -->
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-bionics" role="tabpanel"
                                    aria-labelledby="v-pills-bionics-tab">
                                    <div class="inventory-selection">
                                        <!-- row 1 starts here -->
                                        <div class="row">
                                            <div class="col-1">
                                                <a href="inventory-detail.php">
                                                    <div class="inventory-itemBox">
                                                        <figure><img src="img/inventory1.png" alt=""></figure>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory3.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory3.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory3.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory3.png" alt=""></figure>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- row 1 starts here -->
                                        <!-- row 2 starts here -->
                                        <div class="row">
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory4.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory5.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory6.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory4.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory5.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory6.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory4.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory5.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory6.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory4.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory5.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory6.png" alt=""></figure>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- row 2 starts here -->
                                        <!-- row 3 starts here -->
                                        <div class="row">
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- row 3 starts here -->
                                        <!-- row 4 starts here -->
                                        <div class="row">
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory9.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory9.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory9.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory9.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- row 4 starts here -->
                                        <!-- row 5 starts here -->
                                        <div class="row">
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory10.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory8.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory5.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory10.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory8.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory5.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory10.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory8.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory5.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory10.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- row 5 starts here -->
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-gems" role="tabpanel"
                                    aria-labelledby="v-pills-gems-tab">
                                    <div class="inventory-selection">
                                        <!-- row 1 starts here -->
                                        <div class="row">
                                            <div class="col-1">
                                                <a href="inventory-detail.php">
                                                    <div class="inventory-itemBox">
                                                        <figure><img src="img/inventory1.png" alt=""></figure>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory3.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory3.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory3.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory3.png" alt=""></figure>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- row 1 starts here -->
                                        <!-- row 2 starts here -->
                                        <div class="row">
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory4.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory5.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory6.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory4.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory5.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory6.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory4.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory5.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory6.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory4.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory5.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory6.png" alt=""></figure>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- row 2 starts here -->
                                        <!-- row 3 starts here -->
                                        <div class="row">
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- row 3 starts here -->
                                        <!-- row 4 starts here -->
                                        <div class="row">
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory9.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory9.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory9.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory9.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- row 4 starts here -->
                                        <!-- row 5 starts here -->
                                        <div class="row">
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory10.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory8.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory5.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory10.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory8.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory5.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory10.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory8.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory5.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory10.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- row 5 starts here -->
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-grenades" role="tabpanel"
                                    aria-labelledby="v-pills-grenades-tab">
                                    <div class="inventory-selection">
                                        <!-- row 1 starts here -->
                                        <div class="row">
                                            <div class="col-1">
                                                <a href="inventory-detail.php">
                                                    <div class="inventory-itemBox">
                                                        <figure><img src="img/inventory1.png" alt=""></figure>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory3.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory3.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory3.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory3.png" alt=""></figure>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- row 1 starts here -->
                                        <!-- row 2 starts here -->
                                        <div class="row">
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory4.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory5.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory6.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory4.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory5.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory6.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory4.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory5.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory6.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory4.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory5.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory6.png" alt=""></figure>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- row 2 starts here -->
                                        <!-- row 3 starts here -->
                                        <div class="row">
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- row 3 starts here -->
                                        <!-- row 4 starts here -->
                                        <div class="row">
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory9.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory9.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory9.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory9.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- row 4 starts here -->
                                        <!-- row 5 starts here -->
                                        <div class="row">
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory10.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory8.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory5.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory10.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory8.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory5.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory10.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory8.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory5.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory10.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- row 5 starts here -->
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-legends" role="tabpanel"
                                    aria-labelledby="v-pills-legends-tab">
                                    <div class="inventory-selection">
                                        <!-- row 1 starts here -->
                                        <div class="row">
                                            <div class="col-1">
                                                <a href="inventory-detail.php">
                                                    <div class="inventory-itemBox">
                                                        <figure><img src="img/inventory1.png" alt=""></figure>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory3.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory3.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory3.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory3.png" alt=""></figure>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- row 1 starts here -->
                                        <!-- row 2 starts here -->
                                        <div class="row">
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory4.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory5.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory6.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory4.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory5.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory6.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory4.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory5.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory6.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory4.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory5.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory6.png" alt=""></figure>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- row 2 starts here -->
                                        <!-- row 3 starts here -->
                                        <div class="row">
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- row 3 starts here -->
                                        <!-- row 4 starts here -->
                                        <div class="row">
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory9.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory9.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory9.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory9.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- row 4 starts here -->
                                        <!-- row 5 starts here -->
                                        <div class="row">
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory10.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory8.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory5.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory10.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory8.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory5.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory10.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory8.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory5.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory10.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- row 5 starts here -->
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-misc" role="tabpanel"
                                    aria-labelledby="v-pills-misc-tab">
                                    <div class="inventory-selection">
                                        <!-- row 1 starts here -->
                                        <div class="row">
                                            <div class="col-1">
                                                <a href="inventory-detail.php">
                                                    <div class="inventory-itemBox">
                                                        <figure><img src="img/inventory1.png" alt=""></figure>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory3.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory3.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory3.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory3.png" alt=""></figure>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- row 1 starts here -->
                                        <!-- row 2 starts here -->
                                        <div class="row">
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory4.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory5.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory6.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory4.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory5.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory6.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory4.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory5.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory6.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory4.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory5.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory6.png" alt=""></figure>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- row 2 starts here -->
                                        <!-- row 3 starts here -->
                                        <div class="row">
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- row 3 starts here -->
                                        <!-- row 4 starts here -->
                                        <div class="row">
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory9.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory9.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory9.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory9.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- row 4 starts here -->
                                        <!-- row 5 starts here -->
                                        <div class="row">
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory10.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory8.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory5.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory10.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory8.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory5.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory10.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory8.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory5.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory10.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- row 5 starts here -->
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-player" role="tabpanel"
                                    aria-labelledby="v-pills-player-tab">
                                    <div class="inventory-selection">
                                        <!-- row 1 starts here -->
                                        <div class="row">
                                            <div class="col-1">
                                                <a href="inventory-detail.php">
                                                    <div class="inventory-itemBox">
                                                        <figure><img src="img/inventory1.png" alt=""></figure>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory3.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory3.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory3.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory3.png" alt=""></figure>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- row 1 starts here -->
                                        <!-- row 2 starts here -->
                                        <div class="row">
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory4.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory5.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory6.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory4.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory5.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory6.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory4.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory5.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory6.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory4.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory5.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory6.png" alt=""></figure>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- row 2 starts here -->
                                        <!-- row 3 starts here -->
                                        <div class="row">
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- row 3 starts here -->
                                        <!-- row 4 starts here -->
                                        <div class="row">
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory9.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory9.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory9.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory9.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- row 4 starts here -->
                                        <!-- row 5 starts here -->
                                        <div class="row">
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory10.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory8.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory5.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory10.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory8.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory5.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory10.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory8.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory5.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory10.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- row 5 starts here -->
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-potions" role="tabpanel"
                                    aria-labelledby="v-pills-potions-tab">
                                    <div class="inventory-selection">
                                        <!-- row 1 starts here -->
                                        <div class="row">
                                            <div class="col-1">
                                                <a href="inventory-detail.php">
                                                    <div class="inventory-itemBox">
                                                        <figure><img src="img/inventory1.png" alt=""></figure>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory3.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory3.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory3.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory3.png" alt=""></figure>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- row 1 starts here -->
                                        <!-- row 2 starts here -->
                                        <div class="row">
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory4.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory5.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory6.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory4.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory5.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory6.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory4.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory5.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory6.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory4.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory5.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory6.png" alt=""></figure>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- row 2 starts here -->
                                        <!-- row 3 starts here -->
                                        <div class="row">
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- row 3 starts here -->
                                        <!-- row 4 starts here -->
                                        <div class="row">
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory9.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory9.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory9.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory9.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- row 4 starts here -->
                                        <!-- row 5 starts here -->
                                        <div class="row">
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory10.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory8.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory5.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory10.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory8.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory5.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory10.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory8.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory5.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory10.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- row 5 starts here -->
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-pets" role="tabpanel"
                                    aria-labelledby="v-pills-pets-tab">
                                    <div class="inventory-selection">
                                        <!-- row 1 starts here -->
                                        <div class="row">
                                            <div class="col-1">
                                                <a href="inventory-detail.php">
                                                    <div class="inventory-itemBox">
                                                        <figure><img src="img/inventory1.png" alt=""></figure>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory3.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory3.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory3.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory3.png" alt=""></figure>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- row 1 starts here -->
                                        <!-- row 2 starts here -->
                                        <div class="row">
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory4.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory5.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory6.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory4.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory5.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory6.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory4.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory5.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory6.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory4.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory5.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory6.png" alt=""></figure>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- row 2 starts here -->
                                        <!-- row 3 starts here -->
                                        <div class="row">
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- row 3 starts here -->
                                        <!-- row 4 starts here -->
                                        <div class="row">
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory9.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory9.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory9.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory9.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- row 4 starts here -->
                                        <!-- row 5 starts here -->
                                        <div class="row">
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory10.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory8.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory5.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory10.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory8.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory5.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory10.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory8.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory5.png" alt=""></figure>

                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory10.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="inventory-itemBox">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- row 5 starts here -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- inventory section ends here -->
</div>
<!-- Footer Include -->
<?php include 'inc/footerlinks.php' ?>
<!-- Footer Include -->