<?php

use Src\Route;


Route::add('GET', '/hello', [Controller\Site::class, 'hello'])
    ->middleware('auth');
Route::add(['GET', 'POST'], '/signup', [Controller\Site::class, 'signup']);
Route::add(['GET', 'POST'], '/login', [Controller\Site::class, 'login']);
Route::add('GET', '/logout', [Controller\Site::class, 'logout']);
Route::add('GET', '/subjects', [Controller\Site::class, 'subjects']);
Route::add('GET', '/groups', [Controller\Site::class, 'groups']);
Route::add(['GET'],'/sum', [Controller\Site::class, 'sum']); // TEST
