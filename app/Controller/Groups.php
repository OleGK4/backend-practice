<?php

namespace Controller;

use Model\Group;
use Model\Group_subject;
use Model\Post;
use Src\View;
use Src\Request;
use Model\User;
use Src\Auth\Auth;

class Groups
{
    public function chooseCourseGroups(): string
    {
        return (new View())->render('site.groups.choose_course_groups');

    }

    public function groupsOnCourse(Request $request): string
    {
        if ($request->method === 'GET'){
//            $_GET['course'] = 1;
            $groups = Group::where('course', $_GET['course'])->get();
        }
//        var_dump($groups->toArray());die();

        return (new View())->render('site.groups.groups_on_course', ['groups' => $groups]);
    }

    public function groupCard(Request $request): string
    {
        if ($request->method === 'GET'){
            $group = Group::where('id', $_GET['id'])->first();
        }
        return (new View())->render('site.groups.group_card', ['group' => $group]);
    }

    public function groupEdit(): string
    {
        return (new View())->render('site.groups.group_edit');

    }

    public function groupChooseSemester(): string
    {
        return (new View())->render('site.groups.group_choose_semester');
    }

    public function groupSubjects(Request $request): string // BROKEN
    {

        $groupSubjects = Group_subject::where(['semester'=> $request->semester, 'group_id'=> $request->group_id])->get();

//        var_dump($groupSubjects[0]->subject->name);
//        var_dump($groupSubjects[0]->hours);

        return (new View())->render('site.groups.group_subjects', ['groupsubjects' => $groupSubjects]);
    }
}