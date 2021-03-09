<?php
use App\Http\Controllers\JobController;
use App\Http\Controllers\GuestInfoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestApplicationController;


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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user(); 
});
// the route
Route::apiresources([
    'jobs' => JobController::class,
    'guests' => GuestInfoController::class,
    'guestapps' => GuestApplicationController::class,
]);
