<?php include 'inc/app.php' ?>
<!-- css start here -->
<link rel="stylesheet" href="css/discord.css">
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
        <section class="discord-sec">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="members-wrapper">
                            <div class="members-and-request-wrapper">
                                <p>members</p>
                                <button class="btn">requests <span class="total-request">(03)</span></button>
                            </div>
                            <table class="mt-5">
                                <tbody>
                                    <tr class="row1">
                                        <th class="no">Sr#</th>
                                        <th class="playername">Player Name</th>
                                        <th class="playerlevel">Player level</th>
                                    </tr>
                                    <tr class="row2">
                                        <td class="no">01</td>
                                        <td class="playername">Marion</td>
                                        <td class="playerlevel">86422</td>
                                    </tr>
                                    <tr class="row2">
                                        <td class="no">02</td>
                                        <td class="playername">Marion</td>
                                        <td class="playerlevel">86422</td>
                                    </tr>
                                    <tr class="row2">
                                        <td class="no">03</td>
                                        <td class="playername">Marion</td>
                                        <td class="playerlevel">86422</td>
                                    </tr>
                                    <tr class="row2">
                                        <td class="no">04</td>
                                        <td class="playername">Marion</td>
                                        <td class="playerlevel">86422</td>
                                    </tr>
                                    <tr class="row2">
                                        <td class="no">05</td>
                                        <td class="playername">Marion</td>
                                        <td class="playerlevel">86422</td>
                                    </tr>
                                    <tr class="row2">
                                        <td class="no">06</td>
                                        <td class="playername">Marion</td>
                                        <td class="playerlevel">86422</td>
                                    </tr>
                                    <tr class="row2">
                                        <td class="no">07</td>
                                        <td class="playername">Marion</td>
                                        <td class="playerlevel">86422</td>
                                    </tr>
                                    <tr class="row2">
                                        <td class="no">08</td>
                                        <td class="playername">Marion</td>
                                        <td class="playerlevel">86422</td>
                                    </tr>

                                </tbody>
                            </table>
                            <div class="add-player-btn-wrapper mt-4">
                                <button class="btn">add player</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="discord-wrapper">
                            <div class="discord-img-wrapper text-center">
                                <figure>
                                    <img src="img/discord.png" class="img-fluid" alt="">
                                </figure>
                            </div>
                            <div class="discord-content-wrapper text-center mt-4">
                                <h4>Discord.gg</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua.</p>
                                <div class="leader-and-co-leader">
                                    <h5>leader <span class="leader-name">Marcus Fenix</span></h5>
                                    <h5>Co-leader <span class="co-leader-name">John</span></h5>
                                </div>
                                <div class="achievemnets-wrapper">
                                    <h4 class="text-center">Achievements</h4>
                                    <ul id="achievements-list">
                                        <li>
                                            <div class="achi-img"><img src="img/ach1.png" alt=""></div>
                                            <h6>lorem</h6>
                                        </li>
                                        <li>
                                            <div class="achi-img"><img src="img/ach2.png" alt=""></div>
                                            <h6>lorem</h6>
                                        </li>
                                        <li>
                                            <div class="achi-img"><img src="img/ach3.png" alt=""></div>
                                            <h6>lorem</h6>
                                        </li>
                                        <li>
                                            <div class="achi-img"></div>
                                            <h6>lorem</h6>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">

                        <div class="inventroy-Box">

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="inventories">
                                        <ul class="inventory-links">
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
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-8">

                                    <div class="search-Box">
                                        <form>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Search item here">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="inventory-selection">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory1.png" alt=""></figure>
                                                    <div class="count">
                                                        <span class="large">01</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory2.png" alt=""></figure>
                                                    <div class="count">
                                                        <span>06</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory3.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory4.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory5.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory6.png" alt=""></figure>
                                                    <div class="count">
                                                        <span>01</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory7.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="img/inventory8.png" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="" alt=""></figure>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="inventory-itemBox">
                                                    <figure><img src="" alt=""></figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="nextBtn">
                                <a href="#"><img src="img/arrow-right.png" alt=""></a>
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