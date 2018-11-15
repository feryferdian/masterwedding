
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Master Wedding Wedding Category Bootstrap Responsive Web Template | Home :: w3layouts</title>

    <!--meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Master Wedding Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); }
    </script>
    <!--//meta tags ends here-->

    <!--booststrap-->

    <link href="<?= BASE_ASSETS ?>/application/views/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
    <!--//booststrap end-->

    <!-- font-awesome icons -->
    <link href="<?= BASE_ASSETS ?>/application/views/css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome icons -->

    <!-- banner text slider-->

    <!--// banner text slider-->

    <!--jquery-css counter time-->
    <link rel="stylesheet" href="<?= BASE_ASSETS ?>/application/views/css/jquery.countdown.css" />
    <!--//jquery-css counter time-->

    <!--lightbox slider-->
    <link rel="stylesheet" href="<?= BASE_ASSETS ?>/application/views/css/lightbox.css">
    <!-- lightbox slider-->

    <!--stylesheets-->
    <link href="<?= BASE_ASSETS ?>/application/views/css/style.css" rel='stylesheet' type='text/css' media="all">
    <!--//stylesheets-->
    <link href="//fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">

</head>

<body>
<?= isset($message) ? $message : "" ?>

<div class="banner">

    <div class="header-w3layouts">
        <!-- Navigation -->

        <div class="container">
            <div class="header-bar">
                <nav class="navbar navbar-default">
                    <div class="navbar-header navbar-left">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <h1><a class="navbar-brand" href="index.php" ><span>M</span>ASTER <span>W</span>EDDING</a>   </h1>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                        <nav>
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="index.php">Home</a></li>
                                <li><a href="#about" class="scroll">About</a></li>
                                <li><a href="#services" class="scroll">Services</a></li>
                                <li><a href="#blog" class="scroll">Blog</a></li>
                                <li><a href="#gallery" class="scroll">Gallery</a></li>
                                <li><a href="#team" class="scroll">Team</a></li>
                                <li><a href="#contact" class="scroll">Contact</a></li>
                                <li><a href="<?= base_url() ?>login" class="">Login</a></li>
                            </ul>
                        </nav>



                    </div>
                </nav>
            </div>

            <div class="clearfix"> </div>

        </div>

    </div>
    <div class="container">

        <!--Slider-->
        <div class="slider">
            <div class="callbacks_container w3l">
                <ul class="rslides" id="slider">
                    <li>

                        <div class="slider-info">
                            <h4>Happy Couples For Ever</h4>
                            <p>Lorem ipsum dolor sit,</p>

                        </div>
                    </li>
                    <li>

                        <div class="slider-info">
                            <h4>The Best Day In Our Lives </h4>
                            <p>Quis autem vel eum quivol.</p>
                        </div>
                    </li>
                </ul>

            </div>
            <div class="clearfix"></div>

        </div>

    </div>
</div>
<!--//banner-->
<!--counter-->
<div class="days-coming">
    <div class="container">
        <h3 class="title tittle">The Wedding Day</h3>
        <div class="timer_wrap">
            <div id="counter"></div>
            <div class="clear fix"></div>
        </div>
    </div>
