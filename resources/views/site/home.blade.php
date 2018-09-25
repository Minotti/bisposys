<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>GardenEasy</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{asset('site/css/isotope.css')}}" media="screen" />
    <link rel="stylesheet" href="{{asset('site/js/fancybox/jquery.fancybox.css')}}" type="text/css" media="screen" />
    <link rel="stylesheet" href="{{asset('site/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('site/css/bootstrap-theme.css')}}">
    <link rel="stylesheet" href="{{asset('site/css/responsive-slider.css')}}">
    <link rel="stylesheet" href="{{asset('site/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('site/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('site/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('site/skin/default.css')}}">
</head>

<body>


<div class="header">
    <section id="header" class="appear">

        <div class="navbar navbar-fixed-top" role="navigation" data-0="line-height:100px; height:100px; background-color:rgba(0,0,0,0.3);" data-300="line-height:60px; height:60px; background-color:rgba(0,0,0,1);">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="fa fa-bars color-white"></span>
                </button>
                <h1><a class="navbar-brand" href="index.html" data-0="line-height:90px;" data-300="line-height:50px;">Garden Easy
                    </a></h1>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav" data-0="margin-top:20px;" data-300="margin-top:5px;">
                    <li class="active"><a href="#index">Home</a></li>
                    <li><a href="#section-about">About</a></li>
                    <li><a href="#services">Service</a></li>
                    <li><a href="#team">Team</a></li>
                    <li><a href="#line-pricing">Pricing</a></li>
                    <li><a href="#section-works">Portfolio</a></li>
                    <li><a href="#section-contact">Contact</a></li>
                </ul>
            </div>
        </div>


    </section>
</div>
<section id="index"></section>

<div class="slider">
    <div id="about-slider">
        <div id="carousel-slider" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators visible-xs">
                <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-slider" data-slide-to="1"></li>
                <li data-target="#carousel-slider" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">
                <div class="item active">
                    <img src="{{asset('site/img/1.jpg')}}" class="img-responsive" alt="">
                    <div class="carousel-caption">
                        <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
                            <h2><span>Clean & Modern Design Template</span></h2>
                        </div>
                        <div class="col-md-10 col-md-offset-1">
                            <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing</p>
                            </div>
                        </div>
                        <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.9s">
                            <form class="form-inline">
                                <div class="form-group">
                                    <button type="livedemo" name="Live Demo" class="btn btn-primary btn-lg" required="required">Live Demo</button>
                                </div>
                                <div class="form-group">
                                    <button type="getnow" name="Get Now" class="btn btn-primary btn-lg" required="required">Get Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <img src="{{asset('site/img/2.jpg')}}" class="img-responsive" alt="">
                    <div class="carousel-caption">
                        <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="1.0s">
                            <h2>Fully Responsive</h2>
                        </div>
                        <div class="col-md-10 col-md-offset-1">
                            <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing</p>
                            </div>
                        </div>
                        <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="1.6s">
                            <form class="form-inline">
                                <div class="form-group">
                                    <button type="livedemo" name="purchase" class="btn btn-primary btn-lg" required="required">Live Demo</button>
                                </div>
                                <div class="form-group">
                                    <button type="getnow" name="subscribe" class="btn btn-primary btn-lg" required="required">Get Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
                <i class="fa fa-angle-left"></i>
            </a>

            <a class=" right carousel-control hidden-xs" href="#carousel-slider" data-slide="next">
                <i class="fa fa-angle-right"></i>
            </a>
        </div>
        <!--/#carousel-slider-->
    </div>
    <!--/#about-slider-->
</div>
<!--/#slider-->

