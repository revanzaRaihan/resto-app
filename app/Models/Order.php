<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use SoftDeletes;

    protected $fillable = [
        // Define the foreign keys
        'order_code',
        'user_id',

        // Define the fillable attributes
        'subtotal',
        'tax',
        'grand_total',
        'status',
        'table_number',
        'payment_method',
        'note',

        // Define the timestamps
        'created_at',
        'updated_at',
    ];

    protected $dates = [
        'deleted_at',
    ];

    // Define the relationship with the User model
    public function user()
    {
        return $this->belongsTo(User::class , 'user_id');
    }

    // Define the relationship with the OrderItem model
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class , 'order_id');
    }
}
