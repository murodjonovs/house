<?php

use App\Http\Controllers\Dashboard\BaseController;
use App\Http\Controllers\Dashboard\BuildingController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\DowloadController;
use App\Http\Controllers\Dashboard\FlatController;
use App\Http\Controllers\Dashboard\FloorController;
use App\Http\Controllers\Dashboard\InformationController;
use App\Http\Controllers\Dashboard\MainSliderController;
use App\Http\Controllers\Dashboard\ProjectController;
use App\Http\Controllers\Dashboard\SecondSliderController;
use App\Http\Controllers\Front\WelcomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [WelcomeController::class, 'index']);


Route::prefix('dashboard')->group(function(){
    Route::name('dashboard.')->group(function(){

        Route::get('/', [DashboardController::class, 'index'])->name('index');
        Route::resource('/projects', ProjectController::class)->only('index', 'update');
        Route::resource('/mainslider', MainSliderController::class);
        Route::resource('/secondslider', SecondSliderController::class)->only('index', 'store', 'update', 'destroy');
        Route::resource('/dowload', DowloadController::class);
        Route::resource('/information', InformationController::class);

        Route::get('/buildings/{project_id}', [BuildingController::class, 'index'])->name('buildings.index');
        Route::get('/buildings/{building_id}/edit', [BuildingController::class, 'edit'])->name('buildings.edit');
        Route::put('/buildings/{building_id}', [BuildingController::class, 'update'])->name('buildings.update');

        Route::get('/floors/{building_id}', [FloorController::class, 'index'])->name('floors.index');
        Route::get('/floors/{floor_id}/edit', [FloorController::class, 'edit'])->name('floors.edit');
        Route::put('/floors/{floor_id}', [FloorController::class, 'update'])->name('floors.update');


        Route::get('/flats/{floor_id}', [FlatController::class, 'index'])->name('flats.index');
        Route::get('/flats/{floor_id}/edit', [FlatController::class, 'edit'])->name('flats.edit');
        Route::put('/flats/{floor_id}', [FlatController::class, 'update'])->name('flats.update');


    });

});

Route::view('/genplan', 'front.genplan.data');
Route::view('/genplan-single', 'front.genplan.data-single');


require __DIR__.'/auth.php';
