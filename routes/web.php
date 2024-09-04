<?php

use App\Http\Controllers\DashbordController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\UserContriller;
use App\Http\Controllers\UserPageController;
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

Route::get('/', [ImageController::class , 'index']);
Route::get('/create', function (){
    return view('layout.create');
});
Route::get('/login', function (){
    return view('layout.login');
});
Route::post('/register', [UserContriller::class, 'create'])->name('register');

Route::get('/login/done', [UserContriller::class, 'login'])->name('login');

Route::get('/logout', [UserContriller::class, 'logout'])->name('logout');



Route::get('/profile', [DashbordController::class,'profile'])->name('profile');
Route::get('/profile/update', [DashbordController::class,'update'])->name('update');

Route::patch('/profile/update/done', [DashbordController::class, 'updateProfile'])->name('updateProfile');



Route::get('/post', [ImageController::class, 'post'])->name('post');
Route::post('/post/done', [ImageController::class, 'imagePost'])->name('postImage');

Route::get('/profile/{id}', [UserPageController::class, 'profilePage'])->name('profile.page');


Route::get('/image/{id}', [ImageController::class, 'imagepage'])->name('imagePage');

Route::get('/mypost', [DashbordController::class, 'myPost'])->name('myPost');

Route::get('/test', [ImageController::class, 'download'])->name('test');
