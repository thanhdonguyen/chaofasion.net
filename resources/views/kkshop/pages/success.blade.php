@extends('kkshop.master')
@section('content')
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
                        <p class="btn-return"><a class="btn-continue" href="{!! url('/') !!}">&larr; Tiếp tục mua hàng</a></p>
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
                  {{-- <div class="hidden-xs hidden-sm cart-right-prolist">
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
                  </div> --}}
               </div>
            </div>
         </div>
      </div>
@endsection