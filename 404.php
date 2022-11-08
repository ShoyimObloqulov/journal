<!DOCTYPE html>
<html lang="en">

<head>
    <title>Not Found | 404</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- LIBRARY FONT-->
    <link type="text/css" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Lato:400,400italic,700,900,300">
    <link type="text/css" rel="stylesheet" href="assets/font/font-icon/font-awesome-4.4.0/css/font-awesome.css">
    <link type="text/css" rel="stylesheet" href="assets/font/font-icon/font-svg/css/Glyphter.css">
    <!-- LIBRARY CSS-->
    <link type="text/css" rel="stylesheet" href="assets/libs/animate/animate.css">
    <link type="text/css" rel="stylesheet" href="assets/libs/bootstrap-3.3.5/css/bootstrap.css">
    <link type="text/css" rel="stylesheet" href="assets/libs/owl-carousel-2.0/assets/owl.carousel.css">
    <link type="text/css" rel="stylesheet" href="assets/libs/selectbox/css/jquery.selectbox.css">
    <link type="text/css" rel="stylesheet" href="assets/libs/fancybox/css/jquery.fancybox.css">
    <link type="text/css" rel="stylesheet" href="assets/libs/fancybox/css/jquery.fancybox-buttons.css">
    <link type="text/css" rel="stylesheet" href="assets/libs/media-element/build/mediaelementplayer.min.css">
    <!-- STYLE CSS    -->
    <!--link(type="text/css", rel='stylesheet', href='assets/css/color-1.css', id="color-skins")-->
    <link type="text/css" rel="stylesheet" href="#" id="color-skins">
    <script src="assets/libs/jquery/jquery-2.1.4.min.js"></script>
    <script src="assets/libs/js-cookie/js.cookie.js"></script>
    <script>
        if ((Cookies.get('color-skin') != undefined) && (Cookies.get('color-skin') != 'color-1')) {
            $('#color-skins').attr('href', 'assets/css/' + Cookies.get('color-skin') + '.css');
        } else if ((Cookies.get('color-skin') == undefined) || (Cookies.get('color-skin') == 'color-1')) {
            $('#color-skins').attr('href', 'assets/css/color-1.css');
        }
    </script>
</head>

<body>
    <!-- HEADER-->
    <header>
        <!-- not include-->
    </header>
    <!-- WRAPPER-->
    <div id="wrapper-content">
        <!-- PAGE WRAPPER-->
        <div id="page-wrapper">
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <!-- CONTENT-->
                <div class="content">
                    <div class="page-404">
                        <div class="container">
                            <div class="wrapper-404">
                                <div class="title-404">
                                    <p class="signal">Voy, bu sahifa topilmadi!</p><span class="sub">
                                        Siz qidirayotgan sahifa oʻchirilgan, nomi oʻzgartirilgan yoki vaqtincha mavjud boʻlmagan boʻlishi mumkin.</span>

                                    <p class="warning">404</p>
                                    <button onclick="window.location.href='/index.php'"
                                        class="btn btn-404"><span>HOME</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- BUTTON BACK TO TOP-->
        <div id="back-top"><a href="#top"><i class="fa fa-angle-double-up"></i></a></div>
    </div>
    <!-- FOOTER-->
    <footer></footer>
   
    <!-- LOADING-->
    <!-- JAVASCRIPT LIBS-->
    <script>
        if ((Cookies.get('color-skin') != undefined) && (Cookies.get('color-skin') != 'color-1')) {
            $('.logo .header-logo img').attr('src', 'assets/images/logo-' + Cookies.get('color-skin') + '.png');
        } else if ((Cookies.get('color-skin') == undefined) || (Cookies.get('color-skin') == 'color-1')) {
            $('.logo .header-logo img').attr('src', 'assets/images/logo-color-1.png');
        }
    </script>
    <script src="assets/libs/bootstrap-3.3.5/js/bootstrap.min.js"></script>
    <script src="assets/libs/smooth-scroll/jquery-smoothscroll.js"></script>
    <script src="assets/libs/owl-carousel-2.0/owl.carousel.min.js"></script>
    <script src="assets/libs/appear/jquery.appear.js"></script>
    <script src="assets/libs/count-to/jquery.countTo.js"></script>
    <script src="assets/libs/wow-js/wow.min.js"></script>
    <script src="assets/libs/selectbox/js/jquery.selectbox-0.2.min.js"></script>
    <script src="assets/libs/isotope/isotope.pkgd.min.js"></script>
    <script src="assets/libs/fancybox/js/jquery.fancybox.js"></script>
    <script src="assets/libs/fancybox/js/jquery.fancybox-buttons.js"></script>
    <!-- MAIN JS-->
    <script src="assets/js/main.js"></script>
    <!-- LOADING SCRIPTS FOR PAGE-->
</body>

</html>