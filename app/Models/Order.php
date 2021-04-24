<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $fillable = [
        'code',
        'user_id',
        'address',
        'total_price',
        'status',
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_order');
    }
}