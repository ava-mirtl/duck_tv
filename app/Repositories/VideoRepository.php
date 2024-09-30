<?php

namespace App\Repositories;

use App\Models\Video;
use Illuminate\Database\Eloquent\Collection;

interface VideoRepository
{
    public function all(): Collection;
    public function find(int $id): ?Video;
    public function findWithTags(int $id): ?Video;
}
