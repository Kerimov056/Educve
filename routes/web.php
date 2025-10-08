<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\Auth\AuthController;

/**
 * AUTH: eyni səhifədə login/register tab
 */
Route::get('/auth/{tab?}', [AuthController::class, 'show'])
    ->whereIn('tab', ['login','register'])
    ->name('auth.show');

Route::post('/login',    [AuthController::class, 'login'])->name('login.post');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');
Route::post('/logout',   [AuthController::class, 'webLogout'])->name('logout');

/**
 * Köhnə yolları controller-ə yönləndir (vacib!)
 * (Statik Route::view('/signup'...) OLMAMALIDIR)
 */
Route::get('/signup', fn() => redirect()->route('auth.show','register'));
Route::get('/signin', fn() => redirect()->route('auth.show','login'));

/**
 * Ana səhifə
 */
Route::view('/', 'educve.index')->name('home');

/**
 * Tasks (istəsən auth altında saxla)
 */
Route::resource('tasks', TaskController::class);

/**
 * Şablon səhifələri (istəyinə görə saxla)
 */
Route::view('/about', 'educve.about')->name('about');
Route::view('/blog', 'educve.blog')->name('blog');
Route::view('/blog-details', 'educve.blog-details')->name('blog-details');
Route::view('/contact', 'educve.contact')->name('contact');
Route::view('/course-details', 'educve.course-details')->name('course-details');
Route::view('/courses-grid-view', 'educve.courses-grid-view')->name('courses-grid-view');
Route::view('/error', 'educve.error')->name('error');
Route::view('/event', 'educve.event')->name('event');
Route::view('/event-details', 'educve.event-details')->name('event-details');
Route::view('/faqs', 'educve.faqs')->name('faqs');
