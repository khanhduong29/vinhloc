<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'products';

    protected $fillable = ['cate_id','code','slug','name','price','image','dess','status'];
}
