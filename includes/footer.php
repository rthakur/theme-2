<!-- FOOTER -->
<div class="footer clearfix">
  <div class="container">
    <div class="row">
      <div class="col-sm-2 col-xs-12">
        <div class="footerLink">
          <h5>Accessories</h5>
          <ul class="list-unstyled">
            <ul class="list-unstyled">
             <?php foreach($accessories as $accessory) {?>
               <li><a href="#"><?php echo $accessory['name'] ?></a></li>
              <?php } ?>
            </ul>
          </ul>
        </div>
      </div>
      <div class="col-sm-2 col-xs-12">
        <div class="footerLink">
          <h5>BRANDS</h5>
          <ul class="list-unstyled">
               <?php foreach($brands as $brand) {?>
            <li><a href="#"><?php echo $brand['name'] ?></a></li>
            <?php } ?>
          </ul>
        </div>
      </div>
      <div class="col-sm-2 col-xs-12">
        <div class="footerLink">
          <h5>Accessories</h5>
          <ul class="list-unstyled">
            <?php foreach($accessories as $accessory) {?>
         <li><a href="#"><?php echo $accessory['name'] ?></a></li>
         <?php } ?>
          </ul>
        </div>
      </div>
      <div class="col-sm-2 col-xs-12">
        <div class="footerLink">
          <h5>Get in Touch</h5>
          <ul class="list-unstyled">
            <li><a href="/newUI/contact.php"><b>Contact Us</b></a></li>
            <li><a href="/newUI/about_us.php"><b>About Us</b></a></li>
            <!-- <li><a href="#">support@wheels.com</a></li> -->
          </ul>
          <ul class="list-inline">
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
            <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
            <li><a href="#"><i class="fa fa-tumblr"></i></a></li>
          </ul>
        </div>
      </div>
      <div class="col-sm-4 col-xs-12">
        <div class="newsletter clearfix">
          <h4>Newsletter</h4>
          <h3>Sign up now</h3>
          <p>Enter your email address and get notified about new products. We hate spam!</p>
          <div class="input-group">
            <input type="text" class="form-control" placeholder="your email address" aria-describedby="basic-addon2">
            <a href="#" class="input-group-addon" id="basic-addon2">go <i class="fa fa-chevron-right"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- COPY RIGHT -->
<div class="copyRight clearfix">
  <div class="container">
    <div class="row">
      <div class="col-sm-7 col-xs-12">
        <p>Copyright &copy; <?php echo date("Y"); ?>, <a target="_blank" href="#">wheels.com</a>. All right reserved.
        </p>
      </div>
      <div class="col-sm-5 col-xs-12">
        <ul class="list-inline">
          <li><img src="image/card1.png"></li>
          <li><img src="image/card2.png"></li>
          <li><img src="image/card3.png"></li>
          <li><img src="image/card4.png"></li>
        </ul>
      </div>
    </div>
  </div>
</div>
</div>

<!-- LOGIN MODAL -->
<!-- <div class="modal fade login-modal" id="login" tabindex="-1" role="dialog">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      <h3 class="modal-title">log in</h3>
    </div>
    <div class="modal-body">
      <form action="" method="POST" role="form">
        <div class="form-group">
          <label for="">Enter Email</label>
          <input type="email" class="form-control" id="">
        </div>
        <div class="form-group">
          <label for="">Password</label>
          <input type="password" class="form-control" id="">
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox"> Remember Me
          </label>
        </div>
        <button type="submit" class="btn btn-primary btn-block">log in</button>
        <button type="button" class="btn btn-link btn-block">Forgot Password?</button>
      </form>
    </div>
  </div>
</div>
</div> -->

