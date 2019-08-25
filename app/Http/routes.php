<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


// 08--03:30 Запуск largav1.loc/article/10
/*Route::get('/article/{id}', function ($id) {
    echo $id;
});*/


// необходимо соблюдать последовательность параметров
// 08--04:30 Запуск largav1.loc/page/10/hello
/*Route::get('/page/{id}/{cat}', function ($var1, $var2) {
    echo $var1 . '|' . $var2;
});*/


// необязательный параметр
// 08--07:00 Запуск largav1.loc/page/10
/*Route::get('/page/{id?}', function ($var1 = null) {
    echo $var1;
});*/


// использование значения (50) по умолчанию
// 08--08:10 Запуск largav1.loc/page
/*Route::get('/page/{id?}', function ($var1 = 50) {
    echo $var1;
});*/


// использование условия
// 08--09:07 Запуск largav1.loc/page/300
/*Route::get('/page/{id}', function ($var1) {
    echo $var1;
})->where('id', '[0-9]+'); // значение id должно удовлетворять это условие*/


// использование массива с условиями
// 08--09:07 Запуск largav1.loc/page/abc/200
/*Route::get('/page/{cat}/{id}', function ($var1) {
    echo $var1;
})->where(['id'=>'[0-9]+','cat'=>'[A-Za-z]+']); // значение id должно удовлетворять это условие*/


// глобальное условие для всех роутеров, которое определяется во фреймворке.
// Глобальные условия прописываются /app/Providers/RouterServiceProvider.php
// 08--15:30 Запуск largav1.loc/page/abc/200
/*Route::get('/page/{cat}/{id}', function ($var1) {
    echo $var1;
});*/


// несколько глобальных условий
// 08--17:20 Запуск largav1.loc/page/abc/200
Route::get('/page/{cat}/{id}', function ($var1) {
    echo $var1;
});


// группировка роутеров
// 08--18:25 Запуск largav1.loc/page/create, largav1.loc/page/edit
Route::group([], function (){
    Route::get('page/create', function () {
        echo 'page/create';
    });

    Route::get('page/edit', function () {
        echo 'page/edit';
    });
});




