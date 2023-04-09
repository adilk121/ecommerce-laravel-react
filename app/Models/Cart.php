<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable=[
        'cart_item',
        'cart_user',
        'cart_user',
        'cart_qty',
        'cart_stock'
    ];
}
