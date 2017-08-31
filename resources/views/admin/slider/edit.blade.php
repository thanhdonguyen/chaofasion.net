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
        <label>Link</label>
        <input class="form-control" name="link" placeholder="Link hình" value="{!! old('link',isset($slider)?$slider['url']:null)!!}" />
    </div>
    <div class="form-group">
        <label>Hình đang sử dụng</label>
        <img src="{!! asset('resources/upload/slider/'.$slider['hinh']) !!}" class="img_current" alt="">
        <input type="hidden" name="img_current" value="{!! $slider['hinh'] !!}">
    </div>
    <div class="form-group">
        <label>Hình mới</label>
        <input type="file" name="fImages">
    </div>
    <button type="submit" class="btn btn-default">Sửa</button>
    <button type="reset" class="btn btn-default" id="reset">Reset</button>
</div>
<form>
@endsection