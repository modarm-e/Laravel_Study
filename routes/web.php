<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home/{name?}',[HomeController::class, 'index'])->name('home.index');