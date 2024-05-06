<?php 
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::get('session/put', [SessionController::class, 'store']);
Route::get('session/get', [SessionController::class, 'index']);
Route::get('session/push', [SessionController::class, 'push']);
Route::get('session/del', [SessionController::class, 'delete']);
