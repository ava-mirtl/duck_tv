<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'title',
        'text_color',
        'bg_color',
    ];


    public function news()
    {
        return $this->morphedByMany(News::class, 'taggable', 'taggables', 'taggable_id');
    }


    public function videos(): \Illuminate\Database\Eloquent\Relations\MorphToMany
    {
        return $this->morphedByMany(Video::class, 'taggable', 'taggables', 'taggable_id');
    }
}
