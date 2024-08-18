<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/unauthenticated/user', function () {
//     // return response()->json([
//     //     'status' => false,
//     //     'message' => 'USER_TOKEN_NOT_VALID',
//     //     'token' => null
//     // ], 401);
//     return 'not valid';
// })->name('login');

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
