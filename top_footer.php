<? 
    include_once 'config.php';
?>
<div class="header-topbar">
    <div class="header-topbar">
        <? 
            $sql=mysqli_query($link, "SELECT * FROM footer limit 1");
            while ($row=mysqli_fetch_assoc($sql)) {
        ?>
        <div class="container">
            <div class="topbar-left pull-left">
                <div class="email">

                    <a href="email:<?=$row['email']?>">
                        <i class="topbar-icon fa fa-envelope"></i>
                        <span><?=$row['email']?></span>
                    </a>
                </div>
                <div class="hotline"><a href="tel:<?=$row['nomer']?>"><i class="topbar-icon fa fa-phone"></i><span><?=$row['nomer']?></span></a></div>
            </div>
            <div class="topbar-right pull-right">
                <div class="socials">
                    <a href="<?=$row['email']?>" class="facebook"><i class="fa fa-facebook"></i></a>
                    <a href="<?=$row['web_link']?>" class="google"><i class="fa fa-google-plus"></i></a>
                    <a href="<?=$row['tme_link']?>" class="telegram"><i class="fa fa-telegram"></i></a>
                </div>
                <div class="group-sign-in">
                    <a href="login/login-user.php" class="login"><?=$arr['login']?></a>
                    <a href="login/signup-user.php" class="register"><?=$arr['register']?></a>
                </div>
            </div>
        </div>
        <?}?>
    </div>
</div>