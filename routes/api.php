<?php

use App\Http\Controllers\Auth\RegisterTokenController;
use App\Http\Controllers\Api\CompanyController;
use App\Http\Controllers\Api\EmployeeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('/v1/register', [RegisterTokenController::class, 'register']);
Route::post('/v1/login', [RegisterTokenController::class, 'login']);

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::middleware('auth:sanctum')->prefix('v1')->group(function () {
    Route::apiResource('companies', CompanyController::class);
    Route::apiResource('employees', EmployeeController::class);
});
