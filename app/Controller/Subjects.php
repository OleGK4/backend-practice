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
        // If request to view the form
        if ($request->method === 'GET') {
            $subjects = Subject::all();
            return new View('site.groups.group_add_subjects', ['subjects' => $subjects]);
        } // Request to choose the subjects
        elseif ($request->method === 'POST' && !empty($request->get('id')[0])) {
            $choosen = Subject::whereIn('id', $request->id)->get();
            return new View('site.groups.group_confirm_subjects', ['choosen' => $choosen, 'group_id' => $request->group_id]);
        } // If subject_id exists => get data from request
        elseif ($request->method === 'POST' && !empty($request->get('subject_id')[0])) {

            $semesters = $request->get('semester');
            $hours = $request->get('hours');
            $subjects = $request->get('subject_id');
            $group_id = $request->get('group_id');

            // Loop to make an array, that contains arrays of subjects
            $data = [];
            foreach ($subjects as $key => $subject) {
                $data[] = [
                    'group_id' => $group_id,
                    'semester' => $semesters[$key],
                    'hours' => $hours[$key],
                    'subject_id' => $subject,
                ];
            }

            // Counting amount of inner arrays in $data,
            // looping until $i < than count
            // $i is an array key to get an element ***
            $dataCount = count($data);
            for ($i = 0; $i < ($dataCount); $i++) {
                if ($request->method === 'POST' && Group_subject::create($data[$i])) {
                    echo 'done';
                }
            }

            app()->route->redirect('/group_card?id=' . $request->group_id);
        }
        return 0;
    }


    public function groupDeleteSubjects(Request $request): string
    {
        // If request to view the form
        if ($request->method === 'GET' && empty($request->get('semester'))) {
            return new View('site.groups.group_delete_subjects');
        }

        if (($request->semester)!=0) {
            $subjects = Group_subject::where(['semester' => $request->semester, 'group_id' => $request->group_id])->get();
            if ($request->method === 'POST' && !empty($request->subject_id[0])) {

                $subjects = $request->get('subject_id');
                $group_id = $request->get('group_id');

                // Loop to make an array, that contains arrays of subjects
                $data = [];
                foreach ($subjects as $subject) {
                    $data[] = [
                        'group_id' => $group_id,
                        'subject_id' => $subject,
                    ];
                }
                $dataCount = count($data);
                for ($i = 0; $i < ($dataCount); $i++) {
                    echo 'iteration';
                    if ($request->method === 'POST' && Group_subject::where([
                        'semester' => $request->get('semester'),
                        'group_id' => $data[$i]['group_id'],
                        'subject_id' => $data[$i]['subject_id']
                        ])->delete()) {
                        echo 'done';
                    }
                }
                app()->route->redirect('/group_card?id=' . $request->group_id);
            }
            return new View('site.groups.group_confirm_delete_subjects', ['subjects' => $subjects, 'group_id' => $request->group_id]);
        }
        return 0;
    }
}