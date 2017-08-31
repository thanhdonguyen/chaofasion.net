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
                <?php if(count($errors) > 0): ?>
                  <ul class="woocommerce-error">
                     <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo $error; ?></li>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </ul>
                  <?php endif; ?>
                  <p class="woocommerce-info">
                     Vui lòng nhập đầy đủ thông tin để chúng tôi tiện liên hệ giao hàng
                     
                  </p>
                  
                     
                  <form name="checkout" method="post" class="checkout woocommerce-checkout" action="<?php echo route('dathang'); ?>" enctype="multipart/form-data">
                  <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                     
                     <div class="row shopping-address">
                        <div class="col-md-12 col-xs-12">
                           <h3>Địa chỉ giao hàng</h3>
                           <p class="form-row form-row form-row-first validate-required" id="billing_first_name_field"><label for="billing_first_name" class="">Họ Tên <abbr class="required" title="bắt buộc">*</abbr></label><input type="text" class="input-text " name="txtHoten" id="txtHoten" placeholder=""  value=""  /></p>
                           <p class="form-row form-row form-row-first validate-required validate-email" id="billing_email_field"><label for="billing_email" class="">Địa chỉ email </label><input type="email" class="input-text " name="txtEmail" id="txtEmail" placeholder=""  value=""  /></p>
                           <p class="form-row form-row form-row-last validate-required validate-phone" id="billing_phone_field"><label for="billing_phone" class="">Số điện thoại <abbr class="required" title="bắt buộc">*</abbr></label><input type="tel" class="input-text " name="txtPhone" id="txtPhone" placeholder=""  value=""  /></p>
                           <div class="clear"></div>
                           <p class="form-row form-row form-row-wide address-field validate-required" id="billing_address_1_field"><label for="billing_address_1" class="">Địa chỉ <abbr class="required" title="bắt buộc">*</abbr></label><input type="text" class="input-text " name="txtAddress" id="txtAddress" placeholder="Tên đường"  value=""  /></p>
                           <p class="form-row form-row form-row-wide address-field validate-required" id="billing_city_field"><label for="billing_city" class="">Tỉnh / Thành phố <abbr class="required" title="bắt buộc">*</abbr></label><input type="text" class="input-text " name="txtCity" id="txtCity" placeholder="Tỉnh / Thành phố"  value=""  /></p>
                           <p class="form-row form-row notes" id="order_comments_field"><label for="order_comments" class="">Ghi chú đơn hàng</label><textarea name="txtNote" class="input-text " id="txtNote" placeholder="Ghi chú về đơn hàng, ví dụ: lưu ý khi giao hàng."   rows="2" cols="5"></textarea></p>
                           
                           
                        </div>
                     </div>
                     <div class="row headding-page">
                        <div class="col-md-12">
                           <div class="order-headding"><span>Đơn đặt hàng của bạn</span></div>
                        </div>
                     </div>
                     <?php if(Session::has('cart')): ?>
                     <div class="row">
                        <div class="col-md-12">
                           <div class="cart-table">
                              <table class="shop_table woocommerce-checkout-review-order-table">
                                 <thead>
                                    <tr>
                                       <th class="product-thumbnail">
                                          <div>Hình ảnh</div>
                                       </th>
                                       <th class="product-name">Sản phẩm</th>
                                       <th class="product-total">Tổng</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php $__currentLoopData = $product_cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr class="cart_item">
                                       <!-- The thumbnail -->
                                       <td class="product-thumbnail">
                                          <a href="<?php echo url('chi-tiet-san-pham',[$product['item']['id'],$product['item']['alias']]); ?>"><img width="146" height="168" alt="" class="attachment-shop_thumbnail wp-post-image" src="<?php echo url('resources/upload/'.$product['item']['image']); ?>"></a>
                                       </td>
                                       <td class="product-name">
                                          <?php echo $product['item']['name']; ?>&nbsp;                     <strong class="product-quantity">&times; <?php echo $product['qty']; ?></strong>
                                          <dl class="variation">
                                             <dt class="variation-Size">Size:</dt>
                                             <dd class="variation-Size">
                                                <p>M</p>
                                             </dd>
                                          </dl>
                                       </td>
                                       <td class="product-total">
                                          <span class="amount"><?php echo number_format($product['item']['price']*$product['qty'],0,",","."); ?></span>
                                       </td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                 </tbody>
                                 <tfoot>
                                    <tr class="cart-subtotal">
                                       <th colspan="2" style="text-transform: uppercase;">Giá trị đơn hàng</th>
                                       <td><span class="amount">840,000</span></td>
                                    </tr>
                                    <tr class="order-total">
                                       <th colspan="2" style="text-transform: uppercase; font-weight: bold;">Tổng</th>
                                       <td><strong><span class="amount">840,000</span></strong> </td>
                                    </tr>
                                 </tfoot>
                              </table>
                              <div id="payment" class="woocommerce-checkout-payment">
                                 <ul class="payment_methods methods">
                                    <li class="payment_method_cod">
                                       <input id="payment_method_cod" type="radio" class="input-radio" name="payment_method" value="cod"  data-order_button_text="" />
                                       <label for="payment_method_cod">
                                       Cash on Delivery  </label>
                                       <div class="payment_box payment_method_cod" style="display:none;">
                                          <p>Pay with cash upon delivery.</p>
                                       </div>
                                    </li>
                                 </ul>
                                 <div class="form-row place-order">
                                    <noscript>Trình duyệt của bạn không hỗ trợ JavaScript, hoặc nó bị vô hiệu hóa, hãy đảm bảo bạn nhấp vào <em> Cập nhật giỏ hàng </ em> trước khi bạn thanh toán. Bạn có thể phải trả nhiều hơn số tiền đã nói ở trên, nếu bạn không làm như vậy.<br/><input type="submit" class="button alt" name="woocommerce_checkout_update_totals" value="Cập nhật tổng" /></noscript>
                                    <input type="hidden" id="_wpnonce" name="_wpnonce" value="b27dd5e436" /><input type="hidden" name="_wp_http_referer" value="/checkout/" />
                                    <input type="submit" class="button alt" name="woocommerce_checkout_place_order" id="place_order" value="Đặt hàng" data-value="Đặt hàng" />
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <?php endif; ?>
                  </form>
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
                                       <div class="prothumb" ele="111305">
                                          <a href="#"> 
                                          <img src="http://kkfashion.vn/wp-content/uploads/images/356_520/KK66/dam-cong-so-kk66-59.jpg" class="img-thumbnail shop-imgs" data="http://kkfashion.vn/shop/dam-cong-so-kk66-59/"/>
                                          </a>
                                       </div>
                                       <p> <a href="#">Đầm công sở<br />KK66-59</a></p>
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