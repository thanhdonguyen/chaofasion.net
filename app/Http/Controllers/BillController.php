<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CheckOut;

class BillController extends Controller
{
    public function getList () {
    	$title = "Danh sách đơn hàng";
		$header = "Danh sách đơn hàng";
		$data = CheckOut::select('id','hoten','email','phone','address','city','note','bill', 'don_gia','so_luong','product_id','alias','created_at','trang_thai')->orderBy('id','DESC')->get(1)->toArray();
    	return view('admin.bill.list',compact('title','header','data'));
    }
    public function getDetail ($id) {
    	$data = CheckOut::findOrFail($id)->toArray();
		$title = "Chi tiết hóa đơn";
		$header = "Khách hàng";
		$name = $data['hoten'];
    	return view('admin.bill.detail',compact('data','title','header','name'));
    }
    public function postDetail ($id, Request $request) {
    	$checkout = CheckOut::find($id);
    	$checkout->trang_thai = $request->rdoStatus;
    	$checkout->save();
    	return redirect()->route('admin.bill.list')->with(['flash_level'=>'success','flash_message'=>'Đơn hàng đã được duyệt']);
    }
    public function getDelete ($id) {
    	$checkout = CheckOut::find($id);
    	$checkout->delete($id);
    	return redirect()->route('admin.bill.list')->with(['flash_level'=>'success','flash_message'=>'Xóa thành công']);
    }
}
