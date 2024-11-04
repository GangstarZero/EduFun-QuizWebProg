<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Writer extends Model
{

    use HasFactory;
    
    protected $table = 'writers';
    protected $fillable = [
        'name',
        'division',
        'asset_path',
    ];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
