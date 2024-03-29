<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class PostUser extends Model
{
    use HasFactory;

    public function auth()
    {
        return $this->belongsTo(Auth::class);
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}


