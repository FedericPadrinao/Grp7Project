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
    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.html">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">About</strong></div>
        </div>
      </div>
    </div>  

    <div class="site-section border-bottom" data-aos="fade">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6">
            <div class="block-16">
              <figure>
                <img src="images/keebbg_2.jpg" alt="Image placeholder" class="img-fluid rounded">
              </figure>
            </div>
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-5">
            
            
            <div class="site-section-heading pt-3 mb-4">
              <h2 class="text-black">How We Started</h2>
            </div>
            <p>KeebsOut is a mechanical keyboard retailer based in the Philippines that aims to help new hobbyists get their basic essentials without the hassle of waiting for long queues when ordering their dream keyboard materials.</p>
            <p>A simple purchase from this website can kickstart the hobby and help beginners delve in deeper through the rabbit hole that will consist of many more options to come for them in the future.</p>
            
          </div>
        </div>
      </div>
    </div>

    <div class="site-section border-bottom" data-aos="fade">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 site-section-heading text-center pt-4">
            <h2>The Team</h2>
          </div>
        </div>
<div class=row>
          
          <div class="col-md-6 col-lg-4">
            <div class="block-38 text-center">
              <div class="block-38-img">
                <div class="block-38-header">
                  <img src="images/Tayag.png" alt="Image placeholder" class="mb-4">
                  <h3 class="block-38-heading h4">Gerard Bayan</h3>
                  <p class="block-38-subheading">Group Representative</p>
                </div>
                <div class="block-38-body">
                  <p>2020143174 </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="block-38 text-center">
              <div class="block-38-img">
                <div class="block-38-header">
                  <img src="images/Fed.png" alt="Image placeholder" class="mb-4">
                  <h3 class="block-38-heading h4">Federic Padrinao</h3>
                  <p class="block-38-subheading">Developer</p>
                </div>
                <div class="block-38-body">
                    <p>2020143174 </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="block-38 text-center">
              <div class="block-38-img">
                <div class="block-38-header">
                  <img src="images/Fed.png" alt="Image placeholder" class="mb-4">
                  <h3 class="block-38-heading h4">Jade Lim</h3>
                  <p class="block-38-subheading">Developer</p>
                </div>
                <div class="block-38-body">
                  <p>2020143174  </p>
                </div>
              </div>
            </div>
          </div>
          <!-- 2ND ROW -->
          <div class="col-md-6 col-lg=-2"></div>
          <div class="col-md-6 col-lg-7">
            <div class="block-38 text-center">
              <div class="block-38-img">
                <div class="block-38-header">
                  <img src="images/Fed.png" alt="Image placeholder" class="mb-4">
                  <h3 class="block-38-heading h4">Miguel Abular</h3>
                  <p class="block-38-subheading">Developer</p>
                </div>
                <div class="block-38-body">
                  <p>2020143174  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="block-38 text-center">
              <div class="block-38-img">
                <div class="block-38-header">
                  <img src="images/Fed.png" alt="Image placeholder" class="mb-4">
                  <h3 class="block-38-heading h4">Luis Llarena</h3>
                  <p class="block-38-subheading">Developer</p>
                </div>
                <div class="block-38-body">
                  <p>2020143174 </p>
                </div>
              </div>
            </div>
          </div>
        </div>
                    </div>
                    </div>
  

    <div class="site-section site-section-sm site-blocks-1 border-0" data-aos="fade">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="">
            <div class="icon mr-4 align-self-start">
                <span class="icon-newspaper-o"></span>
            </div>
            <div class="text">
               <h2 class="text-uppercase">Alibi Support</h2>
               <p>We can help you conceal the fact that this is your spending by adding an alibi in your package in the form of "Congratulations on winning this item".</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="100">
            <div class="icon mr-4 align-self-start">
                <span class="icon-refresh2"></span>
            </div>
            <div class="text">
                <h2 class="text-uppercase">Constant Updates</h2>
                <p>We have a team of people that will constantly update you about new arrivals, restocks, and promos.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="200">
            <div class="icon mr-4 align-self-start">
                <span class="icon-help"></span>
            </div>
            <div class="text">
                <h2 class="text-uppercase">Customer Support</h2>
                <p>Our customer support team will be here to help you should you have any issues with your items.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    
   
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