<?php

namespace Controller;

use Model\Group;
use Model\Group_subject;
use Model\Mark;
use Model\Post;
use Src\View;
use Src\Request;
use Model\User;
use Src\Auth\Auth;


class Marks
{
    public function studentMarks(Request $request): string
    {
        $studentMarks = Mark::where(['student_id' => $request->student_id])->get();
//        $groupSubjectHours = Group_subject::where(['group_id' => $request->group_id, 'subject_id' => $studentMarks->subject_id])->get('hours');

        return (new View())->render('site.students.student_subject_filter', ['studentMarks' => $studentMarks]);
    }
}