<?php

use App\Http\Controllers\Api\ActivityController;
use App\Http\Controllers\Api\AttendanceController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CaseController;
use App\Http\Controllers\Api\EmployeeController;
use App\Http\Controllers\Api\LeaveController;
use Illuminate\Support\Facades\Route;

Route::get('/health', function () {
    return response()->json([
        'status' => 'ok',
    ]);
});

Route::prefix('auth')->group(function () {
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/login', [AuthController::class, 'login']);

    Route::middleware('auth:sanctum')->group(function () {
        Route::get('/user', [AuthController::class, 'user']);
        Route::post('/logout', [AuthController::class, 'logout']);
    });
});

Route::middleware('auth:sanctum')->group(function () {
    Route::middleware('role:admin,hr,manager')->group(function () {
        Route::apiResource('employees', EmployeeController::class)
            ->only(['index', 'show']);

        Route::apiResource('cases', CaseController::class)
            ->only(['index', 'show']);
    });

    Route::middleware('role:admin,hr')->group(function () {
        Route::apiResource('employees', EmployeeController::class)
            ->only(['store', 'update', 'destroy']);

        Route::apiResource('cases', CaseController::class)
            ->only(['store', 'update', 'destroy']);

        Route::apiResource('activities', ActivityController::class)
            ->only(['store', 'update', 'destroy']);

        Route::apiResource('attendances', AttendanceController::class)
            ->only(['store', 'update', 'destroy']);

        Route::apiResource('leaves', LeaveController::class)
            ->only(['store', 'update', 'destroy']);
    });

    Route::middleware('role:admin,hr,manager,employee')->group(function () {
        Route::apiResource('activities', ActivityController::class)
            ->only(['index', 'show']);

        Route::apiResource('attendances', AttendanceController::class)
            ->only(['index', 'show']);

        Route::apiResource('leaves', LeaveController::class)
            ->only(['index', 'show']);
    });
});
