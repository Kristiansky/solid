<?php

namespace App\Http\Controllers\Calculators;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SalesCalculator extends Controller
{
    public function between($startDate, $endDate)
    {
        return DB::table('sales')
            ->whereBetween('created_at', [$startDate, $endDate])
            ->sum('charge');
    }
}