</div>
<!--//counter-->
<!--about-->
<div class="about" id="about">
    <div class="container">
        <h3 class="title">About</h3>
        <div class="about-top-grids">
            <div class="col-md-8 about-top-grid">
                <h4>What Are we
                </h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed odio consequat, tristique elit sed, molestie nulla.
                    Mauris et quam leo. Quisque tincidunt facilisis rutrum. Etiam mattis arcu vitae velit sagittis vehicula. Duis posuere
                    ex in mollis iaculis. Suspendisse tincidunt ut velit id euismod.vulputate turpis porta ex sodales, dignissim hendrerit
                    eros sagittis. Curabitur lacinia dui ut luctus congue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras quis

                </p>
                <div class="bar-grids">
                    <h6>Weddings<span> 100% </span></h6>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped active" style="width: 100%">
                        </div>
                    </div>
                    <div class="mid-bar">
                        <h6>Staff<span> 85% </span></h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped active" style="width: 85%">
                            </div>
                        </div>
                    </div>
                    <h6>Dates<span>67% </span></h6>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped active" style="width: 67%">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 about-top-image" >
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!--//about-->
<!--Services-->
<div class="services" id="services">
    <div class="container">
        <h3 class="title clr">Services</h3>

        <div class="banner-bottom-girds text-center">
            <div class="col-md-6  col-sm-6 col-xs-6  its-banner-grid">
                <div class="white-shadow">
                    <span class="fa fa-truck banner-icon" aria-hidden="true"></span>
                    <h4>Best Quality</h4>
                    <p>delectus reiciendis maiores alias consequatur aut.maiores alias consequatur aut.</p>
                </div>
            </div>
            <div class="col-md-6  col-sm-6 col-xs-6 its-banner-grid">
                <div class="white-shadow">
                    <span class="fa fa-picture-o banner-icon" aria-hidden="true"></span>
                    <h4>Best Themes</h4>
                    <p>delectus reiciendis maiores alias consequatur aut.maiores alias consequatur aut.</p>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6  its-banner-grid">
                <div class="white-shadow">
                    <span class="fa fa-music banner-icon" aria-hidden="true"></span>
                    <h4>Rocking Music</h4>
                    <p>delectus reiciendis maiores alias consequatur aut.maiores alias consequatur aut.</p>
                </div>
            </div>
            <div class="col-md-6  col-sm-6 col-xs-6  clr1 its-banner-grid">
                <div class="white-shadow">
                    <span class="fa  fa-heart  banner-icon" aria-hidden="true"></span>
                    <h4>New Collection</h4>
                    <p> delectus reiciendis maiores alias consequatur aut.maiores alias consequatur aut.</p>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>

<!--//Services-->

<div class="blog" id="blog">
    <div class="container">
        <div class="blog-two-grids">
            <h3 class="title tittle">OUR BLOG</h3>
            <div class="blog-top-grids">
                <div class="col-md-7 blog-grid left-side">
                    <h4>Max Will
                    </h4>
                    <p class="groom-right">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed odio consequat, tristique elit sed, molestie nulla.
                        Mauris et quam leo. Quisque tincidunt facilisis rutrum. Etiam mattis arcu vitae velit sagittis vehicula. Duis posuere
                        ex in mollis iaculis. Suspendisse tincidunt ut velit id euismod.vulputate turpis porta ex sodales, dignissim hendrerit
                        eros sagittis. Curabitur lacinia dui ut luctus congue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras quis

                    </p>
                    <div class="w3layouts_more-buttn">
                        <a href="#" data-toggle="modal" data-target="#myModal">Read More</a>
                    </div>
                </div>
                <div class="col-md-5 blog-gr">
                </div>
                <div class="clearfix"> </div>
                <div class="image-low-gr">
                    <div class="blog-top-grids low-grid">
                        <div class="col-md-5 blog-br">
                        </div>
                        <div class="col-md-7 blog-grid right-side">
                            <h4>Lois Lana
                            </h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed odio consequat, tristique elit sed, molestie nulla.
                                Mauris et quam leo. Quisque tincidunt facilisis rutrum. Etiam mattis arcu vitae velit sagittis vehicula. Duis posuere
                                ex in mollis iaculis. Suspendisse tincidunt ut velit id euismod.vulputate turpis porta ex sodales, dignissim hendrerit
                                eros sagittis. Curabitur lacinia dui ut luctus congue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras quis

                            </p>
                            <div class="w3layouts_more-buttn">
                                <a href="#" data-toggle="modal" data-target="#myModal">Read More</a>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- modal -->
<div class="modal about-modal fade" id="myModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Master Wedding</h4>
            </div>
            <div class="modal-body">
                <div class="out-info">
                    <img src="<?= BASE_ASSETS ?>/application/views/images/mol1.jpg" alt="" />
                    <p>Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae,
                        eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellu</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //modal -->

<!--slider sectionimages-->

