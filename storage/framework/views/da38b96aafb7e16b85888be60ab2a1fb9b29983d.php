    <div align="center" class="logo-content hidden-lg hidden-md hidden-sm">
         <a href="index.html"><img src="<?php echo url('public/kkshop/wp-content/themes/kkfashion/asset/img/logo-content.png'); ?>" alt="">
         </a>
      </div>
      <!-- banner -->
      <div class="clearfix"></div>
      <div class="banner">
         <div class="container">
            <div class="row">
               <div class="col-md-12 slide-banner">
                  <div id="slideshow-top" class="owl-carousel owl-theme">
                    <?php $__currentLoopData = $slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <div class="item">
                        <a href="<?php echo $sd['url']; ?>">
                        <img src="<?php echo asset('resources/upload/slider/'.$sd['hinh']); ?>" />
                        </a>
                     </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </div>
               </div>
               <div class="clearfix"></div>
            </div>
         </div>
      </div>
      <script type="text/javascript" src="http://static.criteo.net/js/ld/ld.js" async="true"></script>
      <script type="text/javascript" charset="utf-8">
         jQuery(document).ready(function() {
         
             jQuery("#slideshow-top").owlCarousel({
                 autoPlay: 5000,
                 navigation: false,
                 slideSpeed: 300,
                 paginationSpeed: 400,
                 singleItem: true,
                 pagination: true
             });
         
         });
      </script>