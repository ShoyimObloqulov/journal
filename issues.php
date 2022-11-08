
<!DOCTYPE html>
<html lang="en">

<head>
    <title>SamDU | Issues</title>
    <? include_once 'head.php'; ?>
    <style>
        .search-input .form-select, .search-input .form-submit, .search-input .sbHolder {
            width: 50%;
            display: inline-block;
        }
    </style>
</head>
<body><!-- HEADER-->
<header>
    <? include_once 'top_footer.php'; ?>
    <? include_once 'menu.php'; ?>
</header>
<!-- WRAPPER-->
<div id="wrapper-content"><!-- PAGE WRAPPER-->
    <div id="page-wrapper"><!-- MAIN CONTENT-->
        <div class="main-content"><!-- CONTENT-->
            <div class="content">
                <div class="section background-opacity page-title set-height-top">
                    <div class="container">
                        <div class="page-title-wrapper"><!--.page-title-content--><h2 class="captions">all categories</h2>
                            <ol class="breadcrumb">
                                <li><a href="index.php">Bosh sahifa</a></li>
                                <li class="active"><a href="#">Categories</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="section">
                    <div class="search-input">
                        <div class="container">
                            <div class="search-input-wrapper">
                                <form>
                                    <select class="form-select selectbox">
                                        <option value="all">Jurnal soni</option>
                                        <?
                                            $sql = mysqli_query($link,"SELECT * FROM `jurnal_soni`");
                                            while($row = mysqli_fetch_assoc($sql)){
                                        ?>
                                        <option value="<?=$row['id']?>"><?=$row['name']?></option>
                                        <?}?>
                                    </select><br><br><br>
                                    <select class="form-select selectbox">
                                        <?
                                            $sql1 = mysqli_query($link,"SELECT * FROM `year`");
                                            while($row1 = mysqli_fetch_assoc($sql1)){
                                        ?>
                                        <option value="<?=$row1['id']?>"><?=$row1['yaer']?></option>
                                        <?}?>
                                    </select><br><br><br>
                                    <button type="submit" class="form-submit btn btn-blue">
                                        <span>search<i class="fa fa-search"></i></span>
                                    </button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section section-padding courses">
                    <div class="container">
                        <div class="bs-component">
                              <div class="alert alert-dismissible alert-success">
                                <button class="close" type="button" data-dismiss="alert">×</button>Bu bo'lim tizimga maqola kiritib boshlagandan so'ng ishlaydi.
                              </div>
                            </div>
                        <div class="group-title-index">
                            <h2 class="center-title">Maqola izlash</h2>
                        </div>
                        <div class="courses-wrapper"><!-- Nav tabs-->
                            <div class="row top-content">
                                <div class="col-md-3">
                                    <div class="result-output text-left"><p class="result-count">Showing <strong>1-6</strong> of total <strong>12</strong> courses</p></div>
                                </div>
                                <div class="col-md-6">
                                    <ul role="tablist" class="nav nav-tabs edugate-tabs">
                                        <li role="presentation" class="active"><a href="#campus" data-toggle="tab" class="text">Olimlar</a></li>
                                        <li role="presentation"><a href="#education" data-toggle="tab" class="text">Magisterantlar</a></li>
                                        <li role="presentation"><a href="#building" data-toggle="tab" class="text">Bakalavirantlar</a></li>
                                        <li role="presentation"><a href="#teachers" data-toggle="tab" class="text">Ustozlar</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-3">
                                    <ul class="btn-list-grid list-unstyled text-right">
                                        <li class="active">
                                            <button class="btn-grid"><i class="fa fa-th-large"></i></button>
                                        </li>
                                        <li>
                                            <button class="btn-list"><i class="fa fa-th-list"></i></button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Tab panes-->
                            <div class="tab-content courses-content">
                                <div id="campus" role="tabpanel" class="tab-pane fade in active">
                                    <div class="style-show style-grid row">
                                        <div class="col-style">
                                            <div class="edugate-layout-2">
                                                <div class="edugate-layout-2-wrapper">
                                                    <div class="edugate-content"><a href="courses-detail.html" class="title">Photoghaphy Master</a>

                                                        <div class="info">
                                                            <div class="author item"><a href="#">By Admin</a></div>
                                                            <div class="date-time item"><a href="#">17 sep 2015</a></div>
                                                        </div>
                                                        <div class="info-more">
                                                            <div class="view item"><i class="fa fa-user"></i>

                                                                <p> 56</p></div>
                                                            <div class="comment item"><i class="fa fa-comment"></i>

                                                                <p> 239</p></div>
                                                        </div>
                                                        <div title="Rated 5.00 out of 5" class="star-rating"><span class="width-80"><strong class="rating">5.00</strong> out of 5</span></div>
                                                        <div class="description">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using. It is a long established fact that a reader will be distracted by the readable content of a page when l ooking at its layout. The point of using. Dalmatian hello amazing the rmore flung as thanks a manta dealt to under emu some the and one baldbe dear sobbingly save and spitefully less</div>
                                                        <button class="btn btn-green"><span>learn now</span></button>
                                                    </div>
                                                    <div class="edugate-image"><img src="assets/images/courses/courses-4.jpg" alt="" class="img-responsive"/></div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-style">
                                            <div class="edugate-layout-2">
                                                <div class="edugate-layout-2-wrapper">
                                                    <div class="edugate-content"><a href="courses-detail.html" class="title">Photoghaphy Master</a>

                                                        <div class="info">
                                                            <div class="author item"><a href="#">By Admin</a></div>
                                                            <div class="date-time item"><a href="#">17 sep 2015</a></div>
                                                        </div>
                                                        <div class="info-more">
                                                            <div class="view item"><i class="fa fa-user"></i>

                                                                <p> 56</p></div>
                                                            <div class="comment item"><i class="fa fa-comment"></i>

                                                                <p> 239</p></div>
                                                        </div>
                                                        <div title="Rated 5.00 out of 5" class="star-rating"><span class="width-10"><strong class="rating">5.00</strong> out of 5</span></div>
                                                        <div class="description">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using. It is a long established fact that a reader will be distracted by the readable content of a page when l ooking at its layout. The point of using. Dalmatian hello amazing the rmore flung as thanks a manta dealt to under emu some the and one baldbe dear sobbingly save and spitefully less</div>
                                                        <button class="btn btn-green"><span>learn now</span></button>
                                                    </div>
                                                    <div class="edugate-image"><img src="assets/images/categories/categories-4.jpg" alt="" class="img-responsive"/></div>
                                                </div>
                                            </div>
                                        </div>
                                        <nav class="pagination col-md-12">
                                            <ul class="pagination__list">
                                                <li><a rel="prev" href="#" class="pagination__previous btn-squae disable">&#8249;</a></li>
                                                <li><span class="pagination__page btn-squae active">1</span></li>
                                                <li><a href="#" class="pagination__page btn-squae">2</a></li>
                                                <li><a href="#" class="pagination__page btn-squae">...</a></li>
                                                <li><a href="#" class="pagination__page btn-squae">14</a></li>
                                                <li><a rel="next" href="#" class="pagination__next btn-squae">&#8250;</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                                <div id="education" role="tabpanel" class="tab-pane fade">
                                    <div class="style-show style-grid row">
                                        <div class="col-style">
                                            <div class="edugate-layout-2">
                                                <div class="edugate-layout-2-wrapper">
                                                    <div class="edugate-content"><a href="courses-detail.html" class="title">Photoghaphy Master</a>

                                                        <div class="info">
                                                            <div class="author item"><a href="#">By Admin</a></div>
                                                            <div class="date-time item"><a href="#">17 sep 2015</a></div>
                                                        </div>
                                                        <div class="info-more">
                                                            <div class="view item"><i class="fa fa-user"></i>

                                                                <p> 56</p></div>
                                                            <div class="comment item"><i class="fa fa-comment"></i>

                                                                <p> 239</p></div>
                                                        </div>
                                                        <div title="Rated 5.00 out of 5" class="star-rating"><span class="width-80"><strong class="rating">5.00</strong> out of 5</span></div>
                                                        <div class="description">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using. It is a long established fact that a reader will be distracted by the readable content of a page when l ooking at its layout. The point of using. Dalmatian hello amazing the rmore flung as thanks a manta dealt to under emu some the and one baldbe dear sobbingly save and spitefully less</div>
                                                        <button class="btn btn-green"><span>learn now</span></button>
                                                    </div>
                                                    <div class="edugate-image"><img src="assets/images/categories/categories-4.jpg" alt="" class="img-responsive"/></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-style">
                                            <div class="edugate-layout-2">
                                                <div class="edugate-layout-2-wrapper">
                                                    <div class="edugate-content"><a href="courses-detail.html" class="title">Photoghaphy Master</a>

                                                        <div class="info">
                                                            <div class="author item"><a href="#">By Admin</a></div>
                                                            <div class="date-time item"><a href="#">17 sep 2015</a></div>
                                                        </div>
                                                        <div class="info-more">
                                                            <div class="view item"><i class="fa fa-user"></i>

                                                                <p> 56</p></div>
                                                            <div class="comment item"><i class="fa fa-comment"></i>

                                                                <p> 239</p></div>
                                                        </div>
                                                        <div title="Rated 5.00 out of 5" class="star-rating"><span class="width-60"><strong class="rating">5.00</strong> out of 5</span></div>
                                                        <div class="description">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using. It is a long established fact that a reader will be distracted by the readable content of a page when l ooking at its layout. The point of using. Dalmatian hello amazing the rmore flung as thanks a manta dealt to under emu some the and one baldbe dear sobbingly save and spitefully less</div>
                                                        <button class="btn btn-green"><span>learn now</span></button>
                                                    </div>
                                                    <div class="edugate-image"><img src="assets/images/categories/categories-1.jpg" alt="" class="img-responsive"/></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-style">
                                            <div class="edugate-layout-2">
                                                <div class="edugate-layout-2-wrapper">
                                                    <div class="edugate-content"><a href="courses-detail.html" class="title">Photoghaphy Master</a>

                                                        <div class="info">
                                                            <div class="author item"><a href="#">By Admin</a></div>
                                                            <div class="date-time item"><a href="#">17 sep 2015</a></div>
                                                        </div>
                                                        <div class="info-more">
                                                            <div class="view item"><i class="fa fa-user"></i>

                                                                <p> 56</p></div>
                                                            <div class="comment item"><i class="fa fa-comment"></i>

                                                                <p> 239</p></div>
                                                        </div>
                                                        <div title="Rated 5.00 out of 5" class="star-rating"><span class="width-20"><strong class="rating">5.00</strong> out of 5</span></div>
                                                        <div class="description">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using. It is a long established fact that a reader will be distracted by the readable content of a page when l ooking at its layout. The point of using. Dalmatian hello amazing the rmore flung as thanks a manta dealt to under emu some the and one baldbe dear sobbingly save and spitefully less</div>
                                                        <button class="btn btn-green"><span>learn now</span></button>
                                                    </div>
                                                    <div class="edugate-image"><img src="assets/images/courses/courses-2.jpg" alt="" class="img-responsive"/></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-style">
                                            <div class="edugate-layout-2">
                                                <div class="edugate-layout-2-wrapper">
                                                    <div class="edugate-content"><a href="courses-detail.html" class="title">Photoghaphy Master</a>

                                                        <div class="info">
                                                            <div class="author item"><a href="#">By Admin</a></div>
                                                            <div class="date-time item"><a href="#">17 sep 2015</a></div>
                                                        </div>
                                                        <div class="info-more">
                                                            <div class="view item"><i class="fa fa-user"></i>

                                                                <p> 56</p></div>
                                                            <div class="comment item"><i class="fa fa-comment"></i>

                                                                <p> 239</p></div>
                                                        </div>
                                                        <div title="Rated 5.00 out of 5" class="star-rating"><span class="width-30"><strong class="rating">5.00</strong> out of 5</span></div>
                                                        <div class="description">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using. It is a long established fact that a reader will be distracted by the readable content of a page when l ooking at its layout. The point of using. Dalmatian hello amazing the rmore flung as thanks a manta dealt to under emu some the and one baldbe dear sobbingly save and spitefully less</div>
                                                        <button class="btn btn-green"><span>learn now</span></button>
                                                    </div>
                                                    <div class="edugate-image"><img src="assets/images/courses/courses-3.jpg" alt="" class="img-responsive"/></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-style">
                                            <div class="edugate-layout-2">
                                                <div class="edugate-layout-2-wrapper">
                                                    <div class="edugate-content"><a href="courses-detail.html" class="title">Photoghaphy Master</a>

                                                        <div class="info">
                                                            <div class="author item"><a href="#">By Admin</a></div>
                                                            <div class="date-time item"><a href="#">17 sep 2015</a></div>
                                                        </div>
                                                        <div class="info-more">
                                                            <div class="view item"><i class="fa fa-user"></i>

                                                                <p> 56</p></div>
                                                            <div class="comment item"><i class="fa fa-comment"></i>

                                                                <p> 239</p></div>
                                                        </div>
                                                        <div title="Rated 5.00 out of 5" class="star-rating"><span class="width-70"><strong class="rating">5.00</strong> out of 5</span></div>
                                                        <div class="description">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using. It is a long established fact that a reader will be distracted by the readable content of a page when l ooking at its layout. The point of using. Dalmatian hello amazing the rmore flung as thanks a manta dealt to under emu some the and one baldbe dear sobbingly save and spitefully less</div>
                                                        <button class="btn btn-green"><span>learn now</span></button>
                                                    </div>
                                                    <div class="edugate-image"><img src="assets/images/courses/courses-4.jpg" alt="" class="img-responsive"/></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-style">
                                            <div class="edugate-layout-2">
                                                <div class="edugate-layout-2-wrapper">
                                                    <div class="edugate-content"><a href="courses-detail.html" class="title">Photoghaphy Master</a>

                                                        <div class="info">
                                                            <div class="author item"><a href="#">By Admin</a></div>
                                                            <div class="date-time item"><a href="#">17 sep 2015</a></div>
                                                        </div>
                                                        <div class="info-more">
                                                            <div class="view item"><i class="fa fa-user"></i>

                                                                <p> 56</p></div>
                                                            <div class="comment item"><i class="fa fa-comment"></i>

                                                                <p> 239</p></div>
                                                        </div>
                                                        <div title="Rated 5.00 out of 5" class="star-rating"><span class="width-80"><strong class="rating">5.00</strong> out of 5</span></div>
                                                        <div class="description">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using. It is a long established fact that a reader will be distracted by the readable content of a page when l ooking at its layout. The point of using. Dalmatian hello amazing the rmore flung as thanks a manta dealt to under emu some the and one baldbe dear sobbingly save and spitefully less</div>
                                                        <button class="btn btn-green"><span>learn now</span></button>
                                                    </div>
                                                    <div class="edugate-image"><img src="assets/images/courses/courses-1.jpg" alt="" class="img-responsive"/></div>
                                                </div>
                                            </div>
                                        </div>
                                        <nav class="pagination col-md-12">
                                            <ul class="pagination__list">
                                                <li><a rel="prev" href="#" class="pagination__previous btn-squae disable">&#8249;</a></li>
                                                <li><span class="pagination__page btn-squae active">1</span></li>
                                                <li><a href="#" class="pagination__page btn-squae">2</a></li>
                                                <li><a href="#" class="pagination__page btn-squae">...</a></li>
                                                <li><a href="#" class="pagination__page btn-squae">14</a></li>
                                                <li><a rel="next" href="#" class="pagination__next btn-squae">&#8250;</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                                <div id="building" role="tabpanel" class="tab-pane fade">
                                    <div class="style-show style-grid row">
                                        <div class="col-style">
                                            <div class="edugate-layout-2">
                                                <div class="edugate-layout-2-wrapper">
                                                    <div class="edugate-content"><a href="courses-detail.html" class="title">Photoghaphy Master</a>

                                                        <div class="info">
                                                            <div class="author item"><a href="#">By Admin</a></div>
                                                            <div class="date-time item"><a href="#">17 sep 2015</a></div>
                                                        </div>
                                                        <div class="info-more">
                                                            <div class="view item"><i class="fa fa-user"></i>

                                                                <p> 56</p></div>
                                                            <div class="comment item"><i class="fa fa-comment"></i>

                                                                <p> 239</p></div>
                                                        </div>
                                                        <div title="Rated 5.00 out of 5" class="star-rating"><span class="width-10"><strong class="rating">5.00</strong> out of 5</span></div>
                                                        <div class="description">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using. It is a long established fact that a reader will be distracted by the readable content of a page when l ooking at its layout. The point of using. Dalmatian hello amazing the rmore flung as thanks a manta dealt to under emu some the and one baldbe dear sobbingly save and spitefully less</div>
                                                        <button class="btn btn-green"><span>learn now</span></button>
                                                    </div>
                                                    <div class="edugate-image"><img src="assets/images/courses/courses-3.jpg" alt="" class="img-responsive"/></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-style">
                                            <div class="edugate-layout-2">
                                                <div class="edugate-layout-2-wrapper">
                                                    <div class="edugate-content"><a href="courses-detail.html" class="title">Photoghaphy Master</a>

                                                        <div class="info">
                                                            <div class="author item"><a href="#">By Admin</a></div>
                                                            <div class="date-time item"><a href="#">17 sep 2015</a></div>
                                                        </div>
                                                        <div class="info-more">
                                                            <div class="view item"><i class="fa fa-user"></i>

                                                                <p> 56</p></div>
                                                            <div class="comment item"><i class="fa fa-comment"></i>

                                                                <p> 239</p></div>
                                                        </div>
                                                        <div title="Rated 5.00 out of 5" class="star-rating"><span class="width-90"><strong class="rating">5.00</strong> out of 5</span></div>
                                                        <div class="description">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using. It is a long established fact that a reader will be distracted by the readable content of a page when l ooking at its layout. The point of using. Dalmatian hello amazing the rmore flung as thanks a manta dealt to under emu some the and one baldbe dear sobbingly save and spitefully less</div>
                                                        <button class="btn btn-green"><span>learn now</span></button>
                                                    </div>
                                                    <div class="edugate-image"><img src="assets/images/courses/courses-4.jpg" alt="" class="img-responsive"/></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-style">
                                            <div class="edugate-layout-2">
                                                <div class="edugate-layout-2-wrapper">
                                                    <div class="edugate-content"><a href="courses-detail.html" class="title">Photoghaphy Master</a>

                                                        <div class="info">
                                                            <div class="author item"><a href="#">By Admin</a></div>
                                                            <div class="date-time item"><a href="#">17 sep 2015</a></div>
                                                        </div>
                                                        <div class="info-more">
                                                            <div class="view item"><i class="fa fa-user"></i>

                                                                <p> 56</p></div>
                                                            <div class="comment item"><i class="fa fa-comment"></i>

                                                                <p> 239</p></div>
                                                        </div>
                                                        <div title="Rated 5.00 out of 5" class="star-rating"><span class="width-10"><strong class="rating">5.00</strong> out of 5</span></div>
                                                        <div class="description">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using. It is a long established fact that a reader will be distracted by the readable content of a page when l ooking at its layout. The point of using. Dalmatian hello amazing the rmore flung as thanks a manta dealt to under emu some the and one baldbe dear sobbingly save and spitefully less</div>
                                                        <button class="btn btn-green"><span>learn now</span></button>
                                                    </div>
                                                    <div class="edugate-image"><img src="assets/images/courses/courses-1.jpg" alt="" class="img-responsive"/></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-style">
                                            <div class="edugate-layout-2">
                                                <div class="edugate-layout-2-wrapper">
                                                    <div class="edugate-content"><a href="courses-detail.html" class="title">Photoghaphy Master</a>

                                                        <div class="info">
                                                            <div class="author item"><a href="#">By Admin</a></div>
                                                            <div class="date-time item"><a href="#">17 sep 2015</a></div>
                                                        </div>
                                                        <div class="info-more">
                                                            <div class="view item"><i class="fa fa-user"></i>

                                                                <p> 56</p></div>
                                                            <div class="comment item"><i class="fa fa-comment"></i>

                                                                <p> 239</p></div>
                                                        </div>
                                                        <div title="Rated 5.00 out of 5" class="star-rating"><span class="width-60"><strong class="rating">5.00</strong> out of 5</span></div>
                                                        <div class="description">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using. It is a long established fact that a reader will be distracted by the readable content of a page when l ooking at its layout. The point of using. Dalmatian hello amazing the rmore flung as thanks a manta dealt to under emu some the and one baldbe dear sobbingly save and spitefully less</div>
                                                        <button class="btn btn-green"><span>learn now</span></button>
                                                    </div>
                                                    <div class="edugate-image"><img src="assets/images/categories/categories-4.jpg" alt="" class="img-responsive"/></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-style">
                                            <div class="edugate-layout-2">
                                                <div class="edugate-layout-2-wrapper">
                                                    <div class="edugate-content"><a href="courses-detail.html" class="title">Photoghaphy Master</a>

                                                        <div class="info">
                                                            <div class="author item"><a href="#">By Admin</a></div>
                                                            <div class="date-time item"><a href="#">17 sep 2015</a></div>
                                                        </div>
                                                        <div class="info-more">
                                                            <div class="view item"><i class="fa fa-user"></i>

                                                                <p> 56</p></div>
                                                            <div class="comment item"><i class="fa fa-comment"></i>

                                                                <p> 239</p></div>
                                                        </div>
                                                        <div title="Rated 5.00 out of 5" class="star-rating"><span class="width-10"><strong class="rating">5.00</strong> out of 5</span></div>
                                                        <div class="description">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using. It is a long established fact that a reader will be distracted by the readable content of a page when l ooking at its layout. The point of using. Dalmatian hello amazing the rmore flung as thanks a manta dealt to under emu some the and one baldbe dear sobbingly save and spitefully less</div>
                                                        <button class="btn btn-green"><span>learn now</span></button>
                                                    </div>
                                                    <div class="edugate-image"><img src="assets/images/categories/categories-1.jpg" alt="" class="img-responsive"/></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-style">
                                            <div class="edugate-layout-2">
                                                <div class="edugate-layout-2-wrapper">
                                                    <div class="edugate-content"><a href="courses-detail.html" class="title">Photoghaphy Master</a>

                                                        <div class="info">
                                                            <div class="author item"><a href="#">By Admin</a></div>
                                                            <div class="date-time item"><a href="#">17 sep 2015</a></div>
                                                        </div>
                                                        <div class="info-more">
                                                            <div class="view item"><i class="fa fa-user"></i>

                                                                <p> 56</p></div>
                                                            <div class="comment item"><i class="fa fa-comment"></i>

                                                                <p> 239</p></div>
                                                        </div>
                                                        <div title="Rated 5.00 out of 5" class="star-rating"><span class="width-50"><strong class="rating">5.00</strong> out of 5</span></div>
                                                        <div class="description">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using. It is a long established fact that a reader will be distracted by the readable content of a page when l ooking at its layout. The point of using. Dalmatian hello amazing the rmore flung as thanks a manta dealt to under emu some the and one baldbe dear sobbingly save and spitefully less</div>
                                                        <button class="btn btn-green"><span>learn now</span></button>
                                                    </div>
                                                    <div class="edugate-image"><img src="assets/images/courses/courses-2.jpg" alt="" class="img-responsive"/></div>
                                                </div>
                                            </div>
                                        </div>
                                        <nav class="pagination col-md-12">
                                            <ul class="pagination__list">
                                                <li><a rel="prev" href="#" class="pagination__previous btn-squae disable">&#8249;</a></li>
                                                <li><span class="pagination__page btn-squae active">1</span></li>
                                                <li><a href="#" class="pagination__page btn-squae">2</a></li>
                                                <li><a href="#" class="pagination__page btn-squae">...</a></li>
                                                <li><a href="#" class="pagination__page btn-squae">14</a></li>
                                                <li><a rel="next" href="#" class="pagination__next btn-squae">&#8250;</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                                <div id="teachers" role="tabpanel" class="tab-pane fade">
                                    <div class="style-show style-grid row">
                                        
                                        <div class="col-style">
                                            <div class="edugate-layout-2">
                                                <div class="edugate-layout-2-wrapper">
                                                    <div class="edugate-content"><a href="courses-detail.html" class="title">Photoghaphy Master</a>

                                                        <div class="info">
                                                            <div class="author item"><a href="#">By Admin</a></div>
                                                            <div class="date-time item"><a href="#">17 sep 2015</a></div>
                                                        </div>
                                                        <div class="info-more">
                                                            <div class="view item"><i class="fa fa-user"></i>

                                                                <p> 56</p></div>
                                                            <div class="comment item"><i class="fa fa-comment"></i>

                                                                <p> 239</p></div>
                                                        </div>
                                                        <div title="Rated 5.00 out of 5" class="star-rating"><span class="width-90"><strong class="rating">5.00</strong> out of 5</span></div>
                                                        <div class="description">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using. It is a long established fact that a reader will be distracted by the readable content of a page when l ooking at its layout. The point of using. Dalmatian hello amazing the rmore flung as thanks a manta dealt to under emu some the and one baldbe dear sobbingly save and spitefully less</div>
                                                        <button class="btn btn-green"><span>learn now</span></button>
                                                    </div>
                                                    <div class="edugate-image"><img src="assets/images/courses/courses-1.jpg" alt="" class="img-responsive"/></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-style">
                                            <div class="edugate-layout-2">
                                                <div class="edugate-layout-2-wrapper">
                                                    <div class="edugate-content"><a href="courses-detail.html" class="title">Photoghaphy Master</a>

                                                        <div class="info">
                                                            <div class="author item"><a href="#">By Admin</a></div>
                                                            <div class="date-time item"><a href="#">17 sep 2015</a></div>
                                                        </div>
                                                        <div class="info-more">
                                                            <div class="view item"><i class="fa fa-user"></i>

                                                                <p> 56</p></div>
                                                            <div class="comment item"><i class="fa fa-comment"></i>

                                                                <p> 239</p></div>
                                                        </div>
                                                        <div title="Rated 5.00 out of 5" class="star-rating"><span class="width-100"><strong class="rating">5.00</strong> out of 5</span></div>
                                                        <div class="description">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using. It is a long established fact that a reader will be distracted by the readable content of a page when l ooking at its layout. The point of using. Dalmatian hello amazing the rmore flung as thanks a manta dealt to under emu some the and one baldbe dear sobbingly save and spitefully less</div>
                                                        <button class="btn btn-green"><span>learn now</span></button>
                                                    </div>
                                                    <div class="edugate-image"><img src="assets/images/categories/categories-4.jpg" alt="" class="img-responsive"/></div>
                                                </div>
                                            </div>
                                        </div>
                                        <nav class="pagination col-md-12">
                                            <ul class="pagination__list">
                                                <li><a rel="prev" href="#" class="pagination__previous btn-squae disable">&#8249;</a></li>
                                                <li><span class="pagination__page btn-squae active">1</span></li>
                                                <li><a href="#" class="pagination__page btn-squae">2</a></li>
                                                <li><a href="#" class="pagination__page btn-squae">...</a></li>
                                                <li><a href="#" class="pagination__page btn-squae">14</a></li>
                                                <li><a rel="next" href="#" class="pagination__next btn-squae">&#8250;</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                                <div id="students" role="tabpanel" class="tab-pane fade">
                                    <div class="style-show style-grid row">
                                        <div class="col-style">
                                            <div class="edugate-layout-2">
                                                <div class="edugate-layout-2-wrapper">
                                                    <div class="edugate-content"><a href="courses-detail.html" class="title">Photoghaphy Master</a>

                                                        <div class="info">
                                                            <div class="author item"><a href="#">By Admin</a></div>
                                                            <div class="date-time item"><a href="#">17 sep 2015</a></div>
                                                        </div>
                                                        <div class="info-more">
                                                            <div class="view item"><i class="fa fa-user"></i>

                                                                <p> 56</p></div>
                                                            <div class="comment item"><i class="fa fa-comment"></i>

                                                                <p> 239</p></div>
                                                        </div>
                                                        <div title="Rated 5.00 out of 5" class="star-rating"><span class="width-10"><strong class="rating">5.00</strong> out of 5</span></div>
                                                        <div class="description">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using. It is a long established fact that a reader will be distracted by the readable content of a page when l ooking at its layout. The point of using. Dalmatian hello amazing the rmore flung as thanks a manta dealt to under emu some the and one baldbe dear sobbingly save and spitefully less</div>
                                                        <button class="btn btn-green"><span>learn now</span></button>
                                                    </div>
                                                    <div class="edugate-image"><img src="assets/images/courses/courses-1.jpg" alt="" class="img-responsive"/></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-style">
                                            <div class="edugate-layout-2">
                                                <div class="edugate-layout-2-wrapper">
                                                    <div class="edugate-content"><a href="courses-detail.html" class="title">Photoghaphy Master</a>

                                                        <div class="info">
                                                            <div class="author item"><a href="#">By Admin</a></div>
                                                            <div class="date-time item"><a href="#">17 sep 2015</a></div>
                                                        </div>
                                                        <div class="info-more">
                                                            <div class="view item"><i class="fa fa-user"></i>

                                                                <p> 56</p></div>
                                                            <div class="comment item"><i class="fa fa-comment"></i>

                                                                <p> 239</p></div>
                                                        </div>
                                                        <div title="Rated 5.00 out of 5" class="star-rating"><span class="width-80"><strong class="rating">5.00</strong> out of 5</span></div>
                                                        <div class="description">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using. It is a long established fact that a reader will be distracted by the readable content of a page when l ooking at its layout. The point of using. Dalmatian hello amazing the rmore flung as thanks a manta dealt to under emu some the and one baldbe dear sobbingly save and spitefully less</div>
                                                        <button class="btn btn-green"><span>learn now</span></button>
                                                    </div>
                                                    <div class="edugate-image"><img src="assets/images/courses/courses-2.jpg" alt="" class="img-responsive"/></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-style">
                                            <div class="edugate-layout-2">
                                                <div class="edugate-layout-2-wrapper">
                                                    <div class="edugate-content"><a href="courses-detail.html" class="title">Photoghaphy Master</a>

                                                        <div class="info">
                                                            <div class="author item"><a href="#">By Admin</a></div>
                                                            <div class="date-time item"><a href="#">17 sep 2015</a></div>
                                                        </div>
                                                        <div class="info-more">
                                                            <div class="view item"><i class="fa fa-user"></i>

                                                                <p> 56</p></div>
                                                            <div class="comment item"><i class="fa fa-comment"></i>

                                                                <p> 239</p></div>
                                                        </div>
                                                        <div title="Rated 5.00 out of 5" class="star-rating"><span class="width-20"><strong class="rating">5.00</strong> out of 5</span></div>
                                                        <div class="description">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using. It is a long established fact that a reader will be distracted by the readable content of a page when l ooking at its layout. The point of using. Dalmatian hello amazing the rmore flung as thanks a manta dealt to under emu some the and one baldbe dear sobbingly save and spitefully less</div>
                                                        <button class="btn btn-green"><span>learn now</span></button>
                                                    </div>
                                                    <div class="edugate-image"><img src="assets/images/courses/courses-3.jpg" alt="" class="img-responsive"/></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-style">
                                            <div class="edugate-layout-2">
                                                <div class="edugate-layout-2-wrapper">
                                                    <div class="edugate-content"><a href="courses-detail.html" class="title">Photoghaphy Master</a>

                                                        <div class="info">
                                                            <div class="author item"><a href="#">By Admin</a></div>
                                                            <div class="date-time item"><a href="#">17 sep 2015</a></div>
                                                        </div>
                                                        <div class="info-more">
                                                            <div class="view item"><i class="fa fa-user"></i>

                                                                <p> 56</p></div>
                                                            <div class="comment item"><i class="fa fa-comment"></i>

                                                                <p> 239</p></div>
                                                        </div>
                                                        <div title="Rated 5.00 out of 5" class="star-rating"><span class="width-60"><strong class="rating">5.00</strong> out of 5</span></div>
                                                        <div class="description">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using. It is a long established fact that a reader will be distracted by the readable content of a page when l ooking at its layout. The point of using. Dalmatian hello amazing the rmore flung as thanks a manta dealt to under emu some the and one baldbe dear sobbingly save and spitefully less</div>
                                                        <button class="btn btn-green"><span>learn now</span></button>
                                                    </div>
                                                    <div class="edugate-image"><img src="assets/images/courses/courses-4.jpg" alt="" class="img-responsive"/></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-style">
                                            <div class="edugate-layout-2">
                                                <div class="edugate-layout-2-wrapper">
                                                    <div class="edugate-content"><a href="courses-detail.html" class="title">Photoghaphy Master</a>

                                                        <div class="info">
                                                            <div class="author item"><a href="#">By Admin</a></div>
                                                            <div class="date-time item"><a href="#">17 sep 2015</a></div>
                                                        </div>
                                                        <div class="info-more">
                                                            <div class="view item"><i class="fa fa-user"></i>

                                                                <p> 56</p></div>
                                                            <div class="comment item"><i class="fa fa-comment"></i>

                                                                <p> 239</p></div>
                                                        </div>
                                                        <div title="Rated 5.00 out of 5" class="star-rating"><span class="width-20"><strong class="rating">5.00</strong> out of 5</span></div>
                                                        <div class="description">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using. It is a long established fact that a reader will be distracted by the readable content of a page when l ooking at its layout. The point of using. Dalmatian hello amazing the rmore flung as thanks a manta dealt to under emu some the and one baldbe dear sobbingly save and spitefully less</div>
                                                        <button class="btn btn-green"><span>learn now</span></button>
                                                    </div>
                                                    <div class="edugate-image"><img src="assets/images/courses/courses-1.jpg" alt="" class="img-responsive"/></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-style">
                                            <div class="edugate-layout-2">
                                                <div class="edugate-layout-2-wrapper">
                                                    <div class="edugate-content"><a href="courses-detail.html" class="title">Photoghaphy Master</a>

                                                        <div class="info">
                                                            <div class="author item"><a href="#">By Admin</a></div>
                                                            <div class="date-time item"><a href="#">17 sep 2015</a></div>
                                                        </div>
                                                        <div class="info-more">
                                                            <div class="view item"><i class="fa fa-user"></i>

                                                                <p> 56</p></div>
                                                            <div class="comment item"><i class="fa fa-comment"></i>

                                                                <p> 239</p></div>
                                                        </div>
                                                        <div title="Rated 5.00 out of 5" class="star-rating"><span class="width-40"><strong class="rating">5.00</strong> out of 5</span></div>
                                                        <div class="description">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using. It is a long established fact that a reader will be distracted by the readable content of a page when l ooking at its layout. The point of using. Dalmatian hello amazing the rmore flung as thanks a manta dealt to under emu some the and one baldbe dear sobbingly save and spitefully less</div>
                                                        <button class="btn btn-green"><span>learn now</span></button>
                                                    </div>
                                                    <div class="edugate-image"><img src="assets/images/courses/courses-2.jpg" alt="" class="img-responsive"/></div>
                                                </div>
                                            </div>
                                        </div>
                                        <nav class="pagination col-md-12">
                                            <ul class="pagination__list">
                                                <li><a rel="prev" href="#" class="pagination__previous btn-squae disable">&#8249;</a></li>
                                                <li><span class="pagination__page btn-squae active">1</span></li>
                                                <li><a href="#" class="pagination__page btn-squae">2</a></li>
                                                <li><a href="#" class="pagination__page btn-squae">...</a></li>
                                                <li><a href="#" class="pagination__page btn-squae">14</a></li>
                                                <li><a rel="next" href="#" class="pagination__next btn-squae">&#8250;</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
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
<? include_once 'bottom_footer.php'; ?>
<? include_once 'loading.php'; ?>
<? include_once 'js.php'; ?>
</body>
</html>