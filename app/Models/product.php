<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    protected $fillable = [
        'collection_id',
        'product_category_id',
        'name',
        'slug',
        'tags',
        'image',
        'description',
        'data',
        'quantity',
        'price',
        'discount_price',
    ];
}
