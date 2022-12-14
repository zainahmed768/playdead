<!-- Include App.php -->
<?php include 'inc/app.php' ?>
<!-- Include App.php -->

<!-- css start here -->
<link rel="stylesheet" href="css/auction.css">
<!-- css start here -->

<!-- Detail Section Start Here -->
<div class="welcome_video" id="WelcomeVdo">
    <video onload="SetVideoLoad()" id="AuctionVdo" width="100%" muted heigh="100vh" autoplay>
        <source src="img/welcome.mp4" type="video/mp4">
    </video>
</div>
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
    <section class="auction_sec">
        <div class="container">
            <div class="heading-wrapper text-center py-4">
                <figure><img src="img/auction-txt.png" alt="" class="img-fluid"></figure>
            </div>
            <!-- Auction Menus Start Here -->
            <!-- <?php include 'inc/castle-menus.php'?> -->
            <!-- Auction Menus End Here -->
            <ul class="auction-items">
                <li>
                    <div class="auction-box">
                        <div class="txt">
                            <h4>xyz Awards</h4>
                        </div>
                        <div class="img-box">
                            <figure><img src="img/inventory2.png" alt="123" class="img-fluid"></figure>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="auction-box">
                        <div class="txt">
                            <h4>xyz Awards</h4>
                        </div>
                        <div class="img-box">
                            <figure><img src="img/inventory6.png" alt="123" class="img-fluid"></figure>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="auction-box">
                        <div class="txt">
                            <h4>xyz Awards</h4>
                        </div>
                        <div class="img-box">
                            <figure><img src="img/inventory5.png" alt="123" class="img-fluid"></figure>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="auction-box">
                        <div class="txt">
                            <h4>xyz Awards</h4>
                        </div>
                        <div class="img-box">
                            <figure><img src="img/inventory1.png" alt="123" class="img-fluid"></figure>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="auction-box middle-box">
                        <a href="place-bid.php">
                            <div class="img-box">
                                <figure><img src="img/inventory-single.png" alt="123" class="img-fluid"></figure>
                            </div>
                            <div class="txt">
                                <h4>xyz Awards</h4>
                            </div>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="auction-box">
                        <div class="txt">
                            <h4>xyz Awards</h4>
                        </div>
                        <div class="img-box">
                            <figure><img src="img/inventory10.png" alt="123" class="img-fluid"></figure>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="auction-box">
                        <div class="txt">
                            <h4>xyz Awards</h4>
                        </div>
                        <div class="img-box">
                            <figure><img src="img/inventory6.png" alt="123" class="img-fluid"></figure>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="auction-box">
                        <div class="txt">
                            <h4>xyz Awards</h4>
                        </div>
                        <div class="img-box">
                            <figure><img src="img/inventory4.png" alt="123" class="img-fluid"></figure>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="auction-box">
                        <div class="txt">
                            <h4>xyz Awards</h4>
                        </div>
                        <div class="img-box">
                            <figure><img src="img/inventory5.png" alt="123" class="img-fluid"></figure>
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
// setTimeout(() => {
//     $('#WelcomeVdo').fadeOut(400)
// }, 3500)

$('#WelcomeVdo video').bind('ended', function() {
    $(this).parent().fadeOut()
})

// function SetVideoLoad() {
//     $('#WelcomeVdo').fadeOut(400)
// }

$('.auction-box .img-box img').click(function() {
    // console.log($(this).attr("src"))
    currentImg = $(this).attr("src")
    $('.auction-items .middle-box img').attr('src', currentImg)
})

// $('.auction-box').click(function() {
//     h4Var = $('.txt h4')
//     ActiveTxt = $(this, h4Var).text();
//     $('.auction-items .middle-box .txt h4').text(ActiveTxt)
// })
</script>