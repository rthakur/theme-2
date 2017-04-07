<?php include('includes/header.php') ?>
<div class="container order-details">
    <div class="col-xs-12">
        <div class="row">
          <div class="shoping-content-heading">
          <h3>Myorder</h3>
          <!-- <hr> -->
        </div>
          <div class="panel panel-default">
            <div class="panel-heading">
              <a href="/newUI/order_detail.php" class="btn btn-info order-id-btn"><strong> OD21344576785356 </strong></a>
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
                  </div>
                </div>
                <div class="col-md-4">
                  <p class="price text-center">RS 2132</p>
                  <p class="text-center">
                    <span class="text-green">OFFERS :</span>
                    <span class="text-muted">4</span>
                  </p>
                </div>
                <div class="col-md-4">
                  <p class="price">STATUS</p>
                  <p class="text-muted">Lorem Ipsum is simply dummy text.</p>
                </div>
              </div>
              <hr>
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
                  </div>
                </div>
                <div class="col-md-4">
                <p class="price text-center">RS 2132</p>
                <p class="text-center">
                  <span class="text-green">OFFERS :</span>
                  <span class="text-muted">2</span>
                </p>
                </div>
                <div class="col-md-4">
                  <p class="price">STATUS</p>
                  <p class="text-muted">Lorem Ipsum is simply dummy text.</p>
                </div>
              </div>
              <div class="row my-order-total">
                <span class="price text-muted">Order On :</span>
                <span class="price"> <?php echo date("d F Y"); ?></span>
              <p class="pull-right"><span class="price text-muted">Order Total </span> <span class="price">Rs. 2943</span></p>
              </div>
            </div>
          </div>
        </div>
    </div>
</div>
<?php include('includes/footer.php') ?>
