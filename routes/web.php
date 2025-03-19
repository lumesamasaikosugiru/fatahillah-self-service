<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.app');
});

Route::get('/dashboard', function () {
    return view('pages.dashboard');
});

Route::get('/user', [User::class, 'index']);
Route::get('/user/create', [User::class, 'create']);
Route::get('/user/{$id}', [User::class, 'edit']);
Route::post('/user}', [User::class, 'store']);
Route::put('/user/{id}', [User::class, 'update']);
Route::delete('/user/{id}', [User::class, 'destroy']);
