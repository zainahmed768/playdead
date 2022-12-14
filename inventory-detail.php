<!-- Include App.php -->
<?php include 'inc/app.php' ?>
<!-- Include App.php -->

<!-- css start here -->
<link rel="stylesheet" href="css/inventory-detail.css">
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
    <section class="inventory-detailed">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="forTop-border py-1">
                        <figure><img class="w-100" src="img/playertop.png" alt=""></figure>
                    </div>
                    <div class="Player-statusDv">
                        <div class="head">
                            <h3 class="title">
                                Players Status
                            </h3>
                        </div>
                        <ul class="status-list">
                            <li>
                                <h4>Level</h4>
                                <span>102</span>
                            </li>
                            <li>
                                <h4>Hollowing</h4>
                                <span>99</span>
                            </li>
                            <li>
                                <h4>Vigor</h4>
                                <span>36</span>
                            </li>
                            <li>
                                <h4>Attunement</h4>
                                <span>32</span>
                            </li>
                            <li>
                                <h4>Endurance</h4>
                                <span>38</span>
                            </li>
                            <li>
                                <h4>Vitality</h4>
                                <span>38</span>
                            </li>
                            <li>
                                <h4>Strength</h4>
                                <span>38</span>
                            </li><br /><br />
                            <li>
                                <h4>hp</h4>
                                <span>1118 / 1538</span>
                            </li>
                            <li>
                                <h4>fp</h4>
                                <span>114 / 114</span>
                            </li>
                            <li>
                                <h4>equip load</h4>
                                <span>136</span>
                            </li>
                            <li>
                                <h4>poise</h4>
                                <span>14</span>
                            </li>
                            <li>
                                <h4>lorem ipsum</h4>
                                <span>38</span>
                            </li>
                        </ul>
                    </div>
                    <div class="forBottom-border py-1">
                        <figure><img class="w-100" src="img/playerbottom.png" alt=""></figure>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="product-details">
                        <div class="heading">
                            <h1 class="title">Aldrich's Ruby</h1>
                        </div>
                        <div class="image-with-btn">
                            <div class="img-box">
                                <figure><img src="img/inventory-single.png" alt=""></figure>
                            </div>
                            <div class="button-group">
                                <button onclick="location.href='item-creation.php';" class="btn">Enhance</button>
                            </div>
                        </div>
                        <div class="description">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit, sed do eiusmod tempor incididunt ut labore
                                et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut
                                aliquip ex ea commodo consequat.<br /><br />
                                Duis aute
                                irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur.
                            </p>
                        </div>
                        <div class="button-group">
                            <button onclick="location.href='trade.php';" class="btn">Trade</button>
                            <button onclick="location.href='guild.php';" class="btn">Gift</button>
                        </div>
                        <div class="button-group">
                            <button type="button" class="btn w-100 mt-2" data-toggle="modal"
                                data-target="#myAuctionModal">Sell On Auction</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Inventory Detail End Here -->
</div>

<!-- My Auction Modal -->
<div class="modal fade" id="myAuctionModal" tabindex="-1" role="dialog" aria-labelledby="myAuctionModalTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <form action="auction.php">
                    <div class="auction-post-box">
                        <div class="auction-item">
                            <div class="img-box">
                                <figure><img src="img/inventory-single.png" alt="" class="img-fluid"></figure>
                            </div>
                            <div class="title">
                                <h3>Aldrich's Ruby</h3>
                            </div>
                        </div>
                        <div class="set-price-and-duration">
                            <div class="form-group">
                                <label>Set Minimum Bid Price</label>
                                <input type="text" placeholder="$20.00" class="form-control">
                            </div>
                            <span class="seprator"></span>
                            <div class="form-group">
                                <label>Set Duration</label>
                                <input type="text" placeholder="2 day" class="form-control">
                            </div>
                        </div>
                        <div class="button-group">
                            <button class="btn">Post</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- My Auction Modal -->

<!-- Footer Include -->
<?php include 'inc/footerlinks.php'?>
<!-- Footer Include -->