<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class affiliate extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 
        'product_id', 
        'affiliate_unique_id',
        'click',
        'purchased',
        'amount_recieved'
    ];
}
