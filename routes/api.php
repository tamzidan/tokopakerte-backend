<?php

// routes/api.php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::prefix('products')->group(function () {
    // Get all products
    Route::get('/', [ProductController::class, 'index']);
    
    // Get single product
    Route::get('/{id}', [ProductController::class, 'show']);
    
    // Create product (you might want to add middleware for admin authentication)
    Route::post('/', [ProductController::class, 'store']);
});

Route::middleware('auth:sanctum')->get('/validate-token', function (Request $request) {
    return response()->json(['valid' => true]);
});