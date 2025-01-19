<?php

use App\Http\Controllers\Calculators\SalesCalculator;
use App\Http\Controllers\Output\HtmlOutput;
use App\Http\Controllers\Output\JsonOutput;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\ShapeController;
use App\Http\Controllers\Shapes\Circle;
use App\Http\Controllers\Shapes\Rectangle;
use Illuminate\Support\Facades\Route;

Route::get('/single-responsibility', function ()
{
    $report = new SaleController(new SalesCalculator());

    return $report->betweenDates('2024-12-01', '2024-12-31', new JsonOutput());

})->name('s');

Route::get('/open-closed', function ()
{
    $shapes[] = new Circle(5);
    $shapes[] = new Circle(9);
    $shapes[] = new Rectangle(8,56.3);
    $shapes[] = new Circle(28);
    $shapes[] = new Rectangle(4.1,36);
    $shapes[] = new Rectangle(7,9.194);

    $areas = new ShapeController();
    return $areas->calculateAreas($shapes, new HtmlOutput());
})->name('o');

Route::get('/liskov-substitution', function ()
{
    foreach((new App\Http\Controllers\LessonController)->index() as $lesson){
        echo $lesson['title'] . '<br>' . $lesson['description'] . '<br><br>';
    }
})->name('l');
