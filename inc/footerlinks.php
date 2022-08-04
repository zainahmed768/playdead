<!-- Jquery CDN -->
<script src="js/jquery.min.js"></script>
<!-- Jquery CDN -->
<!-- Booststrap CDN -->
<script src="js/bootstrap.min.js"></script>
<!-- Booststrap CDN -->
<!-- anime.js cdn start here -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.js"></script>
<!-- anime.js cdn ends here -->
<!-- Slick Js -->
<script src="slick/slick.js"></script>
<!-- Slick Js -->
<!-- image Uploader Js -->
<script src="js/image-uploader.min.js"></script>
<!-- image Uploader Js -->
<!-- image Uploader Js -->
<script src="js/wow.min.js"></script>
<!-- image Uploader Js -->
<!-- Script Js -->
<script src="js/scripts.js"></script>
<!-- Script Js -->
<script>
    new WOW().init();
    // Add active class to the current button (highlight it)
    var header = document.getElementById("v-pills-tab");
    var btns = header.getElementsByClassName("nav-link");
    for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function() {
            var current = document.getElementsByClassName("active");
            current[0].className = current[0].className.replace(" active", "");
            this.className += " active";
        });
    }
    $('v-pills-tab a').on('click', function(e) {
        e.preventDefault()
        $(this).tab('show')
    })
</script>