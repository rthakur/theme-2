<?php include('includes/header.php') ?>
<div class="container">
    <form class="well form-horizontal" style="margin-top: 20px;">
        <div class="contact-heading">Contact us</div>
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" >Name</label>
            <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-user"></i></span>
          <input name="name" placeholder="Name" class="form-control"  type="text">
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
            <div class="input-group" style="width: 100%;">
              	<textarea class="form-control" name="comment" placeholder="Message" ></textarea>
          </div>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label"></label>
          <div class="col-md-4">
            <button type="submit" class="btn btn-primary" >Send <span class="fa fa-send"></span></button>
          </div>
        </div>
    </form>
</div><!-- /.container -->
<?php include('includes/footer.php') ?>