<div class=" slider-photo">
    <div class="container">
        <h3 class="title clr">Happy Couples</h3>
        <div class="col-md-12 couple">
            <div id="Carousel" class="carousel slide">

                <ol class="carousel-indicators">
                    <li data-target="#Carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#Carousel" data-slide-to="1"></li>
                    <li data-target="#Carousel" data-slide-to="2"></li>
                </ol>

                <!-- Carousel items -->
                <div class="carousel-inner">

                    <div class="item active">
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-3 slidering"><div class="thumbnail"><img src="<?= BASE_ASSETS ?>/application/views/images/p1.jpg" alt="Image" style="max-width:100%;"></div></div>
                            <div class="col-md-3 col-sm-3 col-xs-3 slidering"><div class="thumbnail"><img src="<?= BASE_ASSETS ?>/application/views/images/p2.jpg" alt="Image" style="max-width:100%;"></div></div>
                            <div class="col-md-3 col-sm-3 col-xs-3 slidering"><div class="thumbnail"><img src="<?= BASE_ASSETS ?>/application/views/images/p3.jpg" alt="Image" style="max-width:100%;"></div></div>
                            <div class="col-md-3 col-sm-3 col-xs-3 slidering"><div class="thumbnail"><img src="<?= BASE_ASSETS ?>/application/views/images/p4.jpg" alt="Image" style="max-width:100%;"></div></div>
                        </div><!--.row-->
                    </div><!--.item-->
                    <div class="clearfix"> </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-3 slidering"><div class="thumbnail"><img src="<?= BASE_ASSETS ?>/application/views/images/p2.jpg" alt="Image" style="max-width:100%;"></div></div>
                            <div class="col-md-3 col-sm-3 col-xs-3 slidering "><div class="thumbnail"><img src="<?= BASE_ASSETS ?>/application/views/images/p1.jpg" alt="Image" style="max-width:100%;"></div></div>
                            <div class="col-md-3 col-sm-3 col-xs-3 slidering"><div class="thumbnail"><img src="<?= BASE_ASSETS ?>/application/views" alt="Image" style="max-width:100%;"></div></div>
                            <div class="col-md-3 col-sm-3 col-xs-3 slidering"><div class="thumbnail"><img src="<?= BASE_ASSETS ?>/application/views/images/p3.jpg" alt="Image" style="max-width:100%;"></div></div>
                        </div><!--.row-->
                    </div><!--.item-->
                    <div class="clearfix"> </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-3 slidering"><div class="thumbnail"><img src="<?= BASE_ASSETS ?>/application/views/images/p4.jpg" alt="Image" style="max-width:100%;"></div></div>
                            <div class="col-md-3 col-sm-3 col-xs-3 slidering"><div class="thumbnail"><img src="<?= BASE_ASSETS ?>/application/views/images/p2.jpg" alt="Image" style="max-width:100%;"></div></div>
                            <div class="col-md-3 col-sm-3 col-xs-3 slidering"><div class="thumbnail"><img src="<?= BASE_ASSETS ?>/application/views/images/p1.jpg" alt="Image" style="max-width:100%;"></div></div>
                            <div class="col-md-3 col-sm-3 col-xs-3 slidering"><div class="thumbnail"><img src="<?= BASE_ASSETS ?>/application/views/images/p3.jpg" alt="Image" style="max-width:100%;"></div></div>
                        </div><!--.row-->
                    </div><!--.item-->
                    <div class="clearfix"> </div>
                </div><!--.carousel-inner-->
                <a data-slide="prev" href="#Carousel" class="left carousel-control">‹</a>
                <a data-slide="next" href="#Carousel" class="right carousel-control">›</a>
            </div><!--.Carousel-->

        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<!--//container-->
<!--//slider sectionimages-->
<!-- gallery -->

