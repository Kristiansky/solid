<?php

namespace App\Http\Controllers\Output;

use App\Http\Controllers\Output\SalesOutputInterface;

class HtmlOutput implements SalesOutputInterface
{

    public function output($sales): string
    {
        return "<h1>Sales: $sales</h1>";
    }
}
