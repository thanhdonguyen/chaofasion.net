<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB,Mail;
use App\Cate;
use App\Product;
use App\Cart;
use App\Slider;
use Session;
use App\Http\Requests\CheckOutRequest;
use App\CheckOut;

class kkshopController extends Controller
{
    public function index() {
        $product = DB::table('products')->select('id','name','price','alias','image')->orderBy('id','DESC')->skip(0)->take(8)->get();
        $product2 = DB::table('products')->select('id','name','price','alias','image','cate_id')->whereIn('cate_id',[17,18,19,32,33])->take(8)->get();
        $product3 = DB::table('products')->select('id','name','price','alias','image','cate_id')->whereIn('cate_id',[14,15,16])->take(8)->get();
        $title = "Chảo Fashion";
        $slider = Slider::all();
        return view('kkshop.blocks.home',compact('product','product2','product3','slider','title'));
    }
    public function loaisanpham($id) {
        $product_cate = DB::table('products')->select('id','name','price','alias','image','cate_id')->where('cate_id',$id)->paginate(8);
        $data = Cate::findOrFail($id)->toArray();
        $parent = Cate::select('id','name','parent_id')->get()->toArray();
        $title = $data['name'];
        $cate_name = $data['name'];
        return view('kkshop.pages.products',compact('product_cate','title','cate_name'));
    }
    public function chitietsanpham($id) {
        $products_detail = DB::table('products')->where('id',$id)->first();
        $image = DB::table('product_images')->select('id','image')->where('product_id',$products_detail->id)->get();
        $products_cate = DB::table('products')->where('cate_id',$products_detail->cate_id)->where('id','<>',$id)->take(8)->get();
        $title = $products_detail->name;
        return view('kkshop.pages.products_detail',compact('products_detail','title','image','products_cate'));
    }
    public function getLienHe() {
        return view('kkshop.pages.lienhe');
    }
    public function postLienHe() {
        $data = ['hoten' => 'Nguyen Thanh Do'];
        Mail::send('kkshop.mail.blanks',$data, function ($msg) {
            $msg->from('nguyenthanhdo20@gmail.com','Thành Đô');
            $msg->to('thanhdo181@gmail.com','Quách Tĩnh');
            $msg->subject('Đây là mail laravel');
        });
    }
    public function getAddToCart(Request $req,$id) {
        $product = Product::find($id);
        $oldCart = Session('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->add($product,$id);
        $req->session()->put('cart',$cart);
        return redirect()->back();
    }
    public function getShopCart() {
        $product = DB::table('products')->select('id','name','price','alias','image')->orderBy('id','DESC')->skip(0)->take(6)->get();
        $title = "Giỏ hàng";
        return view('kkshop.pages.giohang',compact('title','product'));
    }
    public function getDelItemCart($id) {
        $oldCart = Session::has('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);
        if(count($cart->items)>0){
            Session::put('cart',$cart);
        }
        else{
            Session::forget('cart');
        }
        return redirect()->back();
    }
    public function getCheckOut() {
        $title = "Đặt hàng";
        return view('kkshop.pages.checkout',compact('title'));
    }
    public function postCheckOut(CheckOutRequest $req) {
        $cart = Session::get('cart');
        foreach($cart->items as $key => $value){
            $checkout = new CheckOut;
            $checkout->hoten = $req->txtHoten;
            $checkout->email = $req->txtEmail;
            $checkout->phone = $req->txtPhone;
            $checkout->address = $req->txtAddress;
            $checkout->city = $req->txtCity;
            $checkout->note = $req->txtNote;
            $checkout->trang_thai = 2;
            $checkout->bill = $value['item']['name'];
            $checkout->don_gia = $value['item']['price']*$value['qty'];
            $checkout->so_luong = $value['qty'];
            $checkout->product_id = $value['item']['id'];
            $checkout->alias = $value['item']['alias'];
            $checkout->image = $value['item']['image'];
            $checkout->save();
        }
        return redirect()->route('thanhcong');
    }
    public function thanhcong (){
        Session::forget('cart');
        $title = "Thông tin đặt hàng";
        $data = CheckOut::select('id','hoten','email','phone','address','city','note','bill', 'don_gia','so_luong','product_id','alias','created_at')->orderBy('id','DESC')->get()->toArray();
        return view('kkshop.pages.success',compact('title','data'));
    }
}
