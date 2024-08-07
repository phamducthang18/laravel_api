<?php 

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\v2\TaskController;
use App\Http\Controllers\Api\v2\CompleteTaskController;


route::middleware('auth')-> prefix('v2')->group(function () {
    Route::apiResource('/tasks',TaskController::class);
    Route::patch('/tasks/{task}/complete',CompleteTaskController::class);
});