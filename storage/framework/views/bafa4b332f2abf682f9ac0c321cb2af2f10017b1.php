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
                        <p><b>Cám ơn bạn đã mua hàng tại T&N Fashion. Đơn đặt hàng của bạn đã thành công. T&N Fashion sẽ liên hệ với bạn trong vòng 24h.</b></p>
                        <br />
                        
                        <div class="clear"></div>
                        
                        <h2>Chi tiết đơn hàng</h2>
                        <table class="table xcart xdetail table-condensed size-table grid-table lc-cart-list-table " >
                           <thead>
                              <tr>
                                 <th class="product-name">Hình ảnh</th>
                                 <th class="product-name">Sản phẩm</th>
                                 <th class="product-total">Tổng</th>
                              </tr>
                           </thead>
                          
                           <tbody>
                              <tr class = "order_table_item">
                                 <td class="product-thumbnail"><a href="#"><img width="146" height="168" alt="" class="attachment-shop_thumbnail wp-post-image" src=""></a>
                                 </td>
                                 <td class="product-name">
                                    <a href="#"></a> <strong class="product-quantity">&times; 1</strong>
                                    
                                 </td>
                                 <td class="product-total"><span class="amount"> đ</span></td>
                              </tr>
                           </tbody>
                        </table>
                        </dl>
                        <header>
                           <h2>Chi tiết khách hàng</h2>
                        </header>
                        <dl class="customer_details">
                           <dt>Email:</dt>
                           <dd><?php echo $_POST["txtHoten"]; ?></dd>
                           <dt>Số điện thoại:</dt>
                           <dd>0987589326</dd>
                        </dl>
                        <div class="col2-set addresses">
                           <div class="col-1">
                              <header class="title">
                                 <h3>Địa chỉ thanh toán</h3>
                              </header>
                              <address>
                                 <p>
                                    Lý Hiển Long<br/>54 Lê Đại Hành<br/>Buôn Ma Thuộc     
                                 </p>
                              </address>
                           </div>
                           <!-- /.col-1 -->
                           <div class="col-2">
                              <header class="title">
                                 <h3>Địa chỉ nhận hàng</h3>
                              </header>
                              <address>
                                 <p>
                                    Lý Hiển Long<br/>54 Lê Đại Hành<br/>Buôn Ma Thuộc     
                                 </p>
                              </address>
                           </div>
                           <!-- /.col-2 -->
                        </div>
                        <!-- /.col2-set -->
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
                  <div class="hidden-xs hidden-sm cart-right-prolist">
                     <div class="col-lg-3 col-md-3 col-xs-12 static-product-sidebar">
                        <div class="row headding-page">
                           <div class="col-md-12 col-xs-12">
                              <div class="special-headding-2"><span>Sản phẩm hot nhất</span></div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-12 col-xs-12">
                              <div class="kk-special mCustomScrollbar">
                                 <div class="woocommerce">
                                    <ul class="products">
                                       <ul>
                                          <li>
                                             <div class="prothumb" ele="111385">
                                                <a href="http://kkfashion.vn/shop/dam-cong-so-hl01-03/"> 
                                                <img src="http://kkfashion.vn/wp-content/uploads/images/356_520/HL01/dam-cong-so-hl01-03.jpg" class="img-thumbnail shop-imgs" data="http://kkfashion.vn/shop/dam-cong-so-hl01-03/"/>
                                                </a>
                                             </div>
                                             <p> <a href="http://kkfashion.vn/shop/dam-cong-so-hl01-03/">Hàng limit<br />HL01-03</a></p>
                                             <p ><b>420.000 VNĐ</b></p>
                                          </li>
                                       </ul>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('kkshop.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>