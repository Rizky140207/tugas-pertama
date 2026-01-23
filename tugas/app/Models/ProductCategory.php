<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\product;

class ProductCategory extends Model
{
    public function product(){
        return $this->hasMany(product::class);
    }
}
