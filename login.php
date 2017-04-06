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
            <input type="text" class="form-control" name="email" placeholder="Email" required/>
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="cols-sm-10">
          <div class="input-group login">
            <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
            <input type="password" class="form-control" name="password" placeholder="Password" required/>
          </div>
        </div>
      </div>
      <div class="form-group ">
        <button class="btn btn-info btn-lg btn-block address-btn login-button">Login</button>
      </div>
      <p class="text-center text-muted"><small>Do not have an account?</small></p>
      <div class="form-group ">
        <a href="/newUI/register.php" class="btn btn-default btn-lg btn-block address-btn login-button">Create an account</a>
      </div>
      <div class="or-divider text-muted">
        <span>or</span>
      </div>
      <div class="form-group ">
        <a href="#" class="btn btn-danger btn-lg btn-block address-btn login-button"><i class="fa fa-google-plus"> Google Plus</i></a>
      </div>
      <div class="form-group ">
        <a href="#" class="btn btn-primary btn-lg btn-block address-btn login-button"><i class="fa fa-facebook"></i> Facebook</a>
      </div>
    </form>
  </div>
  </div>
</div>
<?php include('includes/footer.php') ?>
