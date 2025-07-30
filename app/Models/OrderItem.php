<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderItem extends Model
{
    use SoftDeletes;
    protected $fillable = [
        // Define the foreign keys
        'order_id',
        'item_id',

        // Define the fillable attributes
        'quantity',
        'price',
        'tax',
        'total_price',

        // Define the timestamps
        'created_at',
        'updated_at',
    ];

    protected $dates = [
        'deleted_at',
    ];

    // Define the relationship with the Order model
    public function order()
    {
        return $this->belongsTo(Order::class , 'order_id');
    }

    // Define the relationship with the Item model
    public function item()
    {
        return $this->belongsTo(Item::class , 'item_id');
    }
}
