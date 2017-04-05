<?php include('includes/header.php') ?>
<div class="container">
  <h3>DELIVERY</h3>
  <p>Please choose your delivery method</p>
  <form action="payment.php">
    <div class="item item-service">
      <label class="description" >
        <input class="option" type="radio" checked/>
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
        <input class="option" type="radio"/>
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
        <input class="option" type="radio"/>
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
        <input class="option" type="radio"/>
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
