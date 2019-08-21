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


// запуск largav1.loc/page
Route::get('/page', function () {
    echo 'Hello';
    return;
});


// запуск largav1.loc/temp
Route::get('/temp', function () {
    echo '<pre>';
    //print_r($_ENV); // получить массив переменных окружения
    //echo config('app.locale'); // получить информацию из config/app.php
    //echo Config::set('app.locale', 'ru'); // установить значение, которое будет храниться в оперативной памяти, но в файл не перезаписывает
    //echo Config::get('app.locale'); // использование фасада Config фреймворка
    echo env('APP_ENV'); // доступ к переменным окружения
    echo '</pre>';
});


// 22:00. Запуск largav1.loc/form.html
/*Route::post('/comments', function () {
    print_r($_POST); // 22 мин
});*/


// 24:00
Route::match(['get','post'],'/comments',function () {
    print_r($_POST);
});


// 25:40. Произвольные типы запроса
/*Route::any('/comments',function () {
    print_r($_POST);
});*/