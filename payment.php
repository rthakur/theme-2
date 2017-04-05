<?php include('includes/header.php') ?>
<div class="container">
  <section class="shoping-progress-bar">
      <ul class="bs-wizard">
           <li class="bs-wizard-step complete"><!-- complete -->
             <div class="text-center bs-wizard-stepnum">MyCart</div>
             <div class="progress"><div class="progress-bar"></div></div>
             <a href="/newUI/mycart.php" class="bs-wizard-dot"></a>
           </li>
           <li class="bs-wizard-step complete"><!-- complete -->
             <div class="text-center bs-wizard-stepnum">Address</div>
             <div class="progress"><div class="progress-bar"></div></div>
             <a href="/newUI/address.php" class="bs-wizard-dot"></a>
           </li>
           <li class="bs-wizard-step complete"><!-- complete -->
             <div class="text-center bs-wizard-stepnum">Delivery</div>
             <div class="progress"><div class="progress-bar"></div></div>
             <a href="/newUI/delivery.php" class="bs-wizard-dot"></a>
           </li>
           <li class="bs-wizard-step active"><!-- active -->
             <div class="text-center bs-wizard-stepnum">Payment</div>
             <div class="progress"><div class="progress-bar"></div></div>
             <a href="#" class="bs-wizard-dot"></a>
           </li>
           <li class="bs-wizard-step disabled"><!-- disabled -->
             <div class="text-center bs-wizard-stepnum">Summary </div>
             <div class="progress"><div class="progress-bar"></div></div>
             <a href="#" class="bs-wizard-dot"></a>
           </li>
       </ul>
  </section>
  <h3>Payment</h3>
  <p>Please choose your payment method</p>
  <form action="summary.php" method="post">
    <div class="item item-service">
      <label class="description" >
        <input class="option payment-option" name="payment_type" value="invoice" type="radio" checked/>
        <h2>Invoice</h2>
        <p class="short">Pay by invoice within 14 days</p>
        <p class="long">Please transfer the money within 14 days to BIC: XXX, IBAN: YYY</p>
      </label>
    </div>
    <div class="item item-service">
      <label class="description" >
        <input class="option payment-option" name="payment_type" value="direct_debit" type="radio"/>
        <div class="icons">
          <div class="icon"><img src="image/direct-debit.png" alt="" /></div>
        </div>
        <h2>Direct debit</h2>
        <p class="short">Payment via your bank account</p>
        <p class="long">The money will be collected from your bank account within 1-3 days</p>
      </label>
      <div class="card-section">
        <div class="panel panel-default credit-card-box">
            <div class="panel-heading display-table" >
            <div class="row display-tr">
                <h3 class="panel-title display-td" >Payment Details</h3>
                <div class="display-td" >
                  <img class="img-responsive pull-right" src="image/accepted_c22e0.png">
                </div>
            </div>
          </div>
            <div class="panel-body">
                  <!-- <form role="form" id="payment-form"> -->
                    <div class="row">
                      <div class="col-xs-12">
                        <div class="form-group">
                          <label for="cardNumber">CARD HOLDER NAME</label>
                          <div class="input-group">
                            <input type="tel" class="form-control" name="card_holder" placeholder="Card Holder Name"/>
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="cardNumber">CARD NUMBER</label>
                          <div class="input-group">
                            <input type="tel" class="form-control" name="cardNumber" placeholder="Valid Card Number"/>
                            <span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-xs-7 col-md-7">
                        <div class="form-group">
                          <label for="cardExpiry"><span class="hidden-xs">EXPIRATION</span><span class="visible-xs-inline">EXP</span> DATE</label>
                          <input type="tel" class="form-control" name="cardExpiry" placeholder="MM / YY"/>
                        </div>
                      </div>
                      <div class="col-xs-5 col-md-5 pull-right">
                        <div class="form-group">
                          <label for="cardCVC">CVC CODE</label>
                          <input type="tel" class="form-control" name="cardCVC" placeholder="CVC" />
                        </div>
                      </div>
                    </div>
                    <!-- <div class="row">
                      <div class="col-xs-12">
                        <button class="btn btn-success btn-lg btn-block" type="submit">Pay Now</button>
                      </div>
                    </div> -->
                <!-- </form> -->
            </div>
        </div>
      </div>
    </div>
    <div class="item item-service">
      <label class="description" >
        <input class="option payment-option" name="payment_type" value="paypal" type="radio"/>
        <div class="icons">
          <div class="icon"><img src="image/paypal.png" alt="" /></div>
        </div>
        <h2>PayPal</h2>
        <p class="short">Payment via PayPal</p>
        <p class="long">Easy and secure payment with your PayPal account</p>
      </label>
    </div>
    <div class="item item-service">
      <label class="description" >
        <input class="option payment-option" name="payment_type" value="cash_on_deleviry" type="radio"/>
        <h2>Cash on delivery</h2>
        <p class="short">Pay cash on delivery of the parcel</p>
      </label>
    </div>
    <div class="item item-service">
      <label class="description" >
        <input class="option payment-option" name="payment_type" value="prepayment" type="radio" />
        <!-- <div class="icons">
          <div class="icon"><img src="image/direct-debit.png" alt="" /></div>
        </div> -->
        <h2>Prepayment</h2>
        <p class="short">The parcel will be shipped after the payment has been received</p>
        <p class="long">Please transfer the money to BIC: XXX, IBAN: YYY</p>
      </label>
    </div>
    <div class="form-group text-center">
        <a href="/newUI/address.php" class="btn btn-info adress-btn" style="margin-right: 15px;">Previous</a><button class="btn btn-success adress-btn">Continue</button>
    </div>
  </form>
</div>
<?php include('includes/footer.php') ?>
