<?php

namespace App\Repositories;

use App\Models\Video;
use \Illuminate\Database\Eloquent\Collection;

class EloquentVideoRepository implements VideoRepository
{
    protected $videoModel;

    public function __construct(Video $videoModel)
    {
        $this->videoModel = $videoModel;
    }

    public function all(): Collection
    {
        return $this->videoModel->all();
    }

    public function find(int $id): ?Video
    {
        return $this->videoModel->find($id);
    }
    public function allWithTags(): Collection
    {
        return Video::with('tags')->get();
    }

    public function addTagsToVideo(Video $video, array $tagIds): void
    {
        $video->tags()->sync($tagIds);
    }

    public function findWithTags(int $id): ?Video
    {
        return Video::with('tags')->find($id);
    }

}
