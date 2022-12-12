<?php include 'inc/app.php' ?>
<!-- css start here -->
<link rel="stylesheet" href="css/myprofile.css">
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

    <!-- Profile Content Start Here -->
    <div class="ProfileContent-Dv">
        <div class="container-fluid">
            <div class="main-Title pb-5 text-center">
                <figure><img src="img/profiletitle.png" alt=""></figure>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="classesDv">
                                <div class="head">
                                    <figure><img src="img/classtitle.png" alt="" class="title"></figure>
                                </div>
                                <ul class="classes-list">
                                    <li>
                                        <a href="sniper.php">
                                            <div class="img-box">
                                                <figure><img src="img/class1.png" alt=""></figure>
                                            </div>
                                            <div class="classText">
                                                <figure><a href="#"><img src="img/classtxt1.png" alt=""></a></figure>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="engineer.php">
                                            <div class="img-box">
                                                <figure><img src="img/class2.png" alt=""></figure>
                                            </div>
                                            <div class="classText">
                                                <figure><a href="#"><img src="img/classtxt2.png" alt=""></a></figure>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="medic.php">
                                            <div class="img-box">
                                                <figure><img src="img/class3.png" alt=""></figure>
                                            </div>
                                            <div class="classText">
                                                <figure><a href="#"><img src="img/classtxt3.png" alt=""></a></figure>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="ninja.php">
                                            <div class="img-box">
                                                <figure><img src="img/class4.png" alt=""></figure>
                                            </div>
                                            <div class="classText">
                                                <figure><a href="#"><img src="img/classtxt4.png" alt=""></a></figure>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="priest.php">
                                            <div class="img-box">
                                                <figure><img src="img/class5.png" alt=""></figure>
                                            </div>
                                            <div class="classText">
                                                <figure><a href="#"><img src="img/classtxt5.png" alt=""></a></figure>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="tank.php">
                                            <div class="img-box">
                                                <figure><img src="img/class6.png" alt=""></figure>
                                            </div>
                                            <div class="classText">
                                                <figure><a href="#"><img src="img/classtxt6.png" alt=""></a></figure>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <div class="actionLinks">
                                    <a href="rulebook.php">Rule book</a>
                                    <div class="spacer"></div>
                                    <a href="rulebook.php">Rule book</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="Warrior-Dv">
                                <div class="head">
                                    <figure><img src="img/warrior.png" alt=""></figure>
                                </div>
                                <div class="characterKills">
                                    <div class="property">
                                        <h4>Character Kills</h4>
                                    </div>
                                    <div class="value">
                                        <h3>666</h3>
                                    </div>
                                </div>
                                <p>
                                    Ferocious combatant that relies on strength and rage. Warriors are the strongest of
                                    the classes. Warriors can equip any type of weapon but feel most at home with melee
                                    weapons.
                                </p>
                                <ul class="awardsList">
                                    <li>
                                        <div class="imgBox-award">
                                            <figure><img src="img/item1.png" alt=""></figure>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="imgBox-award">
                                            <figure><img src="img/item2.png" alt=""></figure>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="imgBox-award">
                                            <figure><img src="img/item3.png" alt=""></figure>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="imgBox-award">
                                            <figure><img src="img/item4.png" alt=""></figure>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="imgBox-award">
                                            <figure><img src="img/item5.png" alt=""></figure>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="imgBox-award">
                                            <figure><img src="img/item6.png" alt=""></figure>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="imgBox-award">
                                            <figure><img src="img/item7.png" alt=""></figure>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- Character Div Start Here -->
                            <div class="CharacterDv">
                                <div class="head pb-3">
                                    <figure><img src="img/charactertitle.png" alt=""></figure>
                                </div>
                                <ul class="AboutPlayers">
                                    <li class="playersCharacter">
                                        <a href="playerdetail.php">
                                            <div class="player-img">
                                                <figure><img src="img/characterone.png" alt=""></figure>
                                            </div>
                                            <div class="content">
                                                <div class="playerName">
                                                    <h5>Player Name</h5>
                                                    <span>Marion</span>
                                                </div>
                                                <div class="playerLevel">
                                                    <h5>Player Level</h5>
                                                    <span>02</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="playersCharacter">
                                        <a href="playerdetail.php">
                                            <div class="player-img">
                                                <figure><img src="img/charactertwo.png" alt=""></figure>
                                            </div>
                                            <div class="content">
                                                <div class="playerName">
                                                    <h5>Player Name</h5>
                                                    <span>Marion</span>
                                                </div>
                                                <div class="playerLevel">
                                                    <h5>Player Level</h5>
                                                    <span>02</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="playersCharacter">
                                        <a href="playerdetail.php">
                                            <div class="player-img">
                                                <figure><img src="img/characterthree.png" alt=""></figure>
                                            </div>
                                            <div class="content">
                                                <div class="playerName">
                                                    <h5>Player Name</h5>
                                                    <span>Marion</span>
                                                </div>
                                                <div class="playerLevel">
                                                    <h5>Player Level</h5>
                                                    <span>02</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="playersCharacter">
                                        <a href="character-creation.php">
                                            <div class="player-img">
                                                <figure><img src="img/plus.png" alt=""></figure>
                                            </div>
                                            <div class="content">
                                                <div class="content">
                                                    <div class="Fornew">
                                                        <h5>Create new<br /> character</h5>
                                                        <!-- <span>Marion</span> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Character Div Start Here -->
                        </div>
                    </div>
                </div>
                <div class="vertical-line"></div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="GuildsDv">
                                <div class="head">
                                    <h3>My Guilds</h3>
                                </div>
                                <div class="discoo">
                                    <div class="imgBox">
                                        <figure><img src="img/guild1.png" alt=""></figure>
                                    </div>
                                    <div class="contentDv">
                                        <h3 class="name">Disco</h3>
                                        <span>Lorem ipsum dolor sit amet, consectetur elit.</span>
                                        <ul class="about">
                                            <li><img src="img/macrus.png" alt=""> Marcus Fenix</li>
                                            <li><img src="img/member.png" alt=""> Members : <ruby
                                                    class="total">24</ruby></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="discoo">
                                    <div class="imgBox">
                                        <figure><img src="img/guild2.png" alt=""></figure>
                                    </div>
                                    <div class="contentDv">
                                        <h3 class="name">Disco</h3>
                                        <span>Lorem ipsum dolor sit amet, consectetur elit.</span>
                                        <ul class="about">
                                            <li><img src="img/macrus.png" alt=""> Marcus Fenix</li>
                                            <li><img src="img/member.png" alt=""> Members : <ruby
                                                    class="total">24</ruby></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="CareerDv">
                                <div class="career-kills">
                                    <h4>Career Kills</h4>
                                    <h3>666</h3>
                                </div>

                                <div class="balance">
                                    <h3>Balance</h3>
                                    <div class="coins">
                                        <div class="gold-coins coinflex">
                                            <h4 class="txt">Gold coins</h4>
                                            <h4>238</h4>
                                        </div>
                                        <div class="burn-coins coinflex">
                                            <h4 class="txt">Burn coins</h4>
                                            <h4>999</h4>
                                        </div>
                                    </div>
                                </div>

                                <div class="Awardss">
                                    <h3>awards</h3>
                                    <ul class="awardsBox">
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                </div>

                                <div class="For-weapons">
                                    <h3>Weapons</h3>
                                    <ul class="weaponList">
                                        <li>
                                            <div class="imgBox">
                                                <figure><img src="img/weap1.png" alt=""></figure>
                                            </div>
                                            <div class="checked"><img src="img/checked.png" alt=""></div>
                                        </li>
                                        <li>
                                            <div class="imgBox">
                                                <figure><img src="img/weap2.png" alt=""></figure>
                                            </div>
                                            <div class="checked"><img src="img/checked.png" alt=""></div>
                                        </li>
                                        <li>
                                            <div class="imgBox">
                                                <figure><img src="img/weap3.png" alt=""></figure>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="imgBox">
                                                <figure><img src="img/weap4.png" alt=""></figure>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="imgBox">
                                                <figure><img src="img/weap5.png" alt=""></figure>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="PetsDv">
                                    <h3>pet</h3>
                                    <ul class="petsList">
                                        <li>
                                            <div class="imgBox">
                                                <figure><img src="img/pet1.png" alt=""></figure>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="imgBox">
                                                <figure><img src="img/pet2.png" alt=""></figure>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="imgBox">
                                                <figure><img src="img/pet1.png" alt=""></figure>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="imgBox">
                                                <figure><img src="img/pet2.png" alt=""></figure>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Profile Content End Here -->

</div>