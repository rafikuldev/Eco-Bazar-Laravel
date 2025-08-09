<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'category_title',
        'slug',
        'icon',
        'status',
    ];

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    function scopeActive($query)
    {
        return $query->where('status', 1);
    }
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
