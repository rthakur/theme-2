<?php include('includes/header.php') ?>
<div class="container">
  <div class="row main">
      <div class="main-login main-center">
    <div class="text-center">
      <img src="image/logo.png" alt="logo+">
      <p class="text-muted"><small>Create account to see it in action.</small></p>
    </div>
    <form class="form-horizontal" method="post">
      <div class="form-group">
        <div class="cols-sm-10">
          <div class="input-group login">
            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
            <input type="text" class="form-control" name="name"  placeholder="Name" required/>
          </div>
        </div>
      </div>
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
      <div class="form-group">
        <div class="cols-sm-10">
          <div class="input-group login">
            <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
            <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" required/>
          </div>
        </div>
      </div>
      <div class="form-group ">
        <button class="btn btn-success btn-lg btn-block address-btn login-button">Register</button>
      </div>
      <p class="text-center text-muted"><small>Already have an account?</small></p>
      <div class="form-group ">
        <a href="/newUI/login.php" class="btn btn-default btn-lg btn-block address-btn login-button">Login</a>
      </div>
    </form>
  </div>
  </div>
</div>
<?php include('includes/footer.php') ?>
