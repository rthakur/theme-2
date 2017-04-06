<?php include('includes/header.php') ?>
<div class="row rating-review-heading ">
  <h2 class="contact-label">Ratings & Reviews</h2>
</div>
<div class="rating-review-container">
  <div class="container">
    <div class="row">
      <div class="col-md-4">

      </div>
      <div class="col-md-8">
        <div class="rating">
          <h3>Rate this product</h3>
          <div class="stars starrr" data-rating="0"></div>
        </div>
        <h3>Review this product</h3>
        <form class="form-horizontal">
          <div class="row">
              <div class="col-md-12">
                  <input type="email" name="title" class="form-control contact-us review-us" placeholder="Review title" required>
              </div>
              <div class="col-md-12">
                <textarea name="description" class="form-control contact-us review-us" placeholder="description" style="min-height: 200px;"></textarea>
              </div>
              <div class="col-md-12">
                      <input type="text" name="name" class="form-control contact-us review-us" placeholder="Name" required>
              </div>
              <div class="col-md-12">
                <button class="btn btn-warning pull-right">Submit</button>
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
