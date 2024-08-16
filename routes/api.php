<?php

// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Route;

// /*
// |--------------------------------------------------------------------------
// | API Routes
// |--------------------------------------------------------------------------
// |
// | Here is where you can register API routes for your application. These
// | routes are loaded by the RouteServiceProvider within a group which
// | is assigned the "api" middleware group. Enjoy building your API!
// |
// */

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/barcodes', function (Request $request) {
    // Store the barcode data in the database
    return response()->json(['message' => 'Barcode received'], 200);
});
