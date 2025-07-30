<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = [
        // Define the foreign key
        'category_id',

        // Define the fillable attributes
        'name',
        'description',
        'price',
        'img',
        'is_active',

        // Define the timestamps
        'created_at',
        'updated_at',
    ];

    protected $dates = [
        'deleted_at',
    ];

    // Define the relationship with the Category model
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    // Define the relationship with the OrderItem model
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class, 'item_id');
    }
}
