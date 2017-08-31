@extends('admin.master')
@section('content')
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
<thead>
    <tr align="center">
        <th>ID</th>
        <th>Tên khách hàng</th>
        <th>Sản phẩm</th>
        <th>Số lượng</th>
        <th>Trạng thái</th>
        <th>Date</th>
        <th>Delete</th>
        <th>Edit</th>
    </tr>
</thead>
<tbody>
    <?php $stt = 0 ?>
    @foreach($data as $item)
    <?php $stt = $stt + 1 ?>
    <tr class="odd gradeX" align="center">
        <td>{!! $stt !!}</td>
        <td>{!! $item["hoten"] !!}</td>
        <td><a href="{!! url('chi-tiet-san-pham',[$item["product_id"],$item["alias"]]) !!}">{!! $item["bill"] !!}</a></td>
        <td>{!! $item["so_luong"] !!}</td>
        <td>
            @if($item['trang_thai'] == 1)
                Đã duyệt
            @elseif($item['trang_thai'] == 2)
                <b>Chưa duyệt</b>
            @endif
        </td>
        <td>
            {!! \Carbon\Carbon::createFromTimeStamp(strtotime($item["created_at"]))->diffForHumans() !!}
        </td>
        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick="return xacnhanxoa('Bạn có chắc muốn xóa không')" href="{!! URL::route('admin.bill.getDelete',$item["id"]) !!}"> Xóa</a></td>
        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{!! URL::route('admin.bill.getDetail',$item["id"]) !!}">Xem</a></td>
    </tr>
    @endforeach
</tbody>
</table>
@endsection