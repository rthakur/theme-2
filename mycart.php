<?php include('includes/header.php') ?>

<div class="container">
  <div class="row" style="margin-top: 20px;">
    <div class="col-md-8">
      <div class="mycart-heading"><h4>My Cart(3)</h4></div>
      <hr>
      <div class="row">
        <div class="col-md-4">
          <img src="image/allot2.jpg" alt="" width="100%"/>
          <div class="center">
            <div class="input-group" style="margin: 0 auto;">
                  <button type="button" class="btn btn-default btn-number"  data-type="minus" data-field="quant">
                    <span class="glyphicon glyphicon-minus"></span>
                  </button>
                  <input type="text" name="quant" class="input-number" value="2" min="1" max="10">
                  <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant">
                      <span class="glyphicon glyphicon-plus"></span>
                  </button>
                </div>
            </div>
        </div>
        <div class="col-md-8">
          <h4>Reverse Parking Sensors</h4>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
          <span class="price">RS 200,00</span>
          <div class="cart-link"><a href="#">move to wishlist</a><a href="#">remove</a></div>
        </div>
      </div>
      <div class="row">
          <button class="btn btn-warning catalog-detail-button pull-right"> PLACE ORDER </button>
          <a class="btn btn-success catalog-detail-button pull-right" href="/wheelstemp"><i class="fa fa-angle-left"> </i> CONTINUE SHOPPING </a>
        </div>
    </div>
    <div class="col-md-4">
      <h4>Product Details</h4>
      <hr>
      <div class="price-detail">
        <span>Price(3 items)</span>
        <span class="pull-right">200,00</span>
        <br><br>
        <span>Delivery Charges</span>
        <span class="pull-right text-green">FREE</span>
        <br><br>
        <div class="payable-amount">
          <span>Amount Payable</span>
          <span class="pull-right">200,00</span>
        </div>
      </div>
      <div class="savings-order" style="background: #F7FFFA">
        <span class="text-green">Total savings on this order</span>
        <span class="pull-right">100.00</span>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php') ?>
