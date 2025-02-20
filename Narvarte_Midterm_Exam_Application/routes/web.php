<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

// Define the route for the products page
Route::get('/products', [ProductController::class, 'index']);