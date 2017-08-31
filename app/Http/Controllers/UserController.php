<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UserRequest;
use App\Http\Requests\loginRequest;
use App\User;
use Hash;
use Validator;

class UserController extends Controller
{
	public function getList (){
		$title = "Danh sách User";
		$header = "Danh sách User";
		$user = User::select('id','username','level')->orderBy('id','DESC')->get()->toArray();
		return view('admin.user.list',compact('user','title','header'));
	}
	public function getAdd (){
		$title = "Thêm User";
		$header = "Thêm User";
		return view('admin.user.add',compact('title','header'));
	}
	public function postAdd (UserRequest $request){
		$user = new User;
		$user->username = $request->txtUser;
		$user->password = Hash::make($request->txtPass);
		$user->email = $request->txtEmail;
		$user->level = $request->rdoLevel;
		$user->remember_token = $request->_token;
		$user->save();
		return redirect()->route('admin.user.getList')->with(['flash_level'=>'success','flash_message'=>'Thêm thành công']);
	}
	public function getDelete ($id){
		$user_current_login = Auth::user()->id;
		$user = User::find($id);
		if (($id == 2) || ($user_current_login != 2 && $user['level'] == 1)) {
			return redirect()->route('admin.user.getList')->with(['flash_level'=>'danger','flash_message'=>'Xin lỗi ! bạn không có quyền xóa user này']);
		} else {
			$user->delete($id);
			return redirect()->route('admin.user.getList')->with(['flash_level'=>'success','flash_message'=>'Xóa thành công']);
		}
	}
	public function getEdit ($id){
		$data = User::find($id);
		$title = $data['username'];
		$header = "Sửa User";
		$name = $data['username'];
		if ((Auth::user()->id != 2) && ($id == 2 || $data["level"] == 1 && (Auth::user()->id != $id))) {
			return redirect()->route('admin.user.getList')->with(['flash_level'=>'danger','flash_message'=>'Bạn không có quyền sửa user này']);
		}
		return view('admin.user.edit',compact('data','title','id','header','name'));
	}
	public function postEdit ($id, Request $request){
		$user = User::find($id);
		if($request->input('txtPass')){
			$this->validate($request,
				[
					'txtRePass' => 'required|same:txtPass'
				],
				[
					'txtRePass.required' => 'Password không được để trống.',
					'txtRePass.same' => 'Password không khớp.'
				]);
			$pass = $request->input('txtPass');
			$user->password = Hash::make($pass);
		}
		$user->email = $request->txtEmail;
		if(Auth::user()->id != $id){
			$user->level = $request->rdoLevel;
		}
		$user->remember_token = $request->input('_token');
		$user->save();
		return redirect()->route('admin.user.getList')->with(['flash_level'=>'success','flash_message'=>'Sửa thành công']);
	}
	public function getLoginAdmin(){
		return view('admin.login');
	}
	public function postLoginAdmin(loginRequest $request){
		$login = array(
				'username' => $request->email,
				'password' => $request->password,
				'level' => 1
			);
		if(Auth::attempt($login)){
			return redirect('admin/bill/list')->with(['flash_level'=>'success','flash_message'=>'Đăng nhập thành công']);
		}
		else
		{
			return redirect('admin/dangnhap')->with(['flash_level'=>'danger','flash_message'=>'Username hoặc password không đúng']);
		}
	}
	public function getLogoutAdmin() {
		Auth::logout();
		return redirect('admin/dangnhap')->with(['flash_level'=>'danger','flash_message'=>'Đăng xuất thành công']);
	}
}
