<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable =['product_name', 'product_size', 'cost', 'in_stock'];
}
