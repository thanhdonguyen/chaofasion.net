@extends('admin.master')
@section('controller','Product')
@section('action','Edit')
@section('content')
<style>
    .img_current {
        width: 150px;
    }
    .img_detail{ width: 150px}
    .icon-del{ position: relative;top: -50px; left: -20px; }
    .productDetail_img{margin-top: 5px}
    .add_img{margin-bottom: 15px}
</style>
<form action="" method="POST" name="frmEditProduct" enctype="multipart/form-data">
<div class="col-lg-7" style="padding-bottom:120px">
@include('admin.blocks.errors')
<input type="hidden" name="_token" value="{!! csrf_token() !!}">
    <div class="form-group">
        <label>Menu</label>
        <select class="form-control" name="sltParent">
            <option value="0">Please Choose Category</option>
            <?php cate_parent($cate,0,"--",$product["cate_id"]); ?>
        </select>
    </div>
    <div class="form-group">
        <label>Tên sản phẩm</label>
        <input class="form-control" name="txtName" placeholder="Tên sản phẩm" value="{!! old('txtName',isset($product)?$product['name']:null)!!}" />
    </div>
    <div class="form-group">
        <label>Đơn giá</label>
        <input class="form-control" name="txtPrice" placeholder="Đơn giá" value="{!! old('txtPrice',isset($product)?$product['price']:null)!!}" />
    </div>
    <div class="form-group">
        <label>Mô tả</label>
        <textarea class="form-control" rows="3" name="txtIntro">{!! old('txtIntro',isset($product)?$product['intro']:null)!!}</textarea>
        {{-- <script type="text/javascript">ckeditor("txtIntro")</script> --}}
    </div>
    <div class="form-group">
        <label>Màu sắc</label>
        <textarea class="form-control" rows="3" name="txtContent">{!! old('txtIntro',isset($product)?$product['content']:null)!!}</textarea>
        {{-- <script type="text/javascript">ckeditor("txtContent")</script> --}}
    </div>
    <div class="form-group">
        <label>Chất liệu</label>
        <textarea class="form-control" rows="3" name="txtDescription">{!! old('txtDescription',isset($product)?$product['description']:null)!!}</textarea>
    </div>
        <div class="form-group">
        <label>Mã sản phẩm</label>
        <input class="form-control" name="txtKeywords" placeholder="Mã sản phẩm" value="{!! old('txtKeywords',isset($product)?$product['keywords']:null)!!}" />
    </div>
    <div class="form-group">
        <label>Hình đang sử dụng</label>
        <img src="{!! asset('resources/upload/'.$product['image']) !!}" class="img_current" alt="">
        <input type="hidden" name="img_current" value="{!! $product['image'] !!}">
    </div>
    <div class="form-group">
        <label>Hình mới</label>
        <input type="file" name="fImages">
    </div>
    <button type="submit" class="btn btn-default">Sửa</button>
    <button type="reset" class="btn btn-default" id="reset">Reset</button>
</div>
<div class="col-md-1"></div>
<div class="col-md-4">
    <label>Hình chi tiết</label><br>
    @foreach($product_image as $key => $item)
        <div class="form-group" id="{!! $key !!}">
            <img src="{!! asset('resources/upload/detail/'.$item['image']) !!}" class="img_detail" alt="" idHinh="{!! $item['id'] !!}" id="{!! $key !!}">
            <a href="javascript::void(0)" id="del_img_demo" class="btn btn-danger btn-circle icon-del"><i class="fa fa-times"></i></a>
        </div>
    @endforeach
    <button type="button" class="btn btn-primary add_img" id="addImages" >Thêm ảnh</button>
    <div id="insert"></div>
</div>
<form>
@endsection