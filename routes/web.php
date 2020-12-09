<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/listings', function () { return view('listings'); });
Route::get('/about', function () { return view('about'); });
Route::get('/contact', function () { return view('contact'); });
Route::get('/faqs', function () { return view('faqs'); });
Route::get('/categories', function () { return view('categories'); });
Route::get('/blog', function () { return view('blog'); });
Route::get('/terms', function () { return view('terms'); });
Route::get('/privacy', function () { return view('privacy'); });
Route::get('/sign-in', function () { return view('auth/login'); });
Route::get('/create-account', function () { return view('auth/create-account'); });


Route::get('/dashboard', function() { return view('dashboard/admin/index'); });
Route::get('/add-listings', function() { return view('dashboard/admin/add-listings'); });
Route::get('/all-listings', function() { return view('dashboard/admin/all-listings'); });
