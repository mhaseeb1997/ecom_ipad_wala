<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderPlaced extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'pro_id',
        'pro_vid',
        'bank_receipt',
        'add_on',
        'status'
    ];


    public function product(){
        return $this->belongsTo(Products::class , 'pro_id');
    }

    public function product_variants(){
        return $this->belongsTo(ProductVariants::class , 'pro_vid');
    }
}
