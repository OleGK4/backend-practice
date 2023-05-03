<?php

namespace Controller;


use Model\Student;
use Src\Validator\Validator;
use Src\View;
use Src\Request;
use Model\User;
use Src\Auth\Auth;

class Students
{
    public function studentAdd(Request $request): string
    {
        if ($request->method === 'POST') {

            $validator = new Validator($request->all(), [
                'last_name' => ['required', 'notnumber'],
                'first_name' => ['required', 'notnumber'],
                'patronymic' => ['required', 'notnumber'],
                'gender' => ['required', 'notnumber'],
                'date_of_birth' => ['required'],
                'address' => ['required'],
            ], [
                'required' => 'Поле :field пусто',
                'notnumber' => 'Поле :field не должно быть цифрой!',
            ]);

            if($validator->fails()){
                return new View('site.auth.signup',
                    ['message' => json_encode($validator->errors(), JSON_UNESCAPED_UNICODE)]);
            }

            $last_name = $request->get('last_name');
            $first_name = $request->get('first_name');
            $patronymic = $request->get('patronymic');
            $gender = $request->get('gender');
            $date_of_birth = $request->get('date_of_birth');
            $address = $request->get('address');
            $group_id = $request->get('group_id');

            $data[] = [
                'last_name' => $last_name,
                'first_name' => $first_name,
                'patronymic' => $patronymic,
                'gender' => $gender,
                'date_of_birth' => $date_of_birth,
                'address' => $address,
                'group_id' => $group_id,
            ];


            if ($request->method === 'POST' && Student::create($data[0])) {
                app()->route->redirect('/group_card?id=' . $request->group_id);
            }

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
        if ($request->method === 'POST'){

            $validator = new Validator($request->all(), [
                'last_name' => ['required', 'notnumber'],
                'first_name' => ['required', 'notnumber'],
                'patronymic' => ['required', 'notnumber'],
                'gender' => ['required', 'notnumber'],
                'date_of_birth' => ['required'],
                'address' => ['required'],
            ], [
                'required' => 'Поле :field пусто',
                'notnumber' => 'Поле :field не должно быть цифрой!',
            ]);

            if($validator->fails()){
                return new View('site.auth.signup',
                    ['message' => json_encode($validator->errors(), JSON_UNESCAPED_UNICODE)]);
            }


            $id = $request->get('id');
            $last_name = $request->get('last_name');
            $first_name = $request->get('first_name');
            $patronymic = $request->get('patronymic');
            $gender = $request->get('gender');
            $date_of_birth = $request->get('date_of_birth');
            $address = $request->get('address');

            $data[] = [
                'id' => $id,
                'last_name' => $last_name,
                'first_name' => $first_name,
                'patronymic' => $patronymic,
                'gender' => $gender,
                'date_of_birth' => $date_of_birth,
                'address' => $address,
            ];

            if ($request->method === 'POST' && Student::where('id', $request->id)->update($data[0])) {
                app()->route->redirect('/student_card?id=' . $request->id . '&group_id=' . $request->group_id);
            }
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