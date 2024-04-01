<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Map extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'stripe',
        'price',
        'size',
        'is_active',
        'image',
        'file',
        'body',
        'description',
        'original'
    ];
}