<div id="gallery" class="gallery">
    <h3 class="title">Gallery</h3>
    <div class="gallery-w3lsrow">
        <div class="col-sm-3 col-xs-6 gallery-grids">
            <div class="w3ls-hover">
                <a href="<?= BASE_ASSETS ?>/application/views/images/g1.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                    <img src="<?= BASE_ASSETS ?>/application/views/images/g1.jpg" class="img-responsive zoom-img" alt="">
                    <div class="view-caption">
                        <h5>Master Wedding</h5>

                    </div>
                </a>
            </div>
        </div>
        <div class="col-sm-3 col-xs-6 gallery-grids">
            <div class="w3ls-hover">
                <a href="<?= BASE_ASSETS ?>/application/views/images/p1.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                    <img src="<?= BASE_ASSETS ?>/application/views/images/p1.jpg" class="img-responsive zoom-img" alt="">
                    <div class="view-caption">
                        <h5>Master Wedding</h5>

                    </div>
                </a>
            </div>
        </div>
        <div class="col-sm-3 col-xs-6 gallery-grids">
            <div class="w3ls-hover">
                <a href="<?= BASE_ASSETS ?>/application/views/images/p2.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                    <img src="<?= BASE_ASSETS ?>/application/views/images/p2.jpg" class="img-responsive zoom-img" alt="">
                    <div class="view-caption">
                        <h5>Master Wedding</h5>

                    </div>
                </a>
            </div>
        </div>
        <div class="col-sm-3 col-xs-6 gallery-grids">
            <div class="w3ls-hover">
                <a href="<?= BASE_ASSETS ?>/application/views/images/g2.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                    <img src="<?= BASE_ASSETS ?>/application/views/images/g2.jpg" class="img-responsive zoom-img" alt="">
                    <div class="view-caption">
                        <h5>Master Wedding</h5>

                    </div>
                </a>
            </div>
        </div>
        <div class="col-sm-3 col-xs-6 gallery-grids">
            <div class="w3ls-hover">
                <a href="<?= BASE_ASSETS ?>/application/views/images/g3.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                    <img src="<?= BASE_ASSETS ?>/application/views/images/g3.jpg" class="img-responsive zoom-img" alt="">
                    <div class="view-caption">
                        <h5>Master Wedding</h5>

                    </div>
                </a>
            </div>
        </div>
        <div class="col-sm-3 col-xs-6 gallery-grids">
            <div class="w3ls-hover">
                <a href="<?= BASE_ASSETS ?>/application/views/images/g5.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                    <img src="<?= BASE_ASSETS ?>/application/views/images/g5.jpg" class="img-responsive zoom-img" alt="">
                    <div class="view-caption">
                        <h5>Master Wedding</h5>

                    </div>
                </a>
            </div>
        </div>
        <div class="col-sm-3 col-xs-6 gallery-grids">
            <div class="w3ls-hover">
                <a href="<?= BASE_ASSETS ?>/application/views/images/p4.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                    <img src="<?= BASE_ASSETS ?>/application/views/images/p4.jpg" class="img-responsive zoom-img" alt="">
                    <div class="view-caption">
                        <h5>Master Wedding</h5>

                    </div>
                </a>
            </div>
        </div>
        <div class="col-sm-3 col-xs-6 gallery-grids">
            <div class="w3ls-hover">
                <a href="<?= BASE_ASSETS ?>/application/views/images/p3.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                    <img src="<?= BASE_ASSETS ?>/application/views/images/p3.jpg" class="img-responsive zoom-img" alt="">
                    <div class="view-caption">
                        <h5>Master Wedding</h5>

                    </div>
                </a>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>

