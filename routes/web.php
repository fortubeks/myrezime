<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/begin', function () {
    session()->pull('resume');
    return view('pages.create-resume.begin');
})->name('begin');
//step 1 - select new or upload
Route::get('/create-resume', [App\Http\Controllers\CreateResumeController::class, 'proceed']);
//step 2 select job role or job desc
Route::get('/set-resume-option', [App\Http\Controllers\CreateResumeController::class, 'setResumeOption']);
//step 3 select 
Route::get('/select-job-option', [App\Http\Controllers\CreateResumeController::class, 'selectJobOption']);

Route::post('/save-resume', [App\Http\Controllers\ResumeController::class, 'saveResume']);
Route::get('/resume-preview', [App\Http\Controllers\CreateResumeController::class, 'previewResume']);

Route::get('/download-resume', [App\Http\Controllers\ResumeController::class, 'downloadResume']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
