<div class="section section-padding top-courses">
            <div class="container">
                <div class="group-title-index">
                    <h4 class="top-title"><?=$arr['elon']?></h4>
                    <div class="bottom-title"><i class="bottom-icon icon-icon-04"></i></div>
                </div>
                <div class="top-courses-wrapper">
                    <div class="top-courses-slider">
                        <?
                            $sql = mysqli_query($link,"SELECT * FROM `elonlar`");
                            while ($row = mysqli_fetch_assoc($sql)) {
                        ?>
                        <div class="top-courses-item">
                            <div class="edugate-layout-2">
                                <div class="edugate-layout-2-wrapper">
                                    <div class="edugate-content">
                                        <h2 class="title"><?=$row['anons']?></h2>

                                        <div class="info">
                                            <div class="author item"><a href="#"><?=$row['name']?> | <?=$row['company']?></a></div>
                                            <div class="date-time item"><a href="#"><?=$row['sana']?></a></div>
                                        </div>
                                        
                                        <div class="description"><?=$row['description']?></div>
                                        <button onclick="window.location.href='courses-detail.php?id=<?=$row['id']?>'"
                                            class="btn btn-green"><span>Batafsil</span></button>
                                    </div>
                                    <div class="edugate-image">
                                        <img src="<?=$row['rasm']?>" class="img-responsive" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?}?>
                    </div>
                </div>
            </div>
        </div>