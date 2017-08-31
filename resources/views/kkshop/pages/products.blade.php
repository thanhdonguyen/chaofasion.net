@extends('kkshop.master')
@section('content')
      <div class="content shop-cat-content">
         <div class="container bestseller">
            <div class="row hidden-lg hidden-md hidden-sm">
               <div class="col-xs-12 content-menu">
                  <ul>
                     <li><a href="{!! url('/') !!}">Shop Online</a></li>
                     <li><a href="#">Hướng dẫn mua hàng</a></li>
                     <li><a href="{!! url('/lien-he') !!}">Liên hệ</a></li>
                  </ul>
               </div>
            </div>
            <div class="row headding">
               <div class="col-md-12 col-sm-12 hidden-xs">
                  <div class="line"></div>
                  <div class="text-headding">{!! isset($cate_name)?$cate_name:null !!}</div>
               </div>
            </div>
            <div class="kk-shop">
               <div class="row">
                  @foreach($product_cate as $item_product_cate)
                  <div class="col-md-3 col-sm-4 col-xs-6 kk-item">
                     <div class="kk-image">
                        <a href="{!! url('chi-tiet-san-pham',[$item_product_cate->id,$item_product_cate->alias]) !!}">
                        <img src="{!! asset('resources/upload/'.$item_product_cate->image) !!}" class="img-thumbnail" />
                        </a>
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
                     <div class="kk-name"><a href="http://kkfashion.vn/shop/dam-cong-so-kk66-26/">{!! $item_product_cate->name !!}</a></div>
                     <div class="kk-price"><span class="amount">{!! number_format($item_product_cate->price,0,",",".") !!}</span> VNĐ</div>
                  </div>
                  @endforeach
               </div>
               <div class="row">
                  <div align="center" class="col-md-12 col-xs-12 paging">
                     <div class="navigation">
                        <ol class="wp-paginate font-inherit">
                        <style type="text/css">
                           .actives{background-color: black}
                        </style>
                           @if($product_cate->currentPage() != 1)
                              <li><a href="{!! str_replace('/?','?', $product_cate->url($product_cate->currentPage() - 1)) !!}" class="prev">&laquo;</a></li>
                           @endif
                           @for($i = 1 ; $i <= $product_cate->lastPage(); $i = $i+1)
                           <li>
                              @if($product_cate->currentPage() == $i)
                              <span class='page current'>{!! $i !!}</span>
                              @else
                              <a href='{!! str_replace('/?','?', $product_cate->url($i)) !!}' title='{!! $i !!}' class='page'>{!! $i !!}</a>
                              @endif
                           </li>
                           @endfor
                           {{-- <li><span class='page current'>{!! $i !!}</span></li> --}}
                          {{--  <li><span class='gap'>...</span></li> --}}
                           @if($product_cate->currentPage() != $product_cate->lastPage())
                              <li><a href="{!! str_replace('/?','?', $product_cate->url($product_cate->currentPage() + 1)) !!}" class="next">&raquo;</a></li>
                           @endif
                        </ol>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
@endsection