</div>
<!-- //gallery -->
<div class="team" id="team">
    <div class="container">
        <h3 class="title clr">Our Team</h3>
        <div class="wthree_team_agileinfo">
            <div class="col-sm-3 col-xs-3 wthree_team_grid_left">
                <figure class="effect-julia">
                    <img src="<?= BASE_ASSETS ?>/application/views/images/t1.jpg" alt=" " class="img-responsive">
                    <div class="w3l_banner_figure">
                        <p>WKIY HILL</p>
                        <p>
                            <a href="#" class="social-button twitter"><span class="fa fa-twitter"></span></a>
                            <a href="#" class="social-button facebook"><span class="fa fa-facebook"></span></a>
                            <a href="#" class="social-button google"><span class="fa fa-google-plus"></span></a>
                            <a href="#" class="social-button dribbble"><span class="fa fa-dribbble"></span></a>
                        </p>

                    </div>
                </figure>
            </div>
            <div class="col-sm-3 col-xs-3 wthree_team_grid_left">
                <figure class="effect-julia">
                    <img src="<?= BASE_ASSETS ?>/application/views/images/t2.jpg" alt=" " class="img-responsive">
                    <div class="w3l_banner_figure">
                        <p>LOSI LANA</p>
                        <p>
                            <a href="#" class="social-button twitter"><span class="fa fa-twitter"></span></a>
                            <a href="#" class="social-button facebook"><span class="fa fa-facebook"></span></a>
                            <a href="#" class="social-button google"><span class="fa fa-google-plus"></span></a>
                            <a href="#" class="social-button dribbble"><span class="fa fa-dribbble"></span></a>
                        </p>

                    </div>
                </figure>
            </div>
            <div class="col-sm-3 col-xs-3 wthree_team_grid_left">
                <figure class="effect-julia">
                    <img src="<?= BASE_ASSETS ?>/application/views/images/t3.jpg" alt=" " class="img-responsive">
                    <div class="w3l_banner_figure">
                        <p>SOPHIA</p>
                        <p>
                            <a href="#" class="social-button twitter"><span class="fa fa-twitter"></span></a>
                            <a href="#" class="social-button facebook"><span class="fa fa-facebook"></span></a>
                            <a href="#" class="social-button google"><span class="fa fa-google-plus"></span></a>
                            <a href="#" class="social-button dribbble"><span class="fa fa-dribbble"></span></a>
                        </p>

                    </div>
                </figure>
            </div>
            <div class="col-sm-3 col-xs-3 wthree_team_grid_left">
                <figure class="effect-julia">
                    <img src="<?= BASE_ASSETS ?>/application/views/images/t4.jpg" alt=" " class="img-responsive">
                    <div class="w3l_banner_figure">
                        <p>MIKY DEO</p>
                        <p>
                            <a href="#" class="social-button twitter"><span class="fa fa-twitter"></span></a>
                            <a href="#" class="social-button facebook"><span class="fa fa-facebook"></span></a>
                            <a href="#" class="social-button google"><span class="fa fa-google-plus"></span></a>
                            <a href="#" class="social-button dribbble"><span class="fa fa-dribbble"></span></a>
                        </p>

                    </div>
                </figure>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!--contact-->

<div class="map-grid"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2484.39147015461!2d11.968411315519182!3d51.48768331996591!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47a66353e6e3b99d%3A0xd664817f7142f654!2sRadio+ Event Planner!5e0!3m2!1sen!2sin!4v1446724465130"> </iframe>
</div>
<div class="contact" id="contact">
    <div class="container">
        <h3 class="title clr">Contact</h3>
        <div class="contact-two-grids">
            <div class=" col-md-6 contact-icons">
                <div class=" col-md-6 col-sm-6 col-xs-6 footer_grid_left">
                    <div class="icon_grid_left">
                        <span class="fa fa-map-marker" aria-hidden="true"></span>
                    </div>
                    <h5>Address</h5>
                    <p>Unterberg 11,06108,<span>Halle,
					Germany</span></p>
                </div>
                <div class=" col-md-6 col-sm-6 col-xs-6 footer_grid_left">

                    <div class="icon_grid_left">
                        <span class="fa fa-volume-control-phone" aria-hidden="true"></span>
                    </div>
                    <h5> Contact Us</h5>
                    <p>+(000) 123 4565 32 <span>+(010) 123 4565 35</span></p>
                </div>
                <div class="  col-md-6 col-sm-6 col-xs-6 footer_grid_left">
                    <div class="icon_grid_left">

                        <span class="fa fa-envelope" aria-hidden="true"></span>
                    </div>
                    <h5>Email Us</h5>
                    <p><a href="mailto:info@example.com">info@example1.com</a>
                        <span><a href="mailto:info@example.com">info@example2.com</a></span></p>
                </div>
                <div class="  col-md-6 col-sm-6 col-xs-6 footer_grid_left">
                    <div class="icon_grid_left">

                        <span class="fa fa-clock-o" aria-hidden="true"></span>
                    </div>
                    <h5>Times</h5>
                    <p>Mon-Sat:9AM to 6PM
                        <span>Sun:9AM to 7PM</span></p>
                    <div class="clearfix"> </div>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="col-md-6 contact-us">
                <form action="#" method="post">
                    <div class="styled-input">

                        <input type="text" name="Name" placeholder="Name" required="">

                    </div>
                    <div class="styled-input">

                        <input type="email" name="Email" placeholder="Email" required="">



                    </div>
                    <div class="styled-input">

                        <input type="text" name="phone" placeholder="phone" required="">



                    </div>
                    <div class="styled-input">

                        <textarea name="Message" placeholder="Message" required=""></textarea>



                    </div>
                    <div>
                        <div class="click">
                            <input type="submit" value="SEND">
                        </div>
                    </div>
                </form>
            </div>

            <div class="clearfix"> </div>
        </div>


    </div>
