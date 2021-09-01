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
    return view('home',
        ['name' => 'Pia']    
    );
});

Route::get('/about-me', function () {
    return view('about-me',
        [
            'name' => 'Pia',
            'surname' => 'Coccioli',
            'age' => '29'
        ]
    );
});

Route::get('/info', function () {
    return view('info');
});

Route::get('/photo', function () {
    return view('photo',
    [
        'srcPhoto' => 'https://truth.bahamut.com.tw/s01/201806/a01c8dd0810df54585f3d2deb318dbaa.JPG'
    ]);
});