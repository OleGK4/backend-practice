<?php

namespace Controller;

use Model\Post;
use Model\Student;
use Src\View;
use Src\Request;
use Model\User;
use Src\Auth\Auth;

class Students
{
    public function studentAdd(Request $request): string
    {
        if ($request->method === 'POST' && Student::create($request->all())){
            app()->route->redirect('/success_add');
        }
        return (new View())->render('site.students.student_add');
    }
}