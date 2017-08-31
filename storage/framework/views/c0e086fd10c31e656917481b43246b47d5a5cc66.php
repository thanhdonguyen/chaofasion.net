<?php $__env->startSection('content'); ?>
      <div class="content-page">
         <div class="kk-new-page">
            <div class="container">
               <div class="row">
                  <?php if(Session::has('cart')): ?>
                  <div class="col-md-9 cart-info">
                     <div class="row headding-page">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                           <div class="new-headding cart-headding"><span>Giỏ hàng</span></div>
                        </div>
                     </div>
                     <div class="woocommerce">
                        <form action="http://kkfashion.vn/cart/" method="post">
                           <!-- content -->
                           <div class="content-page">
                              <div class="kk-new-page">
                                 <div class="container">
                                    <!-- <div class="row headding-page">
                                       <div class="col-md-12 col-xs-12">
                                           <div class="new-headding"><span>Giỏ hàng</span></div>
                                       </div>
                                       </div> -->
                                    <div class="row">
                                       <div class="col-md-9 col-xs-12 cart-info">
                                          <div class="row headding-page hidden-xs">
                                             <div class="col-md-12">
                                                <div class="kk-cart-headding">
                                                   <!-- <img src="http://kkfashion.vn/wp-content/themes/kkfashion/asset/img/btn-cart.png" alt=""> -->
                                                   <span>Giỏ hàng</span>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col-md-12 col-xs-12">
                                                <div class="cart-table">
                                                   <table class="table table-striped table-bordered table-hover ">
                                                      <thead>
                                                         <tr class="head-order-info">
                                                            <th colspan="6">Thông tin đơn hàng</th>
                                                         </tr>
                                                      </thead>
                                                      <thead>
                                                         <tr>
                                                            <th class="product-remove">
                                                               <div>Xóa</div>
                                                            </th>
                                                            <th class="product-thumbnail">
                                                               <div>Hình ảnh</div>
                                                            </th>
                                                            <th class="product-price">
                                                               <div>Giá</div>
                                                            </th>
                                                            <th class="product-quantity">
                                                               <div>Số lượng</div>
                                                            </th>
                                                            <th class="product-subtotal">
                                                               <div>Tổng</div>
                                                            </th>
                                                         </tr>
                                                      </thead>
                                                      <tbody>
                                                      
                                                         <?php if(Session::has('cart')): ?>
                                                         <?php $__currentLoopData = $product_cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                         <tr class = "cart_item">
                                                            <!-- Remove from cart link -->
                                                            <td class="product-remove">
                                                               <a href="<?php echo route('xoagiohang',$product['item']['id']); ?>" class="remove" title="Xóa sản phẩm này">&times;</a>
                                                            </td>
                                                            <!-- The thumbnail -->
                                                            <td class="product-thumbnail">
                                                               <a href="<?php echo url('chi-tiet-san-pham',[$product['item']['id'],$product['item']['alias']]); ?>"><img width="146" height="168" alt="" class="attachment-shop_thumbnail wp-post-image" src="<?php echo url('resources/upload/'.$product['item']['image']); ?>"></a>
                                                               <a href="<?php echo url('chi-tiet-san-pham',[$product['item']['id'],$product['item']['alias']]); ?>"><?php echo $product['item']['name']; ?></a>
                                                               <dl class="variation">
                                                                  <dt class="variation-Size">Size:</dt>
                                                                  <dd class="variation-Size">
                                                                     <p>s</p>
                                                                  </dd>
                                                               </dl>
                                                            </td>
                                                            <!-- Product price -->
                                                            <td class="product-price">
                                                               <span class="amount"><?php echo number_format($product['item']['price'],0,",","."); ?></span>
                                                            </td>
                                                            <!-- Quantity inputs -->
                                                            <td class="product-quantity">
                                                               <div class="quantity"><?php echo $product['qty']; ?></div>
                                                            </td>
                                                            <!-- Product subtotal -->
                                                            <td class="product-subtotal">
                                                               <span class="amount" id=""><?php echo number_format($product['item']['price']*$product['qty'],0,",","."); ?></span>
                                                            </td>
                                                         </tr>
                                                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                         
                                                         <?php endif; ?>
                                                      </tbody>
                                                   </table>
                                                   <table>
                                                      <tr>
                                                         <td colspan="6" class="actions">
                                                            <input type="hidden" id="_wpnonce" name="_wpnonce" value="6bb915d708" /><input type="hidden" name="_wp_http_referer" value="/cart/" />
                                                         </td>
                                                      </tr>
                                                      </tbody>
                                                   </table>
                                                </div>
                                             </div>
                                             <div class="clearfix" style="margin-top:20px;"></div>
                                             <div class="col-md-12">
                                                <div class="kk-btn">
                                                   
                                                   <a href="<?php echo url('dat-hang'); ?>" class="checkout-button button alt wc-forward">Đặt hàng</a>
                                                </div>
                                             </div>
                                             <div class="col-md-12 text-note">
                                                <p class="bold">Hiện tại K&K Fashion có nhận giao hàng tận nơi trên địa bàn Thành phố Hồ Chí Minh với hình thức như sau:
                                                </p>
                                                <br>
                                                <p class="no-bold">- Đối với những quận nội thành ( Q.1, Q3, Q.4, Q.5, Q10, Q. Bình Thạnh, Q. Phú Nhuận, Q, Gò Vấp, Q. Tân Bình), K&K Fashion sẽ miễn phí vận chuyển ( Nếu trường hợp không lấy SP phí vận chuyển 30.000 VNĐ)</p>
                                                <br>
                                                <p class="no-bold">- Đối với những quận ngoại thành ( Q.2, Q.6, Q.7, Q.8, Q.11, Q. Tân Phú, Q. Bình Tân) thì phí chuyển hàng là 30.000 VNĐ( Trên 3 SP miễn phí vận chuyển, trường hợp không lấy SP phí vận chuyển 60.000 VNĐ)
                                                </p>
                                             </div>
                                          </div>
                                       </div>
                                       <?php else: ?>
                                       <div class="col-md-9 cart-info">
                                          <div class="row headding-page">
                                             <div class="col-md-12 col-sm-12 col-xs-12">
                                                <div class="new-headding cart-headding"><span>Giỏ hàng</span></div>
                                             </div>
                                          </div>
                                          <div class="woocommerce">
                                             <!-- content -->
                                             <div class="content-page">
                                                <div class="kk-new-page">
                                                   <div class="container" style="min-height: 300px;">
                                                      <p class="title-empty">Chưa có sản phẩm nào trong giỏ hàng.</p>
                                                      <p class="btn-return"><a class="btn-continue" href="<?php echo url('/'); ?>">&larr; Return To Shop</a></p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <?php endif; ?>
                                       <div class="hidden-xs sm-sidebar hidden-sm car-sidebar">
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
                           <!-- /content -->
                        </form>
                        <!-- Criteo Tag open -->
                        <!-- Criteo Tag end -->
                     </div>
                  </div>
                  <div class="hidden-xs hidden-sm cart-right-prolist">
                  </div>
               </div>
            </div>
         </div>
      </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('kkshop.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>