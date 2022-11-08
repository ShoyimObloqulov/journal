     <? include_once 'config.php'; ?>
     
     <!-- FOOTER-->
     <footer>
         <div class="footer-main">
            <?php
                $sql = mysqli_query($link,"SELECT * FROM footer limit 1");
                while($row = mysqli_fetch_assoc($sql)){
            ?>
             <div class="container">
                 <div class="footer-main-wrapper">
                     <div class="row">
                         <div class="col-md-6">
                             <div class="col-md-6 col-sm-6 col-xs-6 sd380">
                                 <div class="edugate-widget widget">
                                     <div class="content-widget">
                                         <p><?=$row['suz']?></p>

                                         <div class="info-list">
                                             <ul class="list-unstyled">
                                                 <li><i class="fa fa-envelope"></i><a href="email: <?=$row['email']?>"><?=$row['email']?></a>
                                                 </li>
                                                 <li><i class="fa fa-phone"></i><a href="tel: <?=$row['nomer']?>">P: <?=$row['nomer']?></a>
                                                 </li>
                                                 <li><i class="fa fa-map-marker"></i>
                                                     <?=$row['location']?>
                                                 </li>
                                             </ul>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="col-md-6">
                             <div class="col-md-6 col-sm-6 col-xs-6 sd380">
                                 <div class="mailing-widget widget">
                                     <div class="content-wiget">
                                         
                                         <p><?=$arr['tarmoq']?></p>
                                         <div class="socials">
                                             <a href="email:<?=$row['email']?>" class="facebook">
                                                <i class="fa fa-facebook"></i></a>
                                             <a href="https://<?=$row['web_link']?>" class="google">
                                                <i class="fa fa-google-plus"></i></a>
                                             <a href="https://<?=$row['tme_link']?>" class="telegram">
                                                <i class="fa fa-telegram"></i></a>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="hyperlink">
                     <div class="pull-left hyper-left">
                         <p class="">© <bk id="year"></bk> <?=$arr['copy']?></p>
                     </div>
                     <div class="pull-right hyper-right"><?=$arr['web']?></div>
                 </div>
             </div>
             <?}?>
         </div>
     </footer>