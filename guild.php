<?php include 'inc/app.php' ?>
<!-- css start here -->
<link rel="stylesheet" href="css/guild.css">
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
                    <?php include 'inc/menu.php'; ?>
                </div>
            </div>
        </div>
        <!-- Menus -->
        <!-- Main Content Start Here -->
        <section class="guild">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="guild-title text-center">
                            <figure>
                                <img src="img/Guild.png" alt="">
                            </figure>
                        </div>
                    </div>
                </div>
                <!-- guild tabs start here -->
                <div class="row pt-5">
                    <div class="col-sm-12">
                        <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Trade</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Guild Treasure</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Guild Treasure</a>
                            </li>
                        </ul>

                        <div class="row pt-5">
                            <div class="col-sm-12">
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                        <!-- search starts here -->
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="search-wrapper">
                                                    <input type="search" placeholder="Search guild  here" class="form-control">
                                                    <img src="img/guild-search.png" class="guld-sear" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- search ends here -->
                                        <div class="guild-wrapper">
                                            <div class="row pt-5">
                                                <div class="col-lg-5">
                                                    <a href="discord.php">
                                                    <div class="guild-card-wrapper">
                                                        <div class="row">
                                                            <div class="col-md-4 my-auto">
                                                                <div class="guild-img-wrapper">
                                                                    <figure>
                                                                        <img src="img/gult1.png" class="guild-img img-fluid" alt="">
                                                                    </figure>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="guild-content-wrapper">
                                                                    <div class="guild-name-and-join">
                                                                        <h5 class="guild-title">Discord.gg</h5>
                                                                        <button class="btn">join</button>
                                                                    </div>
                                                                    <div class="guild-description mt-3">
                                                                        <p>
                                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                                        </p>
                                                                    </div>
                                                                    <div class="marcus-and-member">
                                                                        <h5><img src="img/macrus.png" class="mr-3" alt=""> Marcus Fenix</h5>
                                                                        <h5><img src="img/member.png" class="mr-3" alt="">Members <span class="total-member">: 24</span></h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </a>
                                                </div>
                                                <div class="col-lg-2"></div>
                                                <div class="col-lg-5">
                                                <a href="discord.php">
                                                    <div class="guild-card-wrapper">
                                                        <div class="row">
                                                            <div class="col-md-4 my-auto">
                                                                <div class="guild-img-wrapper">
                                                                    <figure>
                                                                        <img src="img/guilt3.png" class="guild-img img-fluid" alt="">
                                                                    </figure>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="guild-content-wrapper">
                                                                    <div class="guild-name-and-join">
                                                                        <h5 class="guild-title">Discord.gg</h5>
                                                                        <button class="btn">join</button>
                                                                    </div>
                                                                    <div class="guild-description mt-3">
                                                                        <p>
                                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                                        </p>
                                                                    </div>
                                                                    <div class="marcus-and-member">
                                                                        <h5><img src="img/macrus.png" class="mr-3" alt=""> Marcus Fenix</h5>
                                                                        <h5><img src="img/member.png" class="mr-3" alt="">Members <span class="total-member">: 24</span></h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                </div>
                                                <div class="col-lg-5">
                                                <a href="discord.php">
                                                    <div class="guild-card-wrapper">
                                                        <div class="row">
                                                            <div class="col-md-4 my-auto">
                                                                <div class="guild-img-wrapper">
                                                                    <figure>
                                                                        <img src="img/guilt2.png" class="guild-img img-fluid" alt="">
                                                                    </figure>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="guild-content-wrapper">
                                                                    <div class="guild-name-and-join">
                                                                        <h5 class="guild-title">Discord.gg</h5>
                                                                        <button class="btn">join</button>
                                                                    </div>
                                                                    <div class="guild-description mt-3">
                                                                        <p>
                                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                                        </p>
                                                                    </div>
                                                                    <div class="marcus-and-member">
                                                                        <h5><img src="img/macrus.png" class="mr-3" alt=""> Marcus Fenix</h5>
                                                                        <h5><img src="img/member.png" class="mr-3" alt="">Members <span class="total-member">: 24</span></h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                </div>
                                                <div class="col-lg-2"></div>
                                                <div class="col-lg-5">
                                                <a href="discord.php">
                                                    <div class="guild-card-wrapper">
                                                        <div class="row">
                                                            <div class="col-md-4 my-auto">
                                                                <div class="guild-img-wrapper">
                                                                    <figure>
                                                                        <img src="img/guilt4.png" class="guild-img img-fluid" alt="">
                                                                    </figure>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="guild-content-wrapper">
                                                                    <div class="guild-name-and-join">
                                                                        <h5 class="guild-title">Discord.gg</h5>
                                                                        <button class="btn">join</button>
                                                                    </div>
                                                                    <div class="guild-description mt-3">
                                                                        <p>
                                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                                        </p>
                                                                    </div>
                                                                    <div class="marcus-and-member">
                                                                        <h5><img src="img/macrus.png" class="mr-3" alt=""> Marcus Fenix</h5>
                                                                        <h5><img src="img/member.png" class="mr-3" alt="">Members <span class="total-member">: 24</span></h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                </div>
                                                <div class="col-lg-5">
                                                <a href="discord.php">
                                                    <div class="guild-card-wrapper">
                                                        <div class="row">
                                                            <div class="col-md-4 my-auto">
                                                                <div class="guild-img-wrapper">
                                                                    <figure>
                                                                        <img src="img/guilt5.png" class="guild-img img-fluid" alt="">
                                                                    </figure>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="guild-content-wrapper">
                                                                    <div class="guild-name-and-join">
                                                                        <h5 class="guild-title">Discord.gg</h5>
                                                                        <button class="btn">join</button>
                                                                    </div>
                                                                    <div class="guild-description mt-3">
                                                                        <p>
                                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                                        </p>
                                                                    </div>
                                                                    <div class="marcus-and-member">
                                                                        <h5><img src="img/macrus.png" class="mr-3" alt=""> Marcus Fenix</h5>
                                                                        <h5><img src="img/member.png" class="mr-3" alt="">Members <span class="total-member">: 24</span></h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                </div>
                                                <div class="col-lg-2"></div>
                                                <div class="col-lg-5">
                                                <a href="discord.php">
                                                    <div class="guild-card-wrapper">
                                                        <div class="row">
                                                            <div class="col-md-4 my-auto">
                                                                <div class="guild-img-wrapper">
                                                                    <figure>
                                                                        <img src="img/guilt6.png" class="guild-img img-fluid" alt="">
                                                                    </figure>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="guild-content-wrapper">
                                                                    <div class="guild-name-and-join">
                                                                        <h5 class="guild-title">Discord.gg</h5>
                                                                        <button class="btn">join</button>
                                                                    </div>
                                                                    <div class="guild-description mt-3">
                                                                        <p>
                                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                                        </p>
                                                                    </div>
                                                                    <div class="marcus-and-member">
                                                                        <h5><img src="img/macrus.png" class="mr-3" alt=""> Marcus Fenix</h5>
                                                                        <h5><img src="img/member.png" class="mr-3" alt="">Members <span class="total-member">: 24</span></h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                </div>
                                                <div class="col-lg-5">
                                                <a href="discord.php">
                                                    <div class="guild-card-wrapper">
                                                        <div class="row">
                                                            <div class="col-md-4 my-auto">
                                                                <div class="guild-img-wrapper">
                                                                    <figure>
                                                                        <img src="img/guilt7.png" class="guild-img img-fluid" alt="">
                                                                    </figure>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="guild-content-wrapper">
                                                                    <div class="guild-name-and-join">
                                                                        <h5 class="guild-title">Discord.gg</h5>
                                                                        <button class="btn">join</button>
                                                                    </div>
                                                                    <div class="guild-description mt-3">
                                                                        <p>
                                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                                        </p>
                                                                    </div>
                                                                    <div class="marcus-and-member">
                                                                        <h5><img src="img/macrus.png" class="mr-3" alt=""> Marcus Fenix</h5>
                                                                        <h5><img src="img/member.png" class="mr-3" alt="">Members <span class="total-member">: 24</span></h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                </div>
                                                <div class="col-lg-2"></div>
                                                <div class="col-lg-5">
                                                <a href="discord.php">
                                                    <div class="guild-card-wrapper">
                                                        <div class="row">
                                                            <div class="col-md-4 my-auto">
                                                                <div class="guild-img-wrapper">
                                                                    <figure>
                                                                        <img src="img/guilt8.png" class="guild-img img-fluid" alt="">
                                                                    </figure>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="guild-content-wrapper">
                                                                    <div class="guild-name-and-join">
                                                                        <h5 class="guild-title">Discord.gg</h5>
                                                                        <button class="btn">join</button>
                                                                    </div>
                                                                    <div class="guild-description mt-3">
                                                                        <p>
                                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                                        </p>
                                                                    </div>
                                                                    <div class="marcus-and-member">
                                                                        <h5><img src="img/macrus.png" class="mr-3" alt=""> Marcus Fenix</h5>
                                                                        <h5><img src="img/member.png" class="mr-3" alt="">Members <span class="total-member">: 24</span></h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                </div>
                                                <div class="col-lg-5">
                                                <a href="discord.php">
                                                    <div class="guild-card-wrapper">
                                                        <div class="row">
                                                            <div class="col-md-4 my-auto">
                                                                <div class="guild-img-wrapper">
                                                                    <figure>
                                                                        <img src="img/gult1.png" class="guild-img img-fluid" alt="">
                                                                    </figure>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="guild-content-wrapper">
                                                                    <div class="guild-name-and-join">
                                                                        <h5 class="guild-title">Discord.gg</h5>
                                                                        <button class="btn">join</button>
                                                                    </div>
                                                                    <div class="guild-description mt-3">
                                                                        <p>
                                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                                        </p>
                                                                    </div>
                                                                    <div class="marcus-and-member">
                                                                        <h5><img src="img/macrus.png" class="mr-3" alt=""> Marcus Fenix</h5>
                                                                        <h5><img src="img/member.png" class="mr-3" alt="">Members <span class="total-member">: 24</span></h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                </div>
                                                <div class="col-lg-2"></div>
                                                <div class="col-lg-5">
                                                <a href="discord.php">
                                                    <div class="guild-card-wrapper">
                                                        <div class="row">
                                                            <div class="col-md-4 my-auto">
                                                                <div class="guild-img-wrapper">
                                                                    <figure>
                                                                        <img src="img/guilt3.png" class="guild-img img-fluid" alt="">
                                                                    </figure>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="guild-content-wrapper">
                                                                    <div class="guild-name-and-join">
                                                                        <h5 class="guild-title">Discord.gg</h5>
                                                                        <button class="btn">join</button>
                                                                    </div>
                                                                    <div class="guild-description mt-3">
                                                                        <p>
                                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                                        </p>
                                                                    </div>
                                                                    <div class="marcus-and-member">
                                                                        <h5><img src="img/macrus.png" class="mr-3" alt=""> Marcus Fenix</h5>
                                                                        <h5><img src="img/member.png" class="mr-3" alt="">Members <span class="total-member">: 24</span></h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                </div>
                                                <div class="col-lg-5">
                                                <a href="discord.php">
                                                    <div class="guild-card-wrapper">
                                                        <div class="row">
                                                            <div class="col-md-4 my-auto">
                                                                <div class="guild-img-wrapper">
                                                                    <figure>
                                                                        <img src="img/guilt2.png" class="guild-img img-fluid" alt="">
                                                                    </figure>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="guild-content-wrapper">
                                                                    <div class="guild-name-and-join">
                                                                        <h5 class="guild-title">Discord.gg</h5>
                                                                        <button class="btn">join</button>
                                                                    </div>
                                                                    <div class="guild-description mt-3">
                                                                        <p>
                                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                                        </p>
                                                                    </div>
                                                                    <div class="marcus-and-member">
                                                                        <h5><img src="img/macrus.png" class="mr-3" alt=""> Marcus Fenix</h5>
                                                                        <h5><img src="img/member.png" class="mr-3" alt="">Members <span class="total-member">: 24</span></h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                </div>
                                                <div class="col-lg-2"></div>
                                                <div class="col-lg-5">
                                                <a href="discord.php">
                                                    <div class="guild-card-wrapper">
                                                        <div class="row">
                                                            <div class="col-md-4 my-auto">
                                                                <div class="guild-img-wrapper">
                                                                    <figure>
                                                                        <img src="img/guilt4.png" class="guild-img img-fluid" alt="">
                                                                    </figure>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="guild-content-wrapper">
                                                                    <div class="guild-name-and-join">
                                                                        <h5 class="guild-title">Discord.gg</h5>
                                                                        <button class="btn">join</button>
                                                                    </div>
                                                                    <div class="guild-description mt-3">
                                                                        <p>
                                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                                        </p>
                                                                    </div>
                                                                    <div class="marcus-and-member">
                                                                        <h5><img src="img/macrus.png" class="mr-3" alt=""> Marcus Fenix</h5>
                                                                        <h5><img src="img/member.png" class="mr-3" alt="">Members <span class="total-member">: 24</span></h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                </div>
                                                <div class="col-lg-5">
                                                <a href="discord.php">
                                                    <div class="guild-card-wrapper">
                                                        <div class="row">
                                                            <div class="col-md-4 my-auto">
                                                                <div class="guild-img-wrapper">
                                                                    <figure>
                                                                        <img src="img/guilt5.png" class="guild-img img-fluid" alt="">
                                                                    </figure>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="guild-content-wrapper">
                                                                    <div class="guild-name-and-join">
                                                                        <h5 class="guild-title">Discord.gg</h5>
                                                                        <button class="btn">join</button>
                                                                    </div>
                                                                    <div class="guild-description mt-3">
                                                                        <p>
                                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                                        </p>
                                                                    </div>
                                                                    <div class="marcus-and-member">
                                                                        <h5><img src="img/macrus.png" class="mr-3" alt=""> Marcus Fenix</h5>
                                                                        <h5><img src="img/member.png" class="mr-3" alt="">Members <span class="total-member">: 24</span></h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                </div>
                                                <div class="col-lg-2"></div>
                                                <div class="col-lg-5">
                                                <a href="discord.php">
                                                    <div class="guild-card-wrapper">
                                                        <div class="row">
                                                            <div class="col-md-4 my-auto">
                                                                <div class="guild-img-wrapper">
                                                                    <figure>
                                                                        <img src="img/guilt6.png" class="guild-img img-fluid" alt="">
                                                                    </figure>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="guild-content-wrapper">
                                                                    <div class="guild-name-and-join">
                                                                        <h5 class="guild-title">Discord.gg</h5>
                                                                        <button class="btn">join</button>
                                                                    </div>
                                                                    <div class="guild-description mt-3">
                                                                        <p>
                                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                                        </p>
                                                                    </div>
                                                                    <div class="marcus-and-member">
                                                                        <h5><img src="img/macrus.png" class="mr-3" alt=""> Marcus Fenix</h5>
                                                                        <h5><img src="img/member.png" class="mr-3" alt="">Members <span class="total-member">: 24</span></h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                </div>
                                                <div class="col-lg-5">
                                                <a href="discord.php">
                                                    <div class="guild-card-wrapper">
                                                        <div class="row">
                                                            <div class="col-md-4 my-auto">
                                                                <div class="guild-img-wrapper">
                                                                    <figure>
                                                                        <img src="img/guilt7.png" class="guild-img img-fluid" alt="">
                                                                    </figure>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="guild-content-wrapper">
                                                                    <div class="guild-name-and-join">
                                                                        <h5 class="guild-title">Discord.gg</h5>
                                                                        <button class="btn">join</button>
                                                                    </div>
                                                                    <div class="guild-description mt-3">
                                                                        <p>
                                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                                        </p>
                                                                    </div>
                                                                    <div class="marcus-and-member">
                                                                        <h5><img src="img/macrus.png" class="mr-3" alt=""> Marcus Fenix</h5>
                                                                        <h5><img src="img/member.png" class="mr-3" alt="">Members <span class="total-member">: 24</span></h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                </div>
                                                <div class="col-lg-2"></div>
                                                <div class="col-lg-5">
                                                <a href="discord.php">
                                                    <div class="guild-card-wrapper">
                                                        <div class="row">
                                                            <div class="col-md-4 my-auto">
                                                                <div class="guild-img-wrapper">
                                                                    <figure>
                                                                        <img src="img/guilt8.png" class="guild-img img-fluid" alt="">
                                                                    </figure>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="guild-content-wrapper">
                                                                    <div class="guild-name-and-join">
                                                                        <h5 class="guild-title">Discord.gg</h5>
                                                                        <button class="btn">join</button>
                                                                    </div>
                                                                    <div class="guild-description mt-3">
                                                                        <p>
                                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                                        </p>
                                                                    </div>
                                                                    <div class="marcus-and-member">
                                                                        <h5><img src="img/macrus.png" class="mr-3" alt=""> Marcus Fenix</h5>
                                                                        <h5><img src="img/member.png" class="mr-3" alt="">Members <span class="total-member">: 24</span></h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">...</div>
                                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- guild tabs content start here -->

                <!-- guild tabs content ends here -->
                <!-- guild tabs ends here -->
            </div>
        </section>
        <!-- Main Content Ends Here -->
    </div>
</section>
<?php include 'inc/footerlinks.php' ?>