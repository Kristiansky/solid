<?php

namespace App\Http\Controllers\Output;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JsonOutput implements OutputInterface
{

    public function output($sales)
    {
        return response()->json($sales);
    }
}
