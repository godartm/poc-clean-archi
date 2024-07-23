<?php

use App\Ui\Api\V1\Controllers\Modules\User\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/users/{s_id}', [UserController::class, 'show']);
Route::get('/users/{id}/update', [UserController::class, 'update']);
    //->middleware('auth:sanctum');
