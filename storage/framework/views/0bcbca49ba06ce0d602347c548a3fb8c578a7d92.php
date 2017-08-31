      <header>
         <div class="container">
            <div class="row">
               <!-- menu mobile -->
               <div class="col-xs-12 hidden-md hidden-lg hidden-sm menu-mobile">
                  <ul>
                     <li><a class="icon-menu toggleMenu" href="index.html#menu"><i class="fa fa-bars"></i></a>
                     </li>
                     <li>
                        <a href="<?php echo url('/'); ?>"><img src="<?php echo url('public/kkshop/wp-content/themes/kkfashion/asset/img/login-icon.png'); ?>" alt="">
                        </a>
                     </li>
                     <li class="cart-icon">
                        <a href="<?php echo url('/gio-hang'); ?>"><img src="<?php echo url('public/kkshop/wp-content/themes/kkfashion/asset/img/cart-icon.png'); ?>" alt=""><span class="cart-number">
                          <?php if(Session::has('cart')): ?><?php echo Session('cart')->totalQty; ?>

                          <?php else: ?> 0
                          <?php endif; ?>
                        </span>
                        </a>
                     </li>
                     <li class="endli"><a id="search-mb" href="index.html#"><i class="fa fa-search"></i></a>
                     </li>
                  </ul>
               </div>
               <ul class="nav-top hidden-lg hidden-md hidden-sm">
                  <li>
                     <a href="<?php echo e(url('/')); ?>">Trang chủ</a>
                  </li>
                  <?php
                     $menu_level_1 = DB::table('cates')->where('parent_id',0)->get();
                   ?>
                   <?php $__currentLoopData = $menu_level_1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item_level_1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <li>
                     <a href="#"><?php echo $item_level_1->name; ?></a>
                     <ul>
                        <?php
                           $menu_level_2 = DB::table('cates')->where('parent_id',$item_level_1->id)->get();
                        ?>
                        <?php $__currentLoopData = $menu_level_2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item_level_2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><a href="<?php echo url('loai-san-pham',[$item_level_2->id,$item_level_2->alias]); ?>">+ <?php echo $item_level_2->name; ?></a>
                        </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     </ul>
                  </li>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  <li>
                     <a href="<?php echo e(url('/lien-he')); ?>">Liên hệ</a>
                  </li>
               </ul>
               <div class="form-search hidden hidden-lg hidden-md hidden-sm">
                  <form id="searchform" method="get" role="search" action="index.html">
                     <input type="text" placeholder="Nhập mã sản phẩm cần tìm..." class="sb-search-input" name="s" id="search">
                     <input class="sb-search-submit" type="submit" value="Tìm">
                  </form>
               </div>
               <!-- /menu mobile -->
               <div class="col-md-2 col-sm-3 logo hidden-xs">
                  <a href="<?php echo url('/'); ?>"><img src="<?php echo url('public/kkshop/wp-content/themes/kkfashion/asset/img/logo.png'); ?>" alt="">
                  </a>
                  <div class="clearfix"></div>
               </div>

               <!-- menu ipad -->
               <div class="col-sm-9 hidden-xs hidden-lg hidden-md">
                  <div class="login-cart-search">
                     <div class="search">
                        <form action="index.html" role="search" method="get" id="searchform">
                           <input name="s" class="search-input" type="text" placeholder="Nhập mã sản phẩm cần tìm..." />
                           <a href="javascript:void(0)" onclick="$('#searchform').submit()"><i class="fa fa-search"></i></a>
                        </form>
                     </div>
                     <div class="cart">
                        <a href="<?php echo url('/gio-hang'); ?>"><img src="<?php echo url('public/kkshop/wp-content/themes/kkfashion/asset/img/cart-icon.png'); ?>" alt=""><span class="cart-number">
                          <?php if(Session::has('cart')): ?><?php echo Session('cart')->totalQty; ?>

                          <?php else: ?> 0
                          <?php endif; ?>
                        </span>
                     </div>
                     <div class="login-register">
                        <a href="#"><i class="fa fa-user"></i> 
                        Đăng ký / Đăng nhập                             </a>
                     </div>
                     <div class="clearfix"></div>
                  </div>
               </div>
               <div class="col-sm-12 hidden-xs hidden-lg hidden-md">
                  <nav class="navbar navbar-inverse">
                     <div class="container-fluid">
                        <div>
                           <ul class="nav navbar-nav">
                              <li class="dropdown">
                                 <a href="<?php echo e(url('/')); ?>">Trang chủ</a>
                              </li>
                              <?php
                                 $menu_level_1 = DB::table('cates')->where('parent_id',0)->get();
                               ?>
                              <?php $__currentLoopData = $menu_level_1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item_level_1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <li class="dropdown">
                                 <a href="index.html#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $item_level_1->name; ?><span class="caret"></span></a>
                                 <ul class="dropdown-menu">
                                    <?php
                                       $menu_level_2 = DB::table('cates')->where('parent_id',$item_level_1->id)->get();
                                    ?>
                                    <?php $__currentLoopData = $menu_level_2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item_level_2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><a href="<?php echo url('loai-san-pham',[$item_level_2->id,$item_level_2->alias]); ?>"><?php echo $item_level_2->name; ?></a>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                  </li>
                                 </ul>
                              </li>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              <li>
                                <a href="<?php echo e(url('/lien-he')); ?>">Liên hệ</a>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </nav>
               </div>
               <!-- /menu ipad -->

               <div class="col-md-12 hidden-xs hidden-sm">
                  <div class="row">
                     <div class="col-md-12 login-cart-search">
                        <div class="search">
                           <form action="<?php echo url('/'); ?>" role="search" method="get" id="searchform">
                              <input name="s" class="search-input" type="text" placeholder="Nhập mã sản phẩm cần tìm..." />
                              <a href="javascript:void(0)" onclick="$('#searchform').submit()"><i class="fa fa-search"></i></a>
                           </form>
                        </div>
                        <div class="cart">
                           <a href="<?php echo url('/gio-hang'); ?>"><img src="<?php echo url('public/kkshop/wp-content/themes/kkfashion/asset/img/icon-cart.png'); ?>" alt=""> Giỏ hàng <span class="number-cart">
                             <?php if(Session::has('cart')): ?><?php echo Session('cart')->totalQty; ?>

                            <?php else: ?> 0
                            <?php endif; ?>
                           </span>
                           </a>
                        </div>
                        <div class="login-register">
                           <a href="#"><i class="fa fa-user"></i> 
                           Đăng ký / Đăng nhập                                    </a>
                        </div>
                        <div class="clearfix"></div>
                     </div>
                     <div class="col-md-12 main-menu">
                        <nav class="navbar navbar-default m-p">
                           <div class="container-fluid m-p">
                              <div class="navbar-header">
                                 <div id="header" class="visible-xs">
                                    <a href="index.html#menu">
                                    <button type="button" class="navbar-toggle collapsed">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    </button>
                                    </a>
                                 </div>
                              </div>
                              <div class="collapse navbar-collapse m-p" id="bs-example-navbar-collapse-1">
                                 <ul class="nav navbar-nav pull-right">
                                    <li class="dropdown">
                                       <a href="<?php echo e(url('/')); ?>">Trang chủ</a>
                                    </li>
                                    <?php
                                       $menu_level_1 = DB::table('cates')->where('parent_id',0)->get();
                                     ?>
                                     <?php $__currentLoopData = $menu_level_1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item_level_1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li class="dropdown">
                                       <a href="index.html#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $item_level_1->name; ?><span class="caret"></span></a>
                                       <ul class="dropdown-menu">
                                          <?php
                                             $menu_level_2 = DB::table('cates')->where('parent_id',$item_level_1->id)->get();
                                          ?>
                                          <?php $__currentLoopData = $menu_level_2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item_level_2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                          <li><a href="<?php echo url('loai-san-pham',[$item_level_2->id,$item_level_2->alias]); ?>"><?php echo $item_level_2->name; ?></a>
                                          </li>
                                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                       </ul>
                                    </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <li>
                                       <a href="<?php echo e(url('/lien-he')); ?>">Liên hệ</a>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div id="subbg" class="bg-sub-menu hidden hidden hidden-xs hidden-sm"></div>
         <script type="text/javascript">
            var ww = document.body.clientWidth;
            $(document).ready(function() {
                $(".nav-top li a").each(function() {
                    if ($(this).next().length > 0) {
                        $(this).addClass("parent");
                    };
                })
                $(".toggleMenu").click(function(e) {
                    e.preventDefault();
                    $(this).toggleClass("active");
                    $(".nav-top").toggle();
                });
                adjustMenu();
            })
            $(window).bind('resize orientationchange', function() {
                ww = document.body.clientWidth;
                adjustMenu();
            });
            var adjustMenu = function() {
                if (ww < 768) {
                    $(".toggleMenu").css("display", "inline-block");
                    if (!$(".toggleMenu").hasClass("active")) {
                        $(".nav-top").hide();
                    } else {
                        $(".nav-top").show();
                    }
                    $(".nav-top li").unbind('mouseenter mouseleave');
                    $(".nav-top li a.parent").unbind('click').bind('click', function(e) {
                        // must be attached to anchor element to prevent bubbling
                        e.preventDefault();
                        $(this).parent("li").toggleClass("hover");
                    });
                } else if (ww >= 768) {
                    $(".toggleMenu").css("display", "none");
                    $(".nav-top").show();
                    $(".nav-top li").removeClass("hover");
                    $(".nav-top li a").unbind('click');
                    $(".nav-top li").unbind('mouseenter mouseleave').bind('mouseenter mouseleave', function() {
                        // must be attached to li so that mouseleave is not triggered when hover over submenu
                        $(this).toggleClass('hover');
                    });
                }
            }
         </script>
         <script type="text/javascript" charset="utf-8">
            jQuery(window).ready(function() {
            
                jQuery('#search-mb').click(function() {
                    if (jQuery('.form-search').hasClass('hidden')) {
                        jQuery('.form-search').removeClass('hidden');
                    } else {
                        jQuery('.form-search').addClass('hidden');
                    }
            
                });
            });
         </script>
      </header>
      <div id="fb-root"></div>