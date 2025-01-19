<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Repositories\DbLessonRepository;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    public function index(): array
    {
        $dbLessons = (new Repositories\DbLessonRepository)->getAll();
        $fileLessons = (new Repositories\FileLessonRepository())->getAll();
        return array_merge($dbLessons, $fileLessons);
    }
}
