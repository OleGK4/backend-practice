<?php

namespace Controller;

use Model\Group_subject;
use Model\Post;
use Model\Student;
use Src\View;
use Src\Request;
use Model\User;
use Src\Auth\Auth;

class Subjects
{

    public function groupSubjects(Request $request): string
    {
        if ($request->method === 'GET'){
            $subjects = Group_subject::where('group_id', $_GET['group_id'] && 'semester', $_GET['semester'])->get();
        }
        print_r($subjects);
        return (new View())->render('site.groups.group_subjects', ['subjects' => $subjects]);
    }

}