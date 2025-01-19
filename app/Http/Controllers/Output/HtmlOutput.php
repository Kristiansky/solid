<?php

namespace App\Http\Controllers\Output;

use App\Http\Controllers\Output\OutputInterface;

class HtmlOutput implements OutputInterface
{

    public function output($sales): string
    {
        return "<h1>Sales: $sales</h1>";
    }
}
