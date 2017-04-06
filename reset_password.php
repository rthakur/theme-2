<?php include('includes/header.php') ?>
<div class="container">
  <div class="row main">
      <div class="main-login main-center">
    <div class="text-center">
      <img src="image/logo.png" alt="logo+">
    </div>
    <form class="form-horizontal" method="post">
      <div class="form-group">
        <div class="cols-sm-10">
          <div class="input-group login">
            <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
            <input type="email" class="form-control" name="email" placeholder="Email" required/>
          </div>
        </div>
      </div>
      <div class="form-group ">
        <button class="btn btn-info btn-lg btn-block address-btn login-button">Send Password Reset Link</button>
      </div>
    </form>
  </div>
  </div>
</div>
<?php include('includes/footer.php') ?>
