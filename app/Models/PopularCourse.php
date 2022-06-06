<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PopularCourse extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'amount',
        'discounted_amount',
        'currency',
        'image',
        'rating',
        'duration',
        'lessons',
        'level',
        'status'
    ];
}
