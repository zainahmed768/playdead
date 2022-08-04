<?php include 'inc/app.php' ?>
<!-- css start here -->
<link rel="stylesheet" href="css/warrior2.css">
<!-- css start here -->
<!-- Detail Section Start Here -->
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
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="character-list">

                            <!-- 1 character start here -->
                            <div class="character-wrapper active-wr">
                                <a href="sniper.php">
                                    <figure>
                                        <img src="img/charc1.png" class="char-img img-fluid" alt="">
                                        <img src="img/sniper.png" class="char-name img-fluid" alt="">
                                    </figure>
                                </a>
                            </div>
                            <!-- 1 character ends here -->
                            <!-- 2 character start here -->
                            <div class="character-wrapper">
                                <a href="medic.php">
                                    <figure>
                                        <img src="img/charc2.png" class="char-img img-fluid" alt="">
                                        <img src="img/Themedic.png" class="char-name img-fluid" alt="">
                                    </figure>
                                </a>
                            </div>
                            <!-- 2 character ends here -->
                            <!-- 3 character start here -->
                            <div class="character-wrapper">
                                <a href="engineer.php">
                                    <figure>
                                        <img src="img/charc3.png" class="char-img img-fluid" alt="">
                                        <img src="img/TheEngineer.png" class="char-name img-fluid" alt="">
                                    </figure>
                                </a>
                            </div>
                            <!-- 3 character ends here -->
                            <!-- 4 character start here -->
                            <div class="character-wrapper">
                                <a href="priest.php">
                                    <figure>
                                        <img src="img/charc4.png" class="char-img img-fluid" alt="">
                                        <img src="img/ThePriest.png" class="char-name img-fluid" alt="">
                                    </figure>
                                </a>
                            </div>
                            <!-- 4 character ends here -->
                            <!-- 5 character start here -->
                            <div class="character-wrapper">
                                <a href="ninja.php">
                                    <figure>
                                        <img src="img/charc5.png" class="char-img img-fluid" alt="">
                                        <img src="img/TheNinja.png" class="char-name img-fluid" alt="">
                                    </figure>
                                </a>
                            </div>
                            <!-- 5 character ends here -->
                            <!-- 6 character start here -->
                            <div class="character-wrapper">
                                <a href="tank.php">
                                    <figure>
                                        <img src="img/charc6.png" class="char-img img-fluid" alt="">
                                        <img src="img/Thetank.png" class="char-name img-fluid" alt="">
                                    </figure>
                                </a>
                            </div>
                            <!-- 6 character ends here -->
                            <!-- 7 character start here -->
                            <div class="character-wrapper">
                                <a href="warrior.php">
                                    <figure>
                                        <img src="img/charc7.png" class="char-img img-fluid" alt="">
                                        <img src="img/TheWarrior.png" class="char-name img-fluid" alt="">
                                    </figure>
                                </a>
                            </div>
                            <!-- 7 character ends here -->
                        </div>
                    </div>
                    <div class="col-lg-6 text-center">
                        <!-- <div class="main-charater-img">
                            <figure>
                                <img src="img/character1.png" class="img-fluid" alt="">
                            </figure>
                        </div> -->
                    </div>
                    <div class="col-lg-3">
                        <div class="character-specification">
                            <figure>
                                <img src="img/TheWarrior.png" class="char-name img-fluid" alt="">
                            </figure>
                            <p class="golden-color">Ferocious combatant that relies on strength and rage. Warriors are the strongest of the classes. Warriors can equip any type of weapon but feel most at home with melee weapons.</p>
                            <!-- character specification -->
                            <div class="character-progress-wrapper">
                                <!-- progress no 1 -->
                                <div class="character-progress">
                                    <div class="spec-name-and-percent">
                                        <h6>Health</h6>
                                        <h5>05/10</h5>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar golden-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <!-- progress no 1 -->
                                <!-- progress no 3 -->
                                <div class="character-progress">
                                    <div class="spec-name-and-percent">
                                        <h6>Damage</h6>
                                        <h5>01/10</h5>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar golden-bar" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <!-- progress no 3 -->
                                <!-- progress no 2 -->
                                <div class="character-progress">
                                    <div class="spec-name-and-percent">
                                        <h6>Base</h6>
                                        <h5>01/10</h5>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar golden-bar" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <!-- progress no 2 -->
                                <!-- progress no 4 -->
                                <div class="character-progress">
                                    <div class="spec-name-and-percent">
                                        <h6>Armor Pen</h6>
                                        <h5>0/10</h5>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar golden-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <!-- progress no 4 -->
                                <!-- progress no 5 -->
                                <div class="character-progress">
                                    <div class="spec-name-and-percent">
                                        <h6>Armore Pen Resist</h6>
                                        <h5>01/10</h5>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar golden-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <!-- progress no 5 -->
                                <!-- progress no 1 -->
                                <div class="character-progress">
                                    <div class="spec-name-and-percent">
                                        <h6>ATT</h6>
                                        <h5>06/10</h5>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar golden-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <!-- progress no 1 -->
                            </div>
                            <!-- character specification -->
                            <!-- call to action -->
                            <div class="theme-btn-wrapper mt-5">
                                <a href="#" class="btn btn-theme">Next</a>
                            </div>
                            <!-- call to action -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Detail Section Start Here -->
<!-- para-sec starts here -->
<section class="para-sec">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sagittis quam arcu, scelerisque euismod nunc feugiat et. Vestibulum nisl neque, pharetra vitae enim non, interdum dapibus elit.
                </p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sagittis quam arcu, scelerisque euismod nunc feugiat et. Vestibulum nisl neque, pharetra vitae enim non, interdum dapibus elit. Nullam facilisis lacus eget viverra vestibulum. Sed scelerisque pharetra rhoncus. Nullam iaculis fermentum augue ut pretium. Nunc posuere sed orci eget molestie.</p>
            </div>
        </div>
    </div>
