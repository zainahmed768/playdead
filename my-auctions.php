<!-- Include App.php -->
<?php include 'inc/app.php' ?>
<!-- Include App.php -->

<!-- css start here -->
<link rel="stylesheet" href="css/my-auction.css">
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

    <!-- Result Sec Start Here -->
    <section class="my_auction py-4">
        <div class="container">
            <div class="heading_wrapper text-center pb-5">
                <figure><img src="img/myauctions-txt.png" alt="" class="img-fluid"></figure>
            </div>
            <ul class="all-auction-items">
                <li>
                    <div class="aucton-box">
                        <div class="topbar">
                            <h5>Auction Ends In</h5>
                            <h4>47 . 59 . 00</h4>
                        </div>
                        <div class="img-box">
                            <figure><img src="img/myauction1.png" alt="" class="img-fluid"></figure>
                        </div>
                        <div class="bottombar">
                            <h5>Auction Ends In</h5>
                            <h4>Bid Starting From $10</h4>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="aucton-box">
                        <div class="topbar">
                            <h5>Auction Ends In</h5>
                            <h4>47 . 59 . 00</h4>
                        </div>
                        <div class="img-box">
                            <figure><img src="img/myauction2.png" alt="" class="img-fluid"></figure>
                        </div>
                        <div class="bottombar">
                            <h5>Auction Ends In</h5>
                            <h4>Bid Starting From $10</h4>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!-- Result End Here -->

</div>

<!-- FooterLink Include -->
<?php include 'inc/footerlinks.php'?>
<!-- FooterLink Include -->

<script>
setTimeout(() => {
    console.log('DONEE')
    $('#WelcomeVdo').fadeOut(400)
}, 3500)
</script>