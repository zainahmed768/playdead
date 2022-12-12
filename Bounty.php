<?php include 'inc/app.php' ?>
<!-- css start here -->
<!-- <link rel="stylesheet" href="css/blackmarket.css"> -->
<link rel="stylesheet" href="css/bounty.css">
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
        <section class="mycharacter-sec">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="bounty-img-wrapper">
                            <div class="bount-heading-wrapper">
                                <h5>BOUNTY</h5>
                            </div>
                            <div class="bount-img">
                                <figure>
                                    <img src="img/bounty-img.png" class="img-fluid" alt="">
                                </figure>
                            </div>
                            <div class="bount-heading-wrapper">
                                <h5>hunter</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="bounty-hunter-wrapper">
                            <div class="bounty-heading-wrapper">
                                <h5>Bounty Hunter</h5>
                            </div>
                            <div class="hunter-list-wrappper">
                                <ul>
                                    <li>
                                        <span class="property">Class</span>
                                        <span class="value">102</span>
                                    </li>
                                    <li>
                                        <span class="property">Level</span>
                                        <span class="value">99</span>
                                    </li>
                                    <li>
                                        <span class="property">Att level</span>
                                        <span class="value">36</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="hunter-stats-wrapper">
                                <h5>unequipped stats</h5>
                            </div>
                            <div class="hunter-list-wrappper">
                                <ul>
                                    <li>
                                        <span class="property">Health</span>
                                        <span class="value">14</span>
                                    </li>
                                    <li>
                                        <span class="property">Damage</span>
                                        <span class="value">38</span>
                                    </li>
                                    <li>
                                        <span class="property">Base</span>
                                        <span class="value">38</span>
                                    </li>
                                    <li>
                                        <span class="property">Armor pen</span>
                                        <span class="value">27</span>
                                    </li>
                                    <li>
                                        <span class="property">Armor pen resist</span>
                                        <span class="value">38</span>
                                    </li>

                                </ul>
                            </div>
                            <div class="hunter-stats-wrapper">
                                <h5>total ar stats</h5>
                            </div>
                            <div class="hunter-list-wrappper">
                                <ul>
                                    <li>
                                        <span class="property">Health</span>
                                        <span class="value">114</span>
                                    </li>
                                    <li>
                                        <span class="property">Damage</span>
                                        <span class="value">136</span>
                                    </li>
                                    <li>
                                        <span class="property">Base</span>
                                        <span class="value">14</span>
                                    </li>
                                    <li>
                                        <span class="property">Armor pen</span>
                                        <span class="value">38</span>
                                    </li>
                                    <li>
                                        <span class="property">Armor pen resist</span>
                                        <span class="value">38</span>
                                    </li>

                                </ul>
                            </div>
                            <div class="hunter-btn-wrapper">
                                <button type="button" class="btn" data-toggle="modal" data-target="#BountyModal">
                                    Mics Stats note
                                </button>
                                <!-- <a href="#" class="btn"></a> -->
                                <a href="#" class="btn">Stats</a>
                                <a href="#" class="btn">Export</a>
                                <a href="#" class="btn">Edit</a>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="weapons-wrapper">
                            <ul>
                                <li>
                                    <div class="single-weapon-wrapper">
                                        <div class="weapon-heading-wrapper">
                                            <h6>Health</h6>
                                        </div>
                                        <div class="weapon-img-wrapper">
                                            <figure>
                                                <img src="img/leagend1.png" class="img-fluid" alt="">
                                            </figure>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="single-weapon-wrapper">
                                        <div class="weapon-heading-wrapper">
                                            <h6>Damage</h6>
                                        </div>
                                        <div class="weapon-img-wrapper">
                                            <figure>
                                                <img src="img/leagend2.png" class="img-fluid" alt="">
                                            </figure>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="single-weapon-wrapper">
                                        <div class="weapon-heading-wrapper">
                                            <h6>Base</h6>
                                        </div>
                                        <div class="weapon-img-wrapper">
                                            <figure>
                                                <img src="img/leagend3.png" class="img-fluid" alt="">
                                            </figure>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="single-weapon-wrapper">
                                        <div class="weapon-heading-wrapper">
                                            <h6>Armor pen</h6>
                                        </div>
                                        <div class="weapon-img-wrapper">
                                            <figure>
                                                <img src="img/leagend1.png" class="img-fluid" alt="">
                                            </figure>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="single-weapon-wrapper">
                                        <div class="weapon-heading-wrapper">
                                            <h6>Apr</h6>
                                        </div>
                                        <div class="weapon-img-wrapper">
                                            <figure>
                                                <img src="img/leagend2.png" class="img-fluid" alt="">
                                            </figure>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="single-weapon-wrapper">
                                        <div class="weapon-heading-wrapper">
                                            <h6>ATT</h6>
                                        </div>
                                        <div class="weapon-img-wrapper">
                                            <figure>
                                                <img src="img/leagend3.png" class="img-fluid" alt="">
                                            </figure>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="hunter-btn-wrapper">
                                <a href="#" class="btn">Enhance</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>

<!-- modal starts here -->
<!-- Modal -->
<div class="modal fade" id="BountyModal" tabindex="-1" role="dialog" aria-labelledby="BountyModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h4>Mics Stats note</h4>
                <p>
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
                    est laborum..|
                </p>
                <button class="btn">save</button>
            </div>
        </div>
    </div>
</div>
<!-- modal starts here -->
<?php include 'inc/footerlinks.php' ?>