<!-- SIGN UP MODAL -->
<!-- <div class="modal fade" id="signup" tabindex="-1" role="dialog">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      <h3 class="modal-title">Create an account</h3>
    </div>
    <div class="modal-body">
      <form action="" method="POST" role="form">
        <div class="form-group">
          <label for="">Enter Email</label>
          <input type="email" class="form-control" id="">
        </div>
        <div class="form-group">
          <label for="">Password</label>
          <input type="password" class="form-control" id="">
        </div>
        <div class="form-group">
          <label for="">Confirm Password</label>
          <input type="password" class="form-control" id="">
        </div>
        <button type="submit" class="btn btn-primary btn-block">Sign up</button>
      </form>
    </div>
  </div>
</div>
</div> -->

<!-- PORDUCT QUICK VIEW MODAL -->
<!-- <div class="modal fade quick-view" tabindex="-1" role="dialog">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-body">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      <div class="media">
        <div class="media-left">
          <img class="media-object" src="img/products/quick-view/quick-view-01.jpg" alt="Image">
        </div>
        <div class="media-body">
          <h2>Old Skool Navy</h2>
          <h3>$149</h3>
          <p>Classic sneaker from Vans. Cotton canvas and suede upper. Textile lining with heel stabilizer and ankle support. Contrasting laces. Sits on a classic waffle rubber sole.</p>
          <span class="quick-drop">
            <select name="guiest_id3" id="guiest_id3" class="select-drop">
              <option value="0">Size</option>
              <option value="1">Size 1</option>
              <option value="2">Size 2</option>
              <option value="3">Size 3</option>
            </select>
          </span>
          <span class="quick-drop resizeWidth">
            <select name="guiest_id4" id="guiest_id4" class="select-drop">
              <option value="0">Qty</option>
              <option value="1">Qty 1</option>
              <option value="2">Qty 2</option>
              <option value="3">Qty 3</option>
            </select>
          </span>
          <div class="btn-area">
            <a href="#" class="btn btn-primary btn-block">Add to cart <i class="fa fa-angle-right" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div> -->

