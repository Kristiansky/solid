<?php

namespace App\Http\Controllers\Repositories;

use App\Http\Controllers\Repositories\LessonRepositoryInterface;

class FileLessonRepository implements LessonRepositoryInterface
{

    public function getAll(): array
    {
        return [
            ['id' => 1, 'title' => 'Lesson 1', 'description' => 'This is lesson 1'],
            ['id' => 2, 'title' => 'Lesson 2', 'description' => 'This is lesson 2'],
            ['id' => 3, 'title' => 'Lesson 3', 'description' => 'This is lesson 3'],
        ];
    }
}
