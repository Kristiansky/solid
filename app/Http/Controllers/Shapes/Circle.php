<?php

namespace App\Http\Controllers\Shapes;

use App\Http\Controllers\Shapes\ShapeInterface;

class Circle implements ShapeInterface
{
    private $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function area(): float
    {
        return 3.14 * $this->radius * $this->radius;
    }
}