<!--about-->
<section id="section-about">
    <div class="container">
        <div class="about">
            <div class="row mar-bot40">
                <div class="col-md-offset-3 col-md-6">
                    <div class="title">
                        <div class="wow bounceIn">

                            <h2 class="section-heading animated" data-animation="bounceInUp">Our Company</h2>


                        </div>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="row-slider">
                    <div class="col-lg-6 mar-bot30">
                        <div class="responsive-slider" data-spy="responsive-slider" data-autoplay="true">
                            <div class="slides" data-group="slides">
                                <ul>

                                    <div class="slide-body" data-group="slide">
                                        <li><img alt="" class="img-responsive" src="{{asset('site/img/9.jpg')}}" width="100%" height="350" /></li>
                                        <li><img alt="" class="img-responsive" src="{{asset('site/img/10.jpg')}}" width="100%" height="350" /></li>
                                        <li><img alt="" class="img-responsive" src="{{asset('site/img/11.jpg')}}" width="100%" height="350" /></li>

                                    </div>
                                </ul>
                                <a class="slider-control left" href="#" data-jump="prev"><i class="fa fa-angle-left fa-2x"></i></a>
                                <a class="slider-control right" href="#" data-jump="next"><i class="fa fa-angle-right fa-2x"></i></a>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 ">
                        <div class="company mar-left10">
                            <h4>Our Company has created 1928 morbi leo risus, porta ac consectetur ac, <span>vestibulum </span> at eros.</h4>
                            <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Donec sed odio dui. Fusce dapibus, tellus ac cursus etiam porta sem malesuada magna mollis euismod. commodo, Faccibus mollis interdum. Morbi leo risus, porta ac, vestibulum at eros.
                                Nullam id dolor id nibh ultricies vehicula ut id elit. Donec sed odio dui. Fusce dapibus, tellus ac.</p>
                        </div>
                        <div class="list-style">
                            <div class="row">
                                <div class="col-lg-6 col-sm-6 col-xs-12">
                                    <ul>
                                        <li>Sollicitudin Vestibulum</li>
                                        <li>Fermentum Pellentesque</li>
                                        <li>Sollicitudin Vestibulum</li>
                                        <li>Nullam id dolor id nibh</li>
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-xs-12">
                                    <ul>
                                        <li>Sollicitudin Vestibulum</li>
                                        <li>Fermentum Pellentesque</li>
                                        <li>Sollicitudin Vestibulum</li>
                                        <li>Nullam id dolor id nibh</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>
</section>
<!--/about-->

<!-- spacer section:testimonial -->
<section id="testimonials-3" class="section" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="align-center">
                    <div class="testimonial pad-top40 pad-bot40 clearfix">
                        <h5>
                            Nunc velit risus, dapibus non interdum quis, suscipit nec dolor. Vivamus tempor tempus mauris vitae fermentum. In vitae nulla lacus. Sed sagittis tortor vel arcu sollicitudin nec tincidunt metus suscipit.Nunc velit risus, dapibus non interdum.
                        </h5>
                        <br/>
                        <span class="author">&mdash; Jouse Manuel <a href="#">www.jouse-manuel.com</a></span>
                    </div>

                </div>
            </div>
        </div>

    </div>

</section>

<!-- services -->
<section id="services" class="section pad-bot5 bg-white">
    <div class="container">
        <div class="row mar-bot5">
            <div class="col-md-offset-3 col-md-6">
                <div class="section-header">
                    <div class="wow bounceIn" data-animation-delay="7.8s">

                        <h2 class="section-heading animated">Our Service</h2>
                        <h4>Neque porro quisquam est, qui dolorem ipsum quia dolor.</h4>

                    </div>
                </div>
            </div>
        </div>
        <div class="row mar-bot40">
            <div class="col-lg-4">
                <div class="wow bounceIn">
                    <div class="align-center">

                        <div class="wow rotateIn">
                            <div class="service-col">
                                <div class="service-icon">
                                    <figure><i class="fa fa-cog"></i></figure>
                                </div>
                                <h2><a href="#">Easy to Customize</a></h2>
                                <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="align-center">
                    <div class="wow bounceIn">

                        <div class="wow rotateIn">
                            <div class="service-col">
                                <div class="service-icon">
                                    <figure><i class="fa fa-desktop"></i></figure>
                                </div>
                                <h2><a href="#">Responsive Layout</a></h2>
                                <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="align-center">
                    <div class="wow bounceIn">
                        <div class="service-col">
                            <div class="service-icon">
                                <figure><i class="fa fa-dropbox"></i></figure>
                            </div>
                            <h2><a href="#">Ready to Use</a></h2>
                            <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>
