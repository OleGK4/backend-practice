<?php

use Src\Route;

Route::add('go', [Controller\Site::class, 'index']);
Route::add('hello', [Controller\Site::class, 'hello']);
Route::add('sum', [Controller\Site::class, 'sum']); // TEST
