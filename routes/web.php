<?php

use Src\Route;


// Header
Route::add(['GET', 'POST'], '/signup', [Controller\Site::class, 'signup']);

Route::add(['GET', 'POST'], '/login', [Controller\Site::class, 'login']);

Route::add('GET', '/logout', [Controller\Site::class, 'logout']);

Route::add('GET', '/todirect', [Controller\Site::class, 'todirect'])
    ->middleware('auth');

Route::add('GET', '/subjects', [Controller\Site::class, 'subjects']) // Admin panel
->middleware('auth');


// Group navigation
Route::add('GET', '/choose_course_groups', [Controller\Groups::class, 'chooseCourseGroups'])
    ->middleware('auth');

Route::add('GET', '/groups_on_course', [Controller\Groups::class, 'groupsOnCourse'])
    ->middleware('auth');

Route::add('GET', '/group_card', [Controller\Groups::class, 'groupCard'])
    ->middleware('auth');

Route::add('GET', '/group_edit', [Controller\Groups::class, 'groupEdit'])
    ->middleware('auth');

Route::add('GET', '/group_choose_semester', [Controller\Groups::class, 'groupChooseSemester'])
    ->middleware('auth');


// Subject navigation
Route::add('GET', '/group_subjects', [Controller\Groups::class, 'groupSubjects'])
    ->middleware('auth');

Route::add('GET', '/students_subject_filter', [Controller\Marks::class, 'studentMarks'])
    ->middleware('auth');


// Student navigation
Route::add(['GET', 'POST'], '/student_add', [Controller\Students::class, 'studentAdd'])
    ->middleware('auth');

Route::add('GET', '/student_card', [Controller\Students::class, 'studentCard'])
    ->middleware('auth');

Route::add(['GET', 'POST'], '/student_edit', [Controller\Students::class, 'studentEdit'])
    ->middleware('auth');

Route::add('GET', '/student_delete_confirm', [Controller\Students::class, 'studentDeleteConfirm'])
    ->middleware('auth');

Route::add('GET', '/student_delete', [Controller\Students::class, 'studentDelete']) // return 0
    ->middleware('auth');


// Notifications
Route::add('GET', '/failed_input', [Controller\Notifications::class, 'failedInput'])
    ->middleware('auth');

Route::add('GET', '/success_add', [Controller\Notifications::class, 'successAdd'])
    ->middleware('auth');

Route::add('GET', '/success_delete', [Controller\Notifications::class, 'successDelete'])
    ->middleware('auth');

Route::add('GET', '/success_edit', [Controller\Notifications::class, 'successEdit'])
    ->middleware('auth');


// Other
Route::add('GET', '/', [Controller\Site::class, 'todirect']);

Route::add(['GET'], '/sum', [Controller\Site::class, 'sum']); // TEST
