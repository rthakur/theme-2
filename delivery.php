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
           <li class="bs-wizard-step active"><!-- complete -->
             <div class="text-center bs-wizard-stepnum">Delivery</div>
             <div class="progress"><div class="progress-bar"></div></div>
             <a href="#" class="bs-wizard-dot"></a>
           </li>
           <li class="bs-wizard-step disabled"><!-- active -->
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
  <h3>DELIVERY</h3>
  <p>Please choose your delivery method</p>
  <form action="payment.php" method="post">
    <div class="item item-service">
      <label class="description" >
        <input class="option" name="delivery_type" type="radio" checked/>
        <span class="price-value">€ 6.90</span>
        <div class="icons">
          <div class="icon"><img src="image/fedex.png" alt="" /></div>
        </div>
        <h2>Fedex</h2>
        <p class="short">Delivery within three days</p>
        <p class="long">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
      </label>
    </div>
    <div class="item item-service">
      <label class="description" >
        <input class="option" name="delivery_type" type="radio"/>
        <span class="price-value">€ 5.00</span>
        <div class="icons">
          <div class="icon"><img src="image/tnt.png" alt="" /></div>
        </div>
        <h2>TNT</h2>
        <p class="short">Delivery within three days</p>
        <p class="long">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
      </label>
    </div>
    <div class="item item-service">
      <label class="description" >
        <input class="option" name="delivery_type" type="radio"/>
        <span class="price-value">€ 0.00</span>
        <div class="icons">
          <div class="icon"><img src="image/dhl.png" alt="" /></div>
        </div>
        <h2>DHL</h2>
        <p class="short">Delivery within three days</p>
        <p class="long">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
      </label>
    </div>
    <div class="item item-service">
      <label class="description" >
        <input class="option" name="delivery_type" type="radio"/>
        <span class="price-value">€ 5.00</span>
        <div class="icons">
          <div class="icon"><img src="image/dhl-express.png" alt="" /></div>
        </div>
        <h2>DHL Express</h2>
        <p class="short">Delivery within three days</p>
        <p class="long">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
      </label>
    </div>
    <div class="form-group text-center">
        <a href="/newUI/address.php" class="btn btn-info adress-btn" style="margin-right: 15px;">Previous</a><button class="btn btn-success adress-btn">Continue</button>
    </div>
  </form>
</div>
<?php include('includes/footer.php') ?>
