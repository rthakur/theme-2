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
