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
           <li class="bs-wizard-step complete"><!-- complete -->
             <div class="text-center bs-wizard-stepnum">Payment</div>
             <div class="progress"><div class="progress-bar"></div></div>
             <a href="/newUI/payment.php" class="bs-wizard-dot"></a>
           </li>
           <li class="bs-wizard-step active"><!-- active -->
             <div class="text-center bs-wizard-stepnum">Summary </div>
             <div class="progress"><div class="progress-bar"></div></div>
             <a href="#" class="bs-wizard-dot"></a>
           </li>
       </ul>
  </section>
  <section class="shoping-content">
    <h3>Summary</h3>
    <p>Please check your order</p>
    <hr>
    <form action="invoice.php" >
        <div class="row">
            <div class="col-xs-12">
                <div class="row">
                    <div class="col-xs-12 col-md-3 col-lg-3 ">
                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <h3 class="panel-title"><strong>Billing Details</strong><a href="/newUI/address.php" class="edit-summary pull-right"><strong>Edit</strong></a></h3>
                        </div>
                        <div class="panel-body height">
                          <strong>David Peere:</strong><br>
                          1111 Army Navy Drive<br>
                          Arlington<br>
                          VA<br>
                          <strong>22 203</strong><br>
                        </div>
                      </div>
                    </div>
                    <div class="col-xs-12 col-md-3 col-lg-3">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><strong>Payment Information</strong><a href="/newUI/payment.php" class="edit-summary pull-right"><strong>Edit</strong></a></h3>
                            </div>
                            <div class="panel-body height">
                                <strong>Card Name:</strong> Visa<br>
                                <strong>Card Number:</strong> ***** 332<br>
                                <strong>Exp Date:</strong> 09/2020<br>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-3 col-lg-3">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><strong>Order Preferences</strong><a href="/newUI/delivery.php" class="edit-summary pull-right"><strong>Edit</strong></a></h3>
                            </div>
                            <div class="panel-body height">
                                <strong>Delivery:</strong> Fedex <br>
                                <strong>Insurance:</strong> No<br>
                                <strong>Coupon:</strong> No<br>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-3 col-lg-3 float-xs-right">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><strong>Shipping Address</strong><a href="/newUI/address.php" class="edit-summary pull-right"><strong>Edit</strong></a></h3>
                            </div>
                            <div class="panel-body height">
                                <strong>David Peere:</strong><br>
                                1111 Army Navy Drive<br>
                                Arlington<br>
                                VA<br>
                                <strong>22 203</strong><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <h1 class="panel-title text-center" style="font-size: 25px;"><strong>Order summary</strong><a href="/newUI/mycart.php" class="edit-summary pull-right"><strong>Edit</strong></a></h1>
                        </div>
                        <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-sm">
                                <thead>
                                    <tr>
                                        <td><strong>Item Name</strong></td>
                                        <td class="text-xs-center"><strong>Item Price</strong></td>
                                        <td class="text-xs-center"><strong>Item Quantity</strong></td>
                                        <td class="text-xs-right"><strong>Total</strong></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Reverse Parking Sensors</td>
                                        <td class="text-xs-center">$450,0</td>
                                        <td class="text-xs-center">2</td>
                                        <td class="text-xs-right">$9000</td>
                                    </tr>
                                    <tr>
                                        <td>Car's Alloy wheels</td>
                                        <td class="text-xs-center">$500,0</td>
                                        <td class="text-xs-center">4</td>
                                        <td class="text-xs-right">$200,00</td>
                                    </tr>
                                    <tr>
                                        <td class="highrow"></td>
                                        <td class="highrow"></td>
                                        <td class="highrow text-xs-center"><strong>Subtotal</strong></td>
                                        <td class="highrow text-xs-right">$290,00.00</td>
                                    </tr>
                                    <tr>
                                        <td class="emptyrow"></td>
                                        <td class="emptyrow"></td>
                                        <td class="emptyrow text-xs-center"><strong>Shipping</strong></td>
                                        <td class="emptyrow text-xs-right">$20</td>
                                    </tr>
                                    <tr>
                                        <td class="emptyrow"></td>
                                        <td class="emptyrow"></td>
                                        <td class="emptyrow text-xs-center"><strong>Total</strong></td>
                                        <td class="emptyrow text-xs-right">$290,20.00</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group text-center">
              <a href="/newUI/payment.php" class="btn btn-info adress-btn" style="margin-right: 15px;">Previous</a><button class="btn btn-success adress-btn">Buy Now</button>
        </div>
    </form
  </section>
</div>
<?php include('includes/footer.php') ?>
