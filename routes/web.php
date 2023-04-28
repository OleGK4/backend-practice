<?php

use Src\Route;



Route::add('GET', '/todirect', [Controller\Site::class, 'todirect'])
    ->middleware('auth');
Route::add(['GET', 'POST'], '/signup', [Controller\Site::class, 'signup']);
Route::add(['GET', 'POST'], '/login', [Controller\Site::class, 'login']);
Route::add('GET', '/logout', [Controller\Site::class, 'logout']);
Route::add('GET', '/subjects', [Controller\Site::class, 'subjects']); // Admin panel
Route::add('GET', '/choose_course_groups', [Controller\Groups::class, 'chooseCourseGroups'])
    ->middleware('auth');

Route::add('GET', '/groups_on_course', [Controller\Groups::class, 'groupsOnCourse'])
    ->middleware('auth');

Route::add('GET', '/group_card', [Controller\Groups::class, 'groupCard'])
    ->middleware('auth');

Route::add(['GET'],'/sum', [Controller\Site::class, 'sum']); // TEST
