<?php

namespace Controller;

use Model\Group_subject;
use Model\Student;
use Src\Auth\Auth;
use Src\Request;
use Src\View;

class Api
{
    public function students(): void
    {

        $students = Student::all()->toArray();

        (new View())->toJSON($students);
    }

    public function groupSubjects(): void
    {
        $groupSubjects = Group_subject::all()->toArray();
        (new View())->toJSON($groupSubjects);
    }

    public function echo(Request $request): void
    {
        (new View())->toJSON($request->all());
    }

    public function login(Request $request)
    {
        if ($request->method === 'POST') {
            if (Auth::attempt($request->all())) {
                $token = app()->auth::generateToken();
                Auth::user()->update([
                    'token' => $token
                ]);
                $users = app()->auth::user()->toArray();
                (new View())->toJSON((array)($users['token']));
            } else {
                (new View())->toJSON((array)'Login failed');
            }
        }
    }

    public function logout(Request $request)
    {
        if (!Auth::attempt($request->all())) {
            $token = null;
            Auth::user()->update([
                'token' => $token
            ]);
        }
        Auth::logout();
        (new View())->toJSON((array)'logout');
    }
}
