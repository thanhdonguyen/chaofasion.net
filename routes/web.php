<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('admin/dangnhap',['as'=>'admin.dangnhap','uses'=>'UserController@getLoginAdmin']);
Route::post('admin/dangnhap',['as'=>'admin.dangnhap','uses'=>'UserController@postLoginAdmin']);
Route::get('admin/dangxuat',['as'=>'admin.dangxuat','uses'=>'UserController@getLogoutAdmin']);
Route::group(['prefix'=>'admin','middleware'=>'adminLogin'],function (){
	Route::group(['prefix'=>'bill'],function(){
		Route::get('list',['as'=>'admin.bill.list','uses'=>'BillController@getList']);
		Route::get('detail/{id}',['as'=>'admin.bill.getDetail','uses'=>'BillController@getDetail']);
		Route::post('detail/{id}',['as'=>'admin.bill.postDetail','uses'=>'BillController@postDetail']);
		Route::get('delete/{id}',['as'=>'admin.bill.getDelete','uses'=>'BillController@getDelete']);
	});
	Route::group(['prefix'=>'cate'],function(){
		Route::get('list',['as'=>'admin.cate.list','uses'=>'CateController@getList']);
		Route::get('add',['as'=>'admin.cate.getAdd','uses'=>'CateController@getAdd']);
		Route::post('add',['as'=>'admin.cate.postAdd','uses'=>'CateController@postAdd']);
		Route::get('delete/{id}',['as'=>'admin.cate.getDelete','uses'=>'CateController@getDelete']);
		Route::get('edit/{id}',['as'=>'admin.cate.getEdit','uses'=>'CateController@getEdit']);
		Route::post('edit/{id}',['as'=>'admin.cate.postEdit','uses'=>'CateController@postEdit']);
	});
	Route::group(['prefix'=>'product'],function(){
		Route::get('list',['as'=>'admin.product.getList','uses'=>'ProductController@getList']);
		Route::get('add',['as'=>'admin.product.getAdd','uses'=>'ProductController@getAdd']);
		Route::post('add',['as'=>'admin.product.postAdd','uses'=>'ProductController@postAdd']);
		Route::get('delete/{id}',['as'=>'admin.product.getDelete','uses'=>'ProductController@getDelete']);
		Route::get('edit/{id}',['as'=>'admin.product.getEdit','uses'=>'ProductController@getEdit']);
		Route::post('edit/{id}',['as'=>'admin.product.postEdit','uses'=>'ProductController@postEdit']);
		Route::get('delimg/{id}',['as'=>'admin.product.getDelImg','uses'=>'ProductController@getDelImg']);
	});
	Route::group(['prefix'=>'slider'],function(){
		Route::get('list',['as'=>'admin.slider.getList','uses'=>'SliderController@getList']);
		Route::get('add',['as'=>'admin.slider.getAdd','uses'=>'SliderController@getAdd']);
		Route::post('add',['as'=>'admin.slider.postAdd','uses'=>'SliderController@postAdd']);
		Route::get('delete/{id}',['as'=>'admin.slider.getDelete','uses'=>'SliderController@getDelete']);
		Route::get('edit/{id}',['as'=>'admin.slider.getEdit','uses'=>'SliderController@getEdit']);
		Route::post('edit/{id}',['as'=>'admin.slider.postEdit','uses'=>'SliderController@postEdit']);
	});
	Route::group(['prefix'=>'user'],function(){
		Route::get('list',['as'=>'admin.user.getList','uses'=>'UserController@getList']);
		Route::get('add',['as'=>'admin.user.getAdd','uses'=>'UserController@getAdd']);
		Route::post('add',['as'=>'admin.user.postAdd','uses'=>'UserController@postAdd']);
		Route::get('delete/{id}',['as'=>'admin.user.getDelete','uses'=>'UserController@getDelete']);
		Route::get('edit/{id}',['as'=>'admin.user.getEdit','uses'=>'UserController@getEdit']);
		Route::post('edit/{id}',['as'=>'admin.user.postEdit','uses'=>'UserController@postEdit']);
	});
});
Route::get('/', 'kkshopController@index');
Route::get('loai-san-pham/{id}/{tenloai}',['as'=>'loaisanpham','uses'=>'kkshopController@loaisanpham']);
Route::get('chi-tiet-san-pham/{id}/{tensanpham}',['as'=>'chitietsanpham','uses'=>'kkshopController@chitietsanpham']);
Route::get('lien-he',['as'=>'getLienHe','uses'=>'kkshopController@getLienHe']);
Route::post('lien-he',['as'=>'postLienHe','uses'=>'kkshopController@postLienHe']);
Route::get('them-gio-hang/{id}',['as'=>'themgiohang','uses'=>'kkshopController@getAddToCart']);
Route::get('gio-hang',['as'=>'giohang','uses'=>'kkshopController@getShopCart']);
Route::get('del-cart/{id}',['as'=>'xoagiohang','uses'=>'kkshopController@getDelItemCart']);
Route::get('dat-hang',['as'=>'dathang','uses'=>'kkshopController@getCheckOut']);
Route::post('dat-hang',['as'=>'dathang','uses'=>'kkshopController@postCheckOut']);
Route::get('dat-hang-thanh-cong',['as'=>'thanhcong','uses'=>'kkshopController@thanhcong']);
Route::get('/clear-cache', function() {
    $cache = Artisan::call('cache:clear');
    return "success !";
});
Route::get('/clear-config', function() {
    $config = Artisan::call('config:clear');
    return "success !";
});
//Reoptimized class loader:
Route::get('/optimize', function() {
    $exitCode = Artisan::call('optimize');
    return '<h1>Reoptimized class loader</h1>';
});

//Route cache:
Route::get('/route-cache', function() {
    $exitCode = Artisan::call('route:cache');
    return '<h1>Routes cached</h1>';
});

//Clear Route cache:
Route::get('/route-clear', function() {
    $exitCode = Artisan::call('route:clear');
    return '<h1>Route cache cleared</h1>';
});

//Clear View cache:
Route::get('/view-clear', function() {
    $exitCode = Artisan::call('view:clear');
    return '<h1>View cache cleared</h1>';
});

//Clear Config cache:
Route::get('/config-cache', function() {
    $exitCode = Artisan::call('config:cache');
    return '<h1>Clear Config cleared</h1>';
});