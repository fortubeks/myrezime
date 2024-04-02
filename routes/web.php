<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
//BEGIN CREATE RESUME ROUTES
Route::get('/begin', function () {
    session()->flush();
    return view('pages.create-resume.begin');
})->name('begin');

Route::get('/create-resume', [App\Http\Controllers\CreateResumeController::class, 'navigate']);

Route::get('/set-resume-option', [App\Http\Controllers\CreateResumeController::class, 'setResumeOption']);

Route::post('/save-resume', [App\Http\Controllers\ResumeController::class, 'saveResume']);
Route::get('/resume-preview', [App\Http\Controllers\CreateResumeController::class, 'previewResume']);

Route::post('/upload-resume', [App\Http\Controllers\CreateResumeController::class, 'upload']);

Route::get('/download-resume', [App\Http\Controllers\ResumeController::class, 'downloadResume']);
//END CREATE RESUME ROUTES

Auth::routes(['verify' => true]);

Route::group(['middleware' => ['auth', 'verified'] ], function () {
    // Home route
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/profile/{page}', 'App\Http\Controllers\HomeController@goToProfileTab');
});
