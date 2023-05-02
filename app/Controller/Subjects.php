<?php

namespace Controller;

use Model\Group_subject;
use Model\Subject;
use Src\Request;
use Src\View;

class Subjects
{
    public function groupSubjects(Request $request): string
    {

        $groupSubjects = Group_subject::where(['semester' => $request->semester, 'group_id' => $request->group_id])->get();
        return (new View())->render('site.groups.group_subjects', ['groupsubjects' => $groupSubjects]);
    }

    public function groupAddSubjects(Request $request): string
    {

        if ($request->method === 'POST') {
            $choosen = Subject::whereIn('id', $request->subject_id)->get();

            var_dump($request->subject_id);
            var_dump($choosen->toarray());
            return new View('site.groups.group_confirm_subjects', ['choosen' => $choosen, 'group_id' => $request->group_id]);
        }

        if ($request->method === 'GET') {
            $subjects = Subject::all();
            return new View('site.groups.group_add_subjects', ['subjects' => $subjects]);
        }
        return 0;

    }
}