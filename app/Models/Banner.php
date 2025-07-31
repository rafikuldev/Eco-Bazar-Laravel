<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{

    protected $fillable = [
        'sub_heading',
        'heading',
        'details',
        'button_name',
        'button_link',
        'image',
        'status',
    ];
}

