<?php

use App\Http\Controllers\Admin\DetailPlanControler;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PlanController;
use App\Models\Models\DetailPlan;

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

Route::prefix('admin')
        ->group(function(){
    /**
     * Routes Plans       
     */  
      Route::get('plans/{url}/details',[DetailPlanControler::class,'index'])->name('details.plan.index');     

    /**
     * Routes Plans       
     */        
    Route::get('plans', [PlanController::class, 'index'])->name('plans.index');
    Route::get('plans/create', [PlanController::class, 'create'])->name('plans.create');
    Route::post('plans', [PlanController::class, 'store'])->name('plans.store');
    Route::any('plans/search',[PlanController::class, 'search'])->name('plans.search');
    Route::get('plans/{url}', [PlanController::class, 'show'])->name('plans.show');
    Route::put('plans/{url}/update', [PlanController::class, 'update'])->name('plans.update');
    Route::get('plans/{url}/edit', [PlanController::class, 'edit'])->name('plans.edit');
    Route::delete('plans/{url}', [PlanController::class, 'delete'])->name('plans.delete');
    Route::get('/', [PlanController::class, 'index'])->name('admin.index');

    /**
     * Home Dashboard
     */
});



Route::get('/', function () {
    return view('welcome');
});
