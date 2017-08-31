<?php $__env->startSection('content'); ?>
      <div class="content-page">
         <div class="kk-new-page">
            <div class="container">
               <div class="row">
                  <div class="col-md-9 cart-info">
                     <div class="row headding-page">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                           <div class="new-headding cart-headding"><span>Đặt hàng</span></div>
                        </div>
                     </div>
                     <div class="woocommerce">
                        <p><b>Cám ơn bạn đã mua hàng tại Shop. Đơn đặt hàng của bạn đã thành công. Shop sẽ liên hệ với bạn trong vòng 24h.</b></p>
                        <br />
                        <div class="clear"></div>
                        <p class="btn-return"><a class="btn-continue" href="<?php echo url('/'); ?>">&larr; Tiếp tục mua hàng</a></p>
                        <div class="clear"></div>
                        <style type="text/css">
                           .main-content.container{
                           background: none repeat scroll 0 0 #FFFFFF;
                           clear: both;
                           color: #000000;
                           margin-bottom: 20px;
                           padding: 17px 15px 30px;
                           }
                           tfoot tr {
                           border: solid 1px #aaa;
                           background: #ddd;
                           font-weight: bold;
                           }
                           .customer_details * {
                           line-height: 32px !important;
                           }
                           .xdetail th {
                           color: #fff;
                           }
                        </style>
                        <script type="text/javascript">
                           jQuery('.order_details').next().next().hide();
                        </script>
                        <!-- Criteo open-->
                     </div>
                  </div>
                  
               </div>
            </div>
         </div>
      </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('kkshop.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>