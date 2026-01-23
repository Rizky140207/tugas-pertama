<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\ProductCategory;

class product extends Model
{
    public function category()
    {
        return $this->belongsTo(ProductCategory::class);
    }
}
