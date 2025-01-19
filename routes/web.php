<?php

use App\Http\Controllers\Calculators\SalesCalculator;
use App\Http\Controllers\Output\HtmlOutput;
use Illuminate\Support\Facades\Route;

Route::get('/', function ()
{
    $report = new \App\Http\Controllers\SaleController(new SalesCalculator());

    return $report->index('2024-12-01', '2024-12-31', new HtmlOutput());

})->name('home');
