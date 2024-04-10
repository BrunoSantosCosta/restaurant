<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartProductAddon extends Model
{
    use HasFactory;
    protected $table = 'carts_product_addons';

    protected $fillable = [
        'id_order',
        'quantity',
        'price',
        'id_product',
        'id_addon',
    ];
}
