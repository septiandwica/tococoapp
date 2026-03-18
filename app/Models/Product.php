<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'tagline',
        'slug',
        'description',
        'image',
        'price',
        'gallery',
        'variants',
        'faqs',
        'external_links',
        'is_active',
    ];

    protected $casts = [
        'gallery' => 'array',
        'variants' => 'array',
        'faqs' => 'array',
        'external_links' => 'array',
        'is_active' => 'boolean',
    ];
}
