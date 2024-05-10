<?php

use App\Http\Controllers\ResumeController;
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
Route::post('/save-education-info', [App\Http\Controllers\ResumeController::class, 'saveEducationInfo']);
Route::post('/save-work-info', [App\Http\Controllers\ResumeController::class, 'saveWorkInfo']);
Route::post('/save-skills-info', [App\Http\Controllers\ResumeController::class, 'saveSkillsInfo']);
Route::get('/resume-preview', [App\Http\Controllers\CreateResumeController::class, 'previewResume']);
Route::get('/resume-preview', [App\Http\Controllers\ResumeController::class, 'previewResume']);

Route::post('/upload-resume', [App\Http\Controllers\CreateResumeController::class, 'upload']);

Route::post('/download-resume', [App\Http\Controllers\ResumeController::class, 'downloadResume']);

Route::get('/test', [App\Http\Controllers\CreateResumeController::class, 'getExtractedInformationFromCV']);
//END CREATE RESUME ROUTES

Auth::routes(['verify' => true]);

Route::group(['middleware' => ['auth', 'verified'] ], function () {
    // Home route
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/profile/{page}', 'App\Http\Controllers\HomeController@goToProfileTab');

    Route::resource('resumes',ResumeController::class);
});
