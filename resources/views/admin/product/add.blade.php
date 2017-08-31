@extends('admin.master')
@section('controller','Product')
@section('action','Add')
@section('content')
<form action="{!! url('/admin/product/add') !!}" method="POST" enctype="multipart/form-data">
<div class="col-lg-7" style="padding-bottom:120px">
<input type="hidden" name="_token" value="{!! csrf_token() !!}">
@include('admin.blocks.errors')
    <div class="form-group">
        <label>Menu</label>
        <select class="form-control" name="sltParent">
            <option value="0">Please Choose Category</option>
            <?php cate_parent($cate,0,"--",old('sltParent')); ?>
        </select>
    </div>
    <div class="form-group">
        <label>Tên sản phẩm</label>
        <input class="form-control" name="txtName" placeholder="Nhập tên sản phẩm" value="{!!old('txtName')!!}" />
    </div>
    <div class="form-group">
        <label>Đơn giá</label>
        <input class="form-control" name="txtPrice" placeholder="Nhập đơn giá" value="{!!old('txtPrice')!!}" />
    </div>
    <div class="form-group">
        <label>Mô tả</label>
        <textarea class="form-control" rows="3" name="txtIntro">{!!old('txtIntro')!!}</textarea>
        {{-- <script type="text/javascript">ckeditor("txtIntro")</script> --}}
    </div>
    <div class="form-group">
        <label>Màu sắc</label>
        <textarea class="form-control" rows="3" name="txtContent">{!!old('txtContent')!!}</textarea>
        {{-- <script type="text/javascript">ckeditor("txtContent")</script> --}}
    </div>
    <div class="form-group">
        <label>Chất liệu</label>
        <textarea class="form-control" name="txtDescription" rows="3">{!!old('txtDescription')!!}</textarea>
    </div>
    <div class="form-group">
        <label>Mã sản phẩm</label>
        <input class="form-control" name="txtKeywords" placeholder="Nhập mã sản phẩm" value="{!!old('txtKeywords')!!}"/>
    </div>
    <div class="form-group">
        <label>Hình ảnh</label>
        <input type="file" name="fImages">
    </div>
    <button type="submit" class="btn btn-default">Product Add</button>
    <button type="reset" class="btn btn-default">Reset</button>
</div>
<div class="col-md-1"></div>
<div class="col-md-4">
    @for ($i=1 ; $i<=10 ; $i++)
    <div class="form-group">
        <label>Images Product Detail {!! $i !!}</label>
        <input type="file" name="fProductDetail[]" />
    </div>
    @endfor
</div>
<form>
@endsection