<?php

namespace Middlewares;

use Src\Auth\Auth;
use Src\Request;

class AdminMiddleware
{
    public function handle(Request $request)
    {
        // Если пользователь не админ, то редирект на страницу регистрации
        if (!Auth::isAdmin()) {
            app()->route->redirect('/todirect');
        }
    }
}
