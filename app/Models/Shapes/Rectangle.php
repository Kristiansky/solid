<?php

namespace App\Models\Shapes;

use Illuminate\Database\Eloquent\Model;

class Rectangle extends Model implements ShapeInterface
{
    private $width;
    private $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }
    public function area(): float
    {
        return $this->width * $this->height;
    }
}
