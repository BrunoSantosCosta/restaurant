<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'title',
        'thumbnail',
        'description',
        'price',
        'discount_price',
        'status'
    ];


    public function category()
    {
        return $this->belongsTo(ProductCategory::class);
    }

    public function additionals()
    {
        return $this->belongsToMany(ProductAddon::class);
    }
}
