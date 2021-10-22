<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\This;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'body', 'media_id'];

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
