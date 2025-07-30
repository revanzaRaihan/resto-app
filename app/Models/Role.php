<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Role extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = [
        // Define the fillable attributes
        'role_name',
        'description',

        // Define the timestamps
        'created_at',
        'updated_at',
    ];

    protected $dates = [
        'deleted_at',
    ];

    // Define the relationship with the User model
    public function users(){
        return $this->hasMany(User::class, 'role_id');
    }
}
