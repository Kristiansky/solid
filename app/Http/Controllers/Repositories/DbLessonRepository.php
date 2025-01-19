<?php

namespace App\Http\Controllers\Repositories;

use App\Http\Controllers\Repositories\LessonRepositoryInterface;
use App\Models\Lesson;

class DbLessonRepository implements LessonRepositoryInterface
{
    public function getAll(): array
    {
        return Lesson::all()->toArray();
    }
}
