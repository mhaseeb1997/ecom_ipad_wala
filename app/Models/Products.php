<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Tests\Integration\Database\EloquentHasManyThroughTest\Category;

class Products extends Model
{
    use HasFactory;

    protected $fillable = [
        'cate_id',
        'name',
        'slug',
        'thumbnail',
        'gallery',
        'description',
    ];

    public function product_variants(){
        return $this->hasMany(ProductVariants::class , 'pro_id');
    }
}
