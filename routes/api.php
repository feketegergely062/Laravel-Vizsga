<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RenterController;
use App\Http\Controllers\RentingController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/Kolcsonzesek", [RentingController::class, "getRentings"]);
Route::post("/Kolcsonzesek", [RentingController::class, "addRenting"]);
Route::get("/Kolcsonzesek/{id}", [RentingController::class, "getRenting"]);
Route::put("/Kolcsonzesek/{id}", [RentingController::class, "modifyRenting"]);
Route::delete("/Kolcsonzesek/{id}", [RentingController::class, "delRenting"]);

Route::get("/Kolcsonzok", [RenterController::class, "getRenters"]);
Route::get("/Kolcsonzok/{id}", [RenterController::class, "getRenter"]);