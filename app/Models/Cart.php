<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_details',
        'order_price',
        'user_id',
        'menu_id',
        'quantity'
    ];

    public function product()
    {
        return $this->belongsTo('App\Models\Product', 'menu_id');
    }
}
