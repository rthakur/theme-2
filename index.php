<?php include('config.php') ?>
<!DOCTYPE html>
<html lang="en">
  <head>
<!--http://themes.iamabdus.com/bigbag/1.1/index-v4.html-->
    <!-- SITE TITTLE -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Wheels - Ecommerce Bootstrap Template</title>

    <!-- PLUGINS CSS STYLE -->
    <link href="css/jquery-ui.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    <link href="css/select_option1.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
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
              <div class="col-md-3 hidden-sm hidden-xs">
                <div class="navbar-header">
                  <a class="navbar-brand" href="/wheelstemp"><img src="image/logo.png" alt="logo+"></a>
                </div>
              </div>
              <div class="col-md-6">
                <!--Search-->
                <div class="navTop">
                  <div class="container">
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
                  </div>
                </div>
                <!--SearchEnd-->
              </div>
              <div class="col-md-3 col-xs-12 navTop">
                <!-- cart-->
                <div class="dropdown cart-dropdown">
                  <a href="#" class="dropdown-toggle shop-cart" data-toggle="dropdown">
                    <i class="fa fa-shopping-cart"></i>
                    <span class="hidden-xs">
                      <span class="cart-total">Your Cart (3)</span><br>
                      <span class="cart-price">$80.00</span>
                    </span>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-right">
                    <li>Item(s) in your cart</li>
                    <li>
                      <a href="#">
                        <div class="media">
                          <img class="media-left media-object" src="image/cart-1.jpg" alt="cart-Image">
                          <div class="media-body">
                            <h5 class="media-heading">INCIDIDUNT UT <br><span>2 X $199</span></h5>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <div class="media">
                          <img class="media-left media-object" src="image/cart-2.jpg" alt="cart-Image">
                          <div class="media-body">
                            <h5 class="media-heading">INCIDIDUNT UT <br><span>2 X $199</span></h5>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="btn-group" role="group" aria-label="...">
                        <button type="button" class="btn btn-default" onclick="location.href='#';">Shopping Cart</button>
                        <button type="button" class="btn btn-default" onclick="location.href='#';">Checkout</button>
                      </div>
                    </li>
                  </ul>
                </div>
                <!-- cart -->
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- BANNER -->


      <!--FILTERS-->
        <div class="row filter-section">
           <div class="col-md-4">
                   <div class="filter-heading">VEHICLE SEARCH</div>
                     <div class="search_container " align="center" style="padding:10px">
                        <form role="search">
                         <div class="input-group add-on" style="width:100%">
                           <div class="searchBox">
                             <span class="input-group">
                               <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term" type="text">
                               <button type="submit" class="input-group-addon"><i class="fa fa-search"></i></button>
                             </span>
                           </div>
                         </div>
                         </form>
                       </div>
                     <div class="filters">
                       <ul class="nav nav-tabs">
                         <li class="active">	<a href="#tab1" data-toggle="tab" aria-expanded="false" >	<img src="image/audi_car_logo.png"></a></li>
                         <li class="">	<a href="#tab2" data-toggle="tab" aria-expanded="false" >	<img src="image/renault.jpg"></a></li>
                         <li class=""><a href="#tab3" data-toggle="tab" aria-expanded="true" ><img src="image/wv.jpg"></a></li>
                         <li class="">	<a href="#tab4" data-toggle="tab" aria-expanded="false" >	<img src="image/audi_car_logo.png" ></a></li>
                         <li class=""><a href="#tab5" data-toggle="tab" aria-expanded="true" ><img src="image/renault.jpg"></a></li>
                       </ul>
                       <div class="tab-content search-box">
                         <div class="tab-pane" id="tab1">
                           <ul>
                             <?php foreach($brands as $brand) {?>
                             <li class="tab-list"><a href="#tab1" data-toggle="tab" aria-expanded="false">	<img src="<?php echo $brand['logo']?>"></a><span style="margin-left:10px"><?php echo $brand['name']?></span> </li>
                             <?php }?>
                           </ul>
                         </div>
                         <div class="tab-pane active" id="tab2">
                       <ul>
                         <?php foreach($brands as $brand) {?>
                         <li class="tab-list"><a href="#tab1" data-toggle="tab" aria-expanded="false">	<img src="<?php echo $brand['logo']?>"></a><span style="margin-left:10px"><?php echo $brand['name']?></span> </li>
                         <?php }?>
                       </ul>
                     </div>
                       </div>
                       <div class="search-btn"><a href="/wheelstemp" class="btn btn-default">SEARCH WITHOUT VEHICLE</a></div>
                   </div>
           </div>
           <div class="col-md-8">
             <img src="http://128.199.225.195/images/Wheel-Car-Audi-Automotive-Alloy-Vehicle-1879628.jpg" style="width:100%">
           </div>
         </div>
      <!--FILTERS-->


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
                  <h3><a href="#">Audi wheel</a></h3>
                  <p>Lorem ipsum dolor sit ameit</p>
                  <a href="#" class="btn btn-border">Shop Now</a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-xs-12">
              <div class="slide">
                <div class="productImage productImage2">
                </div>
                <div class="productCaption clearfix text-right">
                  <h3><a href="#">Car's wheel</a></h3>
                  <p>Lorem ipsum dolor sit ameit</p>
                  <a href="#" class="btn btn-border">Shop Now</a>
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
                        <div class="item">
                          <img src="image/image5.jpg" alt="Image">
                        </div>
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
                        <a href="#">
                          <img src="image/carlogo.jpg" alt="Image">
                        </a>
                        <div class="productMasking">
                          <ul class="list-inline btn-group" role="group">
                            <li><a data-toggle="modal" href=".login-modal" class="btn btn-default"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#" class="btn btn-default"><i class="fa fa-shopping-cart"></i></a></li>
                            <li><a data-toggle="modal" href=".quick-view" class="btn btn-default"><i class="fa fa-search"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="productCaption clearfix">
                        <h5><a href="#">Alloy wheel</a></h5>
                        <h3>$199</h3>
                      </div>
                    </div>
                    <div class="imageBox">
                      <div class="productImage clearfix">
                        <a href="#">
                          <img src="image/carlogo.jpg" alt="Image">
                        </a>
                        <span class="sticker">50% off</span>
                        <div class="productMasking">
                          <ul class="list-inline btn-group" role="group">
                            <li><a data-toggle="modal" href=".login-modal" class="btn btn-default"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#" class="btn btn-default"><i class="fa fa-shopping-cart"></i></a></li>
                            <li><a data-toggle="modal" href=".quick-view" class="btn btn-default"><i class="fa fa-search"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="productCaption clearfix">
                        <h5><a href="#">Alloy wheel</a></h5>
                        <h3>$199</h3>
                      </div>
                    </div>
                    <div class="imageBox">
                      <div class="productImage clearfix">
                        <a href="#">
                          <img src="image/carlogo.jpg" alt="Image">
                        </a>
                        <div class="productMasking">
                          <ul class="list-inline btn-group" role="group">
                            <li><a data-toggle="modal" href=".login-modal" class="btn btn-default"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#" class="btn btn-default"><i class="fa fa-shopping-cart"></i></a></li>
                            <li><a data-toggle="modal" href=".quick-view" class="btn btn-default"><i class="fa fa-search"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="productCaption clearfix">
                        <h5><a href="#">Alloy wheel</a></h5>
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
                        <a href="#">
                          <img src="image/carlogo.jpg" alt="Image">
                        </a>
                        <span class="sticker">50% off</span>
                        <div class="productMasking">
                          <ul class="list-inline btn-group" role="group">
                            <li><a data-toggle="modal" href=".login-modal" class="btn btn-default"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#" class="btn btn-default"><i class="fa fa-shopping-cart"></i></a></li>
                            <li><a data-toggle="modal" href=".quick-view" class="btn btn-default"><i class="fa fa-search"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="productCaption clearfix">
                        <h5><a href="#">Alloy wheel</a></h5>
                        <h3>$199</h3>
                      </div>
                    </div>
                    <div class="imageBox">
                      <div class="productImage clearfix">
                        <a href="#">
                          <img src="image/carlogo.jpg" alt="Image">
                        </a>
                        <div class="productMasking">
                          <ul class="list-inline btn-group" role="group">
                            <li><a data-toggle="modal" href=".login-modal" class="btn btn-default"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#" class="btn btn-default"><i class="fa fa-shopping-cart"></i></a></li>
                            <li><a data-toggle="modal" href=".quick-view" class="btn btn-default"><i class="fa fa-search"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="productCaption clearfix">
                        <h5><a href="#">Alloy wheel</a></h5>
                        <h3>$199</h3>
                      </div>
                    </div>
                    <div class="imageBox">
                      <div class="productImage clearfix">
                        <a href="#">
                          <img src="image/carlogo.jpg" alt="Image">
                        </a>
                        <div class="productMasking">
                          <ul class="list-inline btn-group" role="group">
                            <li><a data-toggle="modal" href=".login-modal" class="btn btn-default"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#" class="btn btn-default"><i class="fa fa-shopping-cart"></i></a></li>
                            <li><a data-toggle="modal" href=".quick-view" class="btn btn-default"><i class="fa fa-search"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="productCaption clearfix">
                        <h5><a href="#">Alloy wheel</a></h5>
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
                      <h2 class="category-title">car's accessory</h2>
                      <ul>
                        <?php foreach($accessories as $accessory) {?>
                          <li><a href="#"><?php echo $accessory['name'] ?></a></li>
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
                        <a href="#">
                          <img src="image/audi.jpg" alt="Image">
                        </a>
                        <span class="sticker">50% off</span>
                        <div class="productMasking">
                          <ul class="list-inline btn-group" role="group">
                            <li><a data-toggle="modal" href=".login-modal" class="btn btn-default"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#" class="btn btn-default"><i class="fa fa-shopping-cart"></i></a></li>
                            <li><a data-toggle="modal" href=".quick-view" class="btn btn-default"><i class="fa fa-search"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="productCaption clearfix">
                        <h5><a href="#">Alloy wheel</a></h5>
                        <h3>$199</h3>
                      </div>
                    </div>
                    <div class="imageBox">
                      <div class="productImage clearfix">
                        <a href="#">
                          <img src="image/audi.jpg" alt="Image">
                        </a>
                        <div class="productMasking">
                          <ul class="list-inline btn-group" role="group">
                            <li><a data-toggle="modal" href=".login-modal" class="btn btn-default"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#" class="btn btn-default"><i class="fa fa-shopping-cart"></i></a></li>
                            <li><a data-toggle="modal" href=".quick-view" class="btn btn-default"><i class="fa fa-search"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="productCaption clearfix">
                        <h5><a href="#">Alloy wheel</a></h5>
                        <h3>$199</h3>
                      </div>
                    </div>
                    <div class="imageBox">
                      <div class="productImage clearfix">
                        <a href="#">
                          <img src="image/audi.jpg" alt="Image">
                        </a>
                        <div class="productMasking">
                          <ul class="list-inline btn-group" role="group">
                            <li><a data-toggle="modal" href=".login-modal" class="btn btn-default"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#" class="btn btn-default"><i class="fa fa-shopping-cart"></i></a></li>
                            <li><a data-toggle="modal" href=".quick-view" class="btn btn-default"><i class="fa fa-search"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="productCaption clearfix">
                        <h5><a href="#">Alloy wheel</a></h5>
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
                      <h2 class="category-title">car's accessory</h2>
                      <ul>
                        <?php foreach($accessories as $accessory) {?>
                          <li><a href="#"><?php echo $accessory['name'] ?></a></li>
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
                        <a href="#">
                          <img src="image/audi.jpg" alt="Image">
                        </a>
                        <span class="sticker">50% off</span>
                        <div class="productMasking">
                          <ul class="list-inline btn-group" role="group">
                            <li><a data-toggle="modal" href=".login-modal" class="btn btn-default"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#" class="btn btn-default"><i class="fa fa-shopping-cart"></i></a></li>
                            <li><a data-toggle="modal" href=".quick-view" class="btn btn-default"><i class="fa fa-search"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="productCaption clearfix">
                        <h5><a href="#">Alloy wheel</a></h5>
                        <h3>$199</h3>
                      </div>
                    </div>
                    <div class="imageBox">
                      <div class="productImage clearfix">
                        <a href="#">
                          <img src="image/audi.jpg" alt="Image">
                        </a>
                        <div class="productMasking">
                          <ul class="list-inline btn-group" role="group">
                            <li><a data-toggle="modal" href=".login-modal" class="btn btn-default"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#" class="btn btn-default"><i class="fa fa-shopping-cart"></i></a></li>
                            <li><a data-toggle="modal" href=".quick-view" class="btn btn-default"><i class="fa fa-search"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="productCaption clearfix">
                        <h5><a href="#">Alloy wheel</a></h5>
                        <h3>$199</h3>
                      </div>
                    </div>
                    <div class="imageBox">
                      <div class="productImage clearfix">
                        <a href="#">
                          <img src="image/audi.jpg" alt="Image">
                        </a>
                        <div class="productMasking">
                          <ul class="list-inline btn-group" role="group">
                            <li><a data-toggle="modal" href=".login-modal" class="btn btn-default"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#" class="btn btn-default"><i class="fa fa-shopping-cart"></i></a></li>
                            <li><a data-toggle="modal" href=".quick-view" class="btn btn-default"><i class="fa fa-search"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="productCaption clearfix">
                        <h5><a href="#">Alloy wheel</a></h5>
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
                   <?php foreach($accessories as $accessory) {?>
                     <li><a href="#"><?php echo $accessory['name'] ?></a></li>
                    <?php } ?>
                  </ul>
                </ul>
              </div>
            </div>
            <div class="col-sm-2 col-xs-12">
              <div class="footerLink">
                <h5>BRANDS</h5>
                <ul class="list-unstyled">
                  	 <?php foreach($brands as $brand) {?>
                  <li><a href="#"><?php echo $brand['name'] ?></a></li>
                  <?php } ?>
                </ul>
              </div>
            </div>
            <div class="col-sm-2 col-xs-12">
              <div class="footerLink">
                <h5>Accessories</h5>
                <ul class="list-unstyled">
                  <?php foreach($accessories as $accessory) {?>
               <li><a href="#"><?php echo $accessory['name'] ?></a></li>
               <?php } ?>
                </ul>
              </div>
            </div>
            <div class="col-sm-2 col-xs-12">
              <div class="footerLink">
                <h5>Get in Touch</h5>
                <ul class="list-unstyled">
                  <li>Call us at (000)-000-0000</li>
                  <li><a href="#">support@wheels.com</a></li>
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
                  <a href="#" class="input-group-addon" id="basic-addon2">go <i class="fa fa-chevron-right"></i></a>
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
              <p>Copyright &copy; <?php echo date("Y"); ?>, <a target="_blank" href="#">wheels.com</a>. All right reserved.
              </p>
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
    <!-- <div class="modal fade login-modal" id="login" tabindex="-1" role="dialog">
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
    </div> -->

    <!-- SIGN UP MODAL -->
    <!-- <div class="modal fade" id="signup" tabindex="-1" role="dialog">
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
    </div> -->

    <!-- PORDUCT QUICK VIEW MODAL -->
    <!-- <div class="modal fade quick-view" tabindex="-1" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <div class="media">
              <div class="media-left">
                <img class="media-object" src="img/products/quick-view/quick-view-01.jpg" alt="Image">
              </div>
              <div class="media-body">
                <h2>Old Skool Navy</h2>
                <h3>$149</h3>
                <p>Classic sneaker from Vans. Cotton canvas and suede upper. Textile lining with heel stabilizer and ankle support. Contrasting laces. Sits on a classic waffle rubber sole.</p>
                <span class="quick-drop">
                  <select name="guiest_id3" id="guiest_id3" class="select-drop">
                    <option value="0">Size</option>
                    <option value="1">Size 1</option>
                    <option value="2">Size 2</option>
                    <option value="3">Size 3</option>
                  </select>
                </span>
                <span class="quick-drop resizeWidth">
                  <select name="guiest_id4" id="guiest_id4" class="select-drop">
                    <option value="0">Qty</option>
                    <option value="1">Qty 1</option>
                    <option value="2">Qty 2</option>
                    <option value="3">Qty 3</option>
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
    </div> -->

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
