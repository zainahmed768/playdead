<!-- Include App.php -->
<?php include 'inc/app.php' ?>
<!-- Include App.php -->

<!-- css start here -->
<link rel="stylesheet" href="css/item-creation.css">
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

    <!-- Inventory Detail Start Here -->
    <section class="items-creation">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="forTop-border py-1">
                        <figure><img class="w-100" src="img/playertop.png" alt=""></figure>
                    </div>
                    <div class="items-status">
                        <div class="head">
                            <h3 class="title">
                                Item Stats
                            </h3>
                        </div>
                        <ul class="items-list">
                            <li class="items-back">
                                <h4>Level</h4>
                                <div class="rates">
                                    <span class="items-back">02</span>
                                    <div class="icons">
                                        <i class="fa fa-angle-up" aria-hidden="true"></i><br />
                                        <i class="fa fa-angle-down" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </li>
                            <li class="items-back">
                                <h4>Hollowing</h4>
                                <div class="rates">
                                    <span class="items-back">99</span>
                                    <div class="icons">
                                        <i class="fa fa-angle-up" aria-hidden="true"></i><br />
                                        <i class="fa fa-angle-down" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <h4>Vigor</h4>
                                <div class="rates">
                                    <span class="items-back">36</span>
                                    <div class="icons">
                                        <i class="fa fa-angle-up" aria-hidden="true"></i><br />
                                        <i class="fa fa-angle-down" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <h4>Attunement</h4>
                                <div class="rates">
                                    <span class="items-back">14</span>
                                    <div class="icons">
                                        <i class="fa fa-angle-up" aria-hidden="true"></i><br />
                                        <i class="fa fa-angle-down" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <h4>Endurance</h4>
                                <div class="rates">
                                    <span class="items-back">38</span>
                                    <div class="icons">
                                        <i class="fa fa-angle-up" aria-hidden="true"></i><br />
                                        <i class="fa fa-angle-down" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <h4>Vitality</h4>
                                <div class="rates">
                                    <span class="items-back">38</span>
                                    <div class="icons">
                                        <i class="fa fa-angle-up" aria-hidden="true"></i><br />
                                        <i class="fa fa-angle-down" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <h4>Strength</h4>
                                <div class="rates">
                                    <span class="items-back">38</span>
                                    <div class="icons">
                                        <i class="fa fa-angle-up" aria-hidden="true"></i><br />
                                        <i class="fa fa-angle-down" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </li><br /><br />
                            <li>
                                <h4>hp</h4>
                                <div class="rates">
                                    <span><ruby>1118 / </ruby><ruby class="items-back">1538</ruby></span>
                                    <div class="icons">
                                        <i class="fa fa-angle-up" aria-hidden="true"></i><br />
                                        <i class="fa fa-angle-down" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <h4>fp</h4>
                                <div class="rates">
                                    <span><ruby>114 /</ruby><ruby class="items-back">114</ruby></span>
                                    <div class="icons">
                                        <i class="fa fa-angle-up" aria-hidden="true"></i><br />
                                        <i class="fa fa-angle-down" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <h4>equip load</h4>
                                <div class="rates">
                                    <span class="items-back">136</span>
                                    <div class="icons">
                                        <i class="fa fa-angle-up" aria-hidden="true"></i><br />
                                        <i class="fa fa-angle-down" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <h4>poise</h4>
                                <div class="rates">
                                    <span class="items-back">14</span>
                                    <div class="icons">
                                        <i class="fa fa-angle-up" aria-hidden="true"></i><br />
                                        <i class="fa fa-angle-down" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <h4>lorem ipsum</h4>
                                <div class="rates">
                                    <span class="items-back">38</span>
                                    <div class="icons">
                                        <i class="fa fa-angle-up" aria-hidden="true"></i><br />
                                        <i class="fa fa-angle-down" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="forBottom-border py-1">
                        <figure><img class="w-100" src="img/playerbottom.png" alt=""></figure>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="create-items">
                        <div class="heading">
                            <h1 class="title">Item Creation</h1>
                        </div>
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Enter item name">
                            </div>
                            <div class="form-group">
                                <div class="player-img">
                                    <figure><img src="img/plustwo.png" alt=""></figure>
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Enter Item Description"></textarea>
                            </div>
                            <button onclick="location.href='alorichs-ruby.php';" class="btn">Save item</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Inventory Detail End Here -->

</div>