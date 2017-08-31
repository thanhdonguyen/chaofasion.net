@extends('admin.master')
@section('controller','slider')
@section('action','Add')
@section('content')
<div class="col-lg-7" style="padding-bottom:120px">
@include('admin.blocks.errors')
<form action="{!! url('/admin/slider/add') !!}" method="POST" enctype="multipart/form-data">
<input type="hidden" name="_token" value="{!! csrf_token() !!}">
    <div class="form-group">
        <label>Link slide</label>
        <input class="form-control" name="link" placeholder="Nhập link slide" value="{!!old('link')!!}" />
    </div>
    <div class="form-group">
        <label>Hình</label>
        <input type="file" name="fImages">
    </div>
    <button type="submit" class="btn btn-default">Add</button>
    {{-- <button type="reset" class="btn btn-default">Reset</button> --}}
</div>

<form>
</div>
@endsection