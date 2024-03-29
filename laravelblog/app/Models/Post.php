<?php

namespace App\Models;

use App\Filters\QueryFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'buy', 'image', 'type', 'typeBuildings', 'storey', 'storey_home', 'square', 'kitchen_area', 'rooms', 'year', 'price', 'address', 'city', 'number', 'title', 'description'
    ];

    public function images()
    {
        return $this->hasMany(Image::class, 'post_id', 'id');
    }

    public function scopeFilter(Builder $builder, QueryFilter $filter)
    {
        return $filter->apply($builder);
    }
}
