@extends('admin.master')
@section('controller','Slider')
@section('action','list')
@section('content')
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
<thead>
    <tr align="center">
        <th>STT</th>
        <th>Hình</th>
        <th>Delete</th>
        <th>Edit</th>
    </tr>
</thead>
<tbody>
    <?php $stt = 0 ?>
    @foreach($slider as $sd)
    <?php $stt = $stt + 1 ?>
    <tr class="odd gradeX" align="center">
        <td>{!! $stt !!}</td>
        <td><img width="200px" src="{!! asset('resources/upload/slider/'.$sd['hinh']) !!}" alt=""></td>
        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick="return xacnhanxoa('Bạn có chắc muốn xóa không')" href="{!! URL::route('admin.slider.getDelete',$sd["id"]) !!}"> Delete</a></td>
        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{!! URL::route('admin.slider.getEdit',$sd["id"]) !!}">Edit</a></td>
    </tr>
    @endforeach
</tbody>
</table>
@endsection