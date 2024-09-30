<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'slug',
        'image_path',
        'description',
        'publication_at',
        'expires_at',
        'status',
    ];
    public function tags()
    {
        return $this->morphedByMany(Tag::class,  'taggable', 'taggables', 'taggable_type');
    }
}
