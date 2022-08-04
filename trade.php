<?php include 'inc/app.php' ?>
<!-- css start here -->
<link rel="stylesheet" href="css/trade.css">
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
        <section class="trade-wrapper">
            <div class="container">
                <div class="row pb-5">
                    <div class="col-sm-12">
                        <h4 class="text-center">Trade</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="inventroy-Box bef">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="inventories">
                                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                            <ul class="inventory-links">
                                                <li><a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a></li>
                                                <li> <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">armor pve</a></li>
                                                <li><a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">armor pvp</a></li>
                                                <li><a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">awards</a></li>
                                                <li><a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">bionics</a></li>
                                                <li><a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">gems & glyphs</a></li>
                                                <li><a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">grenades</a></li>
                                                <li><a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">legends</a></li>
                                                <li><a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">misc</a></li>
                                                <li><a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">player buffs</a></li>
                                                <li><a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">potions</a></li>
                                                <li><a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">pets</a></li>
                                                <li><a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">skin</a></li>
                                                <li><a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">smokes & sparks</a></li>
                                                <li><a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">stronghold</a></li>
                                                <li><a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">weapons</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="title">
                                        <figure><img src="img/inventorytxt.png" alt=""></figure>
                                    </div>
                                    <div class="search-Box">
                                        <form>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Search item here">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-content" id="v-pills-tabContent">
                                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                            <div class="inventory-selection">
                                                <!-- row 1 starts here -->
                                                <div class="row">
                                                    <div class="col-3">
                                                        <div class="inventory-itemBox">
                                                            <figure><img src="img/inventory1.png" alt=""></figure>

                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="inventory-itemBox">
                                                            <figure><img src="img/inventory2.png" alt=""></figure>

                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="inventory-itemBox">
                                                            <figure><img src="img/inventory3.png" alt=""></figure>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="inventory-itemBox">
                                                            <figure><img src="img/inventory5.png" alt=""></figure>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="inventory-itemBox">
                                                            <figure><img src="img/inventory6.png" alt=""></figure>

                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="inventory-itemBox">
                                                            <figure><img src="img/inventory5.png" alt=""></figure>

                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="inventory-itemBox">
                                                            <figure><img src="img/inventory1.png" alt=""></figure>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="inventory-itemBox">
                                                            <figure><img src="img/inventory6.png" alt=""></figure>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="inventory-itemBox">
                                                            <figure><img src="img/inventory1.png" alt=""></figure>

                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="inventory-itemBox">
                                                            <figure><img src="img/inventory2.png" alt=""></figure>

                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="inventory-itemBox">
                                                            <figure><img src="img/inventory9.png" alt=""></figure>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="inventory-itemBox">
                                                            <figure><img src="img/inventory4.png" alt=""></figure>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="inventory-itemBox">
                                                            <figure><img src="img/inventory2.png" alt=""></figure>

                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="inventory-itemBox">
                                                            <figure><img src="img/inventory1.png" alt=""></figure>

                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="inventory-itemBox">
                                                            <figure><img src="img/inventory1.png" alt=""></figure>

                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="inventory-itemBox">
                                                            <figure><img src="img/inventory1.png" alt=""></figure>

                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="inventory-itemBox">
                                                            <figure><img src="img/inventory10.png" alt=""></figure>

                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="inventory-itemBox">
                                                            <figure><img src="img/inventory2.png" alt=""></figure>

                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="inventory-itemBox">
                                                            <figure><img src="img/inventory3.png" alt=""></figure>

                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="inventory-itemBox">
                                                            <figure><img src="img/inventory5.png" alt=""></figure>

                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- row 1 starts here -->
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">...</div>
                                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
                                        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
                                    </div>
                                </div>
                            </div>
                            <div class="nextBtn">
                                <a href="#"><img src="img/arrow-right.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="your-offering">
                            <h5>your offering</h5>
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="inventory-itemBox">
                                            <figure><img src="img/inventory5.png" alt=""></figure>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="inventory-itemBox">

                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="inventory-itemBox">

                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="inventory-itemBox">

                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="inventory-itemBox">

                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="inventory-itemBox">

                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="inventory-itemBox">

                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="inventory-itemBox">

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Check this box when ready trade.
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="your-offering up">
                            <h5>david offerings:</h5>
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="inventory-itemBox">
                                            <figure><img src="img/inventory5.png" alt=""></figure>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="inventory-itemBox">

                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="inventory-itemBox">

                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="inventory-itemBox">

                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="inventory-itemBox">

                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="inventory-itemBox">

                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="inventory-itemBox">

                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="inventory-itemBox">

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <p class="text-white">Not ready to trade.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="trade-btn-wrapper mt-4">
                            <button class="btn">Trade</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Main Content ends Here -->
    </div>
</section>
<?php include 'inc/footerlinks.php' ?>