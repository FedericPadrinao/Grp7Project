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

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.html">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Cart</strong></div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <form class="col-md-12" method="post">
            <div class="site-blocks-table">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th class="product-thumbnail">Image</th>
                    <th class="product-name">Product</th>
                    <th class="product-price">Price</th>
                    <th class="product-quantity">Quantity</th>
                    <th class="product-total">Total</th>
                    <th class="product-remove">Remove</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="product-thumbnail">
                      <img src="images\Keyboard\Akuma.png" alt="Image" class="img-fluid">
                    </td>
                    <td class="product-name">
                      <h2 class="h5 text-black">Akuma</h2>
                    </td>
                    <td>5000</td>
                    <td>
                      <div class="input-group mb-3" style="max-width: 120px;">
                        <div class="input-group-prepend">
                          <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
                        </div>
                        <input type="text" class="form-control text-center" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                        <div class="input-group-append">
                          <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
                        </div>
                      </div>

                    </td>
                    <td>5000</td>
                    <td><a href="#" class="btn btn-primary btn-sm">X</a></td>
                  </tr>

                  <tr>
                    <td class="product-thumbnail">
                      <img src="images\Keyboard\Blade60.png" alt="Image" class="img-fluid">
                    </td>
                    <td class="product-name">
                      <h2 class="h5 text-black">Blade60</h2>
                    </td>
                    <td>1200</td>
                    <td>
                      <div class="input-group mb-3" style="max-width: 120px;">
                        <div class="input-group-prepend">
                          <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
                        </div>
                        <input type="text" class="form-control text-center" value="2" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                        <div class="input-group-append">
                          <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
                        </div>
                      </div>

                    </td>
                    <td>2400</td>
                    <td><a href="#" class="btn btn-primary btn-sm">X</a></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </form>
        </div>

                <div class="row mb-5">
                  <div class="col-md-6">
                    <span class="text-black">Total</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong class="text-black">7400</strong>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <button class="btn btn-primary btn-lg py-3 btn-block" onclick="window.location='checkout.html'">Proceed To Checkout</button>
                  </div>
                </div>
             
            
          
        
      </div>
    </div>

   

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