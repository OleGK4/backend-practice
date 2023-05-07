<?php

namespace Controller;

use Model\Student;
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
}
