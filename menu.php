<div class="header-main homepage-01">
    <div class="container">
        <div class="header-main-wrapper">
            <div class="navbar-heade">
                <div class="logo pull-left">
                    <a href="/" class="header-logo">
                        <img src="assets/images/logo/jssr.ico" alt="" />
                        <style>
                            header .header-main .logo .header-logo img{
                                max-width: 100px;
                            }
                            header .header-main.header-fixed .logo .header-logo img{
                                max-width: 60px;
                            }
                        </style>
                    </a>
                </div>
                <button type="button" data-toggle="collapse" data-target=".navigation"
                    class="navbar-toggle edugate-navbar"><span class="icon-bar"></span><span
                        class="icon-bar"></span><span class="icon-bar"></span>
                </button>
            </div>
            <nav class="navigation collapse navbar-collapse pull-right">
                <!-- Jurnal haqida  -->
                <ul class="nav-links nav navbar-nav">
                    <li class="dropdown"><a href="current.php" class="main-menu"><?=$arr['menu_1']?></a></li>
                    <li class="dropdown"><a href="archives.php" class="main-menu"><?=$arr['menu_2']?></a></li>
                    <li class="dropdown"><a href="public.php" class="main-menu"><?=$arr['menu_3']?></a></li>
                    <li class="dropdown"><a href="topic.php" class="main-menu"><?=$arr['menu_t']?></a></li>
                    <li class="dropdown">
                        <a href="#" class="main-menu"><?=$arr['menu_4']?> <span class="fa fa-angle-down icons-dropdown" id="iconx"></span></a>
                        <ul class="dropdown-menu edugate-dropdown-menu-1">
                            <li><a href="about.php" class="link-page"><?=$arr['menu_5']?></a></li>
                            <li><a href="about.php" class="link-page"><?=$arr['menu_6']?></a></li>
                            <li><a href="submissions.php" class="link-page"><?=$arr['menu_7']?></a></li>
                            <li><a href="team.php" class="link-page"><?=$arr['menu_8']?></a></li>
                            <li><a href="privacy.php" class="link-page"><?=$arr['menu_9']?></a></li>

                        </ul>
                    </li>
                    <li class="dropdown"><a href="search.php" class="main-menu"><?=$arr['menu_10']?></a></li>
                    <!--  -->
                    <li><a href="contact.php" class="main-menu"><?=$arr['menu_11']?></a></li>
                    <?
                        if($arr['lang'] == "eng"){
                            ?>
                                <li class="dropdown">
                                    <a href="#" class="main-menu">
                                        <img style="max-width: 17px;" src="assets/lang/united-kingdom.png" alt=""> ENG<span class="fa fa-angle-down icons-dropdown"></span></a>
                                    <ul class="dropdown-menu edugate-dropdown-menu-1">
                                        <li>
                                            <a href="language.php?lang=uz" class="link-page">
                                            <img style="max-width: 17px;" src="assets/lang/uzbekistan.png" alt=""> UZB</a>
                                        </li>
                                        <li>
                                            <a href="language.php?lang=ru" class="link-page">
                                            <img style="max-width: 17px;" src="assets/lang/russia.png" alt=""> RUS</a>
                                        </li>
                                    </ul>
                                </li>
                            <?
                        }
                        else if($arr['lang'] == "uz"){
                            ?>
                                <li class="dropdown">
                                    <a href="#" class="main-menu">
                                        <img style="max-width: 17px;" src="assets/lang/uzbekistan.png" alt=""> UZB<span class="fa fa-angle-down icons-dropdown"></span></a>
                                    <ul class="dropdown-menu edugate-dropdown-menu-1">
                                        <li><a href="language.php?lang=eng" class="link-page">
                                            <img style="max-width: 17px;" src="assets/lang/united-kingdom.png" alt=""> ENG</a></li>
                                        <li><a href="language.php?lang=ru" class="link-page">
                                            <img style="max-width: 17px;" src="assets/lang/russia.png" alt=""> RUS</a></li>
                                    </ul>
                                </li>
                            <?
                        }
                        else if($arr['lang'] == "ru"){
                            ?>
                                <li class="dropdown">
                                    <a href="#" class="main-menu">
                                        <img style="max-width: 17px;" src="assets/lang/russia.png" alt=""> RUS<span class="fa fa-angle-down icons-dropdown"></span></a>
                                    <ul class="dropdown-menu edugate-dropdown-menu-1">
                                        <li><a href="language.php?lang=uz" class="link-page">
                                            <img style="max-width: 17px;" src="assets/lang/uzbekistan.png" alt=""> UZB</a></li>
                                        <li><a href="language.php?lang=eng" class="link-page">
                                            <img style="max-width: 17px;" src="assets/lang/united-kingdom.png" alt=""> ENG</a></li>
                                    </ul>
                                </li>
                            <?
                        }
                    ?>
                </ul>
            </nav>
        </div>
    </div>
</div>