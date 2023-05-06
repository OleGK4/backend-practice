<?php

namespace Controller;

use Model\Group;
use Model\Group_subject;
use Model\Student;
use Src\Request;
use Src\View;

class Groups
{
    public function chooseCourseGroups(): string
    {
        return (new View())->render('site.groups.choose_course_groups');

    }

    public function groupsOnCourse(Request $request): string
    {
        if ($request->method === 'GET') {
            $groups = Group::where('course', $_GET['course'])->get();
        }
        return (new View())->render('site.groups.groups_on_course', ['groups' => $groups]);
    }

    public function groupCard(Request $request): string
    {
        if (!empty($request->get('search'))) {

            $group_id = $request->get('id');
            $search = $request->get('search');

            $findStudents = Student::where(function ($query) use ($search) {
                $query->where('first_name', 'LIKE', "%{$search}%")
                    ->orWhere('last_name', 'LIKE', "%{$search}%")
                    ->orWhere('patronymic', 'LIKE', "%{$search}%");
            })
                ->where('group_id', $group_id)
                ->get();
        }

        $group = Group::where('id', $_GET['id'])->first();
        $students = $group->students;
        if (!empty($findStudents)){
            $students = $findStudents;
        }
        $student_count = 0;
        foreach ($group->students as $student) {
            $student_count++;
        }
        return (new View())->render('site.groups.group_card', ['group' => $group, 'student_count' => $student_count, 'students' => $students]);
    }

    public function groupEdit(): string
    {
        return (new View())->render('site.groups.group_edit');

    }

    public function groupChooseSemester(): string
    {
        return (new View())->render('site.groups.group_choose_semester');
    }

    public function groupDelete(Request $request): string
    {
        if($request->method === 'GET' && Group::where('id', $request->group_id)->delete()){
            app()->route->redirect('/choose_course_groups');
        }
        return 0;
    }

    public function groupChangeImage(Request $request): string
    {
        if($request->method === 'GET'){
            return (new View())->render('site.groups.group_change_image');
        }

        if($request->method === 'POST' && !empty($_FILES)){
            if ($_FILES) {
                if (move_uploaded_file($_FILES['filename']['tmp_name'],
                    $_SERVER['DOCUMENT_ROOT'] .'/backend-practice/public/images/' . $_FILES['filename']['name'])) {
                    echo 'Файл успешно загружен';

                    $fileName[] = [
                        'image' => $_FILES['filename']['full_path']
                    ];

                    if(Group::where('id', $request->group_id)->update($fileName[0])){
                        app()->route->redirect('/group_card?id=' . $request->group_id);
                    }
                } else {
                    echo 'Ошибка загрузки файла';
                }
            }
        }
        return 0;
    }
}