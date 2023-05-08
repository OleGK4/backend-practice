<?php

use Src\Route;

Route::add('GET', '/students', [Controller\Api::class, 'students']);
Route::add('GET', '/group_subjects', [Controller\Api::class, 'groupSubjects']);


Route::add('POST', '/echo', [Controller\Api::class, 'echo']);
Route::add('POST', '/login', [Controller\Api::class, 'login']);
Route::add('GET', '/logout', [Controller\Api::class, 'logout']);