</div>
<!--footer-->
<div class="buttom-w3">
    <div class="container">
        <div class=" bottom-head text-center">
            <h2><a href="index.php">Master Wedding</a></h2>
            <div class="buttom-para">
                <p>Lorem ipsum dolor sit amet,iste natus error sit voluptatem</p>
                <p>Vivamus sed porttitor felis</p>
            </div>
        </div>
        <div class=" text-center">
            <div class="post">
                <form action="#" method="post">

                    <div class="letter">
                        <input class="email" type="email" placeholder="Your email..." required="">
                    </div>
                    <div class="newsletter">
                        <input type="submit" value="Subscribe">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class=" copyright text-center">
        <div class="icons">
            <ul>
                <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                <li><a href="#"><span class="fa fa-rss"></span></a></li>
                <li><a href="#"><span class="fa fa-vk"></span></a></li>
            </ul>
        </div>

    </div>
</div>

<footer>
    <p>  &copy; 2018 Master Wedding. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank"> W3layouts </a></p>
</footer>


<!--js working-->
<script type='text/javascript' src='<?= BASE_ASSETS ?>/application/views/js/jquery-2.2.3.min.js'></script>
<script src="<?= BASE_ASSETS ?>/application/views/js/bootstrap.js"></script>
<!-- //js  working-->

<!--  light box js -->
<script src="<?= BASE_ASSETS ?>/application/views/js/lightbox-plus-jquery.min.js"> </script>
<!-- //light box js-->
<!-- banner-->
<script src="<?= BASE_ASSETS ?>/application/views/js/responsiveslides.min.js"></script>
<script>
    $(function () {
        $("#slider").responsiveSlides({
            auto: true,
            pager: true,
            nav: true,
            speed: 1000,
            namespace: "callbacks",
            before: function () {
                $('.events').append("<li>before event fired.</li>");
            },
            after: function () {
                $('.events').append("<li>after event fired.</li>");
            }
        });
    });
</script>
<!--// banner-->
<!--scripts-->
<script src="<?= BASE_ASSETS ?>/application/views/js/jquery.countdown.js"></script>
<!--countdowntimer-js-->
<script src="<?= BASE_ASSETS ?>/application/views/js/script.js"></script>
<!--countdowntimer-js-->
<!--//scripts-->

<!-- start-smoth-scrolling -->
<script type="text/javascript" src="<?= BASE_ASSETS ?>/application/views/js/move-top.js"></script>
<script type="text/javascript" src="<?= BASE_ASSETS ?>/application/views/js/easing.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
            event.preventDefault();
            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 900);
        });
    });
</script>
<!-- start-smoth-scrolling -->
<!-- here stars scrolling icon -->
<script type="text/javascript">
    $(document).ready(function () {

        var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
        };


        $().UItoTop({
            easingType: 'easeOutQuart'
        });

    });
</script>
<!-- //here ends scrolling icon -->
</body>

</html>