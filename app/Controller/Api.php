<?php

namespace Controller;

use Model\Student;
use Src\Auth\Auth;
use Src\Request;
use Src\View;

class Api
{
    public function index(): void
    {
        $posts = Student::all()->toArray();

        (new View())->toJSON($posts);
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
}
