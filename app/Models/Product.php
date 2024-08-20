<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $fillable = 
    [
        'id',
        'product_name',
        'product_description',
        'product_price',
    ];

    use HasFactory;
}