<!--/services-->

<!-- spacer section:testimonial -->
<section id="testimonials" class="section" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="align-center">
                    <div class="testimonial pad-top40 pad-bot40 clearfix">
                        <h5>
                            Nunc velit risus, dapibus non interdum quis, suscipit nec dolor. Vivamus tempor tempus mauris vitae fermentum. In vitae nulla lacus. Sed sagittis tortor vel arcu sollicitudin nec tincidunt metus suscipit.Nunc velit risus, dapibus non interdum.
                        </h5>
                        <br/>
                        <span class="author">&mdash; Jouse Manuel / www.jouse-manuel.com</span>
                    </div>

                </div>
            </div>
        </div>

    </div>

</section>

<!-- team -->
<section id="team" class="team-section appear clearfix">
    <div class="container">

        <div class="row mar-bot10">
            <div class="col-md-offset-3 col-md-6">
                <div class="section-header">
                    <div class="wow bounceIn">

                        <h2 class="section-heading animated" data-animation="bounceInUp">Our Team</h2>
                        <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet consectetur, adipisci velit, sed quia non numquam.</p>

                    </div>
                </div>
            </div>
        </div>

        <div class="row align-center mar-bot45">
            <div class="col-md-4">
                <div class="wow bounceIn" data-animation-delay="4.8s">
                    <div class="team-member">
                        <div class="profile-picture">
                            <figure><img src="{{asset('site/img/members3.jpg')}}" alt=""></figure>
                            <div class="profile-overlay"></div>
                            <div class="profile-social">
                                <div class="icons-wrapper">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-detail">
                            <h4>Ron Evgeniy</h4>
                            <span>User experiences</span>
                        </div>
                        <div class="team-bio">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, fugiat, harum, adipisci accusantium minus asperiores.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">

                <div class="wow bounceIn">
                    <div class="team-member">
                        <div class="profile-picture">
                            <figure><img src="{{asset('site/img/members1.jpg')}}" alt=""></figure>
                            <div class="profile-overlay"></div>
                            <div class="profile-social">
                                <div class="icons-wrapper">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-detail">
                            <h4>Alexander Chernov</h4>
                            <span>Web developer</span>
                        </div>
                        <div class="team-bio">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, fugiat, harum, adipisci accusantium minus asperiores.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="wow bounceIn">
                    <div class="team-member">
                        <div class="profile-picture">
                            <figure><img src="{{asset('site/img/members2.jpg')}}" alt=""></figure>
                            <div class="profile-overlay"></div>
                            <div class="profile-social">
                                <div class="icons-wrapper">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-detail">
                            <h4>Jose Manuel</h4>
                            <span>Web designer</span>
                        </div>
                        <div class="team-bio">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, fugiat, harum, adipisci accusantium minus asperiores.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>
<!-- /team -->

<!-- spacer section:stats -->
<section id="parallax1" class="section pad-top40 pad-bot40 mar-bot20" data-stellar-background-ratio="0.5">
    <div class="container ">
        <div class="align-center pad-top40 pad-bot40">
            <h4 class="color-white pad-top50">Indoctum accusamus comprehensam</h4>
            <p class="color-white">Nullam id dolor id nibh ultricies vehicula ut id elit. Donec sed odio dui. Fusce dapibus, tellus ac cursus etiam porta sem malesuada magna mollis euismod. commodo, Faccibus mollis interdum. Morbi leo risus, porta ac, vestibulum at eros.Feugiat
                accumsan Suspendisse eget Duis faucibus tempus pede pede augue pede. Dapibus mollis dignissim suscipit porta justo nisl amet Nunc quis semper.</p>
        </div>
    </div>
