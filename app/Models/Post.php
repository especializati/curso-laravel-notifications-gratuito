<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['user_id', 'title', 'description'];
    
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    /**
     * Author post
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
