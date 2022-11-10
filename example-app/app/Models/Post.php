<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //protected $table = "posts";

    protected $imagefill = [
        'title',
        'preview',
        'discription',
        'img'
    ];

    public function comments()
    {
        return $this->hasMany(Comment::class)->orderBy('created_at');
    }
}
