<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| 여기에 응용 프로그램의 API 경로를 등록할 수 있습니다. 이것들
| 경로는 다음 그룹 내에서 RouteServiceProvider에 의해 로드됩니다.
| 에는 "api" 미들웨어 그룹이 할당됩니다. API 구축을 즐기십시오!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/users/{name?}', function($name = null){
    return 'Hi '. $name;
});

Route::get('/products/{id?}',function($id = null){
    return 'Product id is '. $id;
});

Route::match(['get','post'], '/students', function(Request $req){
    return 'Requested method is '. $req->method();
});

Route::any('/posts',function(Request $req){
    return 'Requested method is '. $req->method();
});