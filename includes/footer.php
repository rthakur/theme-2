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

// Rating Script
(function(e){var t,o={className:"autosizejs",append:"",callback:!1,resizeDelay:10},i='<textarea tabindex="-1" style="position:absolute; top:-999px; left:0; right:auto; bottom:auto; border:0; padding: 0; -moz-box-sizing:content-box; -webkit-box-sizing:content-box; box-sizing:content-box; word-wrap:break-word; height:0 !important; min-height:0 !important; overflow:hidden; transition:none; -webkit-transition:none; -moz-transition:none;"/>',n=["fontFamily","fontSize","fontWeight","fontStyle","letterSpacing","textTransform","wordSpacing","textIndent"],s=e(i).data("autosize",!0)[0];s.style.lineHeight="99px","99px"===e(s).css("lineHeight")&&n.push("lineHeight"),s.style.lineHeight="",e.fn.autosize=function(i){return this.length?(i=e.extend({},o,i||{}),s.parentNode!==document.body&&e(document.body).append(s),this.each(function(){function o(){var t,o;"getComputedStyle"in window?(t=window.getComputedStyle(u,null),o=u.getBoundingClientRect().width,e.each(["paddingLeft","paddingRight","borderLeftWidth","borderRightWidth"],function(e,i){o-=parseInt(t[i],10)}),s.style.width=o+"px"):s.style.width=Math.max(p.width(),0)+"px"}function a(){var a={};if(t=u,s.className=i.className,d=parseInt(p.css("maxHeight"),10),e.each(n,function(e,t){a[t]=p.css(t)}),e(s).css(a),o(),window.chrome){var r=u.style.width;u.style.width="0px",u.offsetWidth,u.style.width=r}}function r(){var e,n;t!==u?a():o(),s.value=u.value+i.append,s.style.overflowY=u.style.overflowY,n=parseInt(u.style.height,10),s.scrollTop=0,s.scrollTop=9e4,e=s.scrollTop,d&&e>d?(u.style.overflowY="scroll",e=d):(u.style.overflowY="hidden",c>e&&(e=c)),e+=w,n!==e&&(u.style.height=e+"px",f&&i.callback.call(u,u))}function l(){clearTimeout(h),h=setTimeout(function(){var e=p.width();e!==g&&(g=e,r())},parseInt(i.resizeDelay,10))}var d,c,h,u=this,p=e(u),w=0,f=e.isFunction(i.callback),z={height:u.style.height,overflow:u.style.overflow,overflowY:u.style.overflowY,wordWrap:u.style.wordWrap,resize:u.style.resize},g=p.width();p.data("autosize")||(p.data("autosize",!0),("border-box"===p.css("box-sizing")||"border-box"===p.css("-moz-box-sizing")||"border-box"===p.css("-webkit-box-sizing"))&&(w=p.outerHeight()-p.height()),c=Math.max(parseInt(p.css("minHeight"),10)-w||0,p.height()),p.css({overflow:"hidden",overflowY:"hidden",wordWrap:"break-word",resize:"none"===p.css("resize")||"vertical"===p.css("resize")?"none":"horizontal"}),"onpropertychange"in u?"oninput"in u?p.on("input.autosize keyup.autosize",r):p.on("propertychange.autosize",function(){"value"===event.propertyName&&r()}):p.on("input.autosize",r),i.resizeDelay!==!1&&e(window).on("resize.autosize",l),p.on("autosize.resize",r),p.on("autosize.resizeIncludeStyle",function(){t=null,r()}),p.on("autosize.destroy",function(){t=null,clearTimeout(h),e(window).off("resize",l),p.off("autosize").off(".autosize").css(z).removeData("autosize")}),r())})):this}})(window.jQuery||window.$);

var __slice=[].slice;(function(e,t){var n;n=function(){function t(t,n){var r,i,s,o=this;this.options=e.extend({},this.defaults,n);this.$el=t;s=this.defaults;for(r in s){i=s[r];if(this.$el.data(r)!=null){this.options[r]=this.$el.data(r)}}this.createStars();this.syncRating();this.$el.on("mouseover.starrr","span",function(e){return o.syncRating(o.$el.find("span").index(e.currentTarget)+1)});this.$el.on("mouseout.starrr",function(){return o.syncRating()});this.$el.on("click.starrr","span",function(e){return o.setRating(o.$el.find("span").index(e.currentTarget)+1)});this.$el.on("starrr:change",this.options.change)}t.prototype.defaults={rating:void 0,numStars:5,change:function(e,t){}};t.prototype.createStars=function(){var e,t,n;n=[];for(e=1,t=this.options.numStars;1<=t?e<=t:e>=t;1<=t?e++:e--){n.push(this.$el.append("<span class='fa .fa-star-o'></span>"))}return n};t.prototype.setRating=function(e){if(this.options.rating===e){e=void 0}this.options.rating=e;this.syncRating();return this.$el.trigger("starrr:change",e)};t.prototype.syncRating=function(e){var t,n,r,i;e||(e=this.options.rating);if(e){for(t=n=0,i=e-1;0<=i?n<=i:n>=i;t=0<=i?++n:--n){this.$el.find("span").eq(t).removeClass("fa-star-o").addClass("fa-star")}}if(e&&e<5){for(t=r=e;e<=4?r<=4:r>=4;t=e<=4?++r:--r){this.$el.find("span").eq(t).removeClass("fa-star").addClass("fa-star-o")}}if(!e){return this.$el.find("span").removeClass("fa-star").addClass("fa-star-o")}};return t}();return e.fn.extend({starrr:function(){var t,r;r=arguments[0],t=2<=arguments.length?__slice.call(arguments,1):[];return this.each(function(){var i;i=e(this).data("star-rating");if(!i){e(this).data("star-rating",i=new n(e(this),r))}if(typeof r==="string"){return i[r].apply(i,t)}})}})})(window.jQuery,window);$(function(){return $(".starrr").starrr()})

$(function(){

  $('#new-review').autosize({append: "\n"});

  var reviewBox = $('#post-review-box');
  var newReview = $('#new-review');
  var openReviewBtn = $('#open-review-box');
  var closeReviewBtn = $('#close-review-box');
  var ratingsField = $('#ratings-hidden');

  openReviewBtn.click(function(e)
  {
    reviewBox.slideDown(400, function()
      {
        $('#new-review').trigger('autosize.resize');
        newReview.focus();
      });
    openReviewBtn.fadeOut(100);
    closeReviewBtn.show();
  });

  closeReviewBtn.click(function(e)
  {
    e.preventDefault();
    reviewBox.slideUp(300, function()
      {
        newReview.focus();
        openReviewBtn.fadeIn(200);
      });
    closeReviewBtn.hide();

  });

  $('.starrr').on('starrr:change', function(e, value){
    ratingsField.val(value);
  });
});
</script>

</body>
</html>
