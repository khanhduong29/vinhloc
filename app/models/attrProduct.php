<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class attrProduct extends Model
{
    protected $table = 'product_attr';

    protected $fillable = ['id_attr','product_id'];
}
