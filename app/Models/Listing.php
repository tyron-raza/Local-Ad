<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'featured_image',
        'category_id',
        'sub_category_id',
        'child_category_id',
        'title',
        'slug',
        'description',
        'price',
        'price_negotiable',
        'condition',
        'location',
        'country_id',
        'state_id',
        'city_id',
        'phone_number',
        'is_published'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function scopeMaxPrice(Builder $query, $max_price): Builder
    {
        return $query->where('price', '<', $max_price);
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
