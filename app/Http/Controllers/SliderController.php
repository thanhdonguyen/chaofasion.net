<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Slider;
use App\Http\Requests\RequestSlider;
use Illuminate\Support\Facades\Input;
use Request;
use File;
use Validator;

class SliderController extends Controller
{
	public function getList (){
		$title = "Danh sách Slider";
		$header = "Danh sách Slider";
		$slider = Slider::all();
		return view('admin.slider.list',compact('slider','title','header'));
	}
	public function getAdd(){
		$title = "Thêm Slider";
		$header = "Thêm Slider";
		return view('admin.slider.add',compact('title','header'));
	}
	public function postAdd(RequestSlider $request){
		$file_name = $request->file('fImages')->getClientOriginalName();
		$slider              = new Slider();
		$slider->url        = $request->link;
		$slider->hinh       = str_random(4)."_".$file_name;
		while (file_exists("resources/upload/slider".$slider->hinh)) {
			$slider->hinh = str_random(4)."_".$file_name;
		}
		$request->file('fImages')->move('resources/upload/slider',$slider->hinh);
		$slider->save();
		return redirect()->route('admin.slider.getList')->with(['flash_level'=>'success','flash_message'=>'Thêm thành công']);
	}
	public function getDelete($id){
    	$slider = Slider::find($id);
    	File::delete('resources/upload/slider'.$slider->hinh);
    	$slider->delete($id);
    	return redirect()->route('admin.slider.getList')->with(['flash_level'=>'success','flash_message'=>'Xóa thành công']);
	}
	public function getEdit ($id){
		$title = "Sửa Slider";
		$header = "Sửa Slider";
		$slider = Slider::find($id);
		return view('admin.slider.edit',compact('slider','title','header'));
	}
	public function postEdit($id,Request $request){
		$slider = Slider::find($id);
    	$slider->url = Request::input('link');
    	$img_current = 'resources/upload/slider'.Request::input('img_current');
    	if (!empty(Request::file('fImages'))) {
    		$file_name = time()."_".(Request::file('fImages')->getClientOriginalName());
    		$slider->hinh = $file_name;
    		Request::file('fImages')->move('resources/upload/slider',$file_name);
    		if (File::exists($img_current)) {
    			File::delete($img_current);
    		}
    	}else{
    		echo "ko co file";
    	}
    	$slider->save();
    	return redirect()->route('admin.slider.getList')->with(['flash_level'=>'success','flash_message'=>'Sửa thành công']);
	}
}
