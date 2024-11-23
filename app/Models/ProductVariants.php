<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductVariants extends Model
{
    use HasFactory;
    protected $fillable = [
        'pro_id',
        'color',
        'storage',
        'price',
        'stock_count',
    ];
}