</section>
<section id="line-pricing" class="line-section line-center">
    <div class="container pad-top50">
        <div class="row mar-bot10 ">
            <div class="col-md-offset-3 col-md-6">
                <div class="section-header">
                    <div class="wow bounceIn">

                        <h2 class="section-heading animated" data-animation="bounceInUp">Pricing Table</h2>
                        <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet consectetur, adipisci velit, sed quia non numquam.</p>

                    </div>
                </div>
            </div>
        </div>
        <div class="line-wrap">
            <div class="line-pricing-table">
                <div class="pricing-table-wrap" data-scrollreveal="enter top over 0.5s after 0.3s">
                    <ul>
                        <li class="line-head-row">
                            Free
                        </li>
                        <li class="line-price-row">
                            <p>
                                <span class="symbol">$</span>
                                <span>0</span>
                            </p>
                            <small>Ideal for beginners</small>
                        </li>
                        <li>
                            1 theme included
                        </li>
                        <li>
                            1 year of theme updates
                        </li>
                        <li>
                            20% off future purchases
                        </li>
                        <li class="line-btn-row">
                            <a href="" class="line-btn light">Get Started</a>
                        </li>
                    </ul>
                </div>
                <div class="pricing-table-wrap" data-scrollreveal="enter top over 0.5s after 0.5s">
                    <ul class="line-highlight">
                        <li class="line-head-row">
                            Premium
                        </li>
                        <li class="line-price-row">
                            <p>
                                <span class="symbol">$</span>
                                <span>300</span>
                            </p>
                            <small>Per user / month</small>
                        </li>
                        <li>
                            24 themes included
                        </li>
                        <li>
                            Lifetime of premium support
                        </li>
                        <li>
                            Access all new themes
                        </li>
                        <li class="line-btn-row">
                            <a href="" class="line-btn green">Get Started</a>
                        </li>
                    </ul>
                </div>
                <div class="pricing-table-wrap" data-scrollreveal="enter top over 0.5s after 0.7s">
                    <ul>
                        <li class="line-head-row">
                            Standard
                        </li>
                        <li class="line-price-row">
                            <p>
                                <span class="symbol">$</span>
                                <span>150</span>
                            </p>
                            <small>Per user / month</small>
                        </li>
                        <li>
                            12 themes included
                        </li>
                        <li>
                            1 year of theme updates
                        </li>
                        <li>
                            Access all new themes
                        </li>
                        <li class="line-btn-row">
                            <a href="" class="line-btn light">Get Started</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- spacer section:testimonial -->
<section id="testimonials-2" class="section" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="align-center">
                    <div class="testimonial pad-top40 pad-bot40 clearfix">
                        <h5>
                            Nunc velit risus, dapibus non interdum quis, suscipit nec dolor. Vivamus tempor tempus mauris vitae fermentum. In vitae nulla lacus. Sed sagittis tortor vel arcu sollicitudin nec tincidunt metus suscipit.Nunc velit risus, dapibus non interdum.
                        </h5>
                        <br/>
                        <span class="author">&mdash; Jouse Manuel / www.jouse-manuel.com</span>
                    </div>

                </div>
            </div>
        </div>

    </div>

</section>

