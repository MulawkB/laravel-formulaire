<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gift extends Model
{
    protected $fillable = [
        'name',
        'price',
        'details',
        'url',
    ];

    protected $casts = [
        'price' => 'decimal:2',
    ];
}
