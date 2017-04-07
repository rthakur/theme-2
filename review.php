<?php include('includes/header.php') ?>
<div class="row rating-review-heading ">
  <h2 class="contact-label">Ratings & Reviews</h2>
</div>
<div class="rating-review-container">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="review-rating-content">
          <h4 class="review-heading">What makes a good review</h4>
          <div class="review-contents">
            <div class="content border-bottom">
              <label>Lorem Ipsum is simply dummy text ?</label>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
            </div>
            <div class="content border-bottom">
              <label>Lorem Ipsum is simply dummy text ?</label>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
            </div>
            <div class="content border-bottom">
              <label>Lorem Ipsum is simply dummy text ?</label>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
            </div>
            <div class="content">
              <label>Lorem Ipsum is simply dummy text ?</label>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-8 review-rating-content">
        <div class="rating">
          <div class="review-product pull-right">
            <div class="product-title pull-right">
              <a href="/newUI/detail_page.php">
                <img src="image/cart-1.jpg" class="product-image pull-right">
              </a>
              <a href="/newUI/detail_page.php" style="color:#5f5f5f;"><strong>Reverse Parking Sensors </strong></a><br>
              <span class="text-muted pull-right reviewed-product-count">(123)</span>
              <button class="rating-count pull-right">4.2<i class="fa fa-star" aria-hidden="true"></i></button>
            </div>
          </div>
          <div class="review-product">
            <h4 class="rating-heading">Rate this product</h4>
            <div class="stars starrr" id="stars" data-rating="3"></div>
          </div>
        </div>
        <h4 class="rating-heading">Review this product</h4>
        <form class="form-horizontal">
          <div class="row">
              <div class="col-md-12">
                <div class="review-us">
                  <label>Title</label>
                  <input type="text" name="title" class="form-control contact-us" placeholder="Review title">
                </div>
              </div>
              <div class="col-md-12">
                <div class="review-us">
                  <label>Description</label>
                <textarea name="description" class="form-control contact-us review-description" placeholder="description"required></textarea>
                </div>
              </div>
              <div class="col-md-12">
                <div class="review-us">
                  <label>Name</label>
                  <input type="text" name="name" class="form-control contact-us" placeholder="Name" required>
                </div>
              </div>
              <div class="col-md-12">
                <button class="btn review-us-button pull-right" >SUBMIT</button>
              </div>
          </div>
        </form>
      <!-- </div> -->
      </div>
      <div class="col-md-4">

      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php') ?>
