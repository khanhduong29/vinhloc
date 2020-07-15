<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use App\Models\products;

class productAttribute extends Model
{
    protected $table = 'product_attribute';

    protected $fillable = ['products_id','attribute_id'];
}
