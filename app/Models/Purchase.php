<?php

namespace App\Models;


use App\Models\Map;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Purchase extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'price',
        'downloads',
        'map_id',
        'checkout_url',
        'checkout_id',
        'status'
    ];

    public function map(){
        return $this->belongsTo(Map::class);
    }
}