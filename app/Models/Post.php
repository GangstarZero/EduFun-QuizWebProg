<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';
    protected $fillable = [
        'writer_id',
        'category_id',
        'title',
        'body',
        'asset_path'
    ];

    /**
     * Get the writer who wrote this post.
     */
    public function writer()
    {
        return $this->belongsTo(Writer::class);
    }

    /**
     * Get the category of this post.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