<!-- section works -->
<section id="section-works" class="section appear clearfix">
    <div class="container">

        <div class="row mar-bot40">
            <div class="col-md-offset-3 col-md-6">
                <div class="section-header">
                    <h2 class="section-heading animated" data-animation="bounceInUp">Portfolio</h2>
                    <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet consectetur, adipisci velit, sed quia non numquam.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <nav id="filter" class="col-md-12 text-center">
                <ul>
                    <li><a href="#" class="current btn-theme btn-small" data-filter="*">All</a></li>
                    <li><a href="#" class="btn-theme btn-small" data-filter=".webdesign">Web Design</a></li>
                    <li><a href="#" class="btn-theme btn-small" data-filter=".photography">Photography</a></li>
                    <li><a href="#" class="btn-theme btn-small" data-filter=".print">Print</a></li>
                </ul>
            </nav>
            <div class="col-md-12">
                <div class="row">
                    <div class="portfolio-items isotopeWrapper clearfix" id="3">

                        <article class="col-md-4 isotopeItem webdesign">
                            <div class="portfolio-item">
                                <div class="wow rotateInUpLeft" data-animation-delay="4.8s">
                                    <img src="{{asset('site/img/portfolio/1')}}.jpg" alt="welcome" />
                                </div>
                                <div class="portfolio-desc align-center">
                                    <div class="folio-info">
                                        <h5><a href="#">Project name 1</a></h5>
                                        <a href="{{asset('site/img/portfolio/1.jpg')}}" class="fancybox"><i class="fa fa-external-link fa-2x"></i></a>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="col-md-4 isotopeItem photography">
                            <div class="portfolio-item">
                                <div class="wow bounceIn">
                                    <img src="{{asset('site/img/portfolio/2')}}.jpg" alt="" />
                                </div>
                                <div class="portfolio-desc align-center">
                                    <div class="folio-info">
                                        <h5><a href="#">Project name 2</a></h5>
                                        <a href="{{asset('site/img/portfolio/2.jpg')}}" class="fancybox"><i class="fa fa-external-link fa-2x"></i></a>
                                    </div>
                                </div>
                            </div>
                        </article>


                        <article class="col-md-4 isotopeItem photography">
                            <div class="portfolio-item">
                                <div class="wow rotateInDownRight">
                                    <img src="{{asset('site/img/portfolio/3')}}.jpg" alt="" />
                                </div>
                                <div class="portfolio-desc align-center">
                                    <div class="folio-info">
                                        <h5><a href="#">Project name 3</a></h5>
                                        <a href="{{asset('site/img/portfolio/3.jpg')}}" class="fancybox"><i class="fa fa-external-link fa-2x"></i></a>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="col-md-4 isotopeItem print">
                            <div class="portfolio-item">
                                <div class="wow rotateInUpLeft">
                                    <img src="{{asset('site/img/portfolio/4')}}.jpg" alt="" />
                                </div>
                                <div class="portfolio-desc align-center">
                                    <div class="folio-info">
                                        <h5><a href="#">Project name 4</a></h5>
                                        <a href="{{asset('site/img/portfolio/4.jpg')}}" class="fancybox"><i class="fa fa-external-link fa-2x"></i></a>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="col-md-4 isotopeItem photography">
                            <div class="portfolio-item">
                                <div class="wow bounceIn">
                                    <img src="{{asset('site/img/portfolio/5')}}.jpg" alt="" />
                                </div>
                                <div class="portfolio-desc align-center">
                                    <div class="folio-info">
                                        <h5><a href="#">Project name 5</a></h5>
                                        <a href="{{asset('site/img/portfolio/5.jpg')}}" class="fancybox"><i class="fa fa-external-link fa-2x"></i></a>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="col-md-4 isotopeItem webdesign">
                            <div class="portfolio-item">
                                <div class="wow rotateInDownRight">
                                    <img src="{{asset('site/img/portfolio/6')}}.jpg" alt="" />
                                </div>
                                <div class="portfolio-desc align-center">
                                    <div class="folio-info">
                                        <h5><a href="#">Project name 6</a></h5>
                                        <a href="{{asset('site/img/portfolio/6.jpg')}}" class="fancybox"><i class="fa fa-external-link fa-2x"></i></a>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="col-md-4 isotopeItem print">
                            <div class="portfolio-item">
                                <div class="wow rotateInUpLeft">
                                    <img src="{{asset('site/img/portfolio/7')}}.jpg" alt="" />
                                </div>
                                <div class="portfolio-desc align-center">
                                    <div class="folio-info">
                                        <h5><a href="#">Project name 7</a></h5>
                                        <a href="{{asset('site/img/portfolio/7.jpg')}}" class="fancybox"><i class="fa fa-external-link fa-2x"></i></a>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="col-md-4 isotopeItem photography">
                            <div class="portfolio-item">
                                <div class="wow bounceIn">
                                    <img src="{{asset('site/img/portfolio/8')}}.jpg" alt="" />
                                </div>
                                <div class="portfolio-desc align-center">
                                    <div class="folio-info">
                                        <h5><a href="#">Project name 8</a></h5>
                                        <a href="{{asset('site/img/portfolio/8.jpg')}}" class="fancybox"><i class="fa fa-external-link fa-2x"></i></a>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="col-md-4 isotopeItem print">
                            <div class="portfolio-item">
                                <div class="wow rotateInDownRight">
                                    <img src="{{asset('site/img/portfolio/9')}}.jpg" alt="" />
                                </div>
                                <div class="portfolio-desc align-center">
                                    <div class="folio-info">
                                        <h5><a href="#">Project name 9</a></h5>
                                        <a href="{{asset('site/img/portfolio/9.jpg')}}" class="fancybox"><i class="fa fa-external-link fa-2x"></i></a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>

                </div>


            </div>
        </div>

    </div>
