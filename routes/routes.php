<?php

use App\Controllers\Auth_Controller;
use App\Controllers\Home_Controller;
use App\Core\Router\Route;
use App\Controllers\Main_Controller;

return [
    '/gg' => function () {
        echo 'func gg';
    },
    '/wp' => function () {
        echo 'func wp';
    },
    Route::get('/', [Main_Controller::class, 'index']),
    Route::get('/home', [Home_Controller::class,'index']),
    Route::get('/auth',[Auth_Controller::class,'index']),
];
