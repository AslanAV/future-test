<?php

use App\Http\Controllers\NoteBookController;
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

//Route::apiResource('/v1/notebook/', NoteBookController::class);

Route::prefix('v1')->group(fn () => Route::apiResource('/notebook', NoteBookController::class));

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
