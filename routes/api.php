<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/xd', function() {
    $xd = app('firebase.firestore')->database()->collection('publicaciones')->newDocument();
    $xd->set([
        "nombre" => "ostias"
    ]);
});

Route::name('publis')->get('/publis',[ApiController::class, 'publicaciones']);
