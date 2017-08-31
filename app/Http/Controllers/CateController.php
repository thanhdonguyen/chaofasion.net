<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CateRequest;
use App\Cate;
use Validator;

class CateController extends Controller
{
	//`id``name``alias``order``parent_id``keywords``description`
	public function getList (){
		$title = "Danh sách loại sản phẩm";
		$header = "Danh sách loại sản phẩm";
		$data = Cate::select('id','name','parent_id')->orderBy('id','DESC')->get()->toArray();
		return view('admin.cate.list',compact('data','title','header'));
	}
	public function getAdd() {
		$title = "Thêm loại sản phẩm";
		$header = "Thêm loại sản phẩm";
		$parent = Cate::select('id','name','parent_id')->get()->toArray();
		return view('admin.cate.add',compact('parent','title','header'));
	}
	//`name``alias``order``parent_id``keywords``description`
	public function postAdd(CateRequest $request) {
		$cate = new Cate;
		$cate->name = $request->txtCateName;
		$cate->alias = changeTitle($request->txtCateName);
		$cate->order = $request->txtOrder;
		$cate->parent_id = $request->sltParent;
		$cate->keywords = $request->txtKeywords;
		$cate->description = $request->txtDescription;
		$cate->save();
		return redirect()->route('admin.cate.list')->with(['flash_level'=>'success','flash_message'=>'Thêm thành công']);
	}
	public function getDelete($id){
		$parent = Cate::where('parent_id',$id)->count();
		if ($parent == 0){
			$cate = Cate::find($id);
			$cate->delete($id);
			return redirect()->route('admin.cate.list')->with(['flash_level'=>'success','flash_message'=>'Xóa thành công']);
		}else{
			echo "<script type='text/javascript'>
					alert('Xin lỗi ! không thể xóa');
					window.location = '";
					echo route('admin.cate.list');
			echo "';
			</script>";
		}
	}
	public function getEdit($id){
		$data = Cate::findOrFail($id)->toArray();
		$parent = Cate::select('id','name','parent_id')->get()->toArray();
		$title = $data['name'];
		$header = "Sửa loại sản phẩm";
		$name = $data['name'];
		return view('admin.cate.edit',compact('parent','data','id','title','header','name'));
	}
	public function postEdit(Request $request, $id){
		$this->validate($request,
			["txtCateName" => "required"],
			["txtCateName.required" => "Vui lòng nhập tên."]
		);
		$cate = Cate::find($id);
		$cate->name = $request->txtCateName;
		$cate->alias = changeTitle($request->txtCateName);
		$cate->order = $request->txtOrder;
		$cate->parent_id = $request->sltParent;
		$cate->keywords = $request->txtKeywords;
		$cate->description = $request->txtDescription;
		$cate->save();
		return redirect()->route('admin.cate.list')->with(['flash_level'=>'success','flash_message'=>'Sửa thành công']);
	}
}
