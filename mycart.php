<?php include('includes/header.php') ?>

<div class="container">
  <div class="row" style="margin-top: 20px;">
    <div class="col-md-8">
      <div class="mycart-heading"><h4>My Cart(3)</h4></div>
      <hr>
      <div class="row cart-product-list">
        <div class="col-md-4">
          <img src="image/cart-1.jpg" alt="" width="100%"/>
          <div class="center">
            <div class="input-group" style="margin: 0 auto;">
                  <button type="button" class="btn btn-default btn-number"  data-type="minus" data-field="quant">
                    <span class="glyphicon glyphicon-minus"></span>
                  </button>
                  <input type="text" name="quant" class="input-number" value="4" min="1" max="10">
                  <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant">
                      <span class="glyphicon glyphicon-plus"></span>
                  </button>
                </div>
            </div>
        </div>
        <div class="col-md-8">
          <h4>Reverse Parking Sensors</h4>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
          <span class="price">RS 450,0</span>
          <span class="old-price">RS 500,0</span>
          <span class="price text-green" style="margin-left: 10px">10% off</span>
          <div class="cart-link"><a href="#">move to wishlist</a><a href="#">remove</a></div>
        </div>
      </div>
      <div class="row cart-product-list">
        <div class="col-md-4">
          <img src="image/cart-2.jpg" alt="" width="100%"/>
          <div class="center">
            <div class="input-group" style="margin: 0 auto;">
                  <button type="button" class="btn btn-default btn-number"  data-type="minus" data-field="quant2">
                    <span class="glyphicon glyphicon-minus"></span>
                  </button>
                  <input type="text" name="quant2" class="input-number" value="2" min="1" max="10">
                  <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant2">
                      <span class="glyphicon glyphicon-plus"></span>
                  </button>
                </div>
            </div>
        </div>
        <div class="col-md-8">
          <h4>Car's Alloy wheels</h4>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
          <span class="price">RS 10,00</span>
          <div class="cart-link"><a href="#">move to wishlist</a><a href="#">remove</a></div>
        </div>
      </div>
      <div class="row cart-product-list">
          <a href="/newUI/address.php" class="btn btn-warning catalog-detail-button pull-right"> CHECKOUT </a>
          <a class="btn btn-success catalog-detail-button pull-right" href="/newUI"><i class="fa fa-angle-left"> </i> CONTINUE SHOPPING </a>
        </div>
    </div>
    <div class="col-md-4">
      <h4>Product Details</h4>
      <hr>
      <div class="price-detail">
        <span>Price (2 items)</span>
        <span class="pull-right">280,00.00</span>
        <br><br>
        <span>Delivery Charges</span>
        <span class="pull-right text-green">FREE</span>
        <br><br>
        <div class="payable-amount">
          <span>Amount Payable</span>
          <span class="pull-right">280,00.00</span>
        </div>
      </div>
      <div class="savings-order" style="background: #F7FFFA">
        <span class="text-green">Total savings on this order</span>
        <span class="pull-right">200,0.00</span>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php') ?>
