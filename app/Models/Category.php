<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;
    protected $fillable = [
        // Define the fillable attributes
        'cat_name',
        'description',

        // Define the timestamps
        'created_at',
        'updated_at',
    ];
    protected $dates = [
        'deleted_at',
    ];

    // Define the relationship with the Item model
    public function Item()
    {
        return $this->hasMany(Item::class, 'category_id');
    }
}
