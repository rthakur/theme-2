<?php include('config.php') ?>
<!DOCTYPE html>
<html lang="en">
  <head>
<!--http://themes.iamabdus.com/bigbag/1.1/index-v4.html->
    <!-- SITE TITTLE -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Wheels - Ecommerce Bootstrap Template</title>

    <!-- PLUGINS CSS STYLE -->
    <link href="css/jquery-ui.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/select_option1.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/settings.css" media="screen">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css" media="screen">

    <!-- GOOGLE FONT -->
    <link href='https://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>

    <!-- linearicons -->
    <link rel="stylesheet" href="css/icon-font.min.css">

    <!-- CUSTOM CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/optionswitch.css">
    <link rel="stylesheet" href="css/default.css" id="option_color">
    <link href="css/custom.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body class="body-wrapper">
    <div class="main-wrapper">
      <!-- HEADER -->
      <div class="header clearfix headerV3">
        <!-- TOPBAR -->
        <div class="topBar">
          <div class="container">
            <div class="row">
              <div class="col-md-6 hidden-sm hidden-xs">
                <ul class="list-inline">
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                  <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                  <li><a href="#"><i class="fa fa-tumblr"></i></a></li>
                </ul>
              </div>
              <div class="col-md-6 col-xs-12">
                <ul class="list-inline pull-right top-right">
                  <li class="account-login"><span><a data-toggle="modal" href='.login-modal'>Log in</a><small>or</small><a data-toggle="modal" href='#signup'>Create an account</a></span></li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- NAV TOP -->
        <div class="navTop text-center">
          <div class="container">
            <div class="navbar-header">
              <a class="navbar-brand" href="javascript:void(0)"><img src="image/logo.png" alt="logo+"></a>
            </div>
            <div class="navTop-middle">
              <div class="filterArea hidden-xs hidden-sm">
                <select name="guiest_id1" id="guiest_id1" class="select-drop">
                  <option value="0">All Categories</option>
              		 <?php foreach($brands as $brand) {?>
                                <option value="1"><?php echo $brand['name']; ?></option>
              		<?php } ?>
              		</select>
              </div>
              <div class="searchBox">
                <span class="input-group">
                  <input type="text" class="form-control" placeholder="Search Items…" aria-describedby="basic-addon2">
                  <button type="submit" class="input-group-addon"><i class="fa fa-search"></i></button>
                </span>
              </div>
            </div>
            <div class="dropdown cart-dropdown">
              <a href="cart-page.html" class="dropdown-toggle shop-cart" data-toggle="dropdown">
                <i class="fa fa-shopping-cart"></i>
                <span class="hidden-xs">
                  <span class="cart-total">Your Cart (3)</span><br>
                  <span class="cart-price">$80.00</span>
                </span>
              </a>
              <ul class="dropdown-menu dropdown-menu-right">
                <li>Item(s) in your cart</li>
                <li>
                  <a href="single-product.html">
                    <div class="media">
                      <img class="media-left media-object" src="imgage/cart-item-01.jpg" alt="cart-Image">
                      <div class="media-body">
                        <h5 class="media-heading">INCIDIDUNT UT <br><span>2 X $199</span></h5>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="single-product.html">
                    <div class="media">
                      <img class="media-left media-object" src="/cart-item-01.jpg" alt="cart-Image">
                      <div class="media-body">
                        <h5 class="media-heading">INCIDIDUNT UT <br><span>2 X $199</span></h5>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <div class="btn-group" role="group" aria-label="...">
                    <button type="button" class="btn btn-default" onclick="location.href='cart-page.html';">Shopping Cart</button>
                    <button type="button" class="btn btn-default" onclick="location.href='checkout-step-1.html';">Checkout</button>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <!-- NAVBAR -->
        <nav class="navbar navbar-main navbar-default nav-V3" role="navigation">
          <div class="container">

            <div class="nav-category dropdown">

              <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                Brand
                <button type="button">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
              </a>


              <ul class="dropdown-menu dropdown-menu-left" style="padding-left:10px; padding-right:10px; height: 500px;background-color: #E8EFF2 " >
                <li> <span class="search_glass"></span><input type="text" style="width:100%;height:30px"></li>
                <li><a href="#"><img src="image/carlogo.jpg" class="listing-tab"><img src="image/card1.png" class="listing-tab"><img src="image/carlogo.jpg" class="listing-tab"><img src="image/carlogo.jpg" class="listing-tab"><img src="image/card1.png" class="listing-tab"></a></li>
                <div class="listing-brands">
                    <?php foreach ($brands as $brand) { ?>

                    <?php if(count($brand['types'])) { ?>
                    <li>
                      <a  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                          <img src="<?php echo $brand['logo']; ?>" height="30px";width="30px"; >  <?php echo $brand['name']; ?>
                      </a>
                      <ul class="dropdown-menu">
                        <?php foreach ($brand['types'] as $type) { ?>
                          <li><a href="product-grid-left-sidebar.html"><?php echo $type; ?></a></li>
                        <?php  }?>
                      </ul>

                    </li>
                    <?php }  else{ ?>
                      <li ><a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="<?php echo $brand['logo']; ?>" height="30px";width="30px"; ><?php echo $brand['name']; ?></a></li>
                      <?php }
                     }?>
                </div>
                  <li><a href="#" class="btn btn-default search-btn">SEARCH WITHOUT VEHICLE</a></li>
                </ul>

            </div>
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
              <ul class="nav navbar-nav">
                <li class="dropdown active">
                  <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home</a>
                  <ul class="dropdown-menu dropdown-menu-left">
                    <?php foreach($brands as $brand) {?>
                      <li><a href="#"><?php echo $brand['name'] ?></a></li>
                     <?php } ?>
                  </ul>
                </li>
                <li class="dropdown megaDropMenu">
                  <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="300" data-close-others="true" aria-expanded="false">Shop</b></a>
                  <ul class="dropdown-menu row">
                    <li class="col-sm-3 col-xs-12">
                      <ul class="list-unstyled">
                        <li>Products Grid View</li>
                        <?php foreach($brands as $brand) {?>
                          <li><a href="#"><?php echo $brand['name'] ?></a></li>
                         <?php } ?>
                      </ul>
                    </li>
                    <li class="col-sm-3 col-xs-12">
                      <ul class="list-unstyled">
                        <li>Products List View</li>
                        <?php foreach($brands as $brand) {?>
                          <li><a href="#"><?php echo $brand['name'] ?></a></li>
                         <?php } ?>
                      </ul>
                    </li>
                    <li class="col-sm-3 col-xs-12">
                      <ul class="list-unstyled">
                        <li>Checkout</li>
                        <?php foreach($brands as $brand) {?>
                          <li><a href="#"><?php echo $brand['name'] ?></a></li>
                         <?php } ?>
                      </ul>
                    </li>

                  </ul>
                </li>

                <li class="dropdown">
                  <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My Account</a>
                  <ul class="dropdown-menu dropdown-menu-right">
                    <?php foreach($pages as $page) {?>
                      <li><a href="#"><?php echo $page['name'] ?></a></li>
                     <?php } ?>
                  </ul>
                </li>
              </ul>
            </div><!-- /.navbar-collapse -->

          </div>
        </nav>

      </div>

      <!-- BANNER -->
      <div class="container">
        <div class="bannercontainer bannerV4">
          <div class="fullscreenbanner-container">
            <div class="fullscreenbanner">
              <ul>
                <?php foreach($sliderImages as $sliderImage) {?>
                <li data-transition="slidehorizontal" data-slotamount="5" data-masterspeed="700"  data-title="Slide 3">
                  <img src="<?php echo $sliderImage['image'] ?>" alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
                  <div class="slider-caption slider-captionV4">
                    <div class="tp-caption rs-caption-2 sft"
                      data-hoffset="0"
                      data-x="85"
                      data-y="115"
                      data-speed="800"
                      data-start="2000"
                      data-easing="Back.easeInOut"
                      data-endspeed="300">
                      <small>Festival Offer</small><br>
                      Up To 20% off
                    </div>

                    <div class="tp-caption rs-caption-3 sft"
                      data-hoffset="0"
                      data-x="85"
                      data-y="240"
                      data-speed="1000"
                      data-start="3000"
                      data-easing="Power4.easeOut"
                      data-endspeed="300"
                      data-endeasing="Power1.easeIn"
                      data-captionhidden="off">
                      Our 3D Wheel Configurator
                    </div>
                    <div class="tp-caption rs-caption-4 sft"
                      data-hoffset="0"
                      data-x="85"
                      data-y="300"
                      data-speed="800"
                      data-start="3500"
                      data-easing="Power4.easeOut"
                      data-endspeed="300"
                      data-endeasing="Power1.easeIn"
                      data-captionhidden="off">
                      <span class="page-scroll"><a target="_blank" href="https://goo.gl/VCbeOp" class="btn primary-btn">Buy Now<i class="glyphicon glyphicon-chevron-right"></i></a></span>
                    </div>
                  </div>
                </li>
                <?php } ?>

              </ul>
            </div>
          </div>
        </div>
      </div>

      <!-- CONTENT SECTION -->
      <section class="content clearfix">
        <div class="container">

          <!-- FEATURE COLLECTION SECTION -->
          <div class="row featuredCollection version2 version3">
            <div class="col-sm-6 col-xs-12">
              <div class="slide">
                <div class="productImage productImage1">
                </div>
                <div class="productCaption clearfix text-right">
                  <h3><a href="single-product.html">Audi wheel</a></h3>
                  <p>helps you to find suitable alloy wheels and tyres</p>
                  <a href="single-product.html" class="btn btn-border">Shop Now</a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-xs-12">
              <div class="slide">
                <div class="productImage productImage2">
                </div>
                <div class="productCaption clearfix text-right">
                  <h3><a href="single-product.html">Car's wheel</a></h3>
                  <p>helps you to find suitable alloy wheels and tyres</p>
                  <a href="single-product.html" class="btn btn-border">Shop Now</a>
                </div>
              </div>
            </div>
          </div>

          <!-- CATEGORY SECTION -->
          <div class="categorySection">
            <div class="row">
              <div class="col-md-6 col-xs-12">
                <div class="category-content">
                  <div class="category-top">
                    <div class="category-menu text-center">
                      <h2 class="category-title">Car's Alloy wheels</h2>
                      <ul>
                        <?php foreach($pages as $page) {?>
                          <li><a href="#"><?php echo $page['name'] ?></a></li>
                         <?php } ?>
                      </ul>
                    </div>
                    <div class="category-Slider">
                      <div class="owl-carousel categorySlider">
                        <?php foreach($sliderImages as $sliderImage) {?>
                          <div class="item">
                            <img src="<?php echo $sliderImage['image'] ?>" alt="Image">
                          </div>
                         <?php } ?>


                      </div>
                    </div>
                  </div>

                  <div class="category-bottom">
                    <div class="imageBox">
                      <div class="productImage clearfix">
                        <a href="single-product.html">
                          <img src="img/home/category/category-img6.jpg" alt="Image">
                        </a>
                        <div class="productMasking">
                          <ul class="list-inline btn-group" role="group">
                            <li><a data-toggle="modal" href=".login-modal" class="btn btn-default"><i class="fa fa-heart"></i></a></li>
                            <li><a href="cart-page.html" class="btn btn-default"><i class="fa fa-shopping-cart"></i></a></li>
                            <li><a data-toggle="modal" href=".quick-view" class="btn btn-default"><i class="fa fa-search"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="productCaption clearfix">
                        <h5><a href="single-product.html">Alloy-silver</a></h5>
                        <h3>$199</h3>
                      </div>
                    </div>
                    <div class="imageBox">
                      <div class="productImage clearfix">
                        <a href="single-product.html">
                          <img src="img/home/category/category-img7.jpg" alt="Image">
                        </a>
                        <span class="sticker">50% off</span>
                        <div class="productMasking">
                          <ul class="list-inline btn-group" role="group">
                            <li><a data-toggle="modal" href=".login-modal" class="btn btn-default"><i class="fa fa-heart"></i></a></li>
                            <li><a href="cart-page.html" class="btn btn-default"><i class="fa fa-shopping-cart"></i></a></li>
                            <li><a data-toggle="modal" href=".quick-view" class="btn btn-default"><i class="fa fa-search"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="productCaption clearfix">
                        <h5><a href="single-product.html">Alloy wheel</a></h5>
                        <h3>$199</h3>
                      </div>
                    </div>
                    <div class="imageBox">
                      <div class="productImage clearfix">
                        <a href="single-product.html">
                          <img src="img/home/category/category-img8.jpg" alt="Image">
                        </a>
                        <div class="productMasking">
                          <ul class="list-inline btn-group" role="group">
                            <li><a data-toggle="modal" href=".login-modal" class="btn btn-default"><i class="fa fa-heart"></i></a></li>
                            <li><a href="cart-page.html" class="btn btn-default"><i class="fa fa-shopping-cart"></i></a></li>
                            <li><a data-toggle="modal" href=".quick-view" class="btn btn-default"><i class="fa fa-search"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="productCaption clearfix">
                        <h5><a href="single-product.html">Alloy wheel</a></h5>
                        <h3>$199</h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-6 col-xs-12">
                <div class="category-content">
                  <div class="category-top">
                    <div class="category-menu text-center">
                      <h2 class="category-title">Audi Alloy wheels</h2>
                      <ul>
                        <?php foreach($brands as $brand) {?>
                          <li><a href="#"><?php echo $brand['name'] ?></a></li>
                         <?php } ?>
                      </ul>
                    </div>
                    <div class="category-Slider">
                      <div class="owl-carousel categorySlider">
                        <?php foreach($sliderImages as $sliderImage) {?>
                          <div class="item">
                            <img src="<?php echo $sliderImage['image'] ?>" alt="Image">
                          </div>
                         <?php } ?>
                      </div>
                    </div>
                  </div>

                  <div class="category-bottom">
                    <div class="imageBox">
                      <div class="productImage clearfix">
                        <a href="single-product.html">
                          <img src="img/home/category/category-img9.jpg" alt="Image">
                        </a>
                        <span class="sticker">50% off</span>
                        <div class="productMasking">
                          <ul class="list-inline btn-group" role="group">
                            <li><a data-toggle="modal" href=".login-modal" class="btn btn-default"><i class="fa fa-heart"></i></a></li>
                            <li><a href="cart-page.html" class="btn btn-default"><i class="fa fa-shopping-cart"></i></a></li>
                            <li><a data-toggle="modal" href=".quick-view" class="btn btn-default"><i class="fa fa-search"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="productCaption clearfix">
                        <h5><a href="single-product.html">alloy-silver</a></h5>
                        <h3>$199</h3>
                      </div>
                    </div>
                    <div class="imageBox">
                      <div class="productImage clearfix">
                        <a href="single-product.html">
                          <img src="img/home/category/category-img10.jpg" alt="Image">
                        </a>
                        <div class="productMasking">
                          <ul class="list-inline btn-group" role="group">
                            <li><a data-toggle="modal" href=".login-modal" class="btn btn-default"><i class="fa fa-heart"></i></a></li>
                            <li><a href="cart-page.html" class="btn btn-default"><i class="fa fa-shopping-cart"></i></a></li>
                            <li><a data-toggle="modal" href=".quick-view" class="btn btn-default"><i class="fa fa-search"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="productCaption clearfix">
                        <h5><a href="single-product.html">alloy-silver</a></h5>
                        <h3>$199</h3>
                      </div>
                    </div>
                    <div class="imageBox">
                      <div class="productImage clearfix">
                        <a href="single-product.html">
                          <img src="img/home/category/category-img11.jpg" alt="Image">
                        </a>
                        <div class="productMasking">
                          <ul class="list-inline btn-group" role="group">
                            <li><a data-toggle="modal" href=".login-modal" class="btn btn-default"><i class="fa fa-heart"></i></a></li>
                            <li><a href="cart-page.html" class="btn btn-default"><i class="fa fa-shopping-cart"></i></a></li>
                            <li><a data-toggle="modal" href=".quick-view" class="btn btn-default"><i class="fa fa-search"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="productCaption clearfix">
                        <h5><a href="single-product.html">matte-black alloy</a></h5>
                        <h3>$199</h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-6 col-xs-12">
                <div class="category-content">
                  <div class="category-top">
                    <div class="category-menu text-center">
                      <h2 class="category-title">car's accessery</h2>
                      <ul>
                        <?php foreach($brands as $brand) {?>
                          <li><a href="#"><?php echo $brand['name'] ?></a></li>
                         <?php } ?>
                      </ul>
                    </div>
                    <div class="category-Slider">
                      <div class="owl-carousel categorySlider">
                        <?php foreach($sliderImages as $sliderImage) {?>
                          <div class="item">
                            <img src="<?php echo $sliderImage['image'] ?>" alt="Image">
                          </div>
                         <?php } ?>
                      </div>
                    </div>
                  </div>

                  <div class="category-bottom">
                    <div class="imageBox">
                      <div class="productImage clearfix">
                        <a href="single-product.html">
                          <img src="img/home/category/category-img13.jpg" alt="Image">
                        </a>
                        <span class="sticker">50% off</span>
                        <div class="productMasking">
                          <ul class="list-inline btn-group" role="group">
                            <li><a data-toggle="modal" href=".login-modal" class="btn btn-default"><i class="fa fa-heart"></i></a></li>
                            <li><a href="cart-page.html" class="btn btn-default"><i class="fa fa-shopping-cart"></i></a></li>
                            <li><a data-toggle="modal" href=".quick-view" class="btn btn-default"><i class="fa fa-search"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="productCaption clearfix">
                        <h5><a href="single-product.html">Alloy wheel</a></h5>
                        <h3>$199</h3>
                      </div>
                    </div>
                    <div class="imageBox">
                      <div class="productImage clearfix">
                        <a href="single-product.html">
                          <img src="img/home/category/category-img14.jpg" alt="Image">
                        </a>
                        <div class="productMasking">
                          <ul class="list-inline btn-group" role="group">
                            <li><a data-toggle="modal" href=".login-modal" class="btn btn-default"><i class="fa fa-heart"></i></a></li>
                            <li><a href="cart-page.html" class="btn btn-default"><i class="fa fa-shopping-cart"></i></a></li>
                            <li><a data-toggle="modal" href=".quick-view" class="btn btn-default"><i class="fa fa-search"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="productCaption clearfix">
                        <h5><a href="single-product.html">alloy-silver</a></h5>
                        <h3>$199</h3>
                      </div>
                    </div>
                    <div class="imageBox">
                      <div class="productImage clearfix">
                        <a href="single-product.html">
                          <img src="img/home/category/category-img12.jpg" alt="Image">
                        </a>
                        <div class="productMasking">
                          <ul class="list-inline btn-group" role="group">
                            <li><a data-toggle="modal" href=".login-modal" class="btn btn-default"><i class="fa fa-heart"></i></a></li>
                            <li><a href="cart-page.html" class="btn btn-default"><i class="fa fa-shopping-cart"></i></a></li>
                            <li><a data-toggle="modal" href=".quick-view" class="btn btn-default"><i class="fa fa-search"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="productCaption clearfix">
                        <h5><a href="single-product.html">Alloy wheel</a></h5>
                        <h3>$199</h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-6 col-xs-12">
                <div class="category-content">
                  <div class="category-top">
                    <div class="category-menu text-center">
                      <h2 class="category-title">car's accessery</h2>
                      <ul>
                        <?php foreach($brands as $brand) {?>
                          <li><a href="#"><?php echo $brand['name'] ?></a></li>
                         <?php } ?>
                      </ul>
                    </div>
                    <div class="category-Slider">
                      <div class="owl-carousel categorySlider">
                        <?php foreach($sliderImages as $sliderImage) {?>
                          <div class="item">
                            <img src="<?php echo $sliderImage['image'] ?>" alt="Image">
                          </div>
                         <?php } ?>
                      </div>
                    </div>
                  </div>

                  <div class="category-bottom">
                    <div class="imageBox">
                      <div class="productImage clearfix">
                        <a href="single-product.html">
                          <img src="img/home/category/category-img16.jpg" alt="Image">
                        </a>
                        <span class="sticker">50% off</span>
                        <div class="productMasking">
                          <ul class="list-inline btn-group" role="group">
                            <li><a data-toggle="modal" href=".login-modal" class="btn btn-default"><i class="fa fa-heart"></i></a></li>
                            <li><a href="cart-page.html" class="btn btn-default"><i class="fa fa-shopping-cart"></i></a></li>
                            <li><a data-toggle="modal" href=".quick-view" class="btn btn-default"><i class="fa fa-search"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="productCaption clearfix">
                        <h5><a href="single-product.html">matte-black Alloy</a></h5>
                        <h3>$199</h3>
                      </div>
                    </div>
                    <div class="imageBox">
                      <div class="productImage clearfix">
                        <a href="single-product.html">
                          <img src="img/home/category/category-img17.jpg" alt="Image">
                        </a>
                        <div class="productMasking">
                          <ul class="list-inline btn-group" role="group">
                            <li><a data-toggle="modal" href=".login-modal" class="btn btn-default"><i class="fa fa-heart"></i></a></li>
                            <li><a href="cart-page.html" class="btn btn-default"><i class="fa fa-shopping-cart"></i></a></li>
                            <li><a data-toggle="modal" href=".quick-view" class="btn btn-default"><i class="fa fa-search"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="productCaption clearfix">
                        <h5><a href="single-product.html">Alloy wheel</a></h5>
                        <h3>$199</h3>
                      </div>
                    </div>
                    <div class="imageBox">
                      <div class="productImage clearfix">
                        <a href="single-product.html">
                          <img src="img/home/category/category-img15.jpg" alt="Image">
                        </a>
                        <div class="productMasking">
                          <ul class="list-inline btn-group" role="group">
                            <li><a data-toggle="modal" href=".login-modal" class="btn btn-default"><i class="fa fa-heart"></i></a></li>
                            <li><a href="cart-page.html" class="btn btn-default"><i class="fa fa-shopping-cart"></i></a></li>
                            <li><a data-toggle="modal" href=".quick-view" class="btn btn-default"><i class="fa fa-search"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="productCaption clearfix">
                        <h5><a href="single-product.html">alloy-silver</a></h5>
                        <h3>$199</h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </section>

      <!-- FOOTER -->
      <div class="footer clearfix">
        <div class="container">
          <div class="row">
            <div class="col-sm-2 col-xs-12">
              <div class="footerLink">
                <h5>Accessories</h5>
                <ul class="list-unstyled">
                  <ul class="list-unstyled">
                   <?php foreach($brands as $brand) {?>
                     <li><a href="#"><?php echo $brand['name'] ?></a></li>
                    <?php } ?>
                  </ul>
                </ul>
              </div>
            </div>
            <div class="col-sm-2 col-xs-12">
              <div class="footerLink">
                <h5>Felgenoutlet</h5>
                <ul class="list-unstyled">
                  	 <?php foreach($Felgenoutlets as $Felgenoutlet) {?>
                  <li><a href="#"><?php echo $Felgenoutlet['name'] ?></a></li>
                  <?php } ?>
                </ul>
              </div>
            </div>
            <div class="col-sm-2 col-xs-12">
              <div class="footerLink">
                <h5>Customer Service</h5>
                <ul class="list-unstyled">
                  <?php foreach($services as $service) {?>
               <li><a href="#"><?php echo $service['name'] ?></a></li>
               <?php } ?>
                </ul>
              </div>
            </div>
            <div class="col-sm-2 col-xs-12">
              <div class="footerLink">
                <h5>Get in Touch</h5>
                <ul class="list-unstyled">
                  <li>Call us at (555)-555-5555</li>
                  <li><a href="mailto:support@iamabdus.com">support@iamabdus.com</a></li>
                </ul>
                <ul class="list-inline">
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                  <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                  <li><a href="#"><i class="fa fa-tumblr"></i></a></li>
                </ul>
              </div>
            </div>
            <div class="col-sm-4 col-xs-12">
              <div class="newsletter clearfix">
                <h4>Newsletter</h4>
                <h3>Sign up now</h3>
                <p>Enter your email address and get notified about new products. We hate spam!</p>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="your email address" aria-describedby="basic-addon2">
                  <a href="#" class="input-group-addon" id="basic-addon2">go <i class="glyphicon glyphicon-chevron-right"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- COPY RIGHT -->
      <div class="copyRight clearfix">
        <div class="container">
          <div class="row">
            <div class="col-sm-7 col-xs-12">
              <p>&copy; 2016 Copyright Bigbag Store Bootstrap Template by Abdus</a>.</p>
            </div>
            <div class="col-sm-5 col-xs-12">
              <ul class="list-inline">
                <li><img src="img/home/footer/card1.png"></li>
                <li><img src="img/home/footer/card2.png"></li>
                <li><img src="img/home/footer/card3.png"></li>
                <li><img src="img/home/footer/card4.png"></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- LOGIN MODAL -->
    <div class="modal fade login-modal" id="login" tabindex="-1" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h3 class="modal-title">log in</h3>
          </div>
          <div class="modal-body">
            <form action="" method="POST" role="form">
              <div class="form-group">
                <label for="">Enter Email</label>
                <input type="email" class="form-control" id="">
              </div>
              <div class="form-group">
                <label for="">Password</label>
                <input type="password" class="form-control" id="">
              </div>
              <div class="checkbox">
                <label>
                  <input type="checkbox"> Remember Me
                </label>
              </div>
              <button type="submit" class="btn btn-primary btn-block">log in</button>
              <button type="button" class="btn btn-link btn-block">Forgot Password?</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- SIGN UP MODAL -->
    <div class="modal fade" id="signup" tabindex="-1" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h3 class="modal-title">Create an account</h3>
          </div>
          <div class="modal-body">
            <form action="" method="POST" role="form">
              <div class="form-group">
                <label for="">Enter Email</label>
                <input type="email" class="form-control" id="">
              </div>
              <div class="form-group">
                <label for="">Password</label>
                <input type="password" class="form-control" id="">
              </div>
              <div class="form-group">
                <label for="">Confirm Password</label>
                <input type="password" class="form-control" id="">
              </div>
              <button type="submit" class="btn btn-primary btn-block">Sign up</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- PORDUCT QUICK VIEW MODAL -->
    <div class="modal fade quick-view" tabindex="-1" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <div class="media">
              <div class="media-left">
                <img class="media-object" src="image/alloy-wheels-rims-tsw-amaroo-5-lug-rear-alloy-silver-std-250.jpg" alt="Image">
              </div>
              <div class="media-body">
                <h2>Alloy wheels and tyres</h2>
                <h3>$300</h3>
                <p>Felgenoutlet: Your reliable partner for alloy wheels and tyres!</p>
                <span class="quick-drop">
                  <select name="guiest_id3" id="guiest_id3" class="select-drop">
                    <?php foreach($services as $service) {?>
                 <li><a href="#"><?php echo $service['name'] ?></a></li>
                 <?php } ?>

                    <option value="0">Size</option>
                    <?php foreach($sizes as $size) { ?>

                    <option value="1"><?php echo $size['size'] ?></option>
                    <?php }?>

                  </select>
                </span>
                <span class="quick-drop resizeWidth">
                  <select name="guiest_id4" id="guiest_id4" class="select-drop">
                    <?php foreach($sizes as $size) ?>
                    <option value="0">Qty</option>
                    <?php foreach($sizes as $size) { ?>
                    <option value="1"><?php echo $size['size'] ?></option>
                    <?php }?>
                  </select>
                </span>
                <div class="btn-area">
                  <a href="#" class="btn btn-primary btn-block">Add to cart <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.themepunch.tools.min.js"></script>
    <script src="js/jquery.themepunch.revolution.min.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/jquery.selectbox-0.1.3.min.js"></script>
    <script src="js/jquery.syotimer.js"></script>
    <script src="js/optionswitcher.js"></script>
    <script src="js/custom.js"></script>

  </body>
</html>
