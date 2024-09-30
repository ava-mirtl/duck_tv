<?php

namespace App\Repositories;

use App\Models\News;
use \Illuminate\Database\Eloquent\Collection;

class EloquentNewsRepository implements NewsRepository
{
    protected $newsModel;

    public function __construct(News $newsModel)
    {
        $this->newsModel = $newsModel;
    }

    public function all(): Collection
    {
        return $this->newsModel->all();
    }
    public function findWithTags(int $id): ?News
    {
        return News::with('tags')->find($id);
    }

    public function find(int $id): ?News
    {
        return $this->newsModel->find($id);
    }
    public function allWithTags(): Collection
    {
        return News::with('tags')->get();
    }

    public function addTagsToNews(News $news, array $tagIds): void
    {
        $news->tags()->sync($tagIds);
    }



}