</section>
<section id="parallax2" class="section parallax" data-stellar-background-ratio="0.5">
    <div class="align-center pad-top40 pad-bot30">
        <h4 class="color-white pad-top50">The middle of that asteroid field</h4>
        <p class="color-white">We can repair any dings and scrapes to your spacecraft and support,Planning a time travel trip to the middle ages Feugiat accumsan Suspendisse eget Duis faucibus tempus pede pede augue pede.Dapibus mollis dignissim suscipit porta justo nisl amet
            Nunc quis semper.</p>
    </div>
</section>

<!-- contact -->
<section id="section-contact" class="section appear clearfix">
    <div class="container">

        <div class="row mar-bot40">
            <div class="col-md-offset-3 col-md-6">
                <div class="section-header">
                    <h2 class="section-heading animated" data-animation="bounceInUp">Contact us</h2>
                    <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet consectetur, adipisci velit, sed quia non numquam.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div id="sendmessage">Your message has been sent. Thank you!</div>
                <div id="errormessage"></div>
                <form action="" method="post" role="form" class="contactForm">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                        <div class="validation"></div>
                    </div>

                    <div class="text-center"><button type="submit" class="line-btn green">Send Message</button></div>
                </form>
            </div>
            <!-- ./span12 -->
        </div>

    </div>
</section>
<!-- map -->
<section id="section-map" class="clearfix">
    <div id="google-map" data-latitude="40.713732" data-longitude="-74.0092704"></div>
</section>

<section id="footer" class="section footer">
    <div class="container">
        <div class="row animated opacity mar-bot0" data-andown="fadeIn" data-animation="animation">
            <div class="col-sm-12 align-center">
                <ul class="social-network social-circle">
                    <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
                    <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
        </div>

        <div class="row align-center copyright">
            <div class="col-sm-12">
                <p>&copy; GardenEasy</p>

            </div>
        </div>
    </div>

</section>
<a href="#header" class="scrollup"><i class="fa fa-chevron-up"></i></a>

<script src="{{asset('site/js/modernizr-2.6.2-respond-1.1.0.mi')}}n.js"></script>
<script src="{{asset('site/js/jquery')}}.js"></script>
<script src="{{asset('site/js/jquery.easing.1.')}}3.js"></script>
<script src="{{asset('site/js/bootstrap.min')}}.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script>
<script src="{{asset('site/js/jquery.isotope.min.js')}}"></script>
<script src="{{asset('site/js/jquery.nicescroll.min.js')}}"></script>
<script src="{{asset('site/js/fancybox/jquery.fancybox.pack.js')}}"></script>
<script src="{{asset('site/js/skrollr.min.js')}}"></script>
<script src="{{asset('site/js/jquery.scrollTo.js')}}"></script>
<script src="{{asset('site/js/jquery.localScroll.js')}}"></script>
<script src="{{asset('site/js/stellar.js')}}"></script>
<script src="{{asset('site/js/responsive-slider.js')}}"></script>
<script src="{{asset('site/js/jquery.appear.js')}}"></script>
<script src="{{asset('site/js/grid.js')}}"></script>
<script src="{{asset('site/js/main.js')}}"></script>
<script src="{{asset('site/js/wow.min.js')}}"></script>
<script>
    wow = new WOW({}).init();
</script>
{{--<script src="contactform/contactform.js"></script>--}}

</body>

</html>
