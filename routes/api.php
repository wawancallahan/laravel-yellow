<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('cek-status-pinjaman', function (Request $request) {
    return response()->json([
        'status' => 'SUCCESS',
        'message' => 'SUCCESS',
        'data' => [
            'loan_number' => $request->loan_number,
            'loan_id' => random_int(0, 50000),
            'tenor' => [
                12,
                24,
                36
            ][random_int(0, 2)],
            'jatuh_tempo' => '2023-01-01',
            'total_pembayaran' => 5000000
        ]
    ], 200);
});