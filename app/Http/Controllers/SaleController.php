<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Calculators\SalesCalculator;
use App\Http\Controllers\Output\SalesOutputInterface;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    private SalesCalculator $salesCalculator;

    public function __construct(SalesCalculator $salesCalculator)
    {
        $this->salesCalculator = $salesCalculator;
    }

    public function index($startDate, $endDate, SalesOutputInterface $formatter)
    {
        $sales = $this->salesCalculator->between($startDate, $endDate);

        return $formatter->output($sales);
    }
}
