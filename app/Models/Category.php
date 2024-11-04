<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';
    protected $fillable = [
        'name'
    ];

    /**
     * Get the posts in this category.
     */
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
