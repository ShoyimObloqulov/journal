        <div class="certificate-title underline"><?=$arr['hamkor']?></div>
            <div class="slider-logo">
            <div class="slider-logo-wrapper">
                <div class="slider-logo-content">
                    <div class="carousel-logos owl-carousel">
                        <?
                            $logo = mysqli_query($link,"SELECT * FROM `sayt`");
                            while ($wr = mysqli_fetch_assoc($logo)) {
                        ?>
                        <div class="logo-iteam item">
                        	<a href="#">
                        		<img src="<?=$wr['rasm'];?>" alt="" class="img-responsive"/>
                        	</a>
                        </div>
                        <?}?>
                    </div>
                </div>
            </div>
        </div> 