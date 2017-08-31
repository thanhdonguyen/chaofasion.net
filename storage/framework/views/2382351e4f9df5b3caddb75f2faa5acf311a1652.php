<?php $__env->startSection('content'); ?>
 <?php echo $__env->make('kkshop.blocks.slider', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="content">
   <div class="container bestseller">
      <div class="row hidden-lg hidden-md hidden-sm">
         <div class="col-xs-12 content-menu">
            <ul>
               <li><a href="#">Shop Online</a>
               </li>
               <li><a href="#">Hướng dẫn mua hàng</a>
               </li>
               <li><a href="<?php echo url('/lien-he'); ?>">Liên hệ</a>
               </li>
            </ul>
         </div>
      </div>
      <div class="row headding">
         <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="line"></div>
            <div class="text-headding"><a href="#">Sản phẩm mới nhất</a>
            </div>
         </div>
      </div>
      <div class="kk-shop">
         <div class="row">
            <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-3 col-sm-4 col-xs-6 kk-item">
               <div class="kk-image">
                  <a href="<?php echo url('chi-tiet-san-pham',[$item->id,$item->alias]); ?>">
                  <img width="227" height="340" src="<?php echo asset('resources/upload/'.$item->image); ?>" class="attachment-235x340 size-235x340 wp-post-image" alt="<?php echo $item->name; ?>" /> </a>
                  <span><img class="hidden-md hidden-lg" src="<?php echo url('public/kkshop/wp-content/themes/kkfashion/asset/img/new.png'); ?>" alt=""></span>
                  <div class="kk-size hidden-xs hidden-sm">
                     <div class="size">
                        <span class="pull-left">Size</span>
                        <span class="pull-right">
                           <ul>
                              <li id="dsize_s"  onclick="xaddcart('s')" itemid="s">S</li>
                              <li id="dsize_m"  onclick="xaddcart('m')" itemid="m" >M</li>
                              <li id="dsize_l"  onclick="xaddcart('l')" itemid="l" >L</li>
                              <li id="dsize_xl"  onclick="xaddcart('xl')" itemid="xl" >XL</li>
                           </ul>
                        </span>
                     </div>
                  </div>
               </div>
               <div class="kk-name"><a href="<?php echo url(''.$item->alias); ?>"><?php echo $item->name; ?></a>
               </div>
               <div class="kk-price"><span class="amount"><?php echo number_format($item->price,0,",","."); ?></span> VNĐ</div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         </div>
      </div>
      <div class="row headding">
         <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="line"></div>
            <div class="text-headding"><a href="<?php echo url('/loai-san-pham/15/da-m-om'); ?>">Đầm mới nhất</a>
            </div>
         </div>
      </div>
      <div class="kk-shop">
         <div class="row">
            <?php $__currentLoopData = $product3; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-3 col-sm-4 col-xs-6 kk-item">
               <div class="kk-image">
                  <a href="<?php echo url('chi-tiet-san-pham',[$item->id,$item->alias]); ?>">
                  <img width="227" height="340" src="<?php echo asset('resources/upload/'.$item->image); ?>" class="attachment-235x340 size-235x340 wp-post-image" alt="dam-cong-so-kk66-26.jpg" /> </a>
                  <span><img src="<?php echo url('public/kkshop/wp-content/themes/kkfashion/asset/img/new.png'); ?>" alt=""></span>
                  <div class="kk-size hidden-xs hidden-sm">
                     <div class="size">
                        <span class="pull-left">Size</span>
                        <span class="pull-right">
                           <ul>
                              <li id="dsize_s"  onclick="xaddcart('s')" itemid="s">S</li>
                              <li id="dsize_m"  onclick="xaddcart('m')" itemid="m" >M</li>
                              <li id="dsize_l"  onclick="xaddcart('l')" itemid="l" >L</li>
                              <li id="dsize_xl"  onclick="xaddcart('xl')" itemid="xl" >XL</li>
                           </ul>
                        </span>
                     </div>
                  </div>
               </div>
               <div class="kk-name"><a href="<?php echo url(''.$item->alias); ?>"><?php echo $item->name; ?></a>
               </div>
               <div class="kk-price"><span class="amount"><?php echo number_format($item->price,0,",","."); ?></span> VNĐ</div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         </div>
      </div>
      <div class="row headding">
         <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="line"></div>
            <div class="text-headding"><a href="<?php echo url('loai-san-pham/17/jean-da-i'); ?>">Quần Jean</a>
            </div>
         </div>
      </div>
      <div class="kk-shop">
         <div class="row">
            <?php $__currentLoopData = $product2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-3 col-sm-4 col-xs-6 kk-item">
               <div class="kk-image">
                  <a href="<?php echo url('chi-tiet-san-pham',[$item->id,$item->alias]); ?>">
                  <img width="227" height="340" src="<?php echo asset('resources/upload/'.$item->image); ?>" class="attachment-235x340 size-235x340 wp-post-image" alt="dam-cong-so-kk66-26.jpg" /> </a>
                  <span><img src="<?php echo url('public/kkshop/wp-content/themes/kkfashion/asset/img/new.png'); ?>" alt=""></span>
                  <div class="kk-size hidden-xs hidden-sm">
                     <div class="size">
                        <span class="pull-left">Size</span>
                        <span class="pull-right">
                           <ul>
                              <li id="dsize_s"  onclick="xaddcart('s')" itemid="s">S</li>
                              <li id="dsize_m"  onclick="xaddcart('m')" itemid="m" >M</li>
                              <li id="dsize_l"  onclick="xaddcart('l')" itemid="l" >L</li>
                              <li id="dsize_xl"  onclick="xaddcart('xl')" itemid="xl" >XL</li>
                           </ul>
                        </span>
                     </div>
                  </div>
               </div>
               <div class="kk-name"><a href="<?php echo url(''.$item->alias); ?>"><?php echo $item->name; ?></a>
               </div>
               <div class="kk-price"><span class="amount"><?php echo number_format($item->price,0,",","."); ?></span> VNĐ</div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         </div>
      </div>
   </div>
   <div class="container">
      <div class="row headding">
         <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="line"></div>
            <div class="new-headding"><a href="#">Lookbook</a>
            </div>
         </div>
      </div>
      <div class="row kk-lookbook">
         <div class="col-md-4 col-sm-6 col-xs-12 lookbook-item-home wrap-kk-lookbook">
            <div class="kk-lb-img">
               <a href="#"><img src="<?php echo url('resources/upload/lookbook/1.jpg'); ?>" alt="">
               </a>
            </div>
            <div class="kk-lookbook-name">
               <a href="#">Impressive Dresses</a>
            </div>
         </div>
         <div class="col-md-4 col-sm-6 col-xs-12 lookbook-item-home wrap-kk-lookbook">
            <div class="kk-lb-img">
               <a href="#"><img src="<?php echo url('resources/upload/lookbook/2.jpg'); ?>" alt="">
               </a>
            </div>
            <div class="kk-lookbook-name">
               <a href="#">Lookbook "Summer Colors"</a>
            </div>
         </div>
         <div class="col-md-4 col-sm-6 col-xs-12 lookbook-item-home wrap-kk-lookbook">
            <div class="kk-lb-img">
               <a href="#"><img src="<?php echo url('resources/upload//lookbook/3.jpg'); ?>" alt="">
               </a>
            </div>
            <div class="kk-lookbook-name">
               <a href="#">Lookbook "Let's dress up"</a>
            </div>
         </div>
      </div>
   </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('kkshop.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>