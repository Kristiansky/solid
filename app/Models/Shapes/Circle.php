<?php

namespace App\Models\Shapes;

use Illuminate\Database\Eloquent\Model;

class Circle extends Model implements ShapeInterface
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
