<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'status',
        'featured',
        'featured_img',
        'gall_img',
        'sku',
        'price',
        'selling_price',
        'short_details',
        'long_details',
        'additional_info',
        'stock',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    function scopeActive ($q){
        $q->where('status', 1);
    }

}
