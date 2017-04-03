<?php include('includes/header.php') ?>
    <!--FILTERS-->
      <div class="row filter-section">
         <div class="col-md-4">
                 <div class="filter-heading">VEHICLE SEARCH</div>
                   <div class="search_container " align="center" style="padding:10px">
                      <form role="search">
                       <div class="input-group add-on" style="width:100%">
                         <div class="searchBox">
                           <span class="input-group">
                             <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term" type="text">
                             <button type="submit" class="input-group-addon"><i class="fa fa-search"></i></button>
                           </span>
                         </div>
                       </div>
                       </form>
                     </div>
                   <div class="filters">
                     <ul class="nav nav-tabs">
                       <li class="active">	<a href="#tab1" data-toggle="tab" aria-expanded="false" >	<img src="image/audi_car_logo.png"></a></li>
                       <li class="">	<a href="#tab2" data-toggle="tab" aria-expanded="false" >	<img src="image/renault.jpg"></a></li>
                       <li class=""><a href="#tab3" data-toggle="tab" aria-expanded="true" ><img src="image/wv.jpg"></a></li>
                       <li class="">	<a href="#tab4" data-toggle="tab" aria-expanded="false" >	<img src="image/audi_car_logo.png" ></a></li>
                       <li class=""><a href="#tab5" data-toggle="tab" aria-expanded="true" ><img src="image/renault.jpg"></a></li>
                     </ul>
                     <div class="tab-content search-box">
                       <div class="tab-pane" id="tab1">
                         <ul>
                           <?php foreach($brands as $brand) {?>
                           <li class="tab-list"><a href="#tab1" data-toggle="tab" aria-expanded="false">	<img src="<?php echo $brand['logo']?>"></a><span style="margin-left:10px"><?php echo $brand['name']?></span> </li>
                           <?php }?>
                         </ul>
                       </div>
                       <div class="tab-pane active" id="tab2">
                     <ul>
                       <?php foreach($brands as $brand) {?>
                       <li class="tab-list"><a href="#tab1" data-toggle="tab" aria-expanded="false">	<img src="<?php echo $brand['logo']?>"></a><span style="margin-left:10px"><?php echo $brand['name']?></span> </li>
                       <?php }?>
                     </ul>
                   </div>
                     </div>
                     <div class="search-btn"><a href="/wheelstemp" class="btn btn-default">SEARCH WITHOUT VEHICLE</a></div>
                 </div>
         </div>
         <div class="col-md-8">
           <img src="http://128.199.225.195/images/Wheel-Car-Audi-Automotive-Alloy-Vehicle-1879628.jpg" style="width:100%">
         </div>
       </div>
    <!--FILTERS-->
    <!-- CONTENT SECTION -->
    <section class="content clearfix">
      <div class="container">

        <!-- FEATURE COLLECTION SECTION -->
        <div class="row featuredCollection version2 version3">
          <div class="col-sm-6 col-xs-12">
            <div class="slide">
              <div class="productImage productImage1">
              </div>
              <div class="productCaption clearfix text-right">
                <h3><a href="#">Audi wheel</a></h3>
                <p>Lorem ipsum dolor sit ameit</p>
                <a href="/wheelstemp/detail_page.php" class="btn btn-border">Shop Now</a>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-xs-12">
            <div class="slide">
              <div class="productImage productImage2">
              </div>
              <div class="productCaption clearfix text-right">
                <h3><a href="#">Car's wheel</a></h3>
                <p>Lorem ipsum dolor sit ameit</p>
                <a href="/wheelstemp/detail_page.php" class="btn btn-border">Shop Now</a>
              </div>
            </div>
          </div>
        </div>

        <!-- CATEGORY SECTION -->
        <div class="categorySection">
          <div class="row">
            <div class="col-md-6 col-xs-12">
              <div class="category-content">
                <div class="category-top">
                  <div class="category-menu text-center">
                    <h2 class="category-title">Car's Alloy wheels</h2>
                    <ul>
                      <?php foreach($pages as $page) {?>
                        <li><a href="#"><?php echo $page['name'] ?></a></li>
                       <?php } ?>
                    </ul>
                  </div>
                  <div class="category-Slider">
                    <div class="owl-carousel categorySlider">
                      <div class="item">
                        <img src="image/image5.jpg" alt="Image">
                      </div>
                      <?php foreach($sliderImages as $sliderImage) {?>
                        <div class="item">
                          <img src="<?php echo $sliderImage['image'] ?>" alt="Image">
                        </div>
                       <?php } ?>


                    </div>
                  </div>
                </div>

                <div class="category-bottom">
                  <div class="imageBox">
                    <div class="productImage clearfix">
                      <a href="#">
                        <img src="image/carlogo.jpg" alt="Image">
                      </a>
                      <div class="productMasking">
                        <ul class="list-inline btn-group" role="group">
                          <li><a data-toggle="modal" href=".login-modal" class="btn btn-default"><i class="fa fa-heart"></i></a></li>
                          <li><a href="#" class="btn btn-default"><i class="fa fa-shopping-cart"></i></a></li>
                          <li><a data-toggle="modal" href=".quick-view" class="btn btn-default"><i class="fa fa-search"></i></a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="productCaption clearfix">
                      <h5><a href="#">Alloy wheel</a></h5>
                      <h3>$199</h3>
                    </div>
                  </div>
                  <div class="imageBox">
                    <div class="productImage clearfix">
                      <a href="#">
                        <img src="image/carlogo.jpg" alt="Image">
                      </a>
                      <span class="sticker">50% off</span>
                      <div class="productMasking">
                        <ul class="list-inline btn-group" role="group">
                          <li><a data-toggle="modal" href=".login-modal" class="btn btn-default"><i class="fa fa-heart"></i></a></li>
                          <li><a href="#" class="btn btn-default"><i class="fa fa-shopping-cart"></i></a></li>
                          <li><a data-toggle="modal" href=".quick-view" class="btn btn-default"><i class="fa fa-search"></i></a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="productCaption clearfix">
                      <h5><a href="#">Alloy wheel</a></h5>
                      <h3>$199</h3>
                    </div>
                  </div>
                  <div class="imageBox">
                    <div class="productImage clearfix">
                      <a href="#">
                        <img src="image/carlogo.jpg" alt="Image">
                      </a>
                      <div class="productMasking">
                        <ul class="list-inline btn-group" role="group">
                          <li><a data-toggle="modal" href=".login-modal" class="btn btn-default"><i class="fa fa-heart"></i></a></li>
                          <li><a href="#" class="btn btn-default"><i class="fa fa-shopping-cart"></i></a></li>
                          <li><a data-toggle="modal" href=".quick-view" class="btn btn-default"><i class="fa fa-search"></i></a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="productCaption clearfix">
                      <h5><a href="#">Alloy wheel</a></h5>
                      <h3>$199</h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-xs-12">
              <div class="category-content">
                <div class="category-top">
                  <div class="category-menu text-center">
                    <h2 class="category-title">Audi Alloy wheels</h2>
                    <ul>
                      <?php foreach($brands as $brand) {?>
                        <li><a href="#"><?php echo $brand['name'] ?></a></li>
                       <?php } ?>
                    </ul>
                  </div>
                  <div class="category-Slider">
                    <div class="owl-carousel categorySlider">
                      <?php foreach($sliderImages as $sliderImage) {?>
                        <div class="item">
                          <img src="<?php echo $sliderImage['image'] ?>" alt="Image">
                        </div>
                       <?php } ?>
                    </div>
                  </div>
                </div>

                <div class="category-bottom">
                  <div class="imageBox">
                    <div class="productImage clearfix">
                      <a href="#">
                        <img src="image/carlogo.jpg" alt="Image">
                      </a>
                      <span class="sticker">50% off</span>
                      <div class="productMasking">
                        <ul class="list-inline btn-group" role="group">
                          <li><a data-toggle="modal" href=".login-modal" class="btn btn-default"><i class="fa fa-heart"></i></a></li>
                          <li><a href="#" class="btn btn-default"><i class="fa fa-shopping-cart"></i></a></li>
                          <li><a data-toggle="modal" href=".quick-view" class="btn btn-default"><i class="fa fa-search"></i></a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="productCaption clearfix">
                      <h5><a href="#">Alloy wheel</a></h5>
                      <h3>$199</h3>
                    </div>
                  </div>
                  <div class="imageBox">
                    <div class="productImage clearfix">
                      <a href="#">
                        <img src="image/carlogo.jpg" alt="Image">
                      </a>
                      <div class="productMasking">
                        <ul class="list-inline btn-group" role="group">
                          <li><a data-toggle="modal" href=".login-modal" class="btn btn-default"><i class="fa fa-heart"></i></a></li>
                          <li><a href="#" class="btn btn-default"><i class="fa fa-shopping-cart"></i></a></li>
                          <li><a data-toggle="modal" href=".quick-view" class="btn btn-default"><i class="fa fa-search"></i></a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="productCaption clearfix">
                      <h5><a href="#">Alloy wheel</a></h5>
                      <h3>$199</h3>
                    </div>
                  </div>
                  <div class="imageBox">
                    <div class="productImage clearfix">
                      <a href="#">
                        <img src="image/carlogo.jpg" alt="Image">
                      </a>
                      <div class="productMasking">
                        <ul class="list-inline btn-group" role="group">
                          <li><a data-toggle="modal" href=".login-modal" class="btn btn-default"><i class="fa fa-heart"></i></a></li>
                          <li><a href="#" class="btn btn-default"><i class="fa fa-shopping-cart"></i></a></li>
                          <li><a data-toggle="modal" href=".quick-view" class="btn btn-default"><i class="fa fa-search"></i></a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="productCaption clearfix">
                      <h5><a href="#">Alloy wheel</a></h5>
                      <h3>$199</h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-xs-12">
              <div class="category-content">
                <div class="category-top">
                  <div class="category-menu text-center">
                    <h2 class="category-title">car's accessory</h2>
                    <ul>
                      <?php foreach($accessories as $accessory) {?>
                        <li><a href="#"><?php echo $accessory['name'] ?></a></li>
                       <?php } ?>
                    </ul>
                  </div>
                  <div class="category-Slider">
                    <div class="owl-carousel categorySlider">
                      <?php foreach($sliderImages as $sliderImage) {?>
                        <div class="item">
                          <img src="<?php echo $sliderImage['image'] ?>" alt="Image">
                        </div>
                       <?php } ?>
                    </div>
                  </div>
                </div>

                <div class="category-bottom">
                  <div class="imageBox">
                    <div class="productImage clearfix">
                      <a href="#">
                        <img src="image/audi.jpg" alt="Image">
                      </a>
                      <span class="sticker">50% off</span>
                      <div class="productMasking">
                        <ul class="list-inline btn-group" role="group">
                          <li><a data-toggle="modal" href=".login-modal" class="btn btn-default"><i class="fa fa-heart"></i></a></li>
                          <li><a href="#" class="btn btn-default"><i class="fa fa-shopping-cart"></i></a></li>
                          <li><a data-toggle="modal" href=".quick-view" class="btn btn-default"><i class="fa fa-search"></i></a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="productCaption clearfix">
                      <h5><a href="#">Alloy wheel</a></h5>
                      <h3>$199</h3>
                    </div>
                  </div>
                  <div class="imageBox">
                    <div class="productImage clearfix">
                      <a href="#">
                        <img src="image/audi.jpg" alt="Image">
                      </a>
                      <div class="productMasking">
                        <ul class="list-inline btn-group" role="group">
                          <li><a data-toggle="modal" href=".login-modal" class="btn btn-default"><i class="fa fa-heart"></i></a></li>
                          <li><a href="#" class="btn btn-default"><i class="fa fa-shopping-cart"></i></a></li>
                          <li><a data-toggle="modal" href=".quick-view" class="btn btn-default"><i class="fa fa-search"></i></a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="productCaption clearfix">
                      <h5><a href="#">Alloy wheel</a></h5>
                      <h3>$199</h3>
                    </div>
                  </div>
                  <div class="imageBox">
                    <div class="productImage clearfix">
                      <a href="#">
                        <img src="image/audi.jpg" alt="Image">
                      </a>
                      <div class="productMasking">
                        <ul class="list-inline btn-group" role="group">
                          <li><a data-toggle="modal" href=".login-modal" class="btn btn-default"><i class="fa fa-heart"></i></a></li>
                          <li><a href="#" class="btn btn-default"><i class="fa fa-shopping-cart"></i></a></li>
                          <li><a data-toggle="modal" href=".quick-view" class="btn btn-default"><i class="fa fa-search"></i></a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="productCaption clearfix">
                      <h5><a href="#">Alloy wheel</a></h5>
                      <h3>$199</h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-xs-12">
              <div class="category-content">
                <div class="category-top">
                  <div class="category-menu text-center">
                    <h2 class="category-title">car's accessory</h2>
                    <ul>
                      <?php foreach($accessories as $accessory) {?>
                        <li><a href="#"><?php echo $accessory['name'] ?></a></li>
                       <?php } ?>
                    </ul>
                  </div>
                  <div class="category-Slider">
                    <div class="owl-carousel categorySlider">
                      <?php foreach($sliderImages as $sliderImage) {?>
                        <div class="item">
                          <img src="<?php echo $sliderImage['image'] ?>" alt="Image">
                        </div>
                       <?php } ?>
                    </div>
                  </div>
                </div>

                <div class="category-bottom">
                  <div class="imageBox">
                    <div class="productImage clearfix">
                      <a href="#">
                        <img src="image/audi.jpg" alt="Image">
                      </a>
                      <span class="sticker">50% off</span>
                      <div class="productMasking">
                        <ul class="list-inline btn-group" role="group">
                          <li><a data-toggle="modal" href=".login-modal" class="btn btn-default"><i class="fa fa-heart"></i></a></li>
                          <li><a href="#" class="btn btn-default"><i class="fa fa-shopping-cart"></i></a></li>
                          <li><a data-toggle="modal" href=".quick-view" class="btn btn-default"><i class="fa fa-search"></i></a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="productCaption clearfix">
                      <h5><a href="#">Alloy wheel</a></h5>
                      <h3>$199</h3>
                    </div>
                  </div>
                  <div class="imageBox">
                    <div class="productImage clearfix">
                      <a href="#">
                        <img src="image/audi.jpg" alt="Image">
                      </a>
                      <div class="productMasking">
                        <ul class="list-inline btn-group" role="group">
                          <li><a data-toggle="modal" href=".login-modal" class="btn btn-default"><i class="fa fa-heart"></i></a></li>
                          <li><a href="#" class="btn btn-default"><i class="fa fa-shopping-cart"></i></a></li>
                          <li><a data-toggle="modal" href=".quick-view" class="btn btn-default"><i class="fa fa-search"></i></a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="productCaption clearfix">
                      <h5><a href="#">Alloy wheel</a></h5>
                      <h3>$199</h3>
                    </div>
                  </div>
                  <div class="imageBox">
                    <div class="productImage clearfix">
                      <a href="#">
                        <img src="image/audi.jpg" alt="Image">
                      </a>
                      <div class="productMasking">
                        <ul class="list-inline btn-group" role="group">
                          <li><a data-toggle="modal" href=".login-modal" class="btn btn-default"><i class="fa fa-heart"></i></a></li>
                          <li><a href="#" class="btn btn-default"><i class="fa fa-shopping-cart"></i></a></li>
                          <li><a data-toggle="modal" href=".quick-view" class="btn btn-default"><i class="fa fa-search"></i></a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="productCaption clearfix">
                      <h5><a href="#">Alloy wheel</a></h5>
                      <h3>$199</h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>
<?php include('includes/footer.php') ?>
