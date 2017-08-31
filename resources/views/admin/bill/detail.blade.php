@extends('admin.master')
@section('content')
<div class="col-lg-7" style="padding-bottom:120px">
<form action="" method="POST">
@include('admin.blocks.errors')
<input type="hidden" name="_token" value="{!! csrf_token() !!}">
    <div class="form-group">
        <label>Tên khách hàng</label>
        <p>{!! $data['hoten'] !!}</p>
    </div>
    <div class="form-group">
        <label>Số điện thoại</label>
        <p>{!! $data['phone'] !!}</p>
    </div>
    <div class="form-group">
        <label>Địa chỉ</label>
        <p>{!! $data['address']." - ".$data['city'] !!}</p>
    </div>
    <div class="form-group">
        <label>Email</label>
        <p>{!! $data['email'] !!}</p>
    </div>
    <div class="form-group">
        <label>Sản phẩm mua</label>
        <a href="{!! url('chi-tiet-san-pham',[$data["product_id"],$data["alias"]]) !!}">{!! $data['bill'] !!}</a>
    </div>
    <div class="form-group">
        <label>Số lượng : {!! $data['so_luong'] !!}</label>
    </div>
    <div class="form-group">
        <label>Đơn giá : {!! number_format($data['don_gia'],0,",",".") !!}đ</label>
    </div>
    <div class="form-group">
        <label>Ghi chú</label>
        <p>{!! $data['note'] !!}</p>
    </div>
    <div class="form-group">
        <label>Duyệt đơn hàng</label>
        <label class="radio-inline">
            <input name="rdoStatus" value="1" checked="" type="radio"
             @if($data['trang_thai'] == 1)
                checked="checked"
            @endif>Duyệt
        </label>
        <label class="radio-inline">
            <input name="rdoStatus" value="2" type="radio"
            @if($data['trang_thai'] == 2)
                checked="checked"
            @endif>Chưa duyệt
        </label>
    </div>
    <button type="submit" class="btn btn-default">Xác nhận</button>
<form>
</div>
@endsection