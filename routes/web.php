<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| 여기에 응용 프로그램의 웹 경로를 등록할 수 있습니다. 
| 이러한 경로는 "웹" 미들웨어 그룹을 포함하는 그룹 내에서
| RouteServiceProvider에 의해 로드됩니다. 이제 멋진 것을 만들어 보세요!
|
*/

Route::get('/', [ProductController::class, 'index'])->name('product.index');

Route::get('/home/{name?}',[HomeController::class, 'index'])->name('home.index');

Route::get('/user',[UserController::class, 'index'])->name('user.index');

Route::get('/posts',[ClientController::class,'getAllpost'])->name('posts.getallpost');

Route::get('/posts/{id}',[ClientController::class,'getPostById'])->name('posts.getpostbyid');

Route::get('/add-post',[ClientController::class,'addPost'])->name('posts.addpost');

Route::get('/update-post', [ClientController::class, 'updatePost'])->name('posts.updatepost');

Route::get('/delete-post/{id}', [ClientController::class, 'deletePost'])->name('posts.delete');
