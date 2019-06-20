<?php

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

//Route::get('/', function () {
//    return view('welcome');
//});

//get请求
//Route::get('/user',function(){
//    return 'get';
//});

//Route::post('/user',function(){
//    dump($_POST);
//});

//put请求
//Route::put('/user',function(){
////    dump($_POST);
//    $data = file_get_contents('php://input');
//    parse_str($data,$res);
//    dump($res);
//});

//Route::get('user/{id}/{name}',function($id, $name){
////    dump($_POST);
////    $data = file_get_contents('php://input');
////    parse_str($data,$res);
//    dump($id,$name);
//});


//Route::get('user/{id}',function(){
//    return "<a href='".route('mimi',['id'=>100])."'> 用户添加</a>";
//})->name('user');
//
//Route::get('add',function(){
//    return "<a href='".route('user',['id'=>100])."'> 用户列表</a>";
//})->name('mimi');

//Route::group(['prefix'=>'admin'],function(){
//    Route::get('user',function(){
//        return "admin/user";
//    });
//});

//Route::get('user','UserController@index');

//Route::group(['namespace'=>'Admin'],function(){
//    Route::get('user','UserController@index');
//});

//用户接口

Route::group(['namespace'=>'Admin'],function(){
    //列表
    Route::get('user','UserController@list');
//查看指定用户
    Route::get('user/{id}/{info}','UserController@info');
//添加用户
    Route::post('user','UserController@add');
//修改用户
    Route::put('user/{id}',"UserController@edit");
//删除用户
    Route::delete('user/{id}','UserController@del');
});



