<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Output\OutputInterface;
use Illuminate\Http\Request;

class ShapeController extends Controller
{
    public function calculateAreas($shapes, OutputInterface $formatter)
    {
        $areas = [];
        foreach ($shapes as $shape) {
            $areas[] = $shape->area();
        }
        return $formatter->output(array_sum($areas));
    }
}
