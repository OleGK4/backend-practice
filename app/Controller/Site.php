<?php

namespace Controller;


use Src\View;
use Src\Request;
use Model\User;
use Src\Auth\Auth;
use Validator\Validator;;


class Site
{
    public function todirect(): string
    {
        return (new View())->render('site.todirect');
    }

    public function signup(Request $request): string
    {
        if ($request->method === 'POST') {

            $validator = new Validator($request->all(), [
                'name' => ['required'],
                'login' => ['required', 'notnumber', 'unique:users,login'],
                'password' => ['required', 'notnumber']
            ], [
                'required' => 'Поле :field пусто',
                'unique' => 'Поле :field должно быть уникально',
                'notnumber' => 'Поле :field не должно быть цифрой!',
            ]);

            if($validator->fails()){
                return new View('site.auth.signup',
                    ['message' => json_encode($validator->errors(), JSON_UNESCAPED_UNICODE)]);
            }

            if (User::create($request->all())) {
                app()->route->redirect('/login');
            }
        }
        return new View('site.auth.signup');
    }





    public function login(Request $request): string
    {
        //Если просто обращение к странице, то отобразить форму
        if ($request->method === 'GET') {
            return new View('site.auth.login');
        }
        //Если удалось аутентифицировать пользователя, то редирект
        if (Auth::attempt($request->all())) {
            $token = app()->auth::generateToken();
            Auth::user()->update([
                'token' => $token
            ]);
            app()->route->redirect('/todirect');
        }
        //Если аутентификация не удалась, то сообщение об ошибке
        return new View('site.auth.login', ['message' => 'Неправильные логин или пароль']);
    }

    public function logout(Request $request): void
    {
        if (!Auth::attempt($request->all())) {
            $token = null;
            Auth::user()->update([
                'token' => $token
            ]);
        }
        Auth::logout();
        app()->route->redirect('/');
    }

    public function hello(): string
    {
        return new View('site.hello', ['message' => 'hello working']);
    }
}
