<?php

namespace App\Repositories;

use App\Models\News;
use Illuminate\Database\Eloquent\Collection;

interface NewsRepository
{
    public function all(): Collection;
    public function find(int $id): ?News;
    public function findWithTags(int $id): ?News;
}
