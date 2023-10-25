<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KEEBSOUT</title>
     <link rel="stylesheet" href="~/lib/bootstrap/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="~/css/site.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    
    <link href="{{URL::asset('/lib/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/site.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/magnific-popup.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/jquery-ui.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/owl.theme.default.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/aos.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/style.css')}}" rel="stylesheet">
</head>

<body>

    <div class="site-wrap">
            <!-- HEADER NAVBAR -->
        <header class="site-navbar" role="banner">
            <div class="site-navbar-top">
                <div class="container">
                    <div class="row align-items-center">

                        <div class="col-6 col-md-4 order-2 order-md-1  text-left">
                            <h1 class="js-logo-clone"> PHP ELEC </h1>
                        </div>

                        <div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-center">
                            <div class="site-logo">
                                <a href="." class="js-logo-clone">KEEBSOUT</a>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 order-3 order-md-3 text-right">
                            <div class="site-top-icons">
                                <ul>
                                 
                                    <p> Welcome </p>
                                    <li><a href="/login.html"><span class="icon icon-person"></span></a></li>
                                    <li><a href="/LikeProduct"><span class="icon icon-heart-o"></span></a></li>
                                    <li>
                                        <a href="{{ url('/cart') }}" class="site-cart">
                                            <span class="icon icon-shopping_cart"></span>
                                            <span class="count"></span>
                                        </a>
                                    </li>

                              

                                    <li class="d-inline-block d-md-none ml-md-0"><a href="#"
                                            class="site-menu-toggle js-menu-toggle"><span class="icon-menu"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <nav class="site-navigation text-right text-md-center" role="navigation">
                <div class="container">
                    <ul class="site-menu js-clone-nav d-none d-md-block">
                        <li>
                            <a href="{{ url('/index') }}">Home</a>

                        </li>
                        <li>
                            <a href="{{ url('/aboutus') }}">About</a>
                        </li>

                        <li class="has-children">
                            <a href="{{ url('/shop') }}">Shop</a>
                            <ul class="dropdown">

                                <li> <a class="dropdown-item" href="/Shop?category=Keyboard">Keyboard</a> </li>
                                <li> <a class="dropdown-item" href="/Shop?category=Keycaps">Keycaps</a> </li>
                                <li> <a class="dropdown-item" href="/Shop?category=Switch">Switch</a> </li>
                                <li> <a class="dropdown-item" href="/Shop?category=Kit">Kit</a> </li>
                                <li><a class="dropdown-item" href="/Shop?category=Deskmat">Deskmat</a></li>

                            </ul>
                        </li>

                    </ul>
                </div>
            </nav>
        </header>
        <!-- HEADER NAVBAR -->
        <div class="site-blocks-cover" style="background-image: url(images/keebbg_1.jpg);  " data-aos="fade">
            <div class="container">
                <div class="row align-items-start align-items-md-center justify-content-end">
                    <div class="col-md-5 text-center text-md-left pt-5 pt-md-0">
                        <h1 class="mb-2" style="color: white;"> Welcome to the Rabbit Hole.</h1>
                        <div class="intro-text text-center text-md-left">
                            <p class="mb-4" style="color: white;">Start your mechanical keyboard journey with a variety
                                of products available at this store. Once you start, there's no more turning back. </p>
                            <p>
                                <a href="{{ url('/shop') }}" class="btn btn-sm btn-primary">Shop Now</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-section site-section-sm site-blocks-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="">
                        <div class="icon mr-4 align-self-start">
                            <span class="icon-newspaper-o"></span>
                        </div>
                        <div class="text">
                            <h2 class="text-uppercase">Alibi Support</h2>
                            <p>We can help you conceal the fact that this is your spending by adding an alibi in your
                                package in the form of "Congratulations on winning this item".</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon mr-4 align-self-start">
                            <span class="icon-refresh2"></span>
                        </div>
                        <div class="text">
                            <h2 class="text-uppercase">Constant Updates</h2>
                            <p>There are always new products coming in our store!</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon mr-4 align-self-start">
                            <span class="icon-help"></span>
                        </div>
                        <div class="text">
                            <h2 class="text-uppercase">Customer Support</h2>
                            <p>Our customer support team will be here to help you should you have any issues with your
                                items.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-section site-blocks-2">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0" data-aos="fade" data-aos-delay="">
                        <a class="block-2-item" href="/Shop?category=Keycaps">
                            <figure class="image">
                                <img src="images/keycapscat.jpg" alt="" class="img-fluid">
                            </figure>
                            <div class="text">
                                <span class="text-uppercase">Collections</span>
                                <h3>Keycaps</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
                        <a class="block-2-item" href="/Shop?category=Keyboard">
                            <figure class="image">
                                <img src="images/keebscat.jpg" alt="" class="img-fluid">
                            </figure>
                            <div class="text">
                                <span class="text-uppercase">Collections</span>
                                <h3>Keyboards</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
                        <a class="block-2-item" href="/Shop?category=Switch">
                            <figure class="image">
                                <img src="images/switchcat.jpg" alt="" class="img-fluid">
                            </figure>
                            <div class="text">
                                <span class="text-uppercase">Collections</span>
                                <h3>Switches</h3>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-section block-3 site-blocks-2 bg-light">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-7 site-section-heading text-center pt-4">
                        <h2>Featured Products</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="nonloop-block-3 owl-carousel">
                            <div class="item">
                                <div class="block-4 text-center">
                                    <figure class="block-4-image">
                                        <img src="images/feat1.jpg" alt="Image placeholder" class="img-fluid">
                                    </figure>
                                    <div class="block-4-text p-4">
                                        <h3><a href="#">PBTFans Deep Sea Predator</a></h3>
                                        <p class="mb-0">Find your perfect keycaps.</p>
                                        <p class="text-primary font-weight-bold">PHP 7500</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="block-4 text-center">
                                    <figure class="block-4-image">
                                        <img src="images/feat2.jpg" alt="Image placeholder" class="img-fluid">
                                    </figure>
                                    <div class="block-4-text p-4">
                                        <h3><a href="#">Akuma</a></h3>
                                        <p class="mb-0">Prebuilt Board for You</p>
                                        <p class="text-primary font-weight-bold">PHP 25000</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="block-4 text-center">
                                    <figure class="block-4-image">
                                        <img src="images/feat3.jpg" alt="Image placeholder" class="img-fluid">
                                    </figure>
                                    <div class="block-4-text p-4">
                                        <h3><a href="#">C<sup>3</sup> Equalz x TKC Tangerine Dark Green</a></h3>
                                        <p class="mb-0">Our Best Selling Switches</p>
                                        <p class="text-primary font-weight-bold">PHP 21</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="block-4 text-center">
                                    <figure class="block-4-image">
                                        <img src="images/feat4.jpg" alt="Image placeholder" class="img-fluid">
                                    </figure>
                                    <div class="block-4-text p-4">
                                        <h3><a href="#">Odin76</a></h3>
                                        <p class="mb-0">Kits for you to build</p>
                                        <p class="text-primary font-weight-bold">PHP 20000</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="block-4 text-center">
                                    <figure class="block-4-image">
                                        <img src="images/feat5.jpg" alt="Image placeholder" class="img-fluid">
                                    </figure>
                                    <div class="block-4-text p-4">
                                        <h3><a href="#">KBDFans Dusk</a></h3>
                                        <p class="mb-0">A colorful deskmat to suit your setup</p>
                                        <p class="text-primary font-weight-bold">PHP 1000</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<footer>
        <div class="site-section block-8">
            <div class="container">
                <div class="row justify-content-center  mb-5">
                    <div class="col-md-7 site-section-heading text-center pt-4">
                        <h2>Big Sale!</h2>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-12 col-lg-7 mb-5">
                        <a href="/Shop?handler=ProductAll"><img src="images/keebbg_2.jpg" alt="Image placeholder"
                                class="img-fluid rounded"></a>
                    </div>
                    <div class="col-md-12 col-lg-5 text-center pl-md-5">
                        <h2><a href="#">There's more out there than you can see.</a></h2>
                        <p>Visit our shop to browse for more options. You can choose your switches, keycaps, deskmats,
                            and even switches!</p>
                        <p><a href="/Shop?handler=ProductAll" class="btn btn-primary btn-sm">Shop Now</a></p>
                    </div>
                </div>
            </div>
        </div>



        </footer>
    </div>
    <script src="~/lib/jquery/dist/jquery.min.js"></script>
    <script src="~/lib/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="~/js/site.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/main.js"></script>
</body>

</html>