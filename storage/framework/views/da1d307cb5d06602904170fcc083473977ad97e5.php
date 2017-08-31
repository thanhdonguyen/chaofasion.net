<?php $__env->startSection('content'); ?>
<script type="text/javascript">

    function xaddcart(eleval) {
        jQuery('#bdesktop #pa_size option').each(function() {
            if (jQuery(this).val() === eleval) {
                jQuery("#bdesktop #pa_size option").attr('selected', false);
                jQuery(this).attr('selected', 'selected');
            }
        });
        jQuery('.detail-size li').each(function(){
            $(this).removeClass('active');
        });
        $('#dsize_' + eleval).addClass('active');
        jQuery("#bdesktop #pa_size").change(); console.log('change desktop');
    }
	function xaddcart_mb(eleval) {
        jQuery('#bmobile #pa_size option').each(function() {
            if (jQuery(this).val() === eleval) {
                jQuery("#bmobile #pa_size option").attr('selected', false);
                jQuery(this).attr('selected', 'selected');
            }
        });
        jQuery('.detail-size li').each(function(){
            $(this).removeClass('active');
        });
        jQuery('#msize_' + eleval).addClass('active');
        jQuery("#bmobile #pa_size").change(); console.log('change mobile');
    }

</script>
      <div class="content-page">
         <div class="kk-detail-page">
            <div class="container">
               <div class="hidden-md hidden-sm hidden-lg">
                  <div class="row hidden-lg hidden-md hidden-sm">
                     <div class="col-xs-12 content-menu">
                        <ul>
                           <li><a href="#">Shop Online</a></li>
                           <li><a href="#">Hướng dẫn mua hàng</a></li>
                           <li><a href="#">Liên hệ</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="row woocommerce">
                  <div class="col-md-12 ">
                  </div>
               </div>
            </div>
            <div class="container hidden-xs">
               <div class="row">
                  <div class="col-md-4 col-sm-5 detail-img">
                     <div id="carousel-example-big-sm" data-interval="false" class="carousel slide visible-sm">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                           <div class="item active">
                              <a class="fancybox" rel="group" href="index.html"><img alt="" src="<?php echo url('resources/upload/'.$products_detail->image); ?>" class="img-thumbnail"></a>
                           </div>
                           <div class="item ">
                              <a class="fancybox" rel="group" href="index.html"><img alt="" src="<?php echo url('resources/upload/'.$products_detail->image); ?>" class="img-thumbnail"></a>
                           </div>
                           <div class="item ">
                              <a class="fancybox" rel="group" href="index.html"><img alt="" src="<?php echo url('resources/upload/'.$products_detail->image); ?>" class="img-thumbnail"></a>
                           </div>
                        </div>
                        <!-- Controls -->
                        <a class="left carousel-control sm-thumb" href="index.html#carousel-example-big-sm" data-slide="prev">
                        <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control sm-thumb" href="index.html#carousel-example-big-sm" data-slide="next">
                        <span class="icon-next"></span>
                        </a>
                     </div>
                     <div class="item">
                        <img id="mainfutured" src="<?php echo url('resources/upload/'.$products_detail->image); ?>" class="img-thumbnail" />
                     </div>
                  </div>
                  <div class="col-md-8 col-sm-7">
                     <div class="kk-product-detail">
                        <h1 class="name"><?php echo $products_detail->name; ?></h1>
                        <div class="detail">
                           <div itemprop="description">
                              <p><?php echo $products_detail->intro; ?></p>
                           </div>
                           <p>
                           <div class="cart pull-right">
                              <a href="<?php echo url('/gio-hang'); ?>"><i class="fa fa-cart-plus"></i> Giỏ hàng <span class="number-cart">
                                <?php if(Session::has('cart')): ?><?php echo Session('cart')->totalQty; ?>

                                <?php else: ?> 0
                                <?php endif; ?>
                              </span></a> 
                           </div>
                           </p>
                           <div class="clearfix"></div>
                        </div>
                        <div class="price-code">
                           <span class="price pull-left"><?php echo number_format($products_detail->price,0,",","."); ?> VND</span>
                           <span class="code pull-right"><?php echo $products_detail->keywords; ?></span>
                           <div class="clearfix"></div>
                        </div>
                        <div class="row color-size">
                           <div class="col-md-6 col-sm-6">
                              <span class="color">
                                 <p><span class="bold">Màu sắc:</span> <?php echo $products_detail->content; ?></p>
                                 <p><span class="bold">Chất liệu:</span> <?php echo $products_detail->description; ?></p>
                                 <p><span class="bold">Đánh giá:</span> <img src="<?php echo url('resources/upload/rato.png'); ?>"></p>
                                 <p><div class="fb-share-button" data-href="<?php echo url('chi-tiet-san-pham',[$products_detail->id,$products_detail->alias]); ?>" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fchaofashion.net%2Fchi-tiet-san-pham%2F13%2Fdam-voan-2-lop&amp;src=sdkpreparse">Chia sẻ</a></div>
                                <div class="fb-like" data-href="<?php echo url('chi-tiet-san-pham',[$products_detail->id,$products_detail->alias]); ?>" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="false"></div>

                                 </p>
                              </span>
                           </div>
                           <div class="col-md-6 col-sm-6">
                              <span class="detail-size pull-right sdesktop">
                                 <ul>
                                    <li id="dsize_s"  onclick="xaddcart('s')" itemid="s">S</li>
                                    <li id="dsize_m"  onclick="xaddcart('m')" itemid="m" >M</li>
                                    <li id="dsize_l"  onclick="xaddcart('l')" itemid="l" >L</li>
                                    <li id="dsize_xl"  onclick="xaddcart('xl')" itemid="xl" >XL</li>
                                 </ul>
                              </span>
                           </div>
                           <div class="clearfix"></div>
                        </div>
                        <div class="btn-control">
                           <div class="row" id="bdesktop">
                              <form class="variations_form cart" action="<?php echo route('themgiohang',$products_detail->id); ?>" method="get" onsubmit="return checkadd();" enctype='multipart/form-data'>
                                 <table class="variations" cellspacing="0">
                                    <tbody>
                                       <tr>
                                          <td class="label"></td>
                                          <td class="value">
                                             <select id="pa_size" class="" name="attribute_pa_size" data-attribute_name="attribute_pa_size">
                                                <option value="">Chọn một tùy chọn</option>
                                                <option value="s"  selected='selected'>S</option>
                                                <option value="m" >M</option>
                                                <option value="l" >L</option>
                                                <option value="xl" >XL</option>
                                             </select>
                                          </td>
                                       </tr>
                                    </tbody>
                                 </table>
                                 <div class="single_variation_wrap" style="display:none;">
                                    <div class="single_variation"></div>
                                    <div class="variations_button">
                                       <div class="quantity"><input type="number" step="1"   name="quantity" value="1" title="SL" class="input-text qty text" size="4" /></div>
                                       <button type="submit" class="single_add_to_cart_button button alt">Thêm vào giỏ</button>
                                    </div>
                                 </div>
                                 <button type="submit" class="single_add_to_cart_button btn-addcart">Cho vào giỏ hàng</button>
                              </form>
                              <script type="text/javascript">
                                 function checkadd(){
                                  flag = false; 
                                  $('.detail-size li').each(function(){
                                    if($(this).hasClass('active')){
                                      flag = true; 
                                    }
                                  }); 
                                  if(flag == false){
                                    alert ( "Bạn hãy chọn size sản phẩm");
                                  }
                                  return flag; 
                                 }
                              </script>
                           </div>
                        </div>
                        <div class="thumbnail-slide">
                           <div id="owl-demo" class="owl-carousel">
                              <!-- Wrapper for slides -->
                              <div class="item"><a href="javascript:void(0)" onclick="changefutureimg('<?php echo url('resources/upload/'.$products_detail->image); ?>')"  class=" img-thumbnail" title="<?php echo $products_detail->name; ?>" ><img src='<?php echo url('resources/upload/'.$products_detail->image); ?>' /></a></div>
                              <?php $__currentLoopData = $image; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item_image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <div class="item"><a href="javascript:void(0)" onclick="changefutureimg('<?php echo url('resources/upload/detail/'.$item_image->image); ?>')"  class=" img-thumbnail" title="<?php echo $products_detail->name; ?>" ><img src='<?php echo url('resources/upload/detail/'.$item_image->image); ?>' /></a></div>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                           </div>
                           <script type="text/javascript">
                              jQuery(document).ready(function($) {
                                  jQuery("#owl-demo").owlCarousel({
                                      items: 3,
                                      pagination:false,
                                      autoPlay:false,
                                      navigation : true,
                                      navigationText : ["<img src=''>","<img src=''>"],
                                      itemsTablet : [768,3],
                                      afterInit : function(el){
                                        el.find(".owl-item").eq(0).addClass("synced");
                                      }
                                  });
                              });
                           </script>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row content-detail abc">
                  <div class="col-md-9 step-item step-detail">
                     <div align="center" class="head-tabs">
                        <ul class="nav nav-tabs">
                           <li class="active">
                              <a data-toggle="tab" href="index.html#step-1">
                                 <p class="step-title">Thông tin sản phẩm</p>
                              </a>
                           </li>
                           <li>
                              <a data-toggle="tab" href="index.html#step-2">
                                 <p class="step-title">Các bước mua hàng</p>
                              </a>
                           </li>
                           <li>
                              <a data-toggle="tab" href="index.html#step-3">
                                 <p class="step-title">Đánh giá của khách hàng</p>
                              </a>
                           </li>
                        </ul>
                     </div>
                     <div class="tab-content">
                        <div align="center" id="step-1" class="tab-pane fade in active">
                           <img src="<?php echo url('resources/upload/'.$products_detail->image); ?>" alt='Đầm công sở KK66-21' title='<?php echo $products_detail->name; ?>' class="img-thumbnail" />
                           <?php $__currentLoopData = $image; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item_image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <img src="<?php echo url('resources/upload/detail/'.$item_image->image); ?>" alt='Đầm công sở KK66-21' title='<?php echo $products_detail->name; ?>' class="img-thumbnail" />
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                           <div class="multi-size cart-table">
                              <table width="600" >
                                 <thead>
                                    <tr>
                                       <th>Size</th>
                                       <th>Vòng 1</th>
                                       <th>Vòng 2</th>
                                       <th class="end">Vòng 3</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>S</td>
                                       <td>83</td>
                                       <td>67</td>
                                       <td>90</td>
                                    </tr>
                                    <tr>
                                       <td>M</td>
                                       <td>86</td>
                                       <td>70</td>
                                       <td>95</td>
                                    </tr>
                                    <tr>
                                       <td>L</td>
                                       <td>90</td>
                                       <td>76</td>
                                       <td>97</td>
                                    </tr>
                                    <tr>
                                       <td>XL</td>
                                       <td>96</td>
                                       <td>82</td>
                                       <td>104</td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                           <div class="delivery cart-table">
                              <h2>Hướng dẫn giao hàng:</h2>
                              <table width="600" cellpadding="10" cellspacing="10">
                                 <thead>
                                    <tr>
                                       <th width="25%">Khu vực giao hàng</th>
                                       <th width="25%">Phương thức thanh toán</th>
                                       <th width="25%">Thời gian giao hàng</th>
                                       <th width="25%" class="end">Phí vận chuyển</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>Nội thành  TP.HCM
                                          ( Q.1, Q3, Q.4, Q.5, Q10, Q. Bình Thạnh, Q. Phú Nhuận, Q, Gò Vấp, Q. Tân Bình)
                                          Ngoại thành  TP.HCM 
                                          ( Q.2, Q.6, Q.7, Q.8, Q.11, Q. Tân Phú, Q. Bình Tân)
                                       </td>
                                       <td>Chuyển khoản, COD, thanh toán trực tiếp( không áp dụng với các quận: Nhà Bè, Hóc Môn, Bình Chánh, Q.12)</td>
                                       <td width="25%">Nhận hàng trong vòng từ 1~3 ngày sau khi hoàn thành đặt hàng</td>
                                       <td width="20%" class="end">Nội thành:
                                          Miễn phí
                                          ( Nếu trường hợp không lấy SP phí vận chuyển 30.000 VNĐ)
                                          Ngoại thành:
                                          Phí vận chuyển 30.000 VNĐ ( Trên 3 SP miễn phí vận chuyển, trường hợp không lấy SP phí vận chuyển 60.000 VNĐ)
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
                              <hr class="abchr"  >
                              <table width="600" cellpadding="10" cellspacing="10">
                                 <tbody>
                                    <tr>
                                       <td width="25%">Toàn bộ tỉnh, thành phố khác</td>
                                       <td width="25%">Chuyển khoản và COD</td>
                                       <td width="25%">Với khách hàng chuyển khoản trước: 3-4 ngày kể từ ngày chuyển khoản. Đối với COD: nhận hàng sau 4-6 ngày</td>
                                       <td width="25%" class="end">Mua 1 sp phí là 35.000 VNĐ. Trên 2 sản phẩm được miễn phí vận chuyển</td>
                                    </tr>
                                 </tbody>
                              </table>
                              <hr class="abchr" >
                           </div>
                           <div class="delivery cart-table">
                              <h2>Điều kiện đổi hàng:</h2>
                              <table width="600" cellpadding="10" cellspacing="10">
                                 <thead>
                                    <tr>
                                       <th width="25%">Khu vực</th>
                                       <th width="25%">Quy định chung</th>
                                       <th width="25%">Cách thức đổi hàng</th>
                                       <th width="25%" class="end">Phí đổi hàng</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>TP.HCM</td>
                                       <td>Hàng còn nguyên tem, mạc, hóa đơn, 
                                          không bị dơ bẩn, hư hỏng, chưa qua sử dụng hoặc  giặt tẩy.  
                                          Liên hệ đổi hàng sau 13:30
                                       </td>
                                       <td width="25%">Ghé bất kỳ cửa hàng để đổi trong vòng 3 ngày.</td>
                                       <td width="20%" class="end">Miễn phí</td>
                                    </tr>
                                 </tbody>
                              </table>
                              <hr class="abchr"  >
                              <table width="600" cellpadding="10" cellspacing="10">
                                 <tbody>
                                    <tr>
                                       <td width="25%">Toàn bộ tỉnh, thành phố khác</td>
                                       <td width="25%">Hàng còn nguyên tem, mạc, hóa đơn, 
                                          không bị dơ bẩn, hư hỏng, chưa qua sử dụng hoặc  giặt tẩy.  
                                          Liên hệ đổi hàng sau 13:30
                                       </td>
                                       <td width="25%">Gửi lại  sản phẩm đổi đến địa chỉ: Nguyễn Thị Mông Thu.40 Lê Văn Sỹ, phường 11, quận Phú Nhuận. Trong vòng 3 ngày kể từ ngày nhận hàng.</td>
                                       <td width="25%" class="end">35.000 (nếu không mua thêm sản phẩm mới)</td>
                                    </tr>
                                 </tbody>
                              </table>
                              <hr class="abchr" >
                           </div>
                        </div>
                        <div id="step-2" class="tab-pane fade">
                           <p><b>Bước 1:</b> Chọn sản phẩm cần mua trên menu SHOP ONLINE</p>
                           <img src="<?php echo url('resources/upload/images/huongdan-1.jpg'); ?>">
                           <p><b>Bước 2:</b> Xem thông tin sản phẩm và chọn sản phẩm cần mua. Sau khi xem xong khách hàng chọn nút giỏ hàng để xem những thông tin sản phẩm đã mua và tiếp tục thanh toán.</p>
                           <img src="<?php echo url('resources/upload/images/huongdan-2.jpg'); ?>">
                           <p><b>Bước 3:</b> Nếu khách hàng muốn thay đổi số lượng hoặc không muốn mua sản phẩm thì có thể thao tác như hình dưới. Sau khi chọn sản phẩm, khách hàng điền thông tin cần mua rồi nhấn nút đặt hàng để gửi đến bộ phận kinh doanh, Chao Fashion sẽ liên hệ đến quí khách trong thời gian sớm nhất.</p>
                           <img src="<?php echo url('resources/upload/images/huongdan-3.jpg'); ?>">
                           <br /> <!-- thong tin bank --> 
                           <br /> 
                           <br /> 
                           <!-- <div>
                              <p>Sau khi khách hàng mua sản phẩm qua 1 trong 3 hình thức trên.<br>Bộ phận kinh doanh Chao Fashion sẽ liên hệ đến quý khách và hướng dẫn quý khách các thức thanh toán và nhận hàng.</p>
                              <p>Quý khách có thể chuyển khoản qua 1 trong những tài khoản sau:</p>
                              <div class="col-md-12 col-xs-12 content-step-3">
                                 <div class="row content-step-bank">
                                    <div align="center" class="col-md-5 col-xs-5 col-sm-5">
                                       <a href="index.html"><img src="<?php echo url('resources/upload/images/bank-info-1.png '); ?>" alt=""></a>
                                    </div>
                                    <div class="col-md-7 col-xs-7 col-sm-7">
                                       <p class="bold">Ngân hàng Xuất Nhập khẩu Việt Nam - EXIMBANK:</p>
                                       <br>
                                       <p>Tên chủ tài khoản: Công ty TNHH Khang Khôi</p>
                                       <p>Số tài khoản: 100714851015505</p>
                                       <p>Chi nhánh Hòa Bình</p>
                                    </div>
                                 </div>
                                 <div class="row content-step-bank">
                                    <div align="center" class="col-md-5 col-xs-5 col-sm-5">
                                       <a href="index.html"><img src="<?php echo url('resources/upload/images/bank-info-2.png '); ?>" alt=""></a>
                                    </div>
                                    <div class="col-md-7 col-xs-7 col-sm-7">
                                       <p class="bold">Ngân hàng TMCP Ngoại thương Việt Nam  - VIETCOMBANK</p>
                                       <br>
                                       <p>Tên chủ tài khoản: Lê Viết Thanh</p>
                                       <p>Số tài khoản: 0071000629193</p>
                                       <p>Chi nhánh Hồ Chí Minh</p>
                                    </div>
                                 </div>
                                 <div class="row content-step-bank">
                                    <div align="center" class="col-md-5 col-xs-5 col-sm-5">
                                       <a href="index.html"><img src="<?php echo url('resources/upload/images/bank-info-3.png '); ?>" alt=""></a>
                                    </div>
                                    <div class="col-md-7 col-xs-7 col-sm-7">
                                       <p class="bold">Ngân hàng Nông nghiệp & Phát triển  Nông thôn - AGRIBANK</p>
                                       <br>
                                       <p>Tên chủ tài khoản: Lê Viết Thanh</p>
                                       <p>Số tài khoản: 1700206222669</p>
                                       <p>Chi nhánh Hòa Bình</p>
                                    </div>
                                 </div>
                                 <div class="row content-step-bank">
                                    <div align="center" class="col-md-5 col-xs-5 col-sm-5">
                                       <a href="index.html"><img src="<?php echo url('resources/upload/images/bank-info-4.png '); ?>" alt=""></a>
                                    </div>
                                    <div class="col-md-7 col-xs-7 col-sm-7">
                                       <p class="bold">Ngân hàng Đông Á - DONGABANK</p>
                                       <br>
                                       <p>Tên chủ tài khoản: Lê Viết Thanh</p>
                                       <p>Số tài khoản: 0107583678</p>
                                       <p>Phòng giao dịch: Tô Hiến Thành</p>
                                    </div>
                                 </div>
                                 <div class="row content-step-bank">
                                    <div align="center" class="col-md-5 col-xs-5 col-sm-5">
                                       <a href="index.html"><img src="<?php echo url('resources/upload/images/bank-info-5.png '); ?>" alt=""></a>
                                    </div>
                                    <div class="col-md-7 col-xs-7 col-sm-7">
                                       <p class="bold">Ngân hàng TMCP Công thương Việt Nam  - VIETTINBANK</p>
                                       <br>
                                       <p>Tên chủ tài khoản: Lê Viết Thanh</p>
                                       <p>Số tài khoản: 711A54466884</p>
                                       <p>Chi nhánh 10 - Phòng giao dịch Tô Hiến Thành</p>
                                    </div>
                                 </div>
                                 <div class="row content-step-bank">
                                    <div align="center" class="col-md-5 col-xs-5 col-sm-5">
                                       <a href="index.html"><img src="<?php echo url('resources/upload/images/bank-info-6.png '); ?>" alt=""></a>
                                    </div>
                                    <div class="col-md-7 col-xs-7 col-sm-7">
                                       <p class="bold">Ngân hàng TMCP Kỹ Thương Việt Nam -  TECHCOMBANK</p>
                                       <br>
                                       <p>Tên chủ tài khoản: Lê Viết Thanh</p>
                                       <p>Số tài khoản: 12524646971017</p>
                                       <p>Chi nhánh 10 - Techcombank Trần Quang Diệu</p>
                                    </div>
                                 </div>
                                 <div class="row content-step-bank">
                                    <div align="center" class="col-md-5 col-xs-5 col-sm-5">
                                       <a href="index.html"><img src="<?php echo url('resources/upload/images/bank-info-7.png '); ?>" alt=""></a>
                                    </div>
                                    <div class="col-md-7 col-xs-7 col-sm-7">
                                       <p class="bold">Ngân hàng Đầu tư & Phát triển Việt Nam  - BIDV</p>
                                       <br>
                                       <p>Tên chủ tài khoản: Lê Viết Thanh</p>
                                       <p>Số tài khoản: 31310000426369</p>
                                       <p>Phòng giao dịch: Lê Thị Riêng</p>
                                    </div>
                                 </div>
                              </div>
                              <div style="clear:both;"></div>
                           </div> -->
                           <div class="well direction">
                              <p><b>Chao Fashion giải quyết đổi hàng trong thời gian 3 ngày với những điều kiện sau:</b><br>
                                 - Sản phẩm còn nguyên tem mạc.<br>
                                 - Sản phẩm chưa được giặt và sử dụng qua.<br>
                                 - Còn nguyên hóa đơn mua hàng.<br>
                                 - Chỉ giải quyết 1 lần/ sản phẩm.<br>
                                 <b>Lưu ý: Khách hàng vui lòng đổi hàng vào buổi chiều (14.00h - 17.00h)</b><br>
                              </p>
                              <p><b>Hiện tại Chao Fashion có nhận giao hàng tận nơi trên địa bàn Thành phố Hồ Chí Minh với hình thức như sau:</b><br>
                                 - Đối với những quận nội thành (Q.1, Q3, Q.4, Q.5, Q10, Q. Bình Thạnh, Q. Phú Nhuận, Q, Gò Vấp, Q. Tân Bình). Chao Fashion sẽ miễn phí chuyển hàng<br>
                                 - Đối với những quận ngoại thành ( Q.2, Q.6, Q.7, Q.8, Q.11, Q. Tân Phú, Q. Bình Tân) thì phí chuyển hàng là 30.000/ lần chuyển hàng đối với đơn hàng dưới 3 SP
                              </p>
                           </div>
                        </div>
                        <div id="step-3" class="tab-pane fade">
                           <div class="fb-comments" data-href="<?php echo url('chi-tiet-san-pham',[$products_detail->id,$products_detail->alias]); ?>" data-numposts="5"></div>
                        </div>
                     </div>
                  </div>
                  <div class="hidden-sm">
                     <div class="col-lg-3 col-md-3 col-xs-12 static-product-sidebar">
                        <div class="row headding-page">
                           <div class="col-md-12 col-xs-12">
                              <div class="special-headding-2"><span>Sản phẩm cùng loại</span></div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-12 col-xs-12">
                              <div class="kk-special mCustomScrollbar">
                                 <div class="woocommerce">
                                    <ul class="products">
                                       <ul>
                                       	<?php $__currentLoopData = $products_cate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item_products_cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                          <li>
                                             <div class="prothumb" ele="107291">
                                                <a href="<?php echo url('chi-tiet-san-pham',[$item_products_cate->id,$item_products_cate->alias]); ?>"> 
                                                <img src="<?php echo url('resources/upload/'.$item_products_cate->image); ?>" class="img-thumbnail shop-imgs" data="<?php echo url('chi-tiet-san-pham',[$item_products_cate->id,$item_products_cate->alias]); ?>"/>
                                                </a>
                                             </div>
                                             <p> <a href="<?php echo url('chi-tiet-san-pham',[$item_products_cate->id,$item_products_cate->alias]); ?>"><?php echo $item_products_cate->name; ?></a></p>
                                             <p ><b><?php echo number_format($item_products_cate->price,0,",","."); ?> đ</b></p>
                                          </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
            <!-- content mobile -->
      <div class="content-page">
         <div class="kk-detail-page post-pro-detail">
            <div class="container">
               <div class="row woocommerce">
                  <div class="col-xs-12">
                  </div>
               </div>
            </div>
            <div class="container hidden-lg hidden-md hidden-sm">
               <div class="row">
                  <div class="col-xs-12 detail-img">
                     <div id="slideshow-page" class="owl-carousel owl-theme">
                        <div class="item">
                           <img alt="" src="<?php echo url('resources/upload/'.$products_detail->image); ?>" class="img-thumbnail">
                        </div>
                        <?php $__currentLoopData = $image; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item_image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="item">
                           <img alt="" src="<?php echo url('resources/upload/detail/'.$item_image->image); ?>" class="img-thumbnail">
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     </div>
                  </div>
                  <div class="col-xs-12">
                     <div id="owl-demo" class="owl-carousel">
                        <!-- Wrapper for slides -->
                        <div class="item"><a href="javascript:void(0)" onclick="changefutureimg('<?php echo url('resources/upload/'.$products_detail->image); ?>')"  class=" img-thumbnail" title="Đầm công sở KK66-21" ><img src='<?php echo url('resources/upload/'.$products_detail->image); ?>' /></a></div>
                        <?php $__currentLoopData = $image; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item_image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="item"><a href="javascript:void(0)" onclick="changefutureimg('<?php echo url('resources/upload/detail/'.$item_image->image); ?>')"  class=" img-thumbnail" title="Đầm công sở KK66-21" ><img src='<?php echo url('resources/upload/detail/'.$item_image->image); ?>' /></a></div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     <script type="text/javascript">
                        jQuery(document).ready(function($) {
                        
                            jQuery("#owl-demo").owlCarousel({
                                items: 3,
                                pagination:false,
                                autoPlay:false,
                                navigation : true,
                                navigationText : ["<img src=''>","<img src=''>"],
                                itemsTablet : [768,3],
                                afterInit : function(el){
                                  el.find(".owl-item").eq(0).addClass("synced");
                                }
                            });
                        });
                     </script>
                  </div>
                  <div class="col-xs-12">
                     <div class="kk-product-detail">
                        <div class="detail">
                           <p>
                           <div class="col-xs-7">
                              <span class="detail-size pull-left smobile">
                                 <ul>
                                    <li id="msize_s" onclick="xaddcart_mb('s')" itemid="s">S</li>
                                    <li id="msize_m" onclick="xaddcart_mb('m')" itemid="m" >M</li>
                                    <li id="msize_l" onclick="xaddcart_mb('l')" itemid="l" >L</li>
                                    <li id="msize_xl" onclick="xaddcart_mb('xl')" itemid="xl" >XL</li>
                                 </ul>
                              </span>
                           </div>
                           <div class="cart pull-right">
                              <a href="<?php echo url('/gio-hang'); ?>"><i class="fa fa-cart-plus"></i> Giỏ hàng <span class="number-cart">
                              <?php if(Session::has('cart')): ?><?php echo Session('cart')->totalQty; ?>

                              <?php else: ?> 0
                              <?php endif; ?>
                            </span></a> 
                           </div>
                           </p>
                           <div class="clearfix"></div>
                        </div>
                        <h1 class="name"><?php echo $products_detail->name; ?></h1>
                        <div class="price-code">
                           <span class="price pull-left"><?php echo number_format($products_detail->price,0,",","."); ?> VND</span>
                           <span class="code pull-right"><?php echo $products_detail->keywords; ?></span>
                           <div class="clearfix"></div>
                        </div>
                        <div class="row color-size">
                           <div class="col-xs-12">
                              <span class="color">
                                 <p><span class="bold">Màu sắc:</span> <?php echo $products_detail->content; ?></p>
                                 <p><span class="bold">Chất liệu:</span><?php echo $products_detail->description; ?></p>
                                 <p><span class="bold">Đánh giá:</span> <img src="<?php echo url('resources/upload/rato.png'); ?>"></p>
                                  <p><div class="fb-share-button" data-href="<?php echo url('chi-tiet-san-pham',[$products_detail->id,$products_detail->alias]); ?>" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fchaofashion.net%2Fchi-tiet-san-pham%2F13%2Fdam-voan-2-lop&amp;src=sdkpreparse">Chia sẻ</a></div>
                                   <div class="fb-like" data-href="<?php echo url('chi-tiet-san-pham',[$products_detail->id,$products_detail->alias]); ?>" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="false"></div>
                                  </p>
                                 
                              </span>
                           </div>
                           <div class="clearfix"></div>
                        </div>
                        <div class="btn-control" id="bmobile">
                        	<form class="variations_form cart" action="<?php echo route('themgiohang',$products_detail->id); ?>" method="get" onsubmit="return checkadd();" enctype='multipart/form-data'>
                              <table class="variations" cellspacing="0">
                                 <tbody>
                                    <tr>
                                       <td class="label"></td>
                                       <td class="value">
                                          <select id="pa_size" class="" name="attribute_pa_size" data-attribute_name="attribute_pa_size">
                                             <option value="">Chọn một tùy chọn</option>
                                             <option value="s"  selected='selected'>S</option>
                                             <option value="m" >M</option>
                                             <option value="l" >L</option>
                                             <option value="xl" >XL</option>
                                          </select>
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
                              <div class="single_variation_wrap" style="display:none;">
                                 <div class="single_variation"></div>
                                 <div class="variations_button">
                                    <div class="quantity"><input type="number" step="1"   name="quantity" value="1" title="SL" class="input-text qty text" size="4" /></div>
                                    <button type="submit" class="single_add_to_cart_button button alt">Thêm vào giỏ</button>
                                 </div>
                              </div>
                              <button type="submit" class="single_add_to_cart_button btn-addcart">Cho vào giỏ hàng</button>
                              <div><input type="hidden" name="product_id" value="107281" /></div>
                           </form>
                           <script type="text/javascript">
                              function checkadd(){
                                flag = false; 
                                $('.detail-size li').each(function(){
                                  if($(this).hasClass('active')){
                                    flag = true; 
                                  }
                                }); 
                                if(flag == false){
                                  alert ( "Bạn hãy chọn size sản phẩm");
                                }
                                return flag; 
                              }
                           </script>
                        <div class="detail">
                           <div itemprop="description">
                              <p> <p><?php echo $products_detail->intro; ?></p></p>
                           </div>
                           
                           <div class="clearfix"></div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row content-detail">
                  <div class="col-xs-12 step-item step-detail">
                     <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                           <div class="panel-heading">
                              <h4 class="panel-title">
                                 <a data-toggle="collapse" data-parent="#accordion" href="index.html#collapse1">Thông tin sản phẩm</a>
                                 <a class="pull-right" data-toggle="collapse" data-parent="#accordion" href="index.html#collapse1"><i class="fa fa-caret-down fa-2x"></i></a>
                              </h4>
                           </div>
                           <div id="collapse1" class="panel-collapse collapse in">
                              <div class="panel-body">
                                 <div class="post-thumb" align="center">
                                    <img src="<?php echo url('resources/upload/'.$products_detail->image); ?>" title='<?php echo $products_detail->name; ?>' class="img-thumbnail" />
                                 </div>
                                 <?php $__currentLoopData = $image; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item_image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                 <div class="post-thumb" align="center">
                                    <img src="<?php echo url('resources/upload/detail/'.$item_image->image); ?>" alt='<?php echo $products_detail->name; ?>' title='<?php echo $products_detail->name; ?>' class="img-thumbnail" />
                                 </div>
                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                 <div class="multi-size">
                                    <table width="100%">
                                       <thead>
                                          <tr>
                                             <th>Size</th>
                                             <th>Vòng 1</th>
                                             <th>Vòng 2</th>
                                             <th class="end">Vòng 3</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <tr>
                                             <td>S</td>
                                             <td>83</td>
                                             <td>67</td>
                                             <td>90</td>
                                          </tr>
                                          <tr>
                                             <td>M</td>
                                             <td>86</td>
                                             <td>70</td>
                                             <td>95</td>
                                          </tr>
                                          <tr>
                                             <td>L</td>
                                             <td>90</td>
                                             <td>76</td>
                                             <td>97</td>
                                          </tr>
                                          <tr>
                                             <td>XL</td>
                                             <td>96</td>
                                             <td>82</td>
                                             <td>104</td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </div>
                                 <div class="delivery">
                                    <h2>Hướng dẫn giao hàng:</h2>
                                    <table width="100%" >
                                       <thead>
                                          <tr>
                                             <th width="25%">Khu vực giao hàng</th>
                                             <th width="25%">Phương thức thanh toán</th>
                                             <th width="25%">Thời gian giao hàng</th>
                                             <th class="end" width="25%">Phí vận chuyển</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <tr>
                                             <td>Nội thành TP.HCM (Q.1, Q3, Q.4, Q.5, Q10, Q. Bình Thạnh, Q. Phú Nhuận, Q, Gò Vấp, Q. Tân Bình) Ngoại thành TP.HCM ( Q. 2, Q.6. Q.7, Q.8,Q.11,Q. Tân Phú,Q. Bình Tân)</td>
                                             <td>Chuyển khoản, COD, thanh toán trực tiếp( không áp dụng với các quận: Nhà Bè, Hóc Môn, Bình Chánh, Q.12)</td>
                                             <td width="25%">Nhận hàng trong vòng từ 1~3 ngày sau khi hoàn thành đặt hàng</td>
                                             <td width="20%" class="end">Nội thành: Miễn phí ( Nếu trường hợp không lấy SP phí vận chuyển 30.000 VNĐ) Ngoại thành: Phí vận chuyển 30.000 VNĐ ( Trên 3 SP miễn phí vận chuyển, trường hợp không lấy SP phí vận chuyển 60.000 VNĐ)</td>
                                          </tr>
                                          <tr>
                                             <td>Toàn bộ tỉnh, thành phố khác và ngoài TP.HCM</td>
                                             <td>Chuyển khoản và COD</td>
                                             <td width="25%">Với khách hàng chuyển khoản trước: 3-4 ngày kể từ ngày chuyển khoản. Đối với COD: nhận hàng sau 4-6 ngày</td>
                                             <td width="20%" class="end">Mua 1 sp phí vận chuyển là 35.000 VNĐ. Trên 2 sản phẩm được miễn phí vận chuyển</td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </div>
                                 
                              </div>
                           </div>
                        </div>
                        <div class="panel panel-default">
                           <div class="panel-heading">
                              <h4 class="panel-title">
                                 <a data-toggle="collapse" data-parent="#accordion" href="index.html#collapse2">Các bước mua hàng</a>
                                 <a class="pull-right" data-toggle="collapse" data-parent="#accordion" href="index.html#collapse2"><i class="fa fa-caret-down fa-2x"></i></a>
                              </h4>
                           </div>
                           <div id="collapse2" class="panel-collapse collapse">
                              <div class="panel-body">
                                 <div class="text">
                                    <p>Bước 1: Chọn sản phẩm cần mua trên menu SHOP ONLINE</p>
                                    <img src="<?php echo url('resources/upload/images/huongdan-1.jpg'); ?>" alt="">
                                    <img src="<?php echo url('resources/upload/images/huongdan-2.jpg'); ?>" alt="">
                                    <p>Bước 1: Xem thông tin sản phẩm và chọn sản phẩm cần mua. Sau khi xem xong khách hàng chọn nút giỏ hàng để xem những thông tin sản phẩm đã mua và tiếp tục thanh toán.</p>
                                    <img src="<?php echo url('resources/upload/images/huongdan-3.jpg'); ?>" alt="">
                                    <p>Bước 3: Nếu khách hàng muốn thay đổi số lượng hoặc không muốn mua sản phẩm thì có thể thao tác như hình dưới. Sau khi chọn sản phẩm, khách hàng điền thông tin cần mua rồi nhấn nút đặt hàng để gửi đến bộ phận kinh doanh, K&K Fashion sẽ liên hệ đến quí khách trong thời gian sớm nhất.</p>
                                    <img src="<?php echo url('resources/upload/images/huongdan-4.jpg'); ?>" alt="">
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="hidden-sm">
                     <div class="col-lg-3 col-md-3 col-xs-12 static-product-sidebar">
                        <div class="row headding-page">
                           <div class="col-md-12 col-xs-12">
                              <div class="special-headding-2"><span>Sản phẩm cùng loại</span></div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-12 col-xs-12">
                              <div class="kk-special mCustomScrollbar">
                                 <div class="woocommerce">
                                    <ul class="products">
                                       <ul>
                                       	<?php $__currentLoopData = $products_cate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item_products_cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                          <li>
                                             <div class="prothumb" ele="107291">
                                                <a href="<?php echo url('chi-tiet-san-pham',[$item_products_cate->id,$item_products_cate->alias]); ?>"> 
                                                <img src="<?php echo url('resources/upload/'.$item_products_cate->image); ?>" class="img-thumbnail shop-imgs" data="<?php echo url('chi-tiet-san-pham',[$item_products_cate->id,$item_products_cate->alias]); ?>"/>
                                                </a>
                                             </div>
                                             <p> <a href="<?php echo url('chi-tiet-san-pham',[$item_products_cate->id,$item_products_cate->alias]); ?>"><?php echo $item_products_cate->name; ?></a></p>
                                             <p ><b><?php echo number_format($item_products_cate->price,0,",","."); ?> đ</b></p>
                                          </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
      <!-- /content mobile -->
      <script type="text/javascript" charset="utf-8">
         jQuery(document).ready(function() {
         
           var sync1 = jQuery("#slideshow-page");
           var sync2 = jQuery("#slideshow-thumb");
          
           sync1.owlCarousel({
             singleItem : true,
             slideSpeed : 1000,
             navigation: false,
             pagination:false,
             afterAction : syncPosition,
             responsiveRefreshRate : 200,
           });
          
           sync2.owlCarousel({
             navigation: true,
             singleItem : false,
             navigationText : ["<img src='../../wp-content/themes/kkfashion/asset/img/btn-prev-2.png'>","<img src='../../wp-content/themes/kkfashion/asset/img/btn-next-2.png'>"],
             items : 3,
             itemsTablet : [768,3],
             itemsMobile : [479,3] ,
             pagination:false,
             responsiveRefreshRate : 100,
             afterInit : function(el){
               el.find(".owl-item").eq(0).addClass("synced");
             }
           });
          
           function syncPosition(el){
             var current = this.currentItem;
             jQuery("#slideshow-thumb")
               .find(".owl-item")
               .removeClass("synced")
               .eq(current)
               .addClass("synced")
             if(jQuery("#slideshow-thumb").data("owlCarousel") !== undefined){
               center(current)
             }
           }
          
           jQuery("#slideshow-thumb").on("click", ".owl-item", function(e){
             e.preventDefault();
             var number = jQuery(this).data("owlItem");
             sync1.trigger("owl.goTo",number);
           });
          
           function center(number){
             var sync2visible = sync2.data("owlCarousel").owl.visibleItems;
             var num = number;
             var found = false;
             for(var i in sync2visible){
               if(num === sync2visible[i]){
                 var found = true;
               }
             }
          
             if(found===false){
               if(num>sync2visible[sync2visible.length-1]){
                 sync2.trigger("owl.goTo", num - sync2visible.length+2)
               }else{
                 if(num - 1 === -1){
                   num = 0;
                 }
                 sync2.trigger("owl.goTo", num);
               }
             } else if(num === sync2visible[sync2visible.length-1]){
               sync2.trigger("owl.goTo", sync2visible[1])
             } else if(num === sync2visible[0]){
               sync2.trigger("owl.goTo", num-1)
             }
             
           }
          
         });
      </script>
      <script>
         function toggleChevron(e) {
             jQuery(e.target)
                 .prev('.panel-heading')
                 .find("i.fa")
                 .toggleClass('fa-caret-down fa-caret-up');
         }
         jQuery('#accordion').on('hidden.bs.collapse', toggleChevron);
         jQuery('#accordion').on('shown.bs.collapse', toggleChevron);
      </script>
      <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.10";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.10";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.10";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div id="fb-root"></div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('kkshop.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>