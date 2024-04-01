<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
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

// Get customer data
Route::get('customers', [CustomerController::class, 'customers']);

// Store customer data
Route::post('add_customer', [CustomerController::class, 'store']);

// Delete customer data
Route::delete('customer/delete/{id}', [CustomerController::class, 'destroy']);

// Update customer data
Route::post('customer/update/{id}', [CustomerController::class, 'update']);

// Store user data
Route::post('add_user', [UserController::class, 'store']);

// Login
Route::post('login-check', [LoginController::class, 'checkingLogin']);