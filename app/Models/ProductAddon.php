<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductAddon extends Model
{
    protected $table = 'products_addons';

    use HasFactory;

    protected $fillable = [
        'name',
        'price',
    ];
}
