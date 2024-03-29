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

Route::get('/', ['as' => 'home', function () {
    return view('welcome');
}]);


// маршрут с параметром
// 08--27:52
/*Route::get('/article/{id}', ['as' => 'article', function ($id) {
    echo $id;
}]);*/


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
/*Route::get('/page/{cat}/{id}', function ($var1) {
    echo $var1;
});*/


// группировка роутеров
// 08--18:25 Запуск largav1.loc/page/create, largav1.loc/page/edit
/*Route::group([], function (){
    Route::get('page/create', function () {
        echo 'page/create';
    });

    Route::get('page/edit', function () {
        echo 'page/edit';
    });
});*/


// определение псевдонима для группы роутеров
// 08--22:06 Запуск largav1.loc/admin/page/create, largav1.loc/admin/page/edit
/*Route::group(['prefix'=>'admin'], function (){
    Route::get('page/create', function () {
        echo 'page/create';
    });

    Route::get('page/edit', function () {
        echo 'page/edit';
    });
});*/


// префикс, параметр
// 08--22:06 Запуск largav1.loc/admin/20/page/create, largav1.loc/admin/100/page/edit
/*Route::group(['prefix'=>'admin/{id}'], function (){
    Route::get('page/create', function () {
        echo 'page/create';
    });

    Route::get('page/edit', function () {
        echo 'page/edit';
    });
});*/


// ссылка на главную страницу
// 08--24:30 Запуск largav1.loc/admin/20/page/create, largav1.loc/admin/100/page/edit
/*Route::group(['prefix' => 'admin/{id}'], function () {
    Route::get('page/create', function () {
        return redirect()->route('home');
    });

    Route::get('page/edit', function () {
        return redirect()->route('home');
    });
});*/


// Запуск largav1.loc/admin/20/page/create
/*Route::group(['prefix' => 'admin/{id}'], function () {
    Route::get('page/create', function () {
        return redirect()->route('article', array('id'=>25));
    });
});*/


// методы класса Route
// 08--31:40 Запуск largav1.loc/admin/300/page/create/390
Route::group(['prefix' => 'admin/{id}'], function () {
    Route::get('page/create/{var}', function ($id) {

        $route = Route::current(); // получить объект класса Route для текущего маршрута
        //echo $route->getName();
        //echo $route->getParameter('var', 390);
        print_r($route->parameters());

    })->name('createpage'); // второй способ определения имени роутера
});