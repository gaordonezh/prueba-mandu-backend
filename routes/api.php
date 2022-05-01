<?php

use App\Http\Controllers\DivisionController;
use App\Http\Controllers\SubDivisionController;
use App\Http\Controllers\TopDivisionController;
use Illuminate\Support\Facades\Route;
//use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
/* 
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
 */

Route::apiResource("/divisions", DivisionController::class);
Route::apiResource("/subdivisions", SubDivisionController::class)->only(["store", "destroy"]);
Route::apiResource("/topdivisions", TopDivisionController::class)->only(["store", "update", "destroy"]);
