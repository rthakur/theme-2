<?php include('includes/header.php') ?>
<div class="container order-details">
    <div class="col-xs-12">
        <div class="row order-detail-mp">
            <div class="order-detail-heading">Order Details</div>
            <div class="col-md-6 float-xs-left border-right">
            <table class="table border-bottom table-sm">
                <tbody>
                  <tr>
                      <td>Order ID:</td>
                      <td class="text-xs-center">OD21344576785356</td>
                  </tr>
                  <tr>
                      <td>Order Date:</td>
                      <td class="text-xs-center">6 April, 2017 3:49 PM </td>
                  </tr>
                  <tr>
                      <td>Amount Paid:</td>
                      <td class="text-xs-center"> Rs. 2943 through Cash on delivery</td>
                  </tr>
                </tbody>
            </table>
            </div>
            <div class="col-md-6 float-xs-right">
                <div class="card">
                    <div class="card-block">
                        <strong>Lorem Ipsum</strong> 9988776655<br>
                        1111 Army Navy Drive<br>
                        Arlington<br>
                        VA<br>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title"><strong>MANAGE ORDER</strong></h3>
            </div>
            <div class="panel-body">
              <div class="col-md-6 float-xs-left border-right">
                <div class="text-center manage-order">
                  <a href="#">
                    <i class="fa fa-print" aria-hidden="true"></i>
                    <span><strong>PRINT ORDER </strong></span>
                  </a>
                </div>
              </div>
              <div class="col-md-6 float-xs-right">
                <div class="text-center manage-order">
                  <a href="#">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <span><strong>CONTACT US</strong></span>
                  </a>
                </div>
              </div>

            </div>
          </div>
        </div>
        <div class="row">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title" style="width:35%; float: left;"><strong>PRODUCT DETAILS</strong></h3>
              <div class="status-bar-heading">
                <ul>
                  <li class="progtrckr-heading text-center"><strong>APPROVAL</strong></li>
                  <li class="progtrckr-heading text-center"><strong>IN PROCESSING</strong></li>
                  <li class="progtrckr-heading text-center"><strong>SHIPPING</strong></li>
                  <li class="progtrckr-heading text-center"><strong>DELIVERY</strong></li>
                  <li class="progtrckr-heading text-center"><strong>SUBTOTAL</strong></li>
                </ul>
              </div>
            </div>
            <div class="panel-body">
              <div class="row ordered-item">
                <div class="col-md-4">
                  <div class="order-item">
                    <a href="/newUI/detail_page.php">
                      <img src="image/cart-1.jpg" alt="" class="order-item-image">
                    </a>
                    <div class="order-item-detail">
                      <h5 style="margin-bottom: 5px;"><a href="/newUI/detail_page.php" style="color:#888888;">Reverse Parking Sensors</a></h5>
                      <span class="text-muted">30 Days Exchange</span><br>
                      <span class="text-muted">Seller: RetailNet </span>
                    </div>
                    <div class="col-md-12">
                      <a class="btn btn-default review-btn" >Review Product</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-8">
                  <ol class="progtrckr" data-progtrckr-steps="5">
                      <li class="progtrckr-done"></li>
                      <li class="progtrckr-todo"></li>
                      <li class="progtrckr-todo"></li>
                      <li class="progtrckr-todo"></li>
                      <li><span class="price">RS 450,0</span></li>
                  </ol>
                </div>
              </div>
              <hr>
              <div class="row ordered-item">
                <div class="col-md-4">
                  <div class="order-item">
                    <a href="/newUI/detail_page.php">
                      <img src="image/cart-2.jpg" alt="" class="order-item-image">
                    </a>
                    <div class="order-item-detail">
                      <h5 style="margin-bottom: 5px;"><a href="/newUI/detail_page.php" style="color:#888888;">Car's Alloy wheels</a></h5>
                      <span class="text-muted">30 Days Exchange</span><br>
                      <span class="text-muted">Seller: RetailNet </span>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <a class="btn btn-default review-btn" >Review Product</a>
                  </div>
                </div>
                <div class="col-md-8">
                  <ol class="progtrckr" data-progtrckr-steps="5">
                      <li class="progtrckr-done"></li>
                      <li class="progtrckr-done"></li>
                      <li class="progtrckr-todo"></li>
                      <li class="progtrckr-todo"></li>
                      <li><span class="price">RS 10,00</span></li>
                  </ol>
                </div>
              </div>
              <div class="row order-total">
              <p class="pull-right">Your Total Savings <span class="text-green">Rs. 155</span> Total <span class="price">Rs. 2943</span></p>
              </div>
            </div>
          </div>
        </div>
    </div>
</div>
<?php include('includes/footer.php') ?>
