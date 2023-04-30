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
        if ($request->method === 'POST' && Student::create($request->all())) {
            app()->route->redirect('/group_card?id=' . $request->group_id);
        }
        return (new View())->render('site.students.student_add');
    }

    public function studentCard(Request $request): string
    {
        if ($request->method === 'GET') {
            $student = Student::where('id', $request->id)->first();
        }
        return (new View())->render('site.students.student_card', ['student' => $student]);
    }

    public function studentEdit(Request $request): string
    {
        if ($request->method === 'POST' && Student::where('id', $request->id)->update($request->all())) {
            app()->route->redirect('/student_card?id=' . $request->id);
        }
        return (new View())->render('site.students.student_edit');
    }

    public function studentDeleteConfirm(): string
    {
        return (new View())->render('site.students.student_delete_confirm');
    }

    public function studentDelete(Request $request): string
    {
        if ($request->method === 'GET' && Student::where('id', $request->id)->delete($request->id)) {
            app()->route->redirect('/group_card?id=' . $request->group_id);
        }
        return (0);
    }
}