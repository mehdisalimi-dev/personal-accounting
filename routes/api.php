<?php

use App\Http\Controllers\CostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuthController;


Route::post('register',[UserAuthController::class,'register']);
Route::post('login',[UserAuthController::class,'login'])->name('login');
Route::middleware('auth:api')->group(function(){
    Route::post('costs/insert', [CostController::class, 'insert']);
    Route::get('costs/report', [CostController::class, 'show']);
    Route::get('costs/category/list', [CostController::class, 'categoryList']);
});