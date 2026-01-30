<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\ProductCategory;

class product extends Model
{
    //fillable product
    protected $fillable = ['name', 'description', 'price', 'stok', 'product_category_id', 'image'];
    public function category()
    {
        return $this->belongsTo(ProductCategory::class);
    }
}
