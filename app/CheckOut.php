<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CheckOut extends Model
{
    protected $table = 'check_out';

    protected $fillable = ['hoten','email','phone','address','city','note','bill', 'don_gia','so_luong','product_id','alias','image','trang_thai'];

    public $timestamps = true;

}
