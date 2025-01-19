<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Calculators\SalesCalculator;
use App\Http\Controllers\Output\OutputInterface;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    private SalesCalculator $salesCalculator;

    public function __construct(SalesCalculator $salesCalculator)
    {
        $this->salesCalculator = $salesCalculator;
    }

    public function betweenDates($startDate, $endDate, OutputInterface $formatter)
    {
        $sales = $this->salesCalculator->between($startDate, $endDate);

        return $formatter->output($sales);
    }
}
