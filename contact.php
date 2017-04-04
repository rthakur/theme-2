<?php include('includes/header.php') ?>
<div class="row contact-heading"><h2 class="contact-label">Contact us </h2></div>
<div class="contact-container">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
          <!-- <div class="contact-us"> -->
        <h3 class="contact-label">Get In Touch with Wheels</h3>
        <p class="contact-data">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        <form class="form-horizontal">
          <div class="row">
              <div class="col-md-6">
                      <input type="text" name="firstname" class="form-control contact-us" placeholder="First Name *" required>
              </div>
              <div class="col-md-6">
                      <input type="text" name="lastname" class="form-control contact-us" placeholder="Last Name *" required>
              </div>
              <div class="col-md-6">
                      <input type="email" name="email" class="form-control contact-us" placeholder="Email*" required>
              </div>
              <div class="col-md-12">
                <textarea name="message" class="form-control contact-us" placeholder="Message" style="min-height: 200px;"></textarea>
              </div>
              <div class="col-md-12">
                <button class="btn contact-btn">Send Contact Request</button>
              </div>
          </div>
        </form>
      <!-- </div> -->
      </div>
      <div class="col-md-4">
        <div class="contact-right">
          <h3 class="contact-label">Dealer Inquiries</h3>
          <p class="contact-data">Please contact 9-999-999-9999 for all dealer inquiries.</p>
          <h3 class="contact-label">Wheels</h3>
          <p class="contact-data">Please contact Wheels at +99 999-9999-9999.</p>
        </div>
      </div>
    </div>
  </div><!-- /.container -->
  <div class="footer-image"><img src="image/footer-img.jpg"></div>
</div>
<?php include('includes/footer.php') ?>
