<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;



Route::get('/', function () { return view('educve'); });

Route::get('/', fn() => redirect()->route('tasks.index'));
Route::resource('tasks', TaskController::class);


// === Auto-wired pages from template ===
Route::get('/', fn() => view('educve.index'))->name('home');
Route::view('/about', 'educve.about')->name('about');
Route::view('/educve/about.html', 'educve.about');
Route::view('/blog', 'educve.blog')->name('blog');
Route::view('/educve/blog.html', 'educve.blog');
Route::view('/blog-details', 'educve.blog-details')->name('blog-details');
Route::view('/educve/blog-details.html', 'educve.blog-details');
Route::view('/contact', 'educve.contact')->name('contact');
Route::view('/educve/contact.html', 'educve.contact');
Route::view('/course-details', 'educve.course-details')->name('course-details');
Route::view('/educve/course-details.html', 'educve.course-details');
Route::view('/courses-grid-view', 'educve.courses-grid-view')->name('courses-grid-view');
Route::view('/educve/courses-grid-view.html', 'educve.courses-grid-view');
Route::view('/error', 'educve.error')->name('error');
Route::view('/educve/error.html', 'educve.error');
Route::view('/event', 'educve.event')->name('event');
Route::view('/educve/event.html', 'educve.event');
Route::view('/event-details', 'educve.event-details')->name('event-details');
Route::view('/educve/event-details.html', 'educve.event-details');
Route::view('/faqs', 'educve.faqs')->name('faqs');
Route::view('/educve/faqs.html', 'educve.faqs');
Route::view('/educve/index.html', 'educve.index');
Route::view('/signin', 'educve.signin')->name('signin');
Route::view('/educve/signin.html', 'educve.signin');
Route::view('/signup', 'educve.signup')->name('signup');
Route::view('/educve/signup.html', 'educve.signup');
