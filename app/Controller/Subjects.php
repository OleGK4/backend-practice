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
        if ($request->method === 'GET') {
            $subjects = Subject::all();
            return new View('site.groups.group_add_subjects', ['subjects' => $subjects]);
        }

        elseif ($request->method === 'POST' && !empty($request->get('id')[0])) {
            $choosen = Subject::whereIn('id', $request->id)->get();

//            var_dump($request->id);
//            var_dump($choosen->toarray());
            return new View('site.groups.group_confirm_subjects', ['choosen' => $choosen, 'group_id' => $request->group_id]);
        }

        elseif ($request->method === 'POST' && !empty($request->get('subject_id')[0])) {

            $semesters = $request->get('semester');
            $hours = $request->get('hours');
            $subjects = $request->get('subject_id');
            $group_id = $request->get('group_id');

            $data = [];
            foreach ($subjects as $key => $subject) {
                $data[] = [
                    'group_id' => $group_id,
                    'semester' => $semesters[$key],
                    'hours' => $hours[$key],
                    'subject_id' => $subject,
                ];
            }

            $dataCount = count($data);
            for($i=0; $i<($dataCount); $i++){
                if ($request->method === 'POST' && Group_subject::create($data[$i])) {
                    echo 'done';
                }
            }

            app()->route->redirect('/group_card?id=' . $request->group_id);
        }
        return 0;
    }
}