<script src="js/jquery.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.themepunch.tools.min.js"></script>
<script src="js/jquery.themepunch.revolution.min.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/jquery.selectbox-0.1.3.min.js"></script>
<script src="js/jquery.syotimer.js"></script>
<script src="js/optionswitcher.js"></script>
<script src="js/custom.js"></script>
<script src="js/common.js"></script>
<script src="js/easyzoom.js"></script>
<script>
  // Instantiate EasyZoom instances

  $('.thumbnails').on('click', 'a', function(e) {
    e.preventDefault();
  });
  var $easyzoom = $('.easyzoom').easyZoom();

  // Setup thumbnails example
  var api1 = $easyzoom.filter('.easyzoom--with-thumbnails').data('easyZoom');
  $('.thumbnails').on('mouseover', 'a', function(e) {
    var $this = $(this);
    $('.thumbnails li').removeClass('active');
    $this.parent('li').addClass('active');
    e.preventDefault();

    // Use EasyZoom's `swap` method
    api1.swap($this.data('standard'), $this.attr('href'));
  });

  // Setup toggles example
  var api2 = $easyzoom.filter('.easyzoom--with-toggle').data('easyZoom');

  $('.toggle').on('click', function() {
    var $this = $(this);

    if ($this.data("active") === true) {
      $this.text("Switch on").data("active", false);
      api2.teardown();
    } else {
      $this.text("Switch off").data("active", true);
      api2._init();
    }
  });

  $('.product-list').mouseover(function(){
    $(this).children('.wishlist-icon').show();
  });

  $('.product-list').mouseout(function(){
    $(this).children('.wishlist-icon').hide();
  });
  // $('.catalog-detail-button').hover(function () {
  //     $(this).addClass('hover');
  // }, function () {
  //     $('this').removeClass('hover');
  // });

  $('.get-model').click(function(){
    var name =$(this).data('company');
    var logo =$(this).data('logo');
    $('.active-logo').attr('src', logo);
    $('.models').removeClass('active');
    $('#'+name).addClass('active');
  });
  $('.delivery_address').change(function(){
    if($(this).val() == 'new_address')
      $('#new-address').show();
    else
      $('#new-address').hide();
  });
  $('.payment-option').change(function(){
    if($(this).val() == 'direct_debit')
      $('.card-section').slideDown().css('display', 'inline-block');
    else
      $('.card-section').slideUp();
  });

  // Starrr plugin (https://github.com/dobtco/starrr)

  // $('body').on('mouseover', '.fa-star-o' , function(){
  //   $('.fa-star').css({'color': '#47BAC1'});
  // });
  // $('body').on('mouseout', '.fa-star-o' , function(){
  //   $('.fa-star').css({'color': '#FFE11B;'});
  // });
  var __slice = [].slice;

  (function($, window) {
    var Starrr;

    Starrr = (function() {
      Starrr.prototype.defaults = {
        rating: void 0,
        numStars: 5,
        change: function(e, value) {}
      };

      function Starrr($el, options) {
        var i, _, _ref,
          _this = this;

        this.options = $.extend({}, this.defaults, options);
        this.$el = $el;
        _ref = this.defaults;
        for (i in _ref) {
          _ = _ref[i];
          if (this.$el.data(i) != null) {
            this.options[i] = this.$el.data(i);
          }
        }
        this.createStars();
        this.syncRating();
        this.$el.on('mouseover.starrr', 'span', function(e) {
          return _this.syncRating(_this.$el.find('span').index(e.currentTarget) + 1);
        });
        this.$el.on('mouseout.starrr', function() {
          return _this.syncRating();
        });
        this.$el.on('click.starrr', 'span', function(e) {
          return _this.setRating(_this.$el.find('span').index(e.currentTarget) + 1);
        });
        this.$el.on('starrr:change', this.options.change);
      }

      Starrr.prototype.createStars = function() {
        var _i, _ref, _results;

        _results = [];
        for (_i = 1, _ref = this.options.numStars; 1 <= _ref ? _i <= _ref : _i >= _ref; 1 <= _ref ? _i++ : _i--) {
          _results.push(this.$el.append("<span class='fa .fa-star-o'></span>"));
        }
        return _results;
      };

      Starrr.prototype.setRating = function(rating) {
        if (this.options.rating === rating) {
          rating = void 0;
        }
        this.options.rating = rating;
        this.syncRating();
        return this.$el.trigger('starrr:change', rating);
      };

      Starrr.prototype.syncRating = function(rating) {
        var i, _i, _j, _ref;

        rating || (rating = this.options.rating);
        if (rating) {
          for (i = _i = 0, _ref = rating - 1; 0 <= _ref ? _i <= _ref : _i >= _ref; i = 0 <= _ref ? ++_i : --_i) {
            this.$el.find('span').eq(i).removeClass('fa-star-o').addClass('fa-star');
          }
        }
        if (rating && rating < 5) {
          for (i = _j = rating; rating <= 4 ? _j <= 4 : _j >= 4; i = rating <= 4 ? ++_j : --_j) {
            this.$el.find('span').eq(i).removeClass('fa-star').addClass('fa-star-o');
          }
        }
        if (!rating) {
          return this.$el.find('span').removeClass('fa-star').addClass('fa-star-o');
        }
      };

      return Starrr;

    })();
    return $.fn.extend({
      starrr: function() {
        var args, option;

        option = arguments[0], args = 2 <= arguments.length ? __slice.call(arguments, 1) : [];
        return this.each(function() {
          var data;

          data = $(this).data('star-rating');
          if (!data) {
            $(this).data('star-rating', (data = new Starrr($(this), option)));
          }
          if (typeof option === 'string') {
            return data[option].apply(data, args);
          }
        });
      }
    });
  })(window.jQuery, window);

  $(function() {
    return $(".starrr").starrr();
  });

  $(".review-us .contact-us").focus(function() {
      $(this).siblings().addClass("active");
  });
  $(".review-us .contact-us").blur(function() {
      $(this).siblings().removeClass("active");
  });
</script>

</body>
</html>
