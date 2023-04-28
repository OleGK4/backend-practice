<?php

namespace Controller;

use Model\Group;
use Model\Post;
use Src\View;
use Src\Request;
use Model\User;
use Src\Auth\Auth;

class Groups
{
    public function groupsOnCourse(Request $request): string
    {
        if ($request->method === 'GET'){
//            $_GET['course'] = 1;
            $course = $_GET['course'];
            $groups = Group::where('course', $course)->get();
        }
//        var_dump($groups->toArray());die();

        return (new View())->render('site.groups.groups_on_course', ['groups' => $groups]);
    }

    public function groupCard(Request $request): string
    {
        if ($request->method === 'GET'){
            $id = $_GET['id'];
            $group = Group::where('id', $id)->first();
        }
        return (new View())->render('site.groups.group_card', ['group' => $group]);
    }

    public function chooseCourseGroups(): string
    {
        return (new View())->render('site.groups.choose_course_groups');

    }
}