<?php include('includes/header.php') ?>
<div class="container">
    <form class="well form-horizontal" action=" " method="post"  id="contact_form">
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label">First Name</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-user"></i></span>
          <input  name="first_name" placeholder="First Name" class="form-control"  type="text">
            </div>
          </div>
        </div>
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" >Last Name</label>
            <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-user"></i></span>
          <input name="last_name" placeholder="Last Name" class="form-control"  type="text">
            </div>
          </div>
        </div>
        <!-- Text input-->
        <div class="form-group">
              <label class="col-md-4 control-label">E-Mail</label>
              <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                    <input name="email" placeholder="E-Mail Address" class="form-control"  type="text">
              </div>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label">Message</label>
            <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
                	<textarea class="form-control" name="comment" placeholder="Message" style="width: 350px;"></textarea>
          </div>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label"></label>
          <div class="col-md-4">
            <button type="submit" class="btn btn-success" >Send <span class="fa fa-send"></span></button>
          </div>
        </div>
    </form>
</div><!-- /.container -->
<?php include('includes/footer.php') ?>
