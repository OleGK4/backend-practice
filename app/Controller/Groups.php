<?php

namespace Controller;

use Src\View;
use Src\Request;
use Model\User;
use Src\Auth\Auth;

class Groups
{
    public function groups_on_course(): string
    {
        return (new View())->render('site.groups.groups_on_course');
    }

    public function group_card(): string
    {
        return (new View())->render('site.groups.group_card');
    }

    public function choose_course_groups(): string
    {
        return (new View())->render('site.groups.choose_course_groups');
    }
}