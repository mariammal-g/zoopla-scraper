<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    // Table name (optional if it matches 'properties')
    protected $table = 'properties';

    // Fillable fields for mass assignment
    protected $fillable = [
        'property_id',
        'photo_url',
        'address',
        'price',
        'status',
    ];

    // Disable auto-incrementing ID if needed (optional)
    // public $incrementing = false;

    // If you want to define custom timestamp fields or disable them
    // public $timestamps = true;
}
