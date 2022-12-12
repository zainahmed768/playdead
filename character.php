<?php include 'inc/app.php' ?>
<!-- css start here -->
<link rel="stylesheet" href="css/character.css">
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
                <!-- character heading row start here-->
                <div class="row text-center pb-5">
                    <div class="col-sm-12">
                        <figure>
                            <img src="img/mycharacter.png" class="img-fluid" alt="">
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
                        <p class="char-des">Ferocious combatant that relies on strength and rage. Warriors are the
                            strongest of the classes. Warriors can equip any type of weapon but feel most at home with
                            melee weapons.</p>
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
                <div class="row cta-row">
                    <div class="col-sm-12 text-center">
                        <a href="#" class="btn-theme">Read More News</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>