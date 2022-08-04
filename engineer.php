<?php include 'inc/app.php' ?>
<!-- css start here -->
<link rel="stylesheet" href="css/engineer.css">
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
                    <?php include 'inc/character-menu-items.php'; ?>
                </div>
            </div>
        </div>
        <!-- Menus -->

        <!-- Main Content Start Here -->
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="character-list animate__animated animate__fadeInLeft">
                            <!-- 3 character start here -->
                            
                            <div class="character-wrapper active-wr">
                                <a href="engineer.php">
                                <figure>
                                    <img src="img/charc3.png" class="char-img img-fluid" alt="">
                                    <img src="img/TheEngineer.png" class="char-name img-fluid" alt="">
                                </figure>
                                </a>
                            </div>
                            <!-- 3 character ends here -->
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
                        <div class="character-specification animate__animated animate__fadeInRight">
                            <figure>
                            <img src="img/TheEngineer.png" class="char-name img-fluid" alt="">
                            </figure>
                            <p class="golden-color">Trained in the healing arts, a medic's intelligence is their prime attribute. Medics are versatile and can bring the fight or bring the bandages. A good medic fills in where needed most.</p>
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
                                <a href="login.php" class="btn btn-theme">Next</a>
                            </div>
                            <!-- call to action -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
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
                <div class="character-list animate__animated animate__fadeInDown animate__delay-2s">
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
                <div class="character-list animate__animated animate__fadeInDown animate__delay-2s">
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
        <div class="row cta-row">
            <div class="col-sm-12 text-center">
                <a href="playerdetail5.php" class="btn-theme">Read More News</a>
            </div>
        </div>
    </div>
</section>

<?php include 'inc/footer.php' ?>