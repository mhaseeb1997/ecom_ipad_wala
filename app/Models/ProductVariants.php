<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductVariants extends Model
{
    use HasFactory;
    protected $fillable = [
        'pro_id',
        'quality',
        'color',
        'storage',
        'price',
        'compare',
        'stock_count',
    ];
}
