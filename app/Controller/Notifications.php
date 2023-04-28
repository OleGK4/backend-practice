<?php

namespace Controller;

use Model\Group;
use Model\Post;
use Src\View;
use Src\Request;
use Model\User;
use Src\Auth\Auth;


class Notifications
{
    public function failedInput(): string
    {
        return (new View())->render('site.notifications.failed_input');
    }

    public function successAdd(): string
    {
        return (new View())->render('site.notifications.success_add');
    }

    public function successDelete(): string
    {
        return (new View())->render('site.notifications.success_delete');
    }

    public function successEdit(): string
    {
        return (new View())->render('site.notifications.success_edit');
    }

}