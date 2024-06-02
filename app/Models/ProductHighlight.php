<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductHighlight extends Model
{
    use HasFactory;

    protected $table = 'products_highlight';

    protected $fillable = [
        'position',
        'id_product',
    ];
}
