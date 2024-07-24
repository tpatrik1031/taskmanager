<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('tasks', [App\Http\Controllers\TasksController::class,'index']);
Route::get('tasks/create', [App\Http\Controllers\TasksController::class,'create']);
Route::post('tasks/create', [App\Http\Controllers\TasksController::class,'store']);
Route::get('tasks/{id}/edit', [App\Http\Controllers\TasksController::class,'edit']);
Route::get('tasks'.$task->id.'/edit', [App\Http\Controllers\TasksController::class,'update']);
Route::get('tasks/'.$task->id.'/delete', [App\Http\Controllers\TasksController::class,'delete']);