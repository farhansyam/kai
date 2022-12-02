<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\UserControlller;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PostController;
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

Auth::routes();
Route::get('/project-cari',[ProjectController::class,'cari'])->name('cariproject');
Route::resource('posts',PostController::Class);
Route::resource('users',UserControlller::Class);
Route::resource('project',ProjectController::Class);


Route::get('/auth/redirect',[LoginController::class,'redirectToProvider']);
Route::get('/auth/callback', [LoginController::class,'handleProviderCallback']);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/forum', [ForumController::class, 'index'])->name('forum')->middleware('auth');
Route::get('/users', [UserControlller::class, 'index'])->name('users')->middleware('auth');
Route::get('/profile/{id}', [UserControlller::class, 'profile'])->name('profile')->middleware('auth');
Route::get('/project', [ProjectController::class, 'index'])->name('project')->middleware('auth');
Route::get('/forum/{post}', [ForumController::class, 'showPost'])->name('posts.view')->middleware('auth');
Route::get('/forum/{post}/edit', [ForumController::class, 'edit'])->name('forum.edit')->middleware('auth');
Route::get('download-pdf', [UserControlller::class, 'downloadPDF'])->name('download-pdf');
Route::get('download-excel', [UserControlller::class, 'export'])->name('download-excel');
