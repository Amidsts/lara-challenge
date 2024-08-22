<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;
use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\SessionController;

Route::get('/', function () {
    return view('home', [
        'greeting' => 'Hello World'
    ]);
});

Route::get('jobs', [JobController::class, 'index']);
Route::get('/jobs/create', [JobController::class, 'create']);
Route::get('/jobs/{job}', [JobController::class, 'show']);
Route::post('/jobs', [JobController::class, 'store']);
Route::get('/jobs/{job}/edit', [JobController::class, 'edit']);
Route::patch('/jobs/{job}', [JobController::class, 'update']);
Route::delete('/jobs/{job}', [JobController::class, 'delete']);
Route::get('contact', function () {
    return view('contact');
}); 

///Auth
Route::get("/register", [RegisterUserController::class, 'create']);
Route::post("/signup", [RegisterUserController::class, 'store']);
Route::get("/login", [SessionController::class, 'login']);
Route::post("/signin", [SessionController::class, 'signin']);
Route::post("/logout", [SessionController::class, 'destroy']);