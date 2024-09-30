<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'slug',
        'youtube_id',
        'image_path',
        'description',
        'status',
    ];
    public function tags()
    {

        return $this->morphedByMany(
            Tag::class,
            'taggable',
            'taggables',
            'tag_id',
            'taggable_id',
            'id',
            'id'
        );
}
}
