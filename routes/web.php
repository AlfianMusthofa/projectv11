<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GigController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AuthController::class, 'index']);
Route::get('/signup', [AuthController::class, 'signup']);
Route::post('/signup', [AuthController::class, 'store']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/home', [HomeController::class, 'index']);
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/dashboard/addProductPage', [DashboardController::class, 'addProductPage']);
Route::post('/store', [DashboardController::class, 'store']);
Route::get('/detail/{id}', [GigController::class, 'index']);
Route::get('/dashboard/gigEditPage/{id}', [DashboardController::class, 'gigEditPage']);
Route::delete('/dashboard/delete/{id}', [GigController::class, 'destroy']);
Route::get('/dashboard/logout', [AuthController::class, 'logout']);
Route::get('/dashboard/edit/{id}', [DashboardController::class, 'editGig']);
Route::post('/update/{id}', [DashboardController::class, 'update']);
Route::get('/dashboard/edituserpage/{id}', [DashboardController::class, 'edituserpage']);
Route::post('/updateUser/{id}', [DashboardController::class, 'updateUser']);
Route::get('/allCategory', [HomeController::class, 'allCategory']);
