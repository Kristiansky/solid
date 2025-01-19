<?php

use App\Http\Controllers\Calculators\SalesCalculator;
use App\Http\Controllers\Connections\DbConnection;
use App\Http\Controllers\Output\HtmlOutput;
use App\Http\Controllers\Output\JsonOutput;
use App\Http\Controllers\PasswordReminder;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\ShapeController;
use App\Models\CrewMembers\AndroidWorker;
use App\Models\CrewMembers\Captain;
use App\Models\CrewMembers\HumanWorker;
use App\Models\Shapes\Circle;
use App\Models\Shapes\Rectangle;
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
    $shapes[] = new Rectangle(7,9.662);

    $areas = new ShapeController();
    return $areas->calculateAreas($shapes, new HtmlOutput());
})->name('o');

Route::get('/liskov-substitution', function ()
{
    foreach((new App\Http\Controllers\LessonController)->index() as $lesson){
        echo $lesson['title'] . '<br>' . $lesson['description'] . '<br><br>';
    }
})->name('l');

Route::get('/interface-segregation', function ()
{
    $androidWorker = new AndroidWorker();
    $humanWorker = new HumanWorker();

    $captain = new Captain();

    echo $captain->hire($androidWorker) . '<br/>';
    echo $captain->hire($humanWorker) . '<br/>';

})->name('i');

Route::get('/dependency-inversion', function ()
{
    (new PasswordReminder(new DbConnection()))->remind();
})->name('d');