</section>
<!-- para-sec ends here -->
<!-- ruby sec starts here -->
<section class="rudy-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="ruby-wrapper">
                    <div class="ruby-content-wrapper">
                        <h4>burncoin official</h4>
                        <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sagittis quam arcu, scelerisque.</p>
                        <a href="#" class="btn-theme2">Next</a>
                    </div>
                    <div class="ruby-img-wrapper">
                        <figure>
                            <img src="img/ruby.png" class="img-fluid" alt="">
                        </figure>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="ruby-wrapper">
                    <div class="ruby-content-wrapper">
                        <h4>play dead live
                            campaing</h4>
                        <a href="#" class="btn-theme2">Next</a>
                    </div>
                    <div class="ruby-img-wrapper">
                        <figure>
                            <img src="img/ruby.png" class="img-fluid" alt="">
                        </figure>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="ruby-wrapper">
                    <div class="ruby-content-wrapper">
                        <h4>burncoin official</h4>
                        <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sagittis quam arcu, scelerisque.</p>
                        <a href="#" class="btn-theme2">Next</a>
                    </div>
                    <div class="ruby-img-wrapper">
                        <figure>
                            <img src="img/ruby.png" class="img-fluid" alt="">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- ruby sec starts here -->
<!-- character section starts here -->
<section class="character">
    <div class="container">
        <!-- character heading row start here-->
        <div class="row text-center pb-5">
            <div class="col-sm-12">
                <figure>
                    <img src="img/Character.png" class="img-fluid" alt="">
                </figure>
            </div>
        </div>
        <!-- character heading row ends here-->
        <div class="row">
            <div class="col-md-4">
                <div class="character-list">
                    <!-- 7 character start here -->
                    <div class="character-wrapper active-wr">
                        <a href="warrior.php">
                            <figure>
                                <img src="img/charc7.png" class="char-img img-fluid" alt="">
                                <img src="img/TheWarrior.png" class="char-name img-fluid" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- 7 character ends here -->
                </div>
                <p class="char-des">Ferocious combatant that relies on strength and rage. Warriors are the strongest of the classes. Warriors can equip any type of weapon but feel most at home with melee weapons.</p>
                <a href="#" class="cta">See more</a>

            </div>
            <div class="col-md-4">
                <div class="character-list">
                    <!-- 2 character start here -->
                    <div class="character-wrapper ">
                        <a href="medic.php">
                            <figure>
                                <img src="img/charc2.png" class="char-img img-fluid" alt="">
                                <img src="img/Themedic.png" class="char-name img-fluid" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- 2 character ends here -->
                    <!-- 3 character start here -->
                    <div class="character-wrapper">
                        <a href="engineer.php">
                            <figure>
                                <img src="img/charc3.png" class="char-img img-fluid" alt="">
                                <img src="img/TheEngineer.png" class="char-name img-fluid" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- 3 character ends here -->
                    <!-- 4 character start here -->
                    <div class="character-wrapper">
                        <a href="priest.php">
                            <figure>
                                <img src="img/charc4.png" class="char-img img-fluid" alt="">
                                <img src="img/ThePriest.png" class="char-name img-fluid" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- 4 character ends here -->
                </div>
            </div>
            <div class="col-md-4">
                <div class="character-list">
                    <!-- 5 character start here -->
                    <div class="character-wrapper">
                        <a href="ninja.php">
                            <figure>
                                <img src="img/charc5.png" class="char-img img-fluid" alt="">
                                <img src="img/TheNinja.png" class="char-name img-fluid" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- 5 character ends here -->
                    <!-- 6 character start here -->
                    <div class="character-wrapper">
                        <a href="tank.php">
                            <figure>
                                <img src="img/charc6.png" class="char-img img-fluid" alt="">
                                <img src="img/Thetank.png" class="char-name img-fluid" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- 6 character ends here -->
                    <!-- 1 character start here -->
                    <div class="character-wrapper">
                        <a href="sniper.php">
                            <figure>
                                <img src="img/charc8.png" class="char-img img-fluid" alt="">
                                <img src="img/sniper.png" class="char-name img-fluid" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- 1 character ends here -->
                </div>
            </div>
        </div>
        <div class="row pt-5">
            <div class="col-sm-12">
                <div class="btn-wrapper text-center">
                    <!-- <a href="mycharacter.php" class="btn-theme">Choose Character</a> -->
                    <a href="character-creation.php" class="btn-theme">Create Character</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- character section ends here -->
<!-- what happening section starts here -->
<section class="what-happens">
    <div class="happens-bg">
        <div class="container">
            <div class="row py-4 text-center">
                <div class="col-sm-12">
                    <h4>whats happening now</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <figure>
                        <img src="img/what-happen.png" class="img-fluid" alt="">
                    </figure>
                </div>
                <div class="col-lg-6">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
                    </p>
                    <p> laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    <div class="btn-wrappers">
                        <a href="#" class="btn-theme">Previous</a>
                        <a href="#" class="btn-theme">Upcoming</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- what happening section ends here -->
<!-- intractive sec starts here -->
<!-- <section class="intractive-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="intractive-sec-img">
                    <div class="intractive-content text-center">
                        <h4>intractive quest</h4>
                    </div>
                    <figure>
                        <img src="img/intractive.png" class="img-fluid" alt="">
                    </figure>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- intractive sec starts here -->
<?php include 'inc/footer.php' ?>