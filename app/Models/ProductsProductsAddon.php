<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductsProductsAddon extends Model
{
    use HasFactory;

    protected $table = 'products_products_addons';
    protected $fillable = [
        'id_product',
        'id_addon',
        'created_at',
        'updated_at',
    ];
}
