<?php
                                $sql = mysqli_query($link,"SELECT * FROM footer limit 1");
                                while($row = mysqli_fetch_assoc($sql)){
                            ?>
                            <div class="row contact-method">
                                <div class="col-md-4">
                                    <div class="method-item"><i class="fa fa-map-marker"></i>

                                        <p class="sub"><?=$arr['location']?></p>

                                        <div class="detail">
                                            <p><?=$row['location']?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="method-item"><i class="fa fa-phone"></i>

                                        <p class="sub"><?=$arr['call']?></p>

                                        <div class="detail">
                                            <p>Local: <?=$row['nomer']?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="method-item"><i class="fa fa-envelope"></i>

                                        <p class="sub"><?=$arr['mail']?></p>

                                        <div class="detail"><p><?=$row['email']?></p>

                                            <p><!--<?=$row['web_link']?>--></p></div>
                                    </div>
                                </div>
                            </div>
                            <?}?>
                            <form class="bg-w-form contact-form" id="con" method="post" action="contact_us.php">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group"><label class="control-label form-label"><?=$arr['name']?> <span class="highlight">*</span></label>
                                            <input type="text" placeholder="" class="form-control form-input" name="name" id="name"/><!--label.control-label.form-label.warning-label(for="") Warning for the above !--></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"><label class="control-label form-label"><?=$arr['email']?> <span class="highlight">*</span></label>
                                            <input name="email" id="email"  type="text" placeholder="" class="form-control form-input"/><!--label.control-label.form-label.warning-label(for="")--></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label form-label"><?=$arr['kim']?></label>
                                            <select class="form-control form-input selectbox" id="kim" name="kim">
                                                <option value="Hammasi">Full people</option>
                                                <option value="Admin">Admin</option>
                                                <option value="Expert">Expert</option>
                                                <option value="Tahriryat">Editing</option>
                                            </select><!--label.control-label.form-label.warning-label(for="", hidden)-->
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"><label class="control-label form-label"><?=$arr['mavzu']?></label>
                                            <input name="subject" id="subject" type="text" placeholder="" class="form-control form-input"/><!--label.control-label.form-label.warning-label(for="", hidden)--></div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="contact-question form-group"><label class="control-label form-label">
                                            <?=$arr['message']?><span class="highlight">*</span></label>
                                            <textarea name="content" id="content" class="form-control form-input"></textarea></div>
                                    </div>
                                </div>
                                <div class="contact-submit">
                                    <button type="submit" class="btn btn-contact btn-green" id="submit"><span><?=$arr['send']?></span></button>
                                </div>